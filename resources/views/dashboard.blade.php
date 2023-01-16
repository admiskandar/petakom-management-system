<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            <br>
            <br>


            @if(Auth::user()->user_type == "Coordinator")
            <div class="card">
                <button type="button" class="btn btn-gradient-primary"><a href="{{route('activity.ActivityInterface')}}">Activity</a></button>
                <button type="button" class="btn btn-gradient-primary"><a href="{{route('calendar.CalendarHomePage')}}">Calendar</a></button>
               <button type="button" class="btn btn-gradient-primary"><a href="{{route('election.index')}}">Election</a></button>


                <button type="button" class="btn btn-gradient-primary"><a href="{{route('bulletin.index')}}">Bulletin</a></button> 
            </div>
            @else
            <div class="card">
                <button type="button" class="btn btn-gradient-primary"><a href="{{route('election.index')}}">Election</a></button>



                <button type="button" class="btn btn-gradient-primary"><a href="{{route('bulletin.index')}}">Bulletin</a></button>
            </div>
            @endif

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>