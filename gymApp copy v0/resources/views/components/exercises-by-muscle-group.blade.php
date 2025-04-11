<div class="mt-8">
    @php
        $exercisesByGroup = \App\Models\Exercise::getExercisesByMuscleGroup(request('user_id'));
        $users = \App\Models\User::select('id', 'email')->get();
        $selectedUser = request('user_id') ? \App\Models\User::find(request('user_id')) : null;
    @endphp
    @auth
        @if(auth()->user()->is_admin)
            <form method="get" action="{{ route('exercises.index') }}" id="select-user-exercise-form">
                <div class="mb-4">
                    <label for="user_id" class="block text-sm font-medium text-gray-700 mb-1">View exercises as:</label>
                    <select id="user_id" name="user_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 bg-white shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" onchange="this.form.submit()">
                        <option value="">All exercises (admin view)</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ request('user_id') == $user->id ? 'selected' : '' }}>
                                {{ $user->email }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </form>
            @if($selectedUser)
                <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 mb-4" role="alert">
                    <p>Currently viewing exercises as <strong>{{ $selectedUser->email }}</strong></p>
                </div>
            @endif
            <x-divider />
        @endif

    @endauth
    <h2 class="text-lg font-semibold mb-4">Exercises by Muscle Group</h2>

    @auth
        <div>
            <a href="{{ route('exercises.create') }}" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 mb-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Add New Exercise
            </a>
        </div>
    @endauth
    <div class="space-y-6">
        @foreach($exercisesByGroup as $muscleGroup => $exercises)
            <div>
                <h3 class="text-md font-medium text-gray-500 mb-2">{{ $muscleGroup }}</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($exercises as $exercise)
                        @if(!$exercise['user_id'] || auth()->check() && (auth()->user()->id == $exercise['user_id'] || auth()->user()->is_admin))
                            <a href="/exercises/{{ $exercise['id'] }}/edit">
                                @if(!$exercise['user_id'])
                                    <div class="border border-gray-200 rounded-md p-3 bg-white/5 text-red-500">
                                        <p class="font-medium">{{ $exercise['name'] }}</p>
                                    </div>
                                @else
                                    <div class="border border-gray-200 rounded-md p-3 text-cyan-700">
                                        <p class="font-medium">{{ $exercise['name'] }}</p>
                                    </div>
                                @endif
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
