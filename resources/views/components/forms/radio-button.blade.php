@props([
    'name'=> null,
    'id' => null,
    'value'=> null,
    'label' =>  null
])

<div class="col-5 m">
    <input type="radio" name="{{ $name}}" id={{ "$id "}} value={{ "$value" }} >
    <label for={{ $id }}>:{{$label}}</label>
</div>