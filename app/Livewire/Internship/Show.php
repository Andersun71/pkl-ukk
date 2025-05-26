<?php

namespace App\Livewire\Internship;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Show extends Component
{
    public function render()
    {
        if (!Auth::user()->can('view_any_industry')) {
            abort(403, 'Kamu tidak punya akses ke fitur ini.');
        }
        return view('livewire.internship.show');
    }
}
