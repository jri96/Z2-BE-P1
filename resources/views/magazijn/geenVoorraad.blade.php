<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-800 leading-tight">
            Geen Voorraad - {{ $product->Naam }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-bold text-red-700">Levering Informatie - {{ $product->Naam }}</h3>
                    <p class="mt-2">Er is van dit product op dit moment geen voorraad aanwezig.</p>
                    <p class="mt-2">De verwachte eerstvolgende levering is: {{ \Carbon\Carbon::parse($firstNextDelivery->DatumEerstVolgendeLevering)->format('d-m-Y') }}</p>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('magazijn.overview') }}" class="inline-block px-4 py-2 bg-green-500 text-white rounded">&larr; Terug</a>
                <script>setTimeout(function{ window.location.href = '{{ route('magazijn.overview') }}'; }, 4000);</script>
            </div>
        </div>
    </div>
</x-app-layout>
