@extends('sections.includes')
    @section('main')
        <div class="row justify-content-center">
            <div class="card bg-dark text-success col-md-6 col-lg-5">
                <div class="card-header p-0 shadow-lg lead">
                    Add new Student
                </div>
                <div class="card-body">
                    <form action="{{ route('student.store') }}" enctype="multipart/form-data"  method="post">
                        @csrf
                        <x-forms.form-section sectionName="Parent/Gurdian" />

                        <div class="row mt-3 justify-content-between">
                            <div class="col-lg-7">
                                <div class="form-group">
                                   <x-forms.text-input id="gurdian_id_no" type="number" name="gurdian_id_no" placeholder="Enter Parent/Gurdian Identity number " label='Parent/Gurdian ID No' icon='fa-signature' labelClass='text-success fw-bold' value="{{ old('gurdian_id_no') }}" />
                                   @error('gurdian_id_no')
                                    <x-forms.input-error message='{{ $message }}' />
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                @component('components.forms.form-selection',[
                                    'label' => 'Relationship',
                                    'icon' => 'fa-people-arrows',
                                    'id' => 'relationship',
                                    'name' => 'relationship',
                                    'options' => ['parent' => 'Parent', 'gurdian' => 'Gurdian'],
                                    'selectedValue' => old('relationship')
                                ])
                                    
                                @endcomponent
                                @error('class')
                                    <x-forms.input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <x-forms.form-section sectionName="Student Information" />
                        
                        <div class="row mt-3 justify-content-between">
                            <div class="col-lg-5">
                                <x-forms.image-input name="profile_image" />
                                @error('profile_image')
                                    <x-forms.input-error message="{{ $message }}" />
                                @enderror
                            </div>
                            <div class="col-md-6 col-lg-5">
                                
                                @component('components.forms.form-selection',[
                                    'label' => 'Class',
                                    'icon' => 'fa-users-between-lines',
                                    'id' => 'class',
                                    'name' => 'class',
                                    'options' => ['1' => 'Form One', '2' => 'Form Two', '3' => 'Form Three' , '4' => 'Form Four'],
                                    'selectedValue' => old('class')
                                ])
                                    
                                @endcomponent
                                @error('class')
                                    <x-forms.input-error message="{{ $message }}"
                                @enderror
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-lg-5">
                                <div class="form-group mt-3">
                                   <x-forms.text-input id="first_name" name="first_name" label='Fisrt Name' icon='fa-signature' labelClass='text-success fw-bold' value="{{ old('first_name') }}" />
                                </div>
                                @error('first_name')
                                    <x-forms.input-error message='{{ $message }}' />
                                @enderror
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group mt-3">
                                   <x-forms.text-input id="middle_name" name="middle_name" label='Middle Name' icon='fa-signature' labelClass='text-success fw-bold' value="{{ old('middle_name') }}" />
                                   @error('middle_name')
                                    <x-forms.input-error message='{{ $message }}' />
                                    @enderror
                                </div>
                            </div>
                        </div>
                         <div class="row justify-content-between">
                            <div class="col-lg-5">
                                <div class="form-group mt-3">
                                   <x-forms.text-input id="last_name" name="last_name" label='Last Name' icon='fa-signature' labelClass='text-success fw-bold' value="{{ old('last_name') }}" />
                                </div>
                                @error('last_name')
                                    <x-forms.input-error message='{{ $message }}' />
                                @enderror
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group mt-3">
                                   <x-forms.text-input id="address" name="address" label='Home Address' icon='fa-house-chimney' labelClass='text-success fw-bold' value="{{ old('address') }}" />
                                   @error('address')
                                    <x-forms.input-error message='{{ $message }}' />
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                         <div class="row justify-content-between">
                            <div class="col-lg-5">
                                <div class="form-group mt-3">
                                   <x-forms.text-input id="customDate" name="dob" label='Date Of Birth' placeholder="YYYY-MM-DD" type="" icon='fa-calendar-day' labelClass='text-success fw-bold' value="{{ old('dob') }}" />
                                   {{-- <input type="text" id="" placeholder="Select Date"> --}}

                                </div>
                                @error('dob')
                                    <x-forms.input-error message='{{ $message }}' />
                                @enderror
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
                                <x-forms.button class="btn-success btn-sm"  label="Create" />
                            
                    </form>
                </div>
            </div>
        </div>
     </div>
@endsection