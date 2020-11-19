<div wire:ignore.self class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">            
            <form wire:submit.prevent="store()">
              <input type="hidden" wire:model="task.id">
                <div class="form-group">
                    <label for="name_en">Name</label>
                    <input type="text" class="form-control" wire:model="item.name">
                    @error('item.name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>                
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text"  class="form-control" wire:model="item.price">
                    @error('item.price') <span class="text-danger">{{ $message }}</span> @enderror
                </div>                
                <button type="submit" class="btn btn-primary">Save</button>
            </form>         
        </div>        
      </div>
    </div>
  </div>