<div>
    @foreach ($file as $case)
        <div class="container mt-5">
            <div class="card">
               <div class="card-header">
                    <div class="d-flex justify-content-end">
                        <h6><button class="btn btn-sm btn-primary">{{ $case->status }}</button></h6>
                    </div>
                    <div class="">
                        <h1 class="text-center">{{ $case->title }}</h1>
                    </div>
               </div>
               <div class="card-body p-5">
                {{ $case->description }}
                <h6 class="mt-3"><a href="#">See files attached...</a></h6>
               </div>

               <div class="card-footer">
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
