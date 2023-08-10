@extends('index')
@section('content')
<form method="post" action="{{route('blog-user.logout')}}">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>
@endsection
