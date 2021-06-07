<?php

namespace App\Http\Livewire\Traits;

use Illuminate\Support\Facades\Session;

trait MenuTrait
{
	public $menuOpen;

	public function mountMenuTrait(){

		$this->menuOpen = Session::get('menuOpenState') ?? true;
		Session::put('menuOpenState', "$this->menuOpen");
	}

	public function toggleMenu(){
		$this->menuOpen = !$this->menuOpen;
		Session::put('menuOpenState', "$this->menuOpen");
	}
}
