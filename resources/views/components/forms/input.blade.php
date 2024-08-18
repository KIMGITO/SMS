
{{-- @props([
    'type'=>'text','id','name','placeholder'=>'place', 'label'
    ]) --}}

<div class="form-group mt-3 ">
    <label for="{{ $id }}" > 
        {{ $slot }}{{ $label }}
    </label>
    <input 
    {{ $attributes->merge([
        'class'=>'form-control px-2 rounded-0 p-0 bg-white text-dark',
        'type'=>'text',
        'placeholder'=>'Enter '.$label, 
        'name' => $id
        ]) }} 
    
     />
    @error($name)
        <x-forms.input-error message="{{ $message }}"
    @enderror
</div>