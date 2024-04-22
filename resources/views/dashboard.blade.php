<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <a href="{{ route('buy-ticket') }}">{{ __('KUP BILET') }}</a>        </h2>
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          <a href="{{ route('index') }}">{{ __('Strona głowna') }}</a>        </h2>
          @if(Auth::check() && Auth::user()->role == 'admin')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <a href="{{ route('admin') }}">{{ __('PANEL ADMINA') }}</a>
    </h2>
@endif

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                @if(Auth::check() && auth()->user()->tickets->count() > 0)
    @foreach(auth()->user()->tickets as $ticket)
        <div class="p-6 text-gray-900">
            {{ __("Informacje o twoim karnecie :") }}
            <p>{{ __("Grupa Taneczna: ") . $ticket->dance_group }}</p>
            <p>{{ __("Karnet kończy się: ") . $ticket->expiry_date }}</p>
        </div>
    @endforeach
@else
    <div class="p-6 text-gray-900">
        {{ __("Nie masz karnetu .") }}
    </div>
@endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
