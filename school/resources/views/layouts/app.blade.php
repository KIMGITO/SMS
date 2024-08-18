

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','SMS')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

         <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('vendor/css/styles.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/css/sidebar.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/css/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/css/loader.css') }}">
        {{-- Flat picker style --}}
        <link rel="stylesheet" href="{{ asset('vendor/css/flatpickr.min.css') }}">
        <script src="{{ asset('vendor/js/flatpikr.min.js') }}"></script>

        <script src="{{ asset('vendor/js/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/js/sidebar.js') }}"></script>
        <script src="{{ asset('vendor/js/app.min.js') }}"></script>
    </head>
    <body class="bg-dark text-light" id="body" >
       
        <x-loader />
        
         <div class="">
            @yield('content')
        </div>

    <script>
       $(window).on('load', function() {
            $('#loader').hide();
        });
        $(window).on('beforeunload', function() {
            $('#loader').show();
        });
    </script>

    <script>
        flatpickr("#customDate", {
            dateFormat: "Y-m-d", // Customize the date format
            allowInput: true // Allows manual typing in the input field
        });
    </script>

    </body>
</html>





