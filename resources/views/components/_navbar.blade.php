<nav id="navbar-box" class="navbar navbar-expand-lg " style="box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.266);"> 
    <div class="container-fluid">
        <h1><a id="navbar-link-title" class="navbar-brand" href="{{url('/cases')}}" style="color: #a9509d">Holmes Detective Agency</a></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                
                @role('client')
               
                <li class="nav-item">
                    
                   <a id="navbar-links" class="nav-link" href="{{ route('home') }}"><i class="fa-solid fa-house"></i></a>
                   
                   
                </li>
                <li class="nav-item">
                    
                   <a id="navbar-links" class="nav-link" href="{{ route('user-profile') }}"><i class="fa-solid fa-user"></i></a>  
                   
                </li>
                
                @endrole

                @role('detective')
                    <li class="nav-item">
                        
                        <a id="navbar-links" class="nav-link" href="{{ route('all-cases') }}">All Cases</a>  
                        
                    </li>
                    <li class="nav-item">
                        
                        {{-- <a id="navbar-links" class="nav-link" href="{{ route('all-users') }}">All Users</a>   --}}
                        
                    </li>

                @endrole

                @hasanyrole('detective|client')
                    {{-- <li class="nav-item">
                        
                        <a id="navbar-links" class="nav-link" href="{{ route('user-index') }}"><i class="fa-solid fa-dumbbell"></i></a>  
                        
                    </li> --}}
                    {{-- <li class="nav-item">
                        
                        <a id="navbar-links" class="nav-link" href="{{ route('admin-index') }}">
                            <span>
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <span>
                                
                            </span>
                        </a>
                        
                    </li> --}}
                    <li class="nav-item">
                        
                        <a id="navbar-links" class="nav-link" href="/logout"><span>Logout</span></a>
                        
                        
                    </li>
                @endrole
            </ul>
        </div>
    </div>
</nav>


<style>


#navbar-box{
    height: 80px;
    padding-left: 20px; 
    padding-right: 20px; 
    background-color: #010202;
}
.navbar-brand{
    font-size: 30px;
}

a.nav-link:link{
    
    font-weight: bold;
}
#navbar-link-title{
    /* color: blue; */
    
    font-weight: bold;
}
a.nav-link:hover{
    color: #dccca3;
    
    font-weight: bold;
}

.nav-link{
    margin-left: 25px;
    color: #90aa86;
}
</style>