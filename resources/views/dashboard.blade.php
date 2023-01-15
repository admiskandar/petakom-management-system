<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            <br>
            <br>
            
            <button type="button" class="btn btn-gradient-primary"><a href="{{route('profile')}}">Profile</a></button>
            <button type="button" class="btn btn-gradient-primary"><a href="{{route('registration')}}">Registration</a></button>
            <button type="button" class="btn btn-gradient-primary"><a href="{{route('activity')}}">Activity</a></button>
            <button type="button" class="btn btn-gradient-primary"><a href="{{route('calendar')}}">Calendar</a></button>
            <button type="button" class="btn btn-gradient-primary"><a href="{{route('election.index')}}">Election</a></button>
            <button type="button" class="btn btn-gradient-primary"><a href="{{route('report')}}">Report</a></button>
            <button type="button" class="btn btn-gradient-primary"><a href="{{route('bulletin')}}">Bulletin</a></button>
            
            
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
