<!-- Navbar -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark" id="navbar_top">
    <div class="container-fluid">
        <a href="" class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('web_logo.jpg')}}" width="80" height="50">{{ config('app.name') }}</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a href="" class="nav-link active">Dashboard</a>
                </li>
            </ul>


            <ul class="navbar-nav ml-auto">

            </ul> -->

            <ul class="navbar-nav ml-auto">
            @foreach($notifications as $key)
                <li class="nav-item dropdown mr-2" id="{{ $key->id }}">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <i class="fa fa-bell text-white">
                            @if($key->unread)
                            <span class="badge badge-danger pending">{{ $key->unread }}</span>
                            @endif
                        </i>
                    </a>
                </li>
                @endforeach
                <li class="nav-item">
                    <a href="{{route('logout')}}" class="nav-link"><i class="fas fa-user-times"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
