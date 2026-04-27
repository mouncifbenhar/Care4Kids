<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Record</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('navebar')
<div class="w-full py-10 px-6 space-y-10">

    <div class="bg-white/80 backdrop-blur-md shadow-xl rounded-2xl p-8 border border-gray-100">

        <h2 class="text-3xl font-bold text-blue-700 mb-6">
            Kid Information
        </h2>

        <div class="grid md:grid-cols-4 gap-6 text-gray-700">

            <div>
                <p class="text-sm text-gray-400">Name</p>
                <p class="font-semibold">{{$child->name}}</p>
            </div>

            <div>
                <p class="text-sm text-gray-400">Gender</p>
                <p class="font-semibold">{{$child->gender}}</p>
            </div>

            <div>
                <p class="text-sm text-gray-400">Birth Date</p>
                <p class="font-semibold">{{$child->birth_date->format('Y-m-d')}}</p>
            </div>

            <div>
                <p class="text-sm text-gray-400">Blood Type</p>
                <p class="font-semibold text-red-500">{{$child->blood_type}}</p>
            </div>

        </div>
    </div>

    <div class="grid md:grid-cols-3 gap-6 text-center">

        <div class="bg-blue-100 text-blue-700 p-4 rounded-xl">
            <p class="text-sm">Vaccines</p>
            <p class="text-2xl font-bold">{{$vcc_count}}</p>
        </div>

        <div class="bg-green-100 text-green-700 p-4 rounded-xl">
            <p class="text-sm">Medications</p>
            <p class="text-2xl font-bold">{{$med_count}}</p>
        </div>

        <div class="bg-purple-100 text-purple-700 p-4 rounded-xl">
            <p class="text-sm">Appointments</p>
            <p class="text-2xl font-bold">{{$app_count}}</p>
        </div>

    </div>

    <div>
        <h3 class="text-xl font-bold text-blue-700 mb-4">Vaccines</h3>

        <div class="grid md:grid-cols-2 gap-4">
        @forelse ($vaccines as $vaccine)
            <div class="bg-white p-4 rounded-xl shadow border">
                <p class="font-semibold">{{$vaccine->name}}</p>
            </div>
        @empty
            <p class="text-gray-400">No vaccines yet</p>
        @endforelse
        </div>
    </div>

    <div>
        <h3 class="text-xl font-bold text-green-700 mb-4">Medications</h3>

        <div class="grid md:grid-cols-2 gap-4">
        @forelse ($medications as $medication)
            <div class="bg-white p-4 rounded-xl shadow border">

                <p class="font-semibold text-blue-700">{{$medication->name}}</p>

                <p class="text-sm text-gray-500">
                    {{$medication->dosage}} - {{$medication->frequency}}
                </p>

                <p class="text-xs text-gray-400">
                    {{$medication->start_date}} → {{$medication->end_date}}
                </p>

            </div>
        @empty
            <p class="text-gray-400">No medication</p>
        @endforelse
        </div>
    </div>

    <div>
        <h3 class="text-xl font-bold text-purple-700 mb-4">Appointments</h3>

        <div class="grid md:grid-cols-2 gap-4">
        @forelse ($appointments as $appointment)
            <div class="bg-white p-4 rounded-xl shadow border">

                <p class="font-semibold text-blue-700">
                    {{$appointment->doctor_name}}
                </p>

                <p class="text-sm text-gray-500">
                    {{$appointment->specialty}}
                </p>

                <p class="text-sm text-gray-500">
                    {{$appointment->appointment_date}}
                </p>

                <p class="text-sm text-gray-500">
                    {{$appointment->location}}
                </p>

                <p class="text-sm text-gray-600 mt-2">
                    {{$appointment->reason}}
                </p>

            </div>
        @empty
            <p class="text-gray-400">No appointment</p>
        @endforelse
        </div>
    </div>
    <form action="/delete_kid/{{$child->id}}" method="POST" onsubmit="return confirm('are you sore that you well delete your kid and his data')">
        @csrf
        @method("DELETE")
        <button type="submit" 
        class="px-4 py-1.5 bg-red-600 text-white text-sm rounded-lg hover:bg-red-700 transition">Delete your kid</button>
    
    </form>
</div>
</body>
</html>