<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen">

  @include('navebar')

    <div class="flex items-center justify-center py-16 px-6">

        <div class="bg-white/80 backdrop-blur-md shadow-xl rounded-2xl p-8 w-full max-w-md border border-gray-100">

            <h3 class="text-2xl font-bold text-center text-blue-700 mb-6">
                Update Your Profile
            </h3>

            <form action="/update_profile" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-sm text-gray-600 mb-1">Name</label>
                    <input type="text" name="name"
                        class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm text-gray-600 mb-1">Password</label>
                    <input type="password" name="password"
                        class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>

                <button type="submit"
                    class="w-full py-2 bg-green-600 text-white rounded-xl hover:bg-green-700 transition shadow-md">
                    Update
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

                @if(session('success'))
                <div class="mt-4 bg-green-50 border border-green-200 text-green-600 p-3 rounded-xl text-sm">
                    <ul class="list-disc pl-4">
                            <li>{{session('success')}}</li>
                    </ul>
                </div>
                @endif
        </div>

    </div>

</body>
</html>