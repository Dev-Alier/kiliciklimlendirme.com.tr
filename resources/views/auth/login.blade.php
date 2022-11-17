@extends('admin.layouts.master-without-nav')
@section('title')
    @lang('translation.Login')
@endsection
@section('content')
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xxl-3 col-lg-4 col-md-5">
                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="text-center">
                                    <a href="{{ url('/') }}" class="d-block auth-logo" style="background-color: white">
                                        <img src="{{ URL::asset('assets/images/'.$setting->logo) }}" alt="{{ $setting->site_name }}" height="100">
                                    </a>
                                </div>
                                <div class="auth-content my-auto">
                                    <form class="mt-2 pt-2" action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="form-floating form-floating-custom mb-4">
                                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                                value="" id="input-username" placeholder="E-posta " name="email">

                                            <label for="input-username">Kullanıcı Adı</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="users"></i>
                                            </div>
                                            @error('email')
                                                <span class="invalid-feedback text-center" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
                                            <input type="password"
                                                class="form-control pe-5 @error('password') is-invalid @enderror"
                                                name="password" id="password-input" placeholder="Şifre">
                                            @error('password')
                                                <span class="invalid-feedback text-center" role="alert">
                                                    <strong>E-posta ve şifre zorunludur</strong>
                                                </span>
                                            @enderror
                                            <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0"
                                                id="password-addon">
                                                <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                            </button>
                                            <label for="input-password">Şifre</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="lock"></i>
                                            </div>

                                        </div>

                                        <div class="mb-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light"
                                                type="submit">Giriş Yap</button>
                                        </div>
                                    </form>



                                </div>
                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0"> Kılıç İklimlendirme</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end auth full page content -->
                </div>
                <!-- end col -->
                <div class="col-xxl-9 col-lg-8 col-md-7">
                    <div class="auth-bg pt-md-5 p-4 d-flex" style="background-image: none !important;text-align: center;justify-content: center;align-items: center;">

                        <div display="flex">
                            <img src="{{ URL::asset('/assets/images/'.$setting->logo) }}" alt="{{ $setting->site_name }}" class="img-fluid"
                                style="width: 100%">
                        </div>
                        <div class="bg-overlay"></div>

                        <!-- end bubble effect -->

                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/pages/pass-addon.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/feather-icon.init.js') }}"></script>
@endsection
