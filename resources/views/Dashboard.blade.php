<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
     <nav class="bg-white/80 backdrop-blur-md shadow-sm border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-6 py-3 flex items-center justify-between">

            <h1 class="text-xl font-bold text-blue-700">
                Care4Kids
            </h1>

              <div class="hidden md:flex items-center gap-6 text-sm">
                <a href="/profile" class="text-gray-600 hover:text-blue-600">Profile</a>    
            </div>

            <div class="flex items-center gap-3">
               <form action="/logout" method="POST">
               @csrf
              <button type="submit" class="px-4 py-1.5 bg-blue-600 text-white rounded-lg">Logout</button>
              </form>
            </div>

        </div>
    </nav>
   
</body>
</html>