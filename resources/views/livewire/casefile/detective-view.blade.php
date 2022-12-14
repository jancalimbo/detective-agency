<div>
  <div class="container mt-5">
    @foreach ($cases as $case)
    <div class="card border-secondary container p-3 mb-3">
        <div class="headers d-flex justify-content-between">
            <h3>{{ $case->title }}</h3>
            <h6>Status: <u> {{ $case->status }} </u></h6>
        </div>
        <div class="d-flex justify-content-between">
            <h6>Filed by: {{ $case->user->name }}</h6>
            
            <div class="d-flex-justify-content-end">
                <a class="btn btn-warning" href="{{url('/casefile/view',['casefile'=>$case->id]) }}">
                    <i class=" fa-solid fa-eye"></i>
                    <span>See details</span>
                </a>
                
                @if ($case->status == 'taken' || $case->status == 'solved')
                    <a class="btn btn-warning disabled" href="{{url('/casefile/take',['casefile'=>$case->id]) }}" >
                        <span>Taken</span>
                    </a>
                    @else

                    <a class="btn btn-warning" href="{{url('/casefile/take',['casefile'=>$case->id]) }}">
                        <span>Take</span>
                    </a>
                @endif
                
                 
                @if ($case->status == 'solved')
                    <a class="btn btn-warning disabled" href="{{url('/casefile/take',['casefile'=>$case->id]) }}" >
                        <span>Solved</span>
                    </a>
                    @else

                    <a class="btn btn-warning" href="{{url('/casefile/solve',['casefile'=>$case->id]) }}">
                        <span>Solve</span>
                    </a>
                @endif

                
            </div>
        </div>
    </div>
@endforeach
  </div>
</div>
