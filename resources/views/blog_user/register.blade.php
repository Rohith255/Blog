@extends('index')
@section('content')
    <section class="vh-100" style="background-image: url('{{asset('i_01.png')}}');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                <form method="post" action="{{route('blog-user.submit')}}">
                                    @csrf
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-outline mb-4">
                                        <input type="text" class="form-control form-control-lg"
                                        name="name" />
                                        <label class="form-label" for="form3Example3cg">Your Name</label>
                                    </div>
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <div class="form-outline mb-4">
                                        <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" />
                                        <label class="form-label" for="form3Example3cg">Your Email</label>
                                    </div>
                                    @error('dob')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <div class="form-outline mb-4">
                                        <input type="date" id="form3Example4cdg" class="form-control form-control-lg" name="dob" />
                                        <label class="form-label" for="form3Example4cdg">DOB</label>
                                    </div>

                                    @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password" />
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit"
                                                class="btn btn-block btn-lg gradient-custom-4 text-white" style="background-color: #17B169;">Register</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="{{route('blog-user.login')}}"
                                                                                                            class="fw-bold text-body"><u>Login here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
