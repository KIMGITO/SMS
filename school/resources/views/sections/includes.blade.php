@extends('layouts.app')
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
@include('components.sections/bread-crumps')
    <div class="container-fluid text-light custom-main ">
        {!! alertHelper() !!}
        @yield('main')
    </div>
    @endsection