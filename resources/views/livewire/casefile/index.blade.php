<div>
    @foreach ($cases as $case)
        <div class="card container p-3 mb-3" style="background-color: rgba(0, 0, 0, 0.859); color: white; border-radius: 10px; box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.266);">
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
