
@props([
    'label',
    'options',
    'id',
    'name',
    'selectedValue' => '',
    'icon',
])

@php
    // dd($selectedValue);
@endphp
<div class="form-group">
  <label for="{{ $id }}"> <i class="fas {{ $icon }} me-3"></i> {{ $label }}</label>
  <select class="form-control form-control-sm" id="{{ $id }}" name="{{ $name }}">
    @foreach($options as $key => $value)
        <option @if($selectedValue == $key) selected @elseif($loop->first && $selectedValue != '') selected @endif value="{{ $key }}">{{ $value }}</option>
    @endforeach
  </select>
</div>