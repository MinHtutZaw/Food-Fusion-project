<x-layout>
    @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded text-center" role="alert">
        @auth
        Welcome {{ auth()->user()->firstname }}!
        @else
        {{ session('success') }}
        @endauth
    </div>
    @endif
    <x-hero />
    

</x-layout>