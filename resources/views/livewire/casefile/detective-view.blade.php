<div>
    <div class="all-cases">
        <div class=" container p-5 text-light">
            @foreach ($cases as $case)
            <div class="card container p-3 mb-3" style="box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.824); background-color: #000000e3">
                <div class="headers d-flex justify-content-between">
                    <h3>{{ $case->title }}</h3>
                    <h6>Status: <u> {{ $case->status }} </u></h6>
                </div>
                <div class="d-flex justify-content-between">
                    <h6>Filed by: {{ $case->user->name }}</h6>
                    
                    <div class="d-flex-justify-content-end">
                        <a class="btn btn" style="background-color: #dccca3" href="{{url('/casefile/view',['casefile'=>$case->id]) }}">
                            <i class=" fa-solid fa-eye"></i>
                            <span>See details</span>
                        </a>
                        
                        @if ($case->status == 'taken' || $case->status == 'solved')
                            <a class="btn disabled"  style="background-color: #dccca3" href="{{url('/casefile/take',['casefile'=>$case->id]) }}" >
                                <span>Taken</span>
                            </a>
                            @else
        
                            <a class="btn"  style="background-color: #dccca3" href="{{url('/casefile/take',['casefile'=>$case->id]) }}">
                                <span>Take</span>
                            </a>
                        @endif
                        
                         
                        @if ($case->status == 'solved')
                            <a class="btn disabled" style="background-color: #dccca3" href="{{url('/casefile/take',['casefile'=>$case->id]) }}" >
                                <span>Solved</span>
                            </a>
                            @else
        
                            <a class="btn"  style="background-color: #dccca3" href="{{url('/casefile/solve',['casefile'=>$case->id]) }}">
                                <span>Solve</span>
                            </a>
                        @endif
        
                        
                    </div>
                </div>
            </div>
        @endforeach
          </div>
    </div>

  <style>
    .all-cases{
        width: 100%;
        height: 90vh;
        background-image: url('detective.jpg');
        background-size: cover;
    }
  </style>
</div>
