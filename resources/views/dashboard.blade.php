   @if(session('preventBack'))
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
@endif
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark-mode:text-gray-200 leading-tight">
            {{ __('HomePage') }}
           <a href="{{url('/pending')}}">Requests</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark-mode:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark-mode:text-gray-100">
                   Welcome Customer
                   <a href="{{url('/schedule')}}">schedule</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
