<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center from-blue-50 via-white to-green-50">

    <div class="bg-white/80 backdrop-blur-md shadow-xl p-8 rounded-2xl w-full max-w-md border border-gray-100">

        <h1 class="text-3xl font-bold text-blue-700 text-center mb-6">
            Welcome Back
        </h1>

        <form action="/login" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm text-gray-600 mb-1">Email</label>
                <input type="email" name="email"
                    class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block text-sm text-gray-600 mb-1">Password</label>
                <input type="password" name="password"
                    class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <button type="submit"
                class="w-full py-2 rounded-xl bg-blue-600 text-white font-medium hover:bg-blue-700 transition duration-300 shadow-md">
                Login
            </button>
        </form>

        @if($errors->any())
            <div class="mt-4 bg-red-50 border border-red-200 text-red-600 p-3 rounded-xl text-sm">
                <ul class="list-disc pl-4">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mt-6 text-center text-sm">
            <a href="/" class="text-gray-500 hover:underline">Home</a>
            <span class="mx-2">|</span>
            <a href="/register" class="text-green-600 hover:underline">Register</a>
        </div>

    </div>

</body>
</html>