<div>
    @foreach ($cases as $case)
        <div class="card border-secondary container p-3 mb-3">
            <div class="headers d-flex justify-content-between">
                <h3>{{ $case->title }}</h3>
                <h6>Status: <u> {{ $case->status }} </u></h6>
            </div>
            <div class="d-flex justify-content-between">
                <h6>See more..</h6>
                <i class="fa-solid fa-eye"></i>
            </div>
        </div>
    @endforeach
</div>
