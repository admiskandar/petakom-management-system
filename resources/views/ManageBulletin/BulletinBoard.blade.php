<x-app-layout>
    <h2>Bulletin Board</h2>
    <div>
        <input type="text" name="search">
        <button class="btn btn-gradient-primary">Search</button>
        <button class="btn btn-gradient-primary">Filter</button>
        <button class="btn btn-gradient-primary">Sort</button>
        <button class="btn btn-gradient-primary"><a href="{{ route('bulletin.create') }}">New</a></button>
    </div>
    <div>
        <img src="" alt="">
        <h3>Title</h3>
        <h4>Date</h4>
        <p>Brief Description</p>
        {{-- <button class="btn btn-gradient-primary"><a href="{{ route('bulletin.show', $bulletin->id) }}">View More</a></button> --}}
    </div>
</x-app-layout>
