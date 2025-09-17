<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>Login || Lusaka South College - Portal</title>
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

<body class="font-inter skin-default" style="background: linear-gradient(135deg, #ff7b00 0%, #228b22 100%) !important; min-height: 100vh !important; background-attachment: fixed !important;">

  <div class="loginwrapper min-h-screen flex items-center justify-center" style="background: none !important;">
    <div class="container mx-auto px-4" style="max-width: 1200px;">
      <div class="flex flex-row items-center justify-center min-h-screen lg:gap-8 gap-4">
        <!-- Logo Section - Left Side -->
        <div class="lg:w-1/2 w-full lg:flex hidden items-center justify-center">
          <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-8" style="background-color: rgba(255, 255, 255, 0.1) !important; backdrop-filter: blur(10px) !important;">
            <div class="text-center">
              <img src="{{asset('assets/images/logo/lsuc_logo.jpeg')}}" alt="Lusaka South College Logo" style="height: 140px !important; width: auto !important; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5) !important; border-radius: 1rem !important; border: 4px solid rgba(255, 255, 255, 0.4) !important; margin: 0 auto 2rem auto !important; display: block !important;">
              <h1 style="font-size: 2.25rem !important; font-weight: 800 !important; color: #ffffff !important; margin-bottom: 0.75rem !important; text-shadow: 2px 4px 8px rgba(0, 0, 0, 0.5) !important; letter-spacing: 0.1em !important; text-transform: uppercase !important; line-height: 1.2 !important;">LUSAKA SOUTH COLLEGE</h1>
              <p style="font-size: 1rem !important; color: #ffffff !important; opacity: 0.95 !important; font-weight: 600 !important; text-shadow: 1px 2px 4px rgba(0, 0, 0, 0.3) !important;">Dream, Explore, Acquire</p>
            </div>
          </div>
        </div>
        <!-- Login Form - Right Side -->
        <div class="lg:w-1/2 w-full flex items-center justify-center">
          <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-2xl shadow-2xl p-8 w-full max-w-md">
            <!-- Mobile Logo (only visible on mobile) -->
            <div class="text-center mb-6 lg:hidden block">
              <div class="flex flex-col items-center gap-4 mb-8" style="padding: 1rem 0;">
                <img src="{{asset('assets/images/logo/lsuc_logo.jpeg')}}" alt="Lusaka South College Logo" style="width: 100px !important; height: auto !important; box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.3) !important; border-radius: 1rem !important; border: 3px solid rgba(255, 165, 0, 0.3) !important; margin: 0 auto !important; display: block !important;">
                <div class="text-center">
                  <h2 style="font-size: 1.5rem !important; font-weight: 800 !important; color: #1f2937 !important; margin-bottom: 0.5rem !important; letter-spacing: 0.05em !important; text-transform: uppercase !important;">LUSAKA SOUTH COLLEGE</h2>
                  <p style="font-size: 0.875rem !important; color: #4b5563 !important; font-weight: 600 !important;">Excellence in Education</p>
                </div>
              </div>
            </div>
            <!-- Welcome Message -->
            <div class="text-center mb-8">
              <h4 class="font-bold text-2xl text-gray-800 mb-2">Student Login</h4>
              <div class="text-gray-600 text-base">
                Please enter your credentials to login below.
              </div>
              @include('layouts.messages')
            </div>

            <!-- Login Form -->
            <form class="space-y-4" action='{{route('login.post')}}' method="POST">
            @csrf
            <div class="fromGroup">
              <label for="unique_id" class="block capitalize form-label">Student ID/Username</label>
              <div class="relative ">
                <input type="text" id="unique_id" name="unique_id" class="form-control py-2" placeholder="Application No. / Reg No. / Matric No." required>
              </div>
            </div>
            <div class="fromGroup">
              <label class="block capitalize form-label">Passwrod</label>
              <div class="relative "><input type="password" name="password" class="form-control py-2" placeholder="Password here..." required>
              </div>
            </div>
            <div class="flex justify-between">

              <div class="checkbox-area">
                <label class="inline-flex items-center cursor-pointer">
                  <input type="checkbox" class="hidden" name="checkbox">
                  <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                    <img src="{{asset('assets/images/icon/ck-white.svg')}}" alt="" class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                  <span class="text-slate-500 dark:text-slate-400 text-sm leading-6">Keep me signed in</span>
                </label>
              </div>
              <a class="text-sm text-slate-800 dark:text-slate-400 leading-6 font-medium" href="{{route('forgot_password.get')}}">Forgot Password?</a>
            </div>
            <button class="btn bg-gradient-to-r from-orange-500 to-green-600 hover:from-orange-600 hover:to-green-700 text-white font-semibold py-3 px-6 rounded-lg shadow-lg transform transition hover:scale-105 block w-full text-center">Login</button>
          </form>

          <!-- User Type Toggle Buttons -->
          <div class="mt-6">
            <div class="text-center text-gray-600 text-sm mb-3">Or login as:</div>
            <div class="flex gap-2">
              <a href="{{route('lecturer.get')}}" class="flex-1 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-black font-semibold py-2 px-3 rounded-lg shadow-lg transform transition hover:scale-105 text-center text-sm">
                <div class="flex items-center justify-center gap-1">
                  <svg class="w-4 h-4 text-black" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                  </svg>
                  <span class="text-black">Lecturer</span>
                </div>
              </a>
              <a href="{{route('lecturer.admin.get')}}" class="flex-1 bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-600 hover:to-purple-700 text-black font-semibold py-2 px-3 rounded-lg shadow-lg transform transition hover:scale-105 text-center text-sm">
                <div class="flex items-center justify-center gap-1">
                  <svg class="w-4 h-4 text-black" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"/>
                  </svg>
                  <span class="text-black">Admin</span>
                </div>
              </a>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
</body>


</html>