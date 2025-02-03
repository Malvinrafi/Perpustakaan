<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel App' }}</title>

    @vite('resources/css/app.css')
    
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 font-sans">
    <div class="min-h-screen flex flex-col">
        <!-- Navbar with animation -->
        <header class="bg-white shadow-md backdrop-blur-sm bg-white/80 sticky top-0 z-50 transition-all duration-300">
            <div class="container mx-auto px-4 py-4 flex justify-between items-center">
                <a href="/" class="text-xl font-bold text-gray-800 hover:text-blue-600 transition-all duration-300 transform hover:scale-105">
                    MyApp
                </a>
                <nav class="flex gap-4">
                    @auth
                        <a href="/dashboard" class="text-gray-600 hover:text-blue-600 transition-colors duration-300">Dashboard</a>
                        <form action="/logout" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="text-gray-600 hover:text-blue-600 transition-colors duration-300">
                                Logout
                            </button>
                        </form>
                    @else
                        <a href="/login" class="text-gray-600 hover:text-blue-600 transition-colors duration-300">Login</a>
                        <a href="/register" class="text-gray-600 hover:text-blue-600 transition-colors duration-300">Register</a>
                    @endauth
                </nav>
            </div>
        </header>

        <!-- Content -->
        <main class="flex-grow container mx-auto px-4 py-8">
            @yield('content')
        </main>

        <!-- Footer with animation -->
        <footer class="bg-gray-800 text-white py-6">
            <div class="container mx-auto text-center transform hover:scale-105 transition-transform duration-300">
                &copy; {{ date('Y') }} MyApp. All rights reserved.
            </div>
        </footer>
    </div>
</body>
</html>