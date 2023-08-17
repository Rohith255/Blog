@extends('index')
@section('content')
    @include('navbar')
    <div class="container mt-4">
        <div class="row border-bottom d-flex align-items-center justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
                    <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                    <a href="{{route('post.view')}}">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
            </div>

            <div class="col-md-8 mb-4">
                <h5>Blog Title</h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ratione
                    necessitatibus itaque error alias repellendus nemo reiciendis aperiam quisquam minus
                    ipsam reprehenderit commodi ducimus, in dicta aliquam eveniet dignissimos magni.
                </p>

                <button type="button" class="btn btn-primary">Read more</button>
                <div class="text-secondary mt-4">
                    Posted - 12/02/2023
                </div>
            </div>
        </div>
    </div>
@endsection
