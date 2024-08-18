@extends('layouts.guest')
@extends('sections.guest-top-bar')

@section('content')


<div class="container-fluid custom-main">
    <div class="row d-flex justify-content-center">
        <div class="card bg-dark rounded-0 col-md-5 col-lg-3">
        <div class="card-header text-success lead">
            Log in
        </div>
        <div class="ms-4">
            @error('error')
                <x-forms.input-error message="{{$message}}" />
            @enderror
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('auth.login') }}">
                @csrf
                <div class="form-group my-3">
                    <x-forms.text-input id="email" label="Email" name="email" icon="fa-envelope" class="text-light" labelClass="fw-bolder text-success" value="{{ old('email') }}" />
                    @error('email')
                    <x-forms.input-error message="{{ $message }}" />
                    @enderror
                </div>
                <div class="form-group my-3">
                    <x-forms.text-input id="password" label="Password" name="password" icon="fa-key" type="password" class="text-light" labelClass="fw-bolder text-success" />
                    @error('password')
                    <x-forms.input-error message="{{ $message }}" />
                    @enderror
                </div>

                <x-forms.button label='Enter' type="submit" class="btn-success btn-sm" />
            </form>
        </div>
    </div>
    </div>
</div>

@endsection
