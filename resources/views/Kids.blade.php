<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add your kids</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('navebar')
 <div class="flex items-center justify-center py-16 px-6">

        <div class="bg-white/80 backdrop-blur-md shadow-xl rounded-2xl p-8 w-full max-w-md border border-gray-100">
      <form action="/Add_kid" method="POST" class="space-y-4">
                @csrf
        <h3 class="text-2xl font-bold text-center text-blue-700 mb-6">
                Add Your Kids
            </h3>

                <div>
                    <label class="block text-sm text-gray-600 mb-1">Name</label>
                    <input type="text" name="name"
                        class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>
                  <div>
                <select name="gender">
                    <option value="">gender</option>
                     <option value="male">Male</option>
                     <option value="female">Female</option>
                  </select>
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-1">Birthday</label>
                    <input type="date" name="birth_date"
                        class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm text-gray-600 mb-1">Tall (cm)</label>
                    <input type="number" name="height" step="0.01"
                        class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm text-gray-600 mb-1">weight (kg)</label>
                    <input type="number" name="weight" step="0.01"
                        class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>

                <div>
                      <select name="blood_type">
                      <option value="">Blood type</option>
                      <option value="A+">A+</option>
                      <option value="O+">O+</option>
                       <option value="B+">B+</option>
                      <option value="AB+">AB+</option>
                       <option value="A-">A-</option>
                      <option value="O-">O-</option>
                       <option value="B-">B-</option>
                      <option value="AB-">AB-</option>
                      </select>
                </div>

                <div>
                      <select name="has_special_case" >
                      <option value="">Is there a specific health condition?</option>
                      <option value="0">NO</option>
                      <option value="1">Yes</option>
                      </select>
                </div>
                <div>
                <label class="block text-sm text-gray-600 mb-1">Special case details</label>
                <textarea name="special_case_details" class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-400 focus:outline-none"></textarea>
               </div>
                <button type="submit"
                    class="w-full py-2 bg-green-600 text-white rounded-xl hover:bg-green-700 transition shadow-md">
                    Add your child
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