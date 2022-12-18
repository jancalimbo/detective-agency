@extends('components.base')

@section('content')

  <div class="home">
    <div class="container">
      <div class="d-flex justify-content-center ">
       
      </div>
    </div>
   
  </div>

  <style>
    .home{
      width: 100%;
      height: 90vh;
      background-image: url('detective.jpg');
      background-size: cover;
    }
    .home .container div .card {
      /* margin-top: 68vh; */
      background: rgba(0, 0, 0, 0.538);
      border-radius: 10px;
      padding: 50px;
      color: white;
      box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.266);
    }
  </style>
@endsection
