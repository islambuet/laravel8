<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\SystemTask;

class SystemModuleTask extends Component
{
    public $task;
    protected $rules = [
        'task.name_en' => 'required|min:3',        
        'task.name_bn' => 'required|min:3',
        'task.type' => 'required',
    ];
    public function mount()
    {
        $this->defaultTask();
    }
    public  function defaultTask()
    {
        $this->task=array();
        $this->task['name_en']="b";
        $this->task['name_bn']="a";
        $this->task['type']="TASK";        
    }    
    public function store()
    {
        $validatedData =$this->validate();
        SystemTask::create($this->task);
        session()->flash('alert_message',"post Created");
        $this->defaultTask();
        $this->emit("taskAdded");

        //print_r($validate);
        //echo "store called";
        
    }
    public function render()
    {   
        $tasks=SystemTask::orderBy('id', 'DESC')->get();
        
        return view('livewire.system-module-task.list',['tasks'=>$tasks])->layout('layouts/mytheme');
    }
}
