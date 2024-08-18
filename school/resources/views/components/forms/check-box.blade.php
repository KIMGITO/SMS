@props([
    'name',
    'value',
    'label',
    'selected'=> false
])

  <label class="form-check-label text-success d-inline mx-1">
    <input type="checkbox" name="{{ $name }}" value="{{ $value }}" {{ $attributes->merge(['id'=>$name, 'class'=>'form-check-input bg-success']) }} @if($selected) checked @endif >
    {{ $label }}
  </label>


