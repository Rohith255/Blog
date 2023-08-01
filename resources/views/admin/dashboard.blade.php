@extends('admin.index')
@section('content')
    <div style="width: 100%;height: 100vh;" class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 20%;height: 100%">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">

            <span class="fs-4">Blog</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link active" aria-current="page">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                    Home
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                    Orders
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                    Products
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                    Customers
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <form method="post" action="{{route('admin.logout')}}">
                @csrf
            <button type="submit" href="{{route('admin.logout')}}" class="d-flex align-items-center btn btn-primary"  aria-expanded="false">
                Logout
            </button>
            </form>
        </div>
    </div>
        <div style="width: 80%;height: 100%;">

        </div>
    </div>
@endsection
