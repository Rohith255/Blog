@extends('index')
@section('content')
<section class="vh-100" style="background-image: url('{{asset('login.png')}}');background-size: unset">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <h3 class="mb-5">Sign in</h3>
                        <form method="post" action="{{route('blog-user.store')}}">
                            @csrf
                            @error('email')
                            <p class="text-danger text-start">{{ $message }}</p>
                            @enderror
                        <div class="form-outline mb-4">
                            <input type="email" class="form-control form-control-lg" name="email"/>
                            <label class="form-label" for="typeEmailX-2">Email</label>
                        </div>
                            @error('password')
                            <p class="text-danger text-start">{{ $message }}</p>
                            @enderror
                        <div class="form-outline mb-4">
                            <input type="password" class="form-control form-control-lg" name="password"/>
                            <label class="form-label" for="typePasswordX-2">Password</label>
                        </div>
                        <!-- Checkbox -->
                        <div class="form-check d-flex justify-content-start mb-4">
                            <input class="form-check-input" type="checkbox" value="remember_me" name="remember_me" />
                            <label class="form-check-label" for="form1Example3"> Remember password </label>
                        </div>

                        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                        </form>
                        @if (session('invalid'))
                            <div class="alert alert-danger mt-3">
                                {{ session('invalid') }}
                            </div>
                            <script>
                                setTimeout(function() {
                                    $('.alert').fadeOut('fast');
                                }, 4000);
                            </script>
                        @endif

                        <hr class="my-4">

                        <div>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{route('blog-user.register')}}" class="link-danger">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

