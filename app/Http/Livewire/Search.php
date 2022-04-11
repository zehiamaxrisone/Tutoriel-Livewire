<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class Search extends Component
{

    public string $search = '';
    public $jobs = [];
    public int $selectorindex = 0;

    public function incrementIndex() 
    {
        if($this->selectorindex === (count($this->jobs) -1))
        {
            $this->selectorindex = 0;
            return;
        }
        $this->selectorindex++;
    }

    public function decrementIndex()
    {
        if($this->selectorindex === 0)
        {
            $this->selectorindex = (count($this->jobs) -1);
            return;
        }
        $this->selectorindex--;
    }

    public function resetIndex()
    {
        $this->reset('selectorindex');
    }

    public function showJob()
    {
        if(count($this->jobs) > 0)
        {
            return redirect()->route('job.show', $this->jobs[$this->selectorindex]['id']);
        }
    }

    public function updatedSearch()
    {
        $word = '%' . $this->search . '%';
        
        if(strlen($this->search) > 2) 
        {
            $this->jobs = Job::where('title', 'like', $word)
            ->orWhere('description', 'like', $word)
            ->get();
        }
        
    }

    public function render()
    {
        return view('livewire.search');
    }
}
