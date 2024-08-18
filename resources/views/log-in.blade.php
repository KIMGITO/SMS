@extends('index')

@section('content')
  <div class="container-lg d-flex align-items-center justify-content-center h-100 text-white">
   <div class="container my-5">
    <div class="text-center">
     <h1 class="text-light fw-bold display-6 border border-1 rounded">Welcome to School Management System</h1>
     <img src="{{ asset('images/logo.jpg') }}" width="90" class="rounded-circle mt-3"><br>
     <i class="text-light">Your success, Our pride...</i>
   </div>
   </div>
</div>

<div class="container mt-4 col-md-5 col-lg-2 border border-1 border-secondary rounded-3 ">
    <div class="p-2">
        <form method="POST" action="{{ url('/login') }}" >
          @error('error')
            <x-forms.input-error message="{{ $message }}" />
          @enderror
          
      @csrf
      <x-forms.input id="email" label="Email" name='email'>
        <i class="fas fa-user-circle me-3"></i> 
      </x-forms.input>
      <x-forms.input id="password" label="Password" type="password" name='password'>
        <i class="fas fa-key me-3"></i> 
      </x-forms.input>
      <x-forms.button name="Enter" class="btn-success rounded-1 btn-sm "/>
    </form>
    </div>
  </div>
</div>
@endsection