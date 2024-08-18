    

    @props([
        'name' =>'Ok'
        
    ])
    <div class="justify-content-end d-flex">
        <button {{ $attributes->merge(['class'=>'btn btn-secondary mt-3 d-flex py-0 px-1 rounded--', 'type'=>'submit']) }}>
        {{ $name}}
    </button>
    </div>
    