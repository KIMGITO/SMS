
@props([
    'thead' => ['name','email','phone'],
    'tbody',
    'tfoot' => 'Table Name',
    'caption' => 'caption',
    ])
   
<div class="card bg-dark">
<div class="p-4">
    <table class="table custom-table table-dark bordered  table-hover table-responsive ">
    <thead>
        <tr class="text-start">
            @foreach($thead as $th)
            @php
                $data = CheckForColspan($th)
            @endphp
                <th class="align-middle" @if($data[0]!= false) colspan="{{ $data[0] }}" @endif>{{ $data[1] }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($tbody as $row)
            <tr>
                @foreach($row as $td)
                @php
                    $data = CheckForColspan($td);
                    $isImg = CheckForImage($td);
                @endphp
                <td class="small text-start align-middle" @if($data[0] != false) colspan="{{ $data[0] }}" @endif  >
                    @if($isImg[0])
                    <img src="{{ asset('images/profile_images'.$isImg[1]) }}" class=" img-fluid" width="50px" height="50px">
                    @else
                    {{ $data[1] }}
                    @endif
                </td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
    <tfoott class=" fw-bolder lead">{{ $tfoot }}</tfoott>
</table>
<i class="small">{{ $caption }}</i>

</div>
{{ $slot }}
</div>