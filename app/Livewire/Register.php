<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
     public $name;
    public $email;
    public $password;
    public $passwordConfirmation;
    public $role_id;

    public function render()
    {
        return view('livewire.register')->layout('layouts.app');

    }

    public function register()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'role_id' => 'required',

        ]);

        $user = Auth::user();

        $user = \App\Models\User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role_id' =>  $this->role_id,

        ]);

        Auth::login($user);

        return redirect()->to('/dashboard');
    }
}
