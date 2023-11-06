<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body>
    <!-- Hero -->
    <div class="relative overflow-hidden">
        <div class="mx-auto max-w-screen-md py-12 px-4 sm:px-6 md:max-w-screen-xl md:py-20 lg:py-32 md:px-8">
        <div class="md:pr-8 md:w-1/2 xl:pr-0 xl:w-5/12">
            <!-- Title -->
            <h1 class="text-3xl text-gray-800 font-bold md:text-4xl md:leading-tight lg:text-5xl lg:leading-tight dark:text-gray-200">
            Solving problems for every <span class="text-blue-600 dark:text-blue-500">team</span>
            </h1>
            <p class="mt-3 text-base text-gray-500">
            Built on standard web technology, teams use Preline to build beautiful cross-platform hybrid apps in a fraction of the time.
            </p>
            <!-- End Title -->


            <!-- Form -->
            <form action="{{ route('register-proses') }}" method="post">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @csrf
                <div class="mt-10">
                    <div class="mb-4 border border-gray-400 rounded-md">
                        <label for="hs-hero-name-2" class="block text-sm font-medium dark:text-white"><span class="sr-only">Full name</span></label>
                        <input value="{{ old('name') }}" name="name" type="text" id="hs-hero-name-2" class="py-3 px-4 block w-full border-gray-500 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 sm:p-4 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 " placeholder="Full name">
                    </div>

                    <div class="mb-4 border border-gray-400 rounded-md">
                        <label for="hs-hero-email-2" class="block text-sm font-medium dark:text-white"><span class="sr-only">Email address</span></label>
                        <input value="{{ old('email') }}" name="email" type="email" id="hs-hero-email-2" class="py-3 px-4 block w-full border-gray-500 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 sm:p-4 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="Email address">
                    </div>

                    <div class="mb-4 border border-gray-400 rounded-md">
                        <label for="hs-hero-password-2" class="block text-sm font-medium dark:text-white"><span class="sr-only">Password</span></label>
                        <input name="password" type="password" id="hs-hero-password-2" class="py-3 px-4 block w-full border-gray-500 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 sm:p-4 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 " placeholder="Password">
                    </div>

                    <div class="grid">
                        <button  type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800 sm:p-4">Sign up</button>
                    </div>
                </div>
            </form>
            <!-- End Form -->
            <p class="mt-10 text-center text-sm text-gray-500">
                Sudah punya akun ?
                <a href="{{ route('login') }}" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">LOGIN SEKARANG</a>
              </p>
        </div>
        </div>

        <div class="hidden md:block md:absolute md:top-0 md:left-1/2 md:right-0 h-full bg-[url('https://images.unsplash.com/photo-1606868306217-dbf5046868d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1981&q=80')] bg-no-repeat bg-center bg-cover"></div>
        <!-- End Col -->
    </div>

    <!-- End Hero -->
    </body>
</html>
