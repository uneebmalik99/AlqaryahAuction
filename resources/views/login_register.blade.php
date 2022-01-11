@extends('layouts.main')

@section('inline_style')
<link rel="stylesheet" href="{{ asset('css/contactUs.css') }}">

@endsection

@section('content')
<div class="page-container container-fluid px-5 py-5">
    <div class="loginRegister">
        <div class="container-fluid p-0">
            <div class="row m-0 p-0">
                <div class="col-lg-6 col-12 p-0 m-0">
                    <div class="login h-100">
                        <div class="login-inner text-center text-lg-left">
                            <h2 class="login-title">Log in to your account</h2>
                            <h3 class="login-description">Welcome back! Sign in to your account</h3>
                            <div class="d-block">
                                <form>
                                    <div class="d-block">
                                        
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Email or Username" class="form-control">
                                                </div>
                                                <div class="form-group veh-mb-20">
                                                    <input type="text" placeholder="Password" class="form-control">
                                                </div>
                                                <div class="row veh-mb-20">
                                                    <div class="col-6">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Remember</label>
                                                          </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="ml-auto text-right">
                                                            <a href="#" class="ml-auto">Forget Password</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-submit">Login</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 ">
                    <div class="register">
                        <div class="register-inner text-center text-lg-left">
                            <h2 class="login-title">Register</h2>
                            <h3 class="login-description">Create new account today.</h3>
                            <div class="d-block">
                                <form>
                                    <div class="d-block">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Username " class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Email" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Phone" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Password" class="form-control">
                                                </div>
                                                <div class="row veh-mb-20">
                                                    <div class="col-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="...">
                                                            <label for="blankRadio" class="form-check-label">Private seller</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="...">
                                                            <label for="blankRadio" class="form-check-label">Business seller</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">I accept <span>privacy policy</span></label>
                                                  </div>
                                                <div class="form-group">
                                                    <button class="btn btn-submit">Register</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection


@section('scripts')

@endsection