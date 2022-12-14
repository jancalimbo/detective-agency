@extends('components.base')


@section('content')

  <div class="container mt-4">
    <div class="d-flex justify-content-between">
      <div>
        <h1>
          {{ Auth::user()->name }}
        </h1>
      </div>

      <div class="d-flex justify-content-between">
        <div class="user-details justify-content-end">
          @php
            $casesFiled = App\Models\Casefile::where('user_id', auth()->user()->id)->count();
            $casesSolved = App\Models\Casefile::where('user_id', auth()->user()->id)->where('status', 'solved')->count();
          @endphp
          <h6>Filed Cases: {{ $casesFiled }}</h6>
          <h6>Filed Cases Solved: {{ $casesSolved }}</h6>
        </div>
        <div class="btn">
          <a href="{{ route('file-a-case') }}" class="btn bg-warning">File New Case</a>
        </div>
      </div>

    </div>
    <hr>

    <livewire:casefile.index/>
  </div>

@endsection