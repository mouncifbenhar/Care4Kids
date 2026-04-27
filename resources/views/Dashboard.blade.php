<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
<body class=" from-blue-50 via-white to-green-50 min-h-screen">
@include('navebar')

<div class="max-w-6xl mx-auto py-10 px-6">

    <h2 class="text-3xl font-bold text-blue-700 mb-8 text-center">
        Your Kids Dashboard
    </h2>

   
    <div class="grid md:grid-cols-3 gap-6 mb-10 text-center">

        <div class="bg-white shadow rounded-2xl p-5 hover:shadow-lg transition">
            <p class="text-sm text-gray-400">Kids</p>
            <p class="text-3xl font-bold text-blue-600">{{$kid_count}}</p>
        </div>

        <div class="bg-white shadow rounded-2xl p-5 hover:shadow-lg transition">
            <p class="text-sm text-gray-400">Medications</p>
            <p class="text-3xl font-bold text-green-600">{{$med_count}}</p>
        </div>

        <div class="bg-white shadow rounded-2xl p-5 hover:shadow-lg transition">
            <p class="text-sm text-gray-400">Appointments</p>
            <p class="text-3xl font-bold text-purple-600">{{$app_count}}</p>
        </div>

    </div>

   
    <div class="grid md:grid-cols-2 gap-6">

        @forelse ($kids as $kid)

        <div class="bg-white/80 backdrop-blur-md p-6 rounded-2xl shadow border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition duration-300">

            <h3 class="text-xl font-semibold text-blue-700 mb-1">
                {{$kid->name}}
            </h3>

            <p class="text-gray-500 text-sm">
                {{$kid->birth_date->format('Y-m-d')}}
            </p>

            <span class="inline-block mt-2 px-3 py-1 bg-blue-100 text-blue-600 text-xs rounded-full">
                {{$kid->gender}}
            </span>

        
            <div class="flex flex-wrap gap-2 mt-5">

                <a href="/Medical_Folder/{{$kid->id}}"
                   class="px-4 py-1.5 bg-green-600 text-white text-sm rounded-lg hover:bg-green-700 transition">
                    Medical Folder
                </a>

                <a href="/Appointments/{{$kid->id}}"
                   class="px-4 py-1.5 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700 transition">
                    Appointments
                </a>

                <a href="/kids_Record/{{$kid->id}}"
                   class="px-4 py-1.5 text-gray-600 text-sm rounded-lg hover:text-blue-600">
                    View →
                </a>

            </div>

        </div>

        @empty

        <div class="col-span-2 text-center py-10">

            <p class="text-gray-500 mb-4">
                You don’t have any kids yet
            </p>

            <a href="/kids"
               class="inline-block px-6 py-2 bg-green-600 text-white rounded-xl hover:bg-green-700 transition shadow">
               Add your first kid
            </a>

        </div>

        @endforelse

    </div>
<div class="mt-10 space-y-4">

    @forelse(auth()->user()->unreadNotifications as $notification)

    <div class="bg-white shadow rounded-xl p-4 border-l-4 border-blue-500 hover:shadow-md transition">

        <div class="flex justify-between items-start">

            <div>
                <p class="font-semibold text-blue-700">
                    {{ $notification->data['title'] }}
                </p>

                <p class="text-gray-600 text-sm mt-1">
                    {{ $notification->data['message'] }}
                </p>
            </div>

            
            <a href="/markeRead"
               class="ml-4 text-xs px-3 py-1 bg-green-100 text-green-700 rounded-full hover:bg-green-200 transition">
                Read
            </a>

        </div>

    </div>

    @empty

    <div class="text-center text-gray-400">
        No new notifications
    </div>

    @endforelse

</div>

</div>

</body>
</html>