<x-app-layout>

<div class="card-body">
        <h1 class="display-5 font-weight-normal">Manage Petakom Activities</h1>                          
    </div>
    @if(Auth::user()->user_type != "Student")
    <center><a class="btn btn-gradient-primary btn-lg" href="{{route('activity.AddActivityInterface')}}" role="button">ADD ACTIVITY</a></center> <br>
    @endif
    <center><a class="btn btn-gradient-primary btn-lg" href="{{route('activity.ViewActivityInterface')}}" role="button">VIEW ACTIVITY</a></center>

    
</x-app-layout>