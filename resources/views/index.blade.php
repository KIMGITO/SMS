<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title', 'School Management System') </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('vendor/css/styles.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/css/nav.css') }}">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <style>

.custom-top-bar{
    position: fixed;
    top: 0%;
    z-index: 20;
    box-shadow: 3px 5px 5px rgb(104, 40, 224)
  }
  .custom-main{
    margin-top: 20vh;
    z-index: 10;
  }
  .custom-breadcrumps{
    position: fixed;
    z-index: 22;
    top: 16vh;

  }
        </style>
    <script src="{{ asset('vendor/js/jquery.min.js') }}"></script>

    </head>
    <body id="body" style="margin-left:60px; min-height: 100vh;transition: 0.2s ;
" class="bg-dark text-white">

        <!-- Navigation -->
        @yield('content')
    </body>
    <script>
    let arrow = $(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e)=>{
    let arrowParent = e.target.parentElement.parentElement;
    arrowParent.classList.toggle("showMenu");
      });
    }

    $(document).ready(function() {
      let sidebar = $(".sidebar");
      let sidebarBtn = $(".bx-menu");

      sidebarBtn.click(function() {
        sidebar.toggleClass("close");

        if($('.sidebar').hasClass('close')){
            console.log('true');
            $('#body').css('margin-left','60px');
        }else{
            console.log('false');
            $('#body').css('margin-left','250px');
        }
      });
    });
  </script>
</html>