<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medical Record</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
     @include('navebar')
<div class="max-w-6xl mx-auto py-10 px-6">
   

    <h2 class="text-2xl font-bold text-blue-700 mb-10 text-center">
        Your Kid: {{$child->name}}
    </h2>

    <div class="grid md:grid-cols-2 gap-8">

        <div class="bg-white/80 backdrop-blur-md shadow-xl rounded-2xl p-6 border border-gray-100">
            <h2 class="text-xl font-bold text-blue-700 text-center mb-4">
                Add Medical Record
            </h2>

            <form action="/Save_Record/{{$child->id}}" method="POST" class="space-y-3">
                @csrf

                <input type="number" step="0.1" name="weight" placeholder="Weight (kg)"
                    class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400">

                <input type="number" step="0.1" name="height" placeholder="Height (cm)"
                    class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400">

                <input type="text" name="diagnosis" placeholder="Diagnosis"
                    class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400">

                <textarea name="notes" placeholder="Notes"
                    class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400"></textarea>

                <button class="w-full py-2 bg-green-600 text-white rounded-xl hover:bg-green-700">
                    Save
                </button>
            </form>
                @if(session('success'))
                <div class="mt-4 bg-green-50 border border-green-200 text-green-600 p-3 rounded-xl text-sm">
                    <ul class="list-disc pl-4">
                            <li>{{session('success')}}</li>
                    </ul>
                </div>
                @endif
        </div>
        <div class="bg-white/80 backdrop-blur-md shadow-xl rounded-2xl p-6 border border-gray-100">
            <h2 class="text-xl font-bold text-blue-700 text-center mb-4">
                Vaccines
            </h2>

            <form action="/take_vaccine/{{$child->id}}" method="POST" class="space-y-3">
                @csrf

                @if($validVaccines->isEmpty())
                    <p class="text-green-600 text-center">All vaccines completed </p>
                @else
                    <select name="vaccine_id"
                        class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400">
                        <option disabled selected>Select vaccine</option>

                        @foreach($validVaccines as $vaccine)
                            <option value="{{$vaccine->id}}">
                                {{$vaccine->name}}
                            </option>
                        @endforeach
                    </select>

                    <button class="w-full py-2 bg-green-600 text-white rounded-xl hover:bg-green-700">
                        Take Vaccine
                    </button>
                @endif
            </form>
            @if(session('success_vaccine'))
            <div class="mt-4 bg-green-50 border border-green-200 text-green-600 p-3 rounded-xl text-sm">
                                <ul class="list-disc pl-4">
                                        <li>{{session('success_vaccine')}}</li>
                                </ul>
            </div>
            @endif
            @if(session('error_vaccine'))
                <div class="mt-4 bg-red-50 border border-red-200 text-red-600 p-3 rounded-xl text-sm">
                    <ul class="list-disc pl-4">
                            <li>{{session('error_vaccine')}}</li>
                    </ul>
                </div>
                @endif
        </div>
         
        <div class="md:col-span-2 bg-white/80 backdrop-blur-md shadow-xl rounded-2xl p-6 border border-gray-100">

    <h2 class="text-xl font-bold text-blue-700 text-center mb-4">
        Add Medication
    </h2>

   <form action="/add_medication/{{$child->id}}" method="POST" class="grid md:grid-cols-2 gap-4">
    @csrf

    <div>
        <label class="block text-sm text-gray-600 mb-1">Medication Name</label>
        <input type="text" name="name"
            class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400">
    </div>

    <div>
        <label class="block text-sm text-gray-600 mb-1">Dosage</label>
        <input type="text" name="dosage"
            class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400">
    </div>

    <div>
        <label class="block text-sm text-gray-600 mb-1">First Dose Time </label>
        <input type="time" name="first_dose_time"
            class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400">
    </div>

    <div>
        <label class="block text-sm text-gray-600 mb-1">Interval Hours</label>
        <select name="interval_hours"
            class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400">
            <option value="4">Every 4 hours (6 times a day)</option>
            <option value="6">Every 6 hours (4 times a day)</option>
            <option value="8" selected>Every 8 hours (3 times a day)</option>
            <option value="12">Every 12 hours (2 times a day)</option>
            <option value="24">Once a day</option>
        </select>
    </div>

    <div>
        <label class="block text-sm text-gray-600 mb-1">Start Date</label>
        <input type="date" name="start_date"
            class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400">
    </div>

    <div>
        <label class="block text-sm text-gray-600 mb-1">End Date</label>
        <input type="date" name="end_date"
            class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400">
    </div>

    <div>
        <label class="block text-sm text-gray-600 mb-1">Frequency (Instructions)</label>
        <input type="text" name="frequency" placeholder="e.g. Before eating"
            class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400">
    </div>

    <div>
        <label class="block text-sm text-gray-600 mb-1">Notes</label>
        <textarea name="notes" rows="1"
            class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400"></textarea>
    </div>

    <button type="submit" class="md:col-span-2 py-3 bg-green-600 text-white rounded-xl hover:bg-green-700 transition">
        Save Medication
    </button>

</form>
       @if(session('success_medication'))
            <div class="mt-4 bg-green-50 border border-green-200 text-green-600 p-3 rounded-xl text-sm">
                {{ session('success_medication') }}
            </div>
        @endif
    </div>
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