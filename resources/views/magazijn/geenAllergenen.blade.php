<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            Geen Allergenen - {{ $product->Naam }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-bold text-green-700">Overzicht Allergenen - {{ $product->Naam }}</h3>
                    <p class="mt-2">In dit product zitten geen stoffen die een allergische reactie kunnen veroorzaken.</p>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('magazijn.overview') }}" class="inline-block px-4 py-2 bg-green-500 text-white rounded">&larr; Terug</a>
                <script>setTimeout(function{ window.location.href = '{{ route('magazijn.overview') }}'; }, 4000);</script>
            </div>
        </div>
    </div>
</x-app-layout>
