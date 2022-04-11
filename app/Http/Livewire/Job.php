<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Job extends Component
{
    public $job;

    public function addLike()
    {
        // $user_con = auth()->user()->id;

        if(auth()->check())
        {
            auth()->user()->likes()->toggle($this->job->id);
        }
    }

    public function render()
    {
        return view('livewire.job');
    }
}
