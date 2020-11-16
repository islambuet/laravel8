<div>   
    @include('livewire.system-module-task.add')
    <div class="card m-2">
        <div class="card-header">
            <h3>All Module and Tasks</h3> 
        </div>
        @if (session()->has('alert_message'))
    <div class="alert alert-{{ session()->has('alert_type')?session('alert_type'):'success'}} alert-dismissible fade show" role="alert">
        {{ session('alert_message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
    @endif
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#addTask">
                        Add New Task
                    </button>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name(Englsih)</th>
                        <th>Name Bangla</th>                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->name_en}}</td>
                        <td>{{$task->name_bn}}</td>                        
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @section('jsInline')
    <script>
        Livewire.on('taskAdded', postId => {
            //alert('A post was added with the id of: ' + postId);
            $("#addTask").modal('hide');
        })
        </script>
@endsection

    
    
    
</div>
