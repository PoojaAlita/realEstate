<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('Login')|Veltrix - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset("/images/favicon.ico")}}">

        <!-- Bootstrap Css -->
        <link href="{{asset("assets/css/bootstrap.min.css")}}" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{asset("assets/css/icons.min.css")}}" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{asset("assets/css/app.min.css")}}" id="app-style" rel="stylesheet" type="text/css">

    </head>

<body>

    {{-- <div class="home-btn d-none d-sm-block">
        <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div> --}}
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="bg-primary">
                            <div class="text-primary text-center p-4">
                                <h5 class="text-white font-size-20">Welcome Back !</h5>
                                <p class="text-white-50">Sign in to continue to Real Estate.</p>
                                <a href="index.html" class="logo logo-admin">
                                    <img src="{{asset("assets/images/logo-sm.png")}}" height="24" alt="logo">
                                </a>
                            </div>
                        </div>
                        @yield('content')
                    </div>

                    <div class="mt-5 text-center">
                        {{-- <p>Don't have an account ? <a href="pages-register.html" class="fw-medium text-primary"> Signup now </a> </p> --}}
                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Real Estate. Crafted with 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{asset("assets/libs/jquery/jquery.min.js")}}"></script>
    <script src="{{asset("assets/libs/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("assets/libs/metismenu/metisMenu.min.js")}}"></script>
    <script src="{{asset("assets/libs/simplebar/simplebar.min.js")}}"></script>
    <script src="{{asset("assets/libs/node-waves/waves.min.js")}}"></script>

    <script src="{{asset("assets/js/app.js")}}"></script>
      <!-- url -->
      <script type="text/javascript">
        $.ajaxSetup({
         headers: {
             "X-CSRF-TOKEN": $('meta[name="_token"]').attr("content"),
         },
       });
         var aurl = {!! json_encode(url('/')) !!}
     </script>
     <!-- Custome Script--->
     @yield('custome-script')

</body>

</html>