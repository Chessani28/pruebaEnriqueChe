<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login')->layout('layouts.app');
    }

    public function authenticate()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            if (Auth::user()->role->name == 'administrator') {
                return redirect()->to('/upload-video');
            } elseif (Auth::user()->role->name == 'user') {
                return redirect()->to('/view-videos');
            }
        }
        $this->incrementLoginAttempts($this->request);

        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
