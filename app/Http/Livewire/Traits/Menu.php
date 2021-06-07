<?php

namespace App\Http\Livewire\Traits;

use Illuminate\Support\Facades\Session;

trait Menu
{
	public $menuOpen;
	
	public function mountMenu(){
		$this->menuOpen = Session::get('menuOpenSession') ?? true;
		Session::put('menuOpenSession', "$this->menuOpen");
	}

	public function toggleMenu(){
		$this->menuOpen = !$this->menuOpen;
		Session::put('menuOpenSession', "$this->menuOpen");
	}
}
