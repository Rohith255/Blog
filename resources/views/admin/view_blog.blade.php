@extends('admin.index')
@section('content')
    @include('admin.navbar')
    <div class="container mt-4">
        <a href="{{url()->previous()}}" class="btn btn-primary d-flex" style="width: 5%"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg></a>
        <h3 class="text-primary text-decoration-underline mt-1">Blog </h3>
        <div class="w-100">
            <h1 class="border-bottom text-danger mt-3">A look at what's coming to Laravel 11</h1>
        </div>
        <div class="w-75 mt-3">
            <img src="https://laravelnews.s3.amazonaws.com/images/laravel11.jpg?w=1366&h=683&q=90&auto=format&fit=crop" style="width: 100%">
        </div>
        <div class="text-wrap mt-3 text-lg-start">
            Laravel 11 is not scheduled to be released until Q1 of the 2024, but some new features have been shared out, and Taylor goes through some big new improvements in his Laracon keynote:
            Streamlined Directory Structure
            So far, these are just a beta preview. They might change, but as of now, here is what to expect...

           <h2 class="mt-3 text-danger"> Controllers no longer extend anything by default.</h2>

            No more middleware directory. Currently, Laravel includes nine middleware and many you would never customize. However, if you do want to customize them, that is moved to the App/ServiceProvider.No more Http/Kernel
            Most of the things you used to could do in the Kernel you can now do in the Bootstrap/App.
           <h2 class="mt-3 text-danger"> Config Changes</h2>
            Laravel has a lot of config files, and Laravel 11 removes these, and all config options cascade down. The .env has been expanded to include all the options you'd want to set.

            To pair with this is a new config:publish command so you can bring back any config you might want. Even with bringing them back, the new cascade feature allows you to remove every option you don't want to customize.
        </div>
    </div>
@endsection
