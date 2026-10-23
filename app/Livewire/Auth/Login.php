<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public string $email = '';
    public string $password = '';
    public bool $remember = false;

    protected function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    public function login()
    {
        $this->validate();

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (! Auth::attempt($credentials, $this->remember)) {
            $this->addError(
                'email',
                'The email or password is incorrect.'
            );

            return;
        }

        session()->regenerate();

        return $this->redirectRoute('dashboard');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
