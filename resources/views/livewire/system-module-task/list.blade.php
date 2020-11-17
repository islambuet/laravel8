<div>   
    @include('livewire.system-module-task.add-edit')
    <style>
        svg{
            max-height: 20px;
        }
    </style>
    <div class="card m-2">
        <div class="card-header">
            <h3>All Module and Tasks</h3> 
        </div>        
        <div class="card-body">
            @if (session()->has('alert_message'))
                <div class="alert alert-{{ session()->has('alert_type')?session('alert_type'):'success'}} alert-dismissible fade show" role="alert">
                    {{ session('alert_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>                
            @endif
            <div class="card">
                <div class="card-body">                    
                    @if ($permissions['action_1']==1)
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddEdit" wire:click="getItem(0)">{{__('New')}}</button>                        
                    @endif
                    
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name(Englsih)
                            <input type="text" class="form-control" wire:model="serach_name_en" placeholder="Serach Name">
                        </th>
                        <th>Name Bangla</th> 
                        <th>Type
                            <select id="type" class="form-control" wire:model="serach_type">>
                                <option value="">SearCh Type</option>
                                <option value="MODULE">Module</option>
                                <option value="TASK">Task</option>
                              </select>
                        </th> 
                        @if (($permissions['action_2']==1)||($permissions['action_3']==1))
                        <th>Actions</th>                                                    
                        @endif                       
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->name_en}}</td>
                        <td>{{$task->name_bn}}</td>   
                        <td>{{$task->type}}</td>   
                        @if (($permissions['action_2']==1)||($permissions['action_3']==1))
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    @if (($permissions['action_2']==1))
                                        <button class="dropdown-item" data-toggle="modal" data-target="#modalAddEdit" wire:click="getItem({{$task->id}})">{{__('Edit')}}</button>
                                    @endif
                                    @if (($permissions['action_3']==1))
                                        <button class="dropdown-item" data-toggle="modal" data-target="#modalAddEdit" wire:click="getItem({{$task->id}})">{{__('Delete')}}</button>
                                    @endif                                  
                                  
                                </div>
                              </div>
                        </td>                                                    
                        @endif                       
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
            {{$tasks->links()}}
        </div>
    </div>
    @section('jsInline')
    <script>
        Livewire.on('hideModal', function(id ){            
            $("#modalAddEdit").modal('hide');
            console.log(id);
        })
        </script>
@endsection

    
    
    
</div>
