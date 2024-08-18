@extends('sections.includes')
    @section('main')
        <div class="row justify-content-center">
            <div class="card bg-dark text-success col-md-6 col-lg-5">
                <div class="card-header p-0 shadow-lg lead">
                    Teachers Employment Information
                </div>
                <div class="card-body">
                    <form action="{{ route('teacher.store2') }}" method="POST"   >
                        @csrf
                        <x-forms.form-section sectionName="Employment Information" class="" />
                       
                        <div class="row mt-3 justify-content-between">
                            <div class="col-lg-5">
                                <div class="form-group mt-3">
                                   <x-forms.text-input id="tsc_no" name="tsc_no" label='TSC No' icon='fa-signature' labelClass='text-success fw-bold' value="{{ old('tsc_no') }}" />
                                   @error('tsc_no')
                                    <x-forms.input-error message="{{ $message }}" />
                                   @enderror
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group mt-3">
                                   <x-forms.text-input id="customDate" name="date_of_hire" label='Date of Hire' icon='fa-calendar-day' labelClass='text-success fw-bold' value="{{ old('date_of_hire') }}" />
                                   @error('date_of_hire')
                                    <x-forms.input-error message="{{ $message }}" />
                                   @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 justify-content-between">
                            <div class="col-lg-5">
                                @component('components.forms.form-selection',[
                                    'label' => 'Employment Status',
                                    'icon' => 'fa-people-arrows',
                                    'id' => 'employment_status',
                                    'name' => 'employment_status',
                                    'options' => [
                                        'full time' => 'Full Time',
                                         'contract' => 'Contract', 
                                         'part time' => 'Part Time',
                                        ],
                                    'selectedValue' => old('employment_status')
                                ])
                                    
                                @endcomponent
                                @error('employment_status')
                                    <x-forms.input-error message="{{ $message }}" />
                                @enderror
                            </div>
                            <div class="col-lg-5">
                                @component('components.forms.form-selection',[
                                    'label' => 'Department',
                                    'icon' => 'fa-people-arrows',
                                    'id' => 'department',
                                    'name' => 'department',
                                    'options' => [
                                        'science' => 'Science',
                                         'languages' => 'Languages', 
                                         'humanities' => 'Humanities',
                                        ],
                                    'selectedValue' => old('department')
                                ])
                                    
                                @endcomponent
                                @error('department')
                                    <x-forms.input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3 justify-content-between">
                            <div class="col-lg-5">
                                @component('components.forms.form-selection',[
                                    'label' => 'Position',
                                    'icon' => 'fa-people-arrows',
                                    'id' => 'position',
                                    'name' => 'position',
                                    'options' => [
                                        'senior' => 'Senior',
                                        'assistant' => 'Asistant', 
                                        ],
                                    'selectedValue' => old('position')
                                ])
                                @endcomponent
                                @error('position')
                                    <x-forms.input-error message="{{ $message }}" />
                                @enderror
                            </div>
                            

                            <div class="col-lg-5">
                                <div class="">Subjects</div>
                                <div class=" d-flex">
                                    @component('components.forms/check-box',[
                                        'name' => 'subjects[]',
                                        'value' => 'English',
                                        'label' => 'English'
                                    ])
                                    @endcomponent
                                    @component('components.forms/check-box',[
                                        'name' => 'subjects[]',
                                        'value' => 'Mathematics',
                                        'label' => 'Maths'

                                    ])
                                    @endcomponent
                                </div>
                                    @error('subjects')
                                        <x-forms.input-error message="{{ $message }}" />
                                    @enderror
                            </div>
                            
                        </div>

                       
                        <x-forms.button class="btn-success btn-sm" label='Continue'/>
                </div>
            </div>
        </div>
    </div>
@endsection