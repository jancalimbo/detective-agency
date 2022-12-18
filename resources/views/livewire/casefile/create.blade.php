<div>
    <div class="container mt-5">
        <div class="container d-flex justify-content-center">
            <div id="" class="card w-50 s bg-light">
              <div class="card-header bg-dark text-info">
                  <h3 class="text-center m-2 ">Case Details</h3>
              </div>
              @csrf
              <div class="card-body bg-dark color-dark">
                <div class="form-floating mb-3">
                  <input type="text" name="name" class="form-control" wire:model.defer="title" >
                  <label for="name">Title</label>  
                </div>
               
                  <div class="form-floating mb-3">
                    Description
                    <textarea class="" name="" id="" rows="4" wire:model.defer="description"></textarea>
                    
                    </div>
                    
                    
                 
                <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-center mt-3">
                  <button id="" class="btn w-25 btn-info" type="submit" wire:click="add()">File</button>
                  <a id="" class="btn w-25 btn-secondary text-light" type="submit" wire:click="" href="{{ route('user-profile') }}">Back</a>
                </div>
              </div>
            </form>
          </div>
    </div>

    <style>
        textarea{
          height: 30vh;
          width: 100%;
        }
      </style>
</div>
