
@props([ 'label','id', 'name', 'icon' => ' ', 'labelClass'=>' ' ])

  <label for="{{ $id }}" class="{{ $labelClass }}"> <i {{ $attributes->merge(['class'=>'fas '.$icon.' me-2']) }}></i> {{ $label }}</label>
  <input id="{{ $id }}" name="{{ $name }}"  {{ $attributes->merge([
   'class'=> 'form-control rounded-0 p-1 px-3 text-white' ,'type'=>'text' ,'placeholder' =>'Enter '.$label
    ]) }} >
   