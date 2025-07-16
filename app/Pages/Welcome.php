<?php

namespace App\Pages;

use Livewire\Component;

class Welcome extends Component
{
    public function render()
    {
        return view('pages.welcome')
            ->layout('layouts.app');
    }
}