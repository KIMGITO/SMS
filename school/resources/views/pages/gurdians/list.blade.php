@extends('sections.includes')
    @section('main')
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                {{-- <x-table /> --}}
                @php

                    $currentPage = $gurdians->currentPage();
                    $perPage = $gurdians->perPage();
                    $startIndex = ($currentPage - 1) * $perPage + 1;


                    $data = [];
                    $count = 0;
                    foreach ($gurdians as $gurdian) {
                      
                       $data[] =  [
                            '#'=> $count + $startIndex, 
                            'Photo' => 'img,'.$gurdian->user->image,
                            'Name' => ucWords($gurdian->user->first_name.' '. $gurdian->user->middle_name. ' '. $gurdian->user->last_name),
                            'Phone' => $gurdian->user->phone,
                            'Email' => $gurdian->user->email,
                        ];
                        $count++;
                    }
                    
                @endphp

                @component('components.table',[
                    'thead' => ['#','Photo','Name','Phone','Email'],
                    'tbody' => $data,
                    'tfoot' => 'Parent/Gurdian\'s Table ',
                    'caption' => 'Parent/Gurdian List',
                ]) 
                {{ $gurdians->onEachSide(1)->links('components.pagination') }}
                @endcomponent
            </div>
           

        </div>
   </div>
@endsection

