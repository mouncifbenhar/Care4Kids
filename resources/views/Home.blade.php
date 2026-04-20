<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care4Kids</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen">

    <nav class="bg-white/80 backdrop-blur-md shadow-sm border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-6 py-3 flex items-center justify-between">

            <h1 class="text-xl font-bold text-blue-700">
                Care4Kids
            </h1>

            <div class="flex items-center gap-3">
                <a href="/login" class="px-4 py-1.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    Login
                </a>
                <a href="/register" class="px-4 py-1.5 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                    Register
                </a>
            </div>

        </div>
    </nav>

    <section class="py-16">
    <img src="https://i.pinimg.com/736x/eb/0a/cb/eb0acb34d3c13444984c5ae07a13e601.jpg"
         class="w-screen h-[400px] object-cover shadow-lg">
    </section>

    
    <section id="about" class="py-12 px-6 max-w-5xl mx-auto">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">
            Why Care4Kids?
        </h2>

        <div class="grid md:grid-cols-2 gap-6">

            <div class="bg-white p-6 rounded-2xl shadow">
                <h3 class="font-semibold text-blue-700 mb-2">Everything in one place</h3>
                <p class="text-gray-600 text-sm">
                    No more scattered papers or vaccination booklets. All your child’s medical history is always with you.
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow">
                <h3 class="font-semibold text-green-700 mb-2">Never miss a vaccine</h3>
                <p class="text-gray-600 text-sm">
                    The system automatically reminds you of upcoming appointments and vaccinations.
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow">
                <h3 class="font-semibold text-blue-700 mb-2">Track growth accurately</h3>
                <p class="text-gray-600 text-sm">
                    Track your child’s height and weight and monitor their development with clear charts.
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow">
                <h3 class="font-semibold text-green-700 mb-2">Full data security</h3>
                <p class="text-gray-600 text-sm">
                    Your child’s information is private and secure. Only you can access it.
                </p>
            </div>

        </div>
    </section>

 
    <section id="how" class="py-12 px-6 bg-white">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">
            How it works?
        </h2>

        <div class="max-w-3xl mx-auto space-y-6">

            <div class="flex items-start gap-4">
                <div class="bg-blue-600 text-white w-8 h-8 flex items-center justify-center rounded-full">1</div>
                <p class="text-gray-600">
                    Create an account: Sign up as a parent in seconds.
                </p>
            </div>

            <div class="flex items-start gap-4">
                <div class="bg-green-600 text-white w-8 h-8 flex items-center justify-center rounded-full">2</div>
                <p class="text-gray-600">
                    Add your child: Enter basic information for each child.
                </p>
            </div>

            <div class="flex items-start gap-4">
                <div class="bg-blue-600 text-white w-8 h-8 flex items-center justify-center rounded-full">3</div>
                <p class="text-gray-600">
                    Start tracking: Add your first vaccine or appointment and let Care4Kids handle the rest.
                </p>
            </div>

        </div>
    </section>

</body>
</html>