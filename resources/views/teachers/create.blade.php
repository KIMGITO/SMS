@extends('index')
@extends('components.top-bar')
@extends('components.side-bar')
@section('content')

<div class="container justify-content-center custom-main">
    <div class="row d-flex justify-content-center">
        <div class="card col-md-6 col-lg-5">
            <div class="card-title text-center lead text-dark">Create New Teacher</div>
            
            <form action="{{ route('teacher.store') }}" method="POST" class="fw-bolder text-dark">
                @csrf
                <hr class="text-danger">
                <p class="text-success small fw-light">Personal Information</p>
                <div class="row d-flex justify-content-between">
                    <div class="">
                        <x-forms.input id='first_name' name='first_name' type="text" label="First Name">
                            <i class="fas fa-signature me-3"></i>
                        </x-forms.input>
                        @error('first_name')
                            <x-forms.input-error message="{{ $message }}" />
                        @enderror
                    </div>
                    <div class="">
                        <x-forms.input id='middle_name' name='middle_name' type="text" label="Middle Name"> 
                             <i class="fas fa-signature me-3"></i>
                        </x-forms.input>          
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="">
                        <x-forms.input id='last_name' name='last_name' type="text" label="Last Name">
                            <i class="fas fa-signature me-3"></i>
                        </x-forms.input>
                    </div>
                    <div class="">
                        {{-- <x-forms.input id='email' name='email' type="radio" label="Email"> 
                             <i class="fas fa-envelope me-3"></i>
                        </x-forms.input>           --}}
                        <div class="row d-flex justify-content-center">
                            <p class="mt-2 text-underline"> <i class="fas fa-venus-mars me-3"></i> Genger</p>
                            <x-forms.radio-button id="male" value="male" label="Male" name="gender" />
                            <x-forms.radio-button id="female" value="female" label="Female" name="gender" />
                        </div>
                        

                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="">
                        <x-forms.input id='id_number' name='id_number' type="text" label="ID Number">
                            <i class="fas fa-address-card me-3"></i>
                        </x-forms.input>
                    </div>
                    <div class="">
                        <x-forms.input id='tsc_number' name='tsc_number' type="text" label="TSC Number"> 
                             <i class="fas fa-registered me-3"></i>
                        </x-forms.input>          
                    </div>
                </div>
                <hr class="text-danger fw-bolder">
                <p class="text-success small fw-light">Contact Information</p>

                <div class="row d-flex justify-content-between">
                    <div class="">
                        <x-forms.input id='email' name='email' type="text" label="Email">
                            <i class="fas fa-envelope me-3"></i>
                        </x-forms.input>
                    </div>
                    <div class="">
                        <x-forms.input id='phone_number' name='phone_number' type="text" label="Phone Number "> 
                             <i class="fas fa-phone-flip me-3"></i>
                        </x-forms.input>          
                    </div>
                </div>

                <hr class="text-danger fw-bolder">
                <p class="text-success small fw-light">Job Information</p>

                <div class="row d-flex justify-content-between">
                    <div class="">
                        <x-forms.input id='major' name='major' type="text" label="Major Subject">
                            <i class="fas fa-award me-3"></i>
                        </x-forms.input>
                    </div>
                    <div class="">
                        <x-forms.input id='minor' name='minor' type="text" label="Minor Subject "> 
                             <i class="fas fa-certificate me-3"></i>
                        </x-forms.input>          
                    </div>
                </div>
                <x-forms.button  name='Create' type="submit" class="btn-success"  />
            </form>
        </div>
    </div>
</div>

@endsection