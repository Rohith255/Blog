@extends('admin.index')
@section('content')
    @include('admin.navbar')
    <h2 class="mt-4 text-center">Categories</h2>
    <div class="container w-100 border d-flex flex-wrap justify-content-center align-content-lg-center" style="height: 60vh;border-radius: 10px">
        <button class="btn btn-dark" style="margin-left: 4px">Laravel <span class="badge text-bg-warning" style="font-size: 0.8rem">35</span></button>
        <button class="btn btn-dark" style="margin-left: 4px">HTML <span class="badge text-bg-warning" style="font-size: 0.8rem">35</span></button>
        <button class="btn btn-dark" style="margin-left: 4px">Network <span class="badge text-bg-warning" style="font-size: 0.8rem">35</span></button>
    </div>
@endsection
