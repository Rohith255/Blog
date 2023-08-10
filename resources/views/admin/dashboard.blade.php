@extends('admin.index')
@section('content')
    @include('admin.navbar')
    <div class="w-100" style="height: 88vh;background-image: url('https://images.unsplash.com/photo-1554034483-04fda0d3507b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80');background-size: cover;">
    <div class="container w-50 d-flex justify-content-evenly align-items-center " style="height: 50vh;">
        <button class="btn btn-dark">Blogs - <span class="badge text-bg-warning" style="font-size: 0.8rem">35</span></button>
        <button class="btn btn-dark">User's - <span class="badge text-bg-warning" style="font-size: 0.8rem">35</span></button>
        <button class="btn btn-dark">Categorie's - <span class="badge text-bg-warning" style="font-size: 0.8rem">35</span></button>
    </div>
    </div>
@endsection
