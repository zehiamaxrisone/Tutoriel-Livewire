<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Flash extends Component
{
    public $message;
    public $type;
    public $colors = [
        'error' => 'bg-red-200 text-red-700 border-red-700',
        'success' => 'bg-green-200 text-green-700 border-green-700',
        'warning' => 'bg-orange-200 text-orange-700 border-orange-700',
        'info' => 'bg-blue-200 text-blue-700 border-blue-700',
    ];

    protected $listeners = ['flash' => 'setFlashMessage'];

    public function setFlashMessage($message, $type)
    {
        $this->message = $message;
        $this->type = $type;
        
        // dd($this->colors[$this->type]);

        $this->dispatchBrowserEvent('flash-message'); // Pour Disperser l'ecoute des evenements
    }

    public function render()
    {
        return view('livewire.flash');
    }
}
