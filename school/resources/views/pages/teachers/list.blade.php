@extends('sections.includes')
    @section('main')
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                {{-- <x-table /> --}}
                @php

                    $currentPage = $teachers->currentPage();
                    $perPage = $teachers->perPage();
                    $startIndex = ($currentPage - 1) * $perPage + 1;

                    $data = [];
                    $count = 0;
                    foreach ($teachers as $teacher) {
                       $data[] =  [
                            '#'=> $count + $startIndex,
                            'Photo' => 'img,'.$teacher->user->image,
                            'Name' => ucWords($teacher->user->first_name.' '. $teacher->user->middle_name.' '. $teacher->user->last_name),
                            'Email' => $teacher->user->email,
                            'Phone' => $teacher->user->phone,
                        ];
                        $count++;
                    }
                    
                @endphp

                @component('components.table',[
                    'thead' => ['#','Photo','colspan1,Name','Email','Phone'],
                    'tbody' => $data,
                    'tfoot' => 'Teacher\'s Table ',
                    'caption' => 'Teachers List',
                ]) 

                {{ $teachers->onEachSide(1)->links('components.pagination') }}
                @endcomponent
            </div>
           

        </div>
   </div>
@endsection

