
@props([
    'type' => 'primary'
    ])
@php
    $type = ($type === 'error') ? 'danger' : $type;

    $validTypes = ['info','success','danger','primary','secondary','warning'];
   $icons = [
    'warning' => 'fas fa-exclamation-circle',
    'success' => 'fas fa-circle-check',
    'danger' => 'fas fa-exclamation-triangle',
    'primary' => 'fas fa-circle-question',
    'secondary' => 'fas fa-lightbulb',
    'info' => 'fas fa-circle-info',
    'error' => 'fas fa-exclamation-triangle'
];
    
    $type = !in_array($type, $validTypes) ? 'primary' : $type;
    $message = Str::limit($message, 130);


    
@endphp

<div class="row" {{ $attributes->merge(['id'=>'fade']) }}>
    <div class="d-flex justify-content-end ">
        <div class="alert alert-{{ $type }} col-lg-3 alert-dismissible fade p-2 show card" role="alert">
            <strong class="me-3"><i class="{{ $icons[$type] }} fs-5"></i> {{ Str::ucfirst($type) }} !</strong>
            <small class="lead  fs-3 ">
                {{ $message }}
            </small>
        </div>
    </div>
</div>





