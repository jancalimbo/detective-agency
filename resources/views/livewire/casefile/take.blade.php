<div>
    <div class="container mt-5">
        <div class="prompt-messages container col-md-6 offset-md-3 delete-card">
            <div class="card card-delete">
                <div class="card-body card-body-delete">
                    <h3 class="text-center">Will you take this case?</h3>
                    {{-- {{ $this->category->id }} --}}
                </div>
          
               
                <div class="card-footer card-footer-delete">
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-success" wire:click="takeCase()">Yes</a>
                        <a class="btn btn-secondary mx-3" wire:click="no()">No</a>
                    </div>
                </div>
            </div>
          </div>
    </div>
</div>
