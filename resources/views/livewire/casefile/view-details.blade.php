<div>
    <div class="details-view">
        @foreach ($file as $case)
        <div class="container" style="padding: 70px;">
            <div class="card" style="background-color: #000000e6; color: white; border-radius: 10px;">
               <div class="card-header align-items-center" >
                   <div class=" d-flex justify-content-center">
                       <h1 class="text-center" style="">{{ $case->title }}</h1>
                    </div>
                    <hr>
               </div>
               <div class="card-body p-5">
                {{ $case->description }}
                <h6 class="mt-3"><a href="#">See files attached...</a></h6>
               </div>

               <div class="card-footer"  >
                <hr>
                @if ($case->status == 'taken' || $case->status == 'solved')
                    <a class="btn disabled" style="background-color: #dccca3" href="{{url('/casefile/take',['casefile'=>$case->id]) }}" >
                        <span>Taken</span>
                    </a>
                    @else

                    <a class="btn" style="background-color: #dccca3" href="{{url('/casefile/take',['casefile'=>$case->id]) }}">
                        <span>Take</span>
                    </a>
                @endif
                
                 
                @if ($case->status == 'solved')
                    <a class="btn disabled" style="background-color: #dccca3" href="{{url('/casefile/take',['casefile'=>$case->id]) }}" >
                        <span>Solved</span>
                    </a>
                    @else

                    <a class="btn" style="background-color: #dccca3" href="{{url('/casefile/solve',['casefile'=>$case->id]) }}">
                        <span>Solve</span>
                    </a>
                @endif
               </div>
            </div>
            
                <br>
                <br>
                <br>
                <br>

                <a class="btn btn-secondary" href="{{url('/cases') }}">
                    <span>Return To Cases</span>
                </a>
        </div>
    @endforeach

    </div>

    <style>
        .details-view{
            width: 100%;
            height: 90vh;
            background-image: url('/desk.jpg');
            background-size: cover;
        }
    </style>
</div>

