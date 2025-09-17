<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>Forgot Password || Lusaka South College - Portal</title>
  <link rel="icon" type="image/png" href="{{asset('assets/images/logo/LSC.png')}}">
  <link rel="preconnect" href="{{url('https://fonts.googleapis.com/')}}">
  <link rel="preconnect" href="{{url('https://fonts.gstatic.com/')}}" crossorigin>
  <link href="{{url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/css/rt-plugins.css')}}">
  {{-- <link href="{{('../unpkg.com/aos%402.3.0/dist/aos.css')}}" rel="stylesheet"> --}}
  {{-- <link rel="stylesheet" href="{{('../unpkg.com/leaflet%401.9.3/dist/leaflet.css')}}" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""> --}}
  <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
  
  <script src="{{asset('assets/js/store.js')}}"></script>

  <!-- scripts -->
  <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
  <script src="{{asset('assets/js/rt-plugins.js')}}"></script>
  <script src="{{asset('assets/js/app.js')}}"></script>
</head>

<body class=" font-inter skin-default">

  <div class="loginwrapper bg-cover bg-no-repeat bg-center" style="background-image: url({{asset('assets/images/all-img/back2.png')}});">
    <div class="lg-inner-column">
      <div class="left-columns lg:w-1/2 lg:block hidden">
        <div class="logo-box-3">
          <a heref="{{route('lecturer.admin.get')}}" class="">
            <div class="flex items-center gap-3">
              <img src="{{asset('assets/images/logo/lsuc_logo.jpeg')}}" alt="Lusaka South College Logo" class="h-16 w-auto">
              <span class="text-xl font-bold text-gray-800">Lusaka South College</span>
            </div>
          </a>
        </div>
      </div>
      <div class="lg:w-1/2 w-full flex flex-col items-center justify-center">
        <div class="auth-box-3">
          <div class="mobile-logo text-center mb-6 lg:hidden block">
            <a heref="{{route('lecturer.admin.get')}}">
              {{-- <img src="assets/images/logo/logo.svg" alt="" class="mb-10 dark_logo"> --}}
              <div class="flex flex-col items-center gap-2 mb-10">
                <img src="{{asset('assets/images/logo/lsuc_logo.jpeg')}}" alt="Lusaka South College Logo" class="w-24 h-auto">
                <span class="text-lg font-semibold text-gray-800">Lusaka South College</span>
              </div>
            </a>
          </div>
          <div class="text-center 2xl:mb-10 mb-5">
            <h4 class="font-medium">Forgot Password?</h4>
            <div class="text-slate-500 dark:text-slate-400 text-base">
                Enter your Email and instructions will be sent to you!
            </div>

            @include('layouts.messages')
            
          </div>
          <!-- BEGIN: Login Form -->
          <form class="space-y-4" action='{{route('lecturer.admin.forgot_password.post')}}' method="POST">
            @csrf

            <div class="fromGroup">
              <label class="block capitalize form-label">Email</label>
              <div class="relative ">
                <input type="email" name="email" class="form-control py-2" placeholder="Enter your email" value="">
              </div>
            </div>

            <div class="flex justify-between">

              <a class="text-sm text-slate-800 dark:text-slate-400 leading-6 font-medium" href="{{route('lecturer.admin.get')}}">Back</a>
            </div>

            <button class="btn btn-green block w-full text-center">Submit Email</button>
          </form>

        </div>
      </div>

    </div>
  </div>

  
</body>


</html>
