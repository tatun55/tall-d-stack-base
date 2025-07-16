<?php

namespace App\Pages;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email = '';
    public $password = '';

    protected $rules = [
        'email' => 'required|string|email',
        'password' => 'required|string',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate();
            return redirect()->to('/');
        }

        $this->addError('email', 'メールアドレスまたはパスワードが間違っています。');
    }

    public function render()
    {
        return view('pages.login')
            ->layout('layouts.base');
    }
}