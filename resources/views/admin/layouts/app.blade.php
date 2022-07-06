<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>
      @yield('title', 'Dashboard')
    </title>
    <link rel="shortcut icon" type="image/png" href="./assets/images/logo-title.png" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dashboard.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/listProducts.css') }}" />
  </head>

  <body id="page-top">
    <div class="effect-background"></div>
    <div class="wrapper" id="wrapper">
      
      @include('admin.layouts.sidebar')

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        @yield('content')

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span style="font-size: 16px">Design 01/05/2022</span>
            </div>
          </div>
        </footer>
      </div>
{{-- 
    <script src="{{ asset('admin/assets/js/listProducts.js') }}"></script>
    <script src="{{ asset('admin/assets/js/logout.js') }}"></script> --}}

    @yield('script')
    
  </body>
</html>
