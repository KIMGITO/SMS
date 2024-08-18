
@extends('layouts.app')
@extends('sections.top-bar')
    @section('nav-btn')
        <x-sections.nav-btn />
    @endsection
    @section('form-search-input')
        <x-forms.search-input />
    @endsection
    @section('section-top-info')
        <x-sections.top-info />
    @endsection
@extends('sections.side-bar')
@section( 'content')
   <div class="container-fluid text-light custom-main ">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                {{-- <x-table /> --}}
                @php

                    $currentPage = $students->currentPage();
                    $perPage = $students->perPage();
                    $startIndex = ($currentPage - 1) * $perPage + 1;


                    $data = [];
                    $count = 0;
                    foreach ($students as $student) {
                      
                       $data[] =  [
                            '#'=> $count + $startIndex,
                            'ADM.No' => $student->adm_no,  
                            'Photo' => 'img,'.$student->user->image,
                            'Name' => ucWords($student->user->first_name.' '. $student->user->middle_name. ' '. $student->user->last_name),
                            'Class' => 'Form '.$student->class,
                        ];
                        $count++;
                    }
                    
                @endphp

                @component('components.table',[
                    'thead' => ['#','ADM.No','Photo','Name','class'],
                    'tbody' => $data,
                    'tfoot' => 'Student\'s Table ',
                    'caption' => 'Student List',
                ]) 
                {{ $students->onEachSide(1)->links('components.pagination') }}
                @endcomponent
            </div>
           

        </div>
   </div>
@endsection

