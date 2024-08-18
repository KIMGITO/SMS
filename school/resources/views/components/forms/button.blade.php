@props([
    'label' =>'Ok',
])

<div class="row mt-4">
    <div class="d-flex justify-content-end">
        <button {{ $attributes->merge(['type'=>'submit', 'class'=>'btn btn-primary']) }} class="btn p-0">{{ $label }}</button>
    </div>
</div>