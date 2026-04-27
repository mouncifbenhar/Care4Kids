<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    @include('navebar')
<div class="max-w-6xl mx-auto py-10 px-6">

        <div class="bg-white/80 backdrop-blur-md shadow-xl rounded-2xl p-6 border border-gray-100">

    <h2 class="text-xl font-bold text-blue-700 text-center mb-4">
        Add Appointment
    </h2>

    <form action="/add_appointment/{{$child->id}}" method="POST" class="grid md:grid-cols-2 gap-4">
        @csrf

        <div>
            <label class="block text-sm text-gray-600 mb-1">Doctor Name</label>
            <input type="text" name="doctor_name" placeholder="Dr. Name"
                class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400 outline-none">
        </div>

        <div>
            <label class="block text-sm text-gray-600 mb-1">Specialty</label>
            <input type="text" name="specialty" placeholder="e.g. Pediatrician"
                class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400 outline-none">
        </div>

        <div>
            <label class="block text-sm text-gray-600 mb-1">Date & Time</label>
            <input type="datetime-local" name="appointment_date"
                class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400 outline-none">
        </div>

        <div>
            <label class="block text-sm text-gray-600 mb-1">Reason for visit</label>
            <input type="text" name="reason" placeholder="Routine checkup"
                class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400 outline-none">
        </div>

        <div class="md:col-span-2">
            <label class="block text-sm text-gray-600 mb-1">Clinic Location</label>
            <input type="text" name="location" placeholder="Address"
                class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400 outline-none">
        </div>

        <div class="md:col-span-2">
            <label class="block text-sm text-gray-600 mb-1">Extra Notes</label>
            <textarea name="notes" rows="2"
                class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400 outline-none"></textarea>
        </div>

        <button type="submit" class="md:col-span-2 py-3 bg-green-600 text-white rounded-xl hover:bg-green-700 transition font-semibold">
            Schedule Appointment 
        </button>

    </form>

    @if(session('success_appointment'))
        <div class="mt-4 bg-green-50 border border-green-200 text-green-600 p-3 rounded-xl text-sm">
            {{ session('success_appointment') }}
        </div>
    @endif

    @if($errors->any())
        <div class="md:col-span-2 bg-white/80 backdrop-blur-md shadow-xl rounded-2xl p-6 border border-gray-100">
        
            <div class="mt-4 bg-red-50 border border-red-200 text-red-600 p-3 rounded-xl text-sm">
                <ul class="list-disc pl-4">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
         
        </div>
    @endif

</div>
</div>
</body>
</html>