@extends('components.base')

@section('content')


    {{-- not working yet --}}
    @if(session('message'))
      <div class="container col-md-6 offset-md-3 mt-5 alert alert-success text-center">{{ session('message') }}</div>
    @endif
    @if(session('error'))
      <div class="container col-md-6 offset-md-3 mt-5 alert alert-danger text-center">{{ session('error') }}</div>
    @endif
    {{-- not working snippet ends here --}}
 
<div id="login-box" class="container col-md-6 offset-md-3 card mt-7 bg-dark p-5" style="box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.266); color: #dccca3 ">

    
    <h1 id="login-header" class="text-center mt-3">Log In</h1>
  
    <form action="{{'/'}}" method="POST">
    {{csrf_field()}}
  
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" class="form-control" value="jlo@yahoo.com" >
      @error('email')
        <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" class="form-control" value="client">
      @error('password')
        <p class="text-danger">{{ $message }}</p>
        
      @enderror
    </div>
    <div class="d-flex mt-5 mb-3">
      <div class="flex-grow-1">
        <a id="register-link" href="{{ '/register' }}" class="href">Don't have an account?</a>
      </div>
      <button id="login-btn" class="btn px-5 text-dark" type="submit">Log In <i class="fa-solid fa-right-to-bracket"></i></button>
    </div>
    </form>
  </div>
  


<style>

    #login-box{
        /* border: #FF4C29 2px solid; */
        border-radius: 10px;
        /* background-color: #082032; */
        margin-top: 7em;
        color: ##dccca3;
    }
    #login-btn{
      background-color: #dccca3;
      /* color: #082032; */
      color: white;
    }
    #register-link{
      color: #dccca3;
      /* text-decoration: none; */
      font-weight: bold;
    }
   
</style>

@endsection
