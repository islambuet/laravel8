<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\SystemTask;
use HelperClasses\ModuleTaskHelper;

class SystemModuleTask extends Component
{
    public $task;
    public $permissions=array();
    protected $rules = [
        'task.name_en' => 'required|min:3',        
        'task.name_bn' => 'required|min:3',
        'task.type' => 'required',
    ];
    public function mount()
    {
        $this->permissions=ModuleTaskHelper::get_permissions('Sys_module_task');
        $this->defaultTask();
    }
    public  function defaultTask()
    {
        $this->task=array();
        $this->task['id']=0;
        $this->task['name_en']="";
        $this->task['name_bn']="";
        $this->task['type']="";        
    } 
    public function getItem($id)
    {
        if($id==0)
        {
            $this->defaultTask();
        }
        else
        {
            $task=SystemTask::where('id', $id)->first();
            if($task)
            {
                $this->task['id']=$id;
                $this->task['name_en']=$task->name_en;
                $this->task['name_bn']=$task->name_bn;
                $this->task['type']=$task->type;
            }
        }
    }   
    public function store()
    {
        $this->permissions=ModuleTaskHelper::get_permissions('Sys_module_task');
        $validatedData =$this->validate();
        if($this->task['id']>0)
        {
            if($this->permissions['action_2']!=1)
            {
                session()->flash('alert_message',"You Do not have Edit Access");
                session()->flash('alert_type',"danger");
            }
            else
            {
                $task=SystemTask::find($this->task['id']);
                $task->update($this->task);
                session()->flash('alert_message',"Task Updated");                
                session()->flash('alert_type',"primary");
            }
        }
        else
        {
            if($this->permissions['action_1']!=1)
            {
                session()->flash('alert_message',"You Do not have Add Access");
                session()->flash('alert_type',"danger");
            }
            else
            {
                SystemTask::create($this->task);
                session()->flash('alert_message',"Task Created");                
                session()->flash('alert_type',"primary");

            }            
        }
        $this->defaultTask();
        $this->emit("hideModal",$this->task['id']);
        
    }
    public function render()
    {   
        $tasks=SystemTask::orderBy('id', 'DESC')->get();
        if($this->permissions['action_0']==1)
        {
            return view('livewire.system-module-task.list',['tasks'=>$tasks])->layout('layouts/mytheme');
        }
        else
        {
            return view('livewire.access-denied')->layout('layouts/mytheme');
        }
        
    }
}
