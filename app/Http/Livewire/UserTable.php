<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class UserTable extends Component
{
    public $currentUrl;
    public $users = [];

    public function mount()
    {
        $this->currentUrl = Route::current()->getName();
    }

    public function getUserDataByRole($role)
    {
        $this->users = User::Role([$role])->get();
        return view('livewire.user-table', compact('users'));
    }


    public function render()
    {
        return view('livewire.user-table');
    }
}
