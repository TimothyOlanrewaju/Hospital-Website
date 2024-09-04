<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="images/fmc_logo.jpg">
  @vite('resources/css/app.css')
    <title>LOGIN</title>
</head>
<body>
    
<div class="flex justify-center items-center mx-auto w-1/2 lg:w-1/4 p-1 mt-12 bg-white border border-green-300 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
       
    @if (session('status'))
                    {{ session('status') }}
                    @endif
                    <form method="POST" action="{{ route('login') }}" class="space-y-6">
                        @csrf
                        <div class="flex justify-center items-center">
                            <img src="images/fmc_logo.jpg" class="mr-3" alt="" />
                        </div>
                        <h5 class="text-xl font-bold text-center text-gray-900 dark:text-white">SIGN IN</h5>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter your email" required />
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
        </div>
        @if (Route::has('password.request'))
            <a href="#" class="ms-auto text-sm text-blue-700 hover:underline dark:text-blue-500 pt-2">{{ __('Forgot your password?') }}</a>
        @endif
        <button type="submit" class="w-full text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('Log in') }}</button>
        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
            Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
        </div>
    </form>
</div>

</body>
</html>