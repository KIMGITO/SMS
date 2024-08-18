@extends('sections.includes')
    @section('main')
        <div class="row justify-content-center">
            <div class="card bg-dark text-success col-md-6 col-lg-5">
                <div class="card-header p-0 shadow-lg lead">
                    Add new Teacher
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" action="{{ route('teacher.store1') }}" method="POST"   >
                        @csrf
                        <x-forms.form-section sectionName="Personal Information" class="" />
                        <div class="col-lg-5">
                            <x-forms.image-input name="profile_image" />
                            {{-- <input type="file" name="image" accept="image/*"> --}}
                            @error('profile_image')
                                <x-forms.input-error message="{{ $message }}" />
                            @enderror
                        </div>
                        <div class="row  justify-content-between">
                            <div class="col-lg-5">
                                <div class="form-group mt-3">
                                   <x-forms.text-input id="first_name" name="first_name" label='Fisrt Name' icon='fa-signature' labelClass='text-success fw-bold' value="{{ old('first_name') }}" />
                                   @error('first_name')
                                    <x-forms.input-error message="{{ $message }}" />
                                   @enderror
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group mt-3">
                                   <x-forms.text-input id="middle_name" name="middle_name" label='Middle Name' icon='fa-signature' labelClass='text-success fw-bold' value="{{ old('middle_name') }}" />
                                   @error('middle_name')
                                    <x-forms.input-error message="{{ $message }}" />
                                   @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row  justify-content-between">
                            <div class="col-lg-5">
                                <div class="form-group mt-3">
                                   <x-forms.text-input id="last_name" name="last_name" label='Last Name' icon='fa-signature' labelClass='text-success fw-bold' value="{{ old('last_name') }}" />
                                   @error('last_name')
                                    <x-forms.input-error message="{{ $message }}" />
                                   @enderror
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group mt-3 pt-4 px-2">
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

                        <x-forms.form-section sectionName='Contact Information' />
                        
                        <div class="row  justify-content-between">
                            <div class="col-lg-5">
                                <div class="form-group mt-3">
                                   <x-forms.text-input id="phone" name="phone" label='Phone' icon='fa-phone' labelClass='text-success fw-bold' value="{{ old('phone') }}" />
                                   @error('phone')
                                    <x-forms.input-error message="{{ $message }}" />
                                   @enderror
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group mt-3">
                                   <x-forms.text-input id="email" name="email" label='Email' icon='fa-envelope' labelClass='text-success fw-bold' value="{{ old('email') }}" />
                                   @error('email')
                                    <x-forms.input-error message="{{ $message }}" />
                                   @enderror
                                </div>
                            </div>
                        </div>
                         <div class="row justify-content-between">
                            <div class="col-lg-5">
                                <div class="form-group mt-3">
                                   <x-forms.text-input id="address" name="address" label='Home Address' icon='fa-house-chimney' labelClass='text-success fw-bold' value="{{ old('address') }}" />
                                   @error('address')
                                    <x-forms.input-error message='{{ $message }}' />
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="form-group mt-3">
                                   <x-forms.text-input id="emergency_contact" name="emergency_contact" label='Emergency Contact' icon='fa-phone-volume' labelClass='text-success fw-bold' value="{{ old('emergency_contact') }}" />
                                   @error('emergency_contact')
                                    <x-forms.input-error message='{{ $message }}' />
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <x-forms.button class="btn-success btn-sm" label='Continue'/>
                </div>
            </div>
        </div>
    @endsection