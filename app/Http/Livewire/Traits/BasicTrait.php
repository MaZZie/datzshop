<?php

namespace App\Http\Livewire\Traits;

trait BasicTrait
{
	use MenuTrait;

	public function banner(string $message, string $style = 'success')
	{
			request()->session()->flash('flash.banner', $message);
			request()->session()->flash('flash.bannerStyle', $style);
	}
}