@extends('layouts.guest')
@extends('sections.top-bar')
    @section('nav-btn')
        <x-sections.nav-btn />
    @endsection
    @section('form-search-input')
        <x-forms.search-input />
    @endsection
    @section('section-top-info')
        <x-sections.top-info />
    @endsection
@extends('sections.side-bar')
    

@section('content')
    <div class="container-fluid custom-main">
     {!! alertHelper() !!}
        <div class="row ">
        
        </div>
    </div>
@endsection