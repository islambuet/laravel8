<div wire:ignore.self class="modal fade" id="addTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Task</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">            
            <form wire:submit.prevent="store()">
                <div class="form-group">
                    <label for="name_en">Name(english)</label>
                    <input type="text" class="form-control" wire:model="task.name_en">
                    @error('task.name_en') <span class="text-danger">{{ $message }}</span> @enderror
                    
                </div>
                
                <div class="form-group">
                    <label for="name_bn">Name(Bangla)</label>
                    <input type="text"  class="form-control" wire:model="task.name_bn">
                    @error('task.name_bn') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <select id="type" class="form-control" wire:model="task.type">>
                      <option value="">Choose...</option>
                      <option value="MODULE">Module</option>
                      <option value="TASK">Task</option>
                    </select>
                    @error('task.type') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                  <button type="submit" class="btn btn-primary">Save</button>
            </form>         
        </div>        
      </div>
    </div>
  </div>