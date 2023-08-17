@extends('index')
@section('content')
    @include('navbar')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="mb-3 text-primary text-uppercase border-bottom">ipl - 2023</h1>
                <img src="https://www.jagranimages.com/images/newimg/21082020/21_08_2020-ipl_logo_20650553.jpg" class="img-fluid mb-2 mt-2 border" alt="Blog Image" width="75%">
                <p style="text-align: justify" class="mt-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam congue eros vitae orci auctor, quis fermentum mauris dignissim. Fusce tristique, velit a imperdiet pulvinar, elit sapien efficitur massa.
                    You can even include more information about the topic, related links, and whatever else you find relevant.
                </p>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="mb-3">Comments</h2>

                    @if(\Illuminate\Support\Facades\Auth::guard('user')->check())
                        <!-- Comment Input Box and Button -->
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Write a comment..." aria-label="Write a comment..." aria-describedby="comment-button">
                            <div class="input-group-append">
                                <button class="btn btn-primary h-100" style="margin-left: 4px" type="button" id="comment-button">Submit</button>
                            </div>
                        </div>
                    @endif

                    <!-- Display Area for Comments -->
                    <div class="comments">
                        <!-- Example Comment -->
                        <div class="alert alert-secondary" role="alert">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </div>
                        <!-- Add more comments here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
