<?php

namespace App\Http\Livewire;

use Livewire\Component;
use HelperClasses\ModuleTaskHelper;
use App\Models\Product;

class SetupProducts extends Component
{
    public $permissions=array();
    public $item;   
    public $search_name="";
    public $search_status="";
    protected $rules = [
        'item.name' => 'required|min:3',
        'item.price' => 'required|numeric',
        'item.picture1' => 'image|max:1024',
        'item.picture2' => 'image|max:1024'
    ];
    protected $validationAttributes = [
        'item.name' => 'Name',
        'item.price' => 'Price',
        'item.picture1' => 'Picture1',
        'item.picture2' => 'Picture2'
    ];
    public function mount()
    {
        $this->permissions=ModuleTaskHelper::get_permissions('setup_products');
        $this->setItem(array());
    }
    public  function setItem($item=array())
    {
        $this->item=array();
        $this->item['id']=isset($item['id'])?$item['id']:0;
        $this->item['name']=isset($item['name'])?$item['name']:'';
        $this->item['price']=isset($item['price'])?$item['price']:'';
        //$this->item['picture1']=isset($item['picture1'])?$item['picture1']:'';
        //$this->item['picture2']=isset($item['picture2'])?$item['picture2']:'';
        $this->item['status']=isset($item['status'])?$item['status']:'Active';
    }
    public function getItem($id)
    {
        if($id==0)
        {
            $this->setItem(array());
        }
        else
        {
            $this->setItem(Product::where('id', $id)->first());            
        }
    } 
    //only for real time validation 
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function store()
    {
        $this->permissions=ModuleTaskHelper::get_permissions('setup_products');
        $validatedData =$this->validate();
        if($this->item['id']>0)
        {
            if($this->permissions['action_2']!=1)
            {
                session()->flash('alert_message',"You Do not have Edit Access");
                session()->flash('alert_type',"danger");
            }
            else
            {
                // $task=SystemTask::find($this->task['id']);
                // $task->update($this->task);
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
                Product::create($this->item);
                session()->flash('alert_message',"Product Created");                
                session()->flash('alert_type',"primary");

            }            
        }
        $this->setItem(array());
        $this->emit("hideModal");
        
    }
    public function deleteItem($id)
    {
        $this->permissions=ModuleTaskHelper::get_permissions('setup_products');
        if($this->permissions['action_3']!=1)
        {
            session()->flash('alert_message',"You Do not have Delete Access");
            session()->flash('alert_type',"danger");
        }
        else
        {
            $item=Product::find($id);
            $item->update(array('status'=>'Deleted'));
            session()->flash('alert_message',"Product Deleted");                
            session()->flash('alert_type',"danger");
        }
        
        
        
        $this->setItem(array());
        $this->emit("hideModal");
        
    }
    public function render()
    {
        $items=Product::orderBy('id', 'DESC')
                ->where('name','LIKE','%'.$this->search_name.'%')
                ->where('status','LIKE','%'.$this->search_status.'%')
                ->where('status','!=','Deleted')
                ->paginate(2);
        if($this->permissions['action_0']==1)
        {
            return view('livewire.setup-products.list',['items'=>$items])->layout('layouts/mytheme');
        }
        else
        {
            return view('livewire.access-denied')->layout('layouts/mytheme');
        }
        //return view('livewire.setup-products');
    }
}
