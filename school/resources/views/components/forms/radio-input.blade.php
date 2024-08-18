
@props(['color'=>'primary', 'checked' => false])
<div class="form-check col-6">
    <label class="form-check-label">
        <input @if($checked) checked @endif class="form-check-input p-0 bg-{{ $color }}" type="radio"  name="{{ $name }}" id="" value="{{ $value }}"> {{ $label }}
    </label>
</div>
