<div>   
    @include('livewire.setup-products.add')
    <style>
        svg{
            max-height: 20px;
        }
    </style>    
    <div class="card m-2">
        <div class="card-header">
            <h3>All Products</h3> 
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
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalAdd" wire:click="getItem(0)">{{__('New')}}</button>                        
                    @endif
                    
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name
                            <input type="text" class="form-control" wire:model="search_name" placeholder="Search Name">
                        </th>     
                        <th>Price</th>                   
                        <th>Picture 1</th>                   
                        <th>Picture 2</th>                   
                        <th>Type
                            <select id="status" class="form-control" wire:model="search_status">>
                                <option value="">Search Status</option>
                                <option value="Active">Active</option>
                                <option value="In-Active">In-Active</option>
                              </select>
                        </th> 
                        @if (($permissions['action_2']==1)||($permissions['action_3']==1))
                        <th>Actions</th>                                                    
                        @endif                       
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>                        
                        <td>{{$item->price}}</td>                        
                        <td><img src="{{Storage::url($item->picture1)}}" alt=""></td>     
                        <td>
                        
                            <img src="{{storage_path($item->picture2)}}" alt="">
                            </td>                    
                        <td>{{$item->status}}</td>   
                        @if (($permissions['action_2']==1)||($permissions['action_3']==1))
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    @if (($permissions['action_2']==1))
                                        <button class="dropdown-item" data-toggle="modal" data-target="#modalAddEdit" wire:click="getItem({{$item->id}})">{{__('Edit')}}</button>
                                    @endif
                                    @if (($permissions['action_3']==1))
                                        <button class="dropdown-item" wire:click="deleteItem({{$item->id}})">{{__('Delete')}}</button>
                                    @endif
                                </div>
                              </div>
                        </td>                                                    
                        @endif                       
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
            {{$items->links()}}
        </div>
    </div>
    @section('jsInline')
    <script>
        Livewire.on('hideModal', function(){            
            $("#modalAdd").modal('hide');
            console.log("i am called");
        })
        </script>
@endsection

    
    
    
</div>
