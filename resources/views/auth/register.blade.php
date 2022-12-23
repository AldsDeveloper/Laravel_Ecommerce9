@extends('layouts.base')
@section('main-content')
    <x-guest-layout>
        <!--main area-->
        <main id="main" class="main-site left-sidebar">
            <div class="container">
                <div class="wrap-breadcrumb">
                    <ul>
                        <li class="item-link"><a href="#" class="link">home</a></li>
                        <li class="item-link"><span>Register</span></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                        <div class=" main-content-area">
                            <div class="wrap-login-item ">
                                <div class="register-form form-item ">
                                    <x-jet-validation-errors class="mb-4" />
                                    {{-- Validation errors alert form livewire --}}
                                    <form class="form-stl" action="{{ route('register') }}" name="frm-login" method="POST">
                                        @csrf
                                        <fieldset class="wrap-title">
                                            <h3 class="form-title">Create an account</h3>
                                            <h4 class="form-subtitle">Personal infomation</h4>
                                        </fieldset>
                                        <fieldset class="wrap-input">
                                            <label for="name">Name*</label>
                                            <input type="text" id="name" name="name" name="reg-lname"
                                                placeholder="Your name" :value="old('name')" required autofocus
                                                autocomplete="name">
                                        </fieldset>

                                        <fieldset class="wrap-input">
                                            <label for="email">Email Address*</label>
                                            <input type="email" id="email" name="email"
                                                placeholder="Your e-mail address" :value="old('email')" required>

                                        </fieldset>

                                        <fieldset class="wrap-title">
                                            <h3 class="form-title">Login Information</h3>
                                        </fieldset>

                                        <fieldset class="wrap-input item-width-in-half left-item ">
                                            <label for="password">Password *</label>
                                            <input type="password" id="frm-reg-pass" name="password" placeholder="Password"
                                                required autocomplete="new-password">
                                        </fieldset>

                                        <fieldset class="wrap-input item-width-in-half ">
                                            <label for="password_confirmation">Confirm
                                                Password *</label>
                                            <input type="password" id="frm-reg-cfpass" name="password_comfirmation"
                                                placeholder="Confirm Password" required>
                                        </fieldset>

                                        <input type="submit" class="btn btn-sign" value="Register" name="register">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--end main products area-->
                    </div>
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </main>
        <!--main area-->
    </x-guest-layout>
@endsection
