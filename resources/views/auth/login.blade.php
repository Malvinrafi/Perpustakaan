@extends('layouts.app')

@section('content')
<div class="min-h-[calc(100vh-8rem)] flex flex-col lg:flex-row justify-center items-center gap-8 transition-all duration-500">
    <!-- Left: Image Section -->
    <div class="w-full lg:w-1/2 px-4 transition-all duration-700 transform hover:scale-105 hidden lg:block">
        <div class="relative">
            <!-- Decorative background squares with animation -->
            <div class="absolute -top-4 -left-4 w-72 h-72 bg-blue-200 rounded-lg opacity-20 animate-pulse"></div>
            <div class="absolute -bottom-4 -right-4 w-72 h-72 bg-blue-300 rounded-lg opacity-20 animate-pulse delay-150"></div>
            
            <!-- Main image with hover effect -->
            <div class="relative rounded-xl overflow-hidden shadow-2xl transform transition-all duration-500 hover:-rotate-2">
                <img src="https://placehold.co/800x/667fff/ffffff.png?text=Welcome+Back&font=Montserrat" 
                     alt="Login Visual" 
                     class="w-full h-full object-cover transform transition-transform duration-500 hover:scale-105">
            </div>
        </div>
    </div>

    <!-- Right: Login Form -->
    <div class="w-full md:w-2/3 lg:w-1/2 p-6 sm:p-8 lg:p-12">
        <div class="max-w-md mx-auto bg-white rounded-2xl shadow-xl p-6 sm:p-8 transform transition-all duration-500 hover:shadow-2xl">
            <h1 class="text-3xl font-bold mb-6 text-center text-gray-800 transform transition-all duration-500 hover:scale-105">
                Welcome Back
            </h1> 

            <form action="#" method="POST" class="space-y-6">
                @csrf
                
                <!-- Username Input -->
                <div class="group">
                    <label for="username" class="block text-sm font-medium text-gray-700 mb-2 transition-colors duration-300 group-hover:text-blue-600">
                        Username
                    </label>
                    <input type="text" 
                           id="username" 
                           name="username" 
                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 hover:border-blue-400"
                           autocomplete="off">
                </div>

                <!-- Password Input -->
                <div class="group">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2 transition-colors duration-300 group-hover:text-blue-600">
                        Password
                    </label>
                    <input type="password" 
                           id="password" 
                           name="password" 
                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 hover:border-blue-400"
                           autocomplete="off">
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" 
                               id="remember" 
                               name="remember" 
                               class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500 transition-colors duration-300">
                        <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
                    </div>
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-800 transition-colors duration-300 hover:underline">
                        Forgot Password?
                    </a>
                </div>

                <!-- Login Button -->
                <button type="submit" 
                        class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg font-medium transform transition-all duration-300 hover:bg-blue-700 hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 active:scale-95">
                    Sign In
                </button>

                <!-- Sign Up Link -->
                <p class="text-center text-sm text-gray-600">
                    Don't have an account? 
                    <a href="#" class="text-blue-600 hover:text-blue-800 transition-colors duration-300 hover:underline">
                        Create one now
                    </a>
                </p>
            </form>
        </div>
    </div>
</div>
@endsection