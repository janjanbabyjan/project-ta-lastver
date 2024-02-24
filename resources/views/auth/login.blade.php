@extends('layouts.log')

@section('content')
<!-- Login 10 - Bootstrap Brain Component -->
<section class="bg-light py-3 py-md-5 py-l-8">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                <div class="card border border-light-subtle rounded-4">

                    <div class="card-body p-3 p-md-4 p-xl-5">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                            
                            <div class="image-logo" style="width: 100%; text-align: center;">
                                <img src="https://img2.pic.in.th/pic/Computing_KKU.png" alt="Computing_KKU.png"
                                    style="width: 80%;" />
                            </div>
                            <div class="row gy-3 overflow-hidden">
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <br>
                                        <div class="col-mb-3">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                placeholder="Email" value="{{ old('email') }}" required
                                                autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <div class="col-mb-3">
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password"
                                                placeholder="Password" style="padding: 0.6rem;">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                            old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label text-secondary" for="remember"
                                            style="font-size: 14px; margin-top: -1rem;">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-lg" type="submit"
                                            style="font-size: 16px; border-radius: 1.5rem;">{{ __('Login')
                                            }}</button> <br>
                                        <button class="btn btn-white btn-lg" type="submit"
                                            style="font-size: 16px; border-radius: 1.5rem; border: 1px solid gray;">
                                            Log in with google</button>

                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}"
                                            class="link-secondary text-decoration-none">{{ __('Forgot Your
                                            Password?') }}</a>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center mt-4">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection