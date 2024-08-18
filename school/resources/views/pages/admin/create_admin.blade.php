@extends('layouts.guest')
@extends('sections.guest-top-bar')
@section('content')

<div class="custom-main container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="card bg-dark col-lg-6 col-md-7">
            <div class="card-title text-success lead">Create System Admin</div>
            <div class="card-body text-success">
                <form action="{{ route('admin.store') }}" method="POST" encrype="multipart/form-data">
                    @csrf 
                    <x-forms.form-section sectionName="Personal Information" />
                    <div class="row mt-3 justify-content-between">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <x-forms.text-input name="first_name" id="first_name" icon="fa-signature" labelClass="fw-bolder" label="First Name" value="{{ old('first_name') }}" />
                            </div>
                            @error('first_name')
                                <x-forms.input-error message='{{ $message }}' />
                            @enderror
                        </div>
                        <div class="col-lg-5">
                            <div class="form-group">
                                <x-forms.text-input name="middle_name" id="middle_name" icon="fa-signature" labelClass="fw-bolder" label="Middle Name" value="{{ old('middle_name') }}" />
                            </div>
                            @error('middle_name')
                                <x-forms.input-error message='{{ $message }}' />
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-3 justify-content-between">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <x-forms.text-input name="last_name" id="last_name" icon="fa-signature" labelClass="fw-bolder" label="Last Name" value="{{ old('last_name') }}" />
                            </div>
                            @error('last_name')
                                <x-forms.input-error message='{{ $message }}' />
                            @enderror
                        </div>
                        <div class="col-lg-5">
                            <div class="form-group pt-4 px-2">
                                <div class="row d-flex">
                                @php
                                    $gender = old('gender');
                                @endphp
                                <x-forms.radio-input color='success' name='gender' value='male' label=' :Male' :checked="'male' === old('gender')  "  />
                                <x-forms.radio-input color='success' name='gender' value='female' label=' :Female' :checked=" 'female' === old('gender') " />
                                </div>
                                @error('gender')
                                <x-forms.input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                    </div>

                    <x-forms.form-section sectionName="Contact Information" />
                    <div class="row mt-3 justify-content-between">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <x-forms.text-input name="email" id="email" icon="fa-envelope" labelClass="fw-bolder" label="Email" value="{{ old('email') }}" />
                            </div>
                            @error('email')
                                <x-forms.input-error message='{{ $message }}' />
                            @enderror
                        </div>
                        <div class="col-lg-5">
                            <div class="form-group">
                                <x-forms.text-input name="phone" id="phone" icon="fa-phone" labelClass="fw-bolder" label="Phone" value="{{ old('phone') }}" />
                            </div>
                            @error('phone')
                                <x-forms.input-error message='{{ $message }}' />
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-3 justify-content-between">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <x-forms.text-input name="address" id="address" icon="fa-house-chimney" labelClass="fw-bolder" label="Home" value="{{ old('address') }}" />
                            </div>
                            @error('address')
                                <x-forms.input-error message='{{ $message }}' />
                            @enderror
                        </div>
                        <div class="col-lg-5">
                            <div class="form-group">
                                <x-forms.text-input name="password" readonly class="disabled" id="password" icon="fa-key" labelClass="fw-bolder" label="Default Password" value="password" />
                            </div>
                            @error('password')
                                <x-forms.input-error message='{{ $message }}' />
                            @enderror
                        </div>
                    </div>

                    <x-forms.button label="Create" class="btn-success btn-sm"/>
                </form>
        </div>
    </div>
</div>
@endsection