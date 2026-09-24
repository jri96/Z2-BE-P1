<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Levering Informatie - {{ $product->Naam }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <table class="min-w-full">
                        <thead>
                            <tr class="bg-blue-100">
                                <th class="border border-gray-300 px-4 py-2">Naam leverancier</th>
                                <th class="border border-gray-300 px-4 py-2">Contactpersoon</th>
                                <th class="border border-gray-300 px-4 py-2">Leveranciernummer</th>
                                <th class="border border-gray-300 px-4 py-2">Mobiel</th>
                                <th class="border border-gray-300 px-4 py-2">Datum levering</th>
                                <th class="border border-gray-300 px-4 py-2">Aantal</th>
                                <th class="border border-gray-300 px-4 py-2">Datum eerstvolgende levering</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($leveringen as $l)
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">{{ $l->LeverancierNaam }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $l->ContactPersoon }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $l->LeverancierNummer }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $l->Mobiel }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $l->DatumLevering }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $l->Aantal }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $l->DatumEerstVolgendeLevering ?? 'N/A' }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('magazijn.overview') }}" class="inline-block px-4 py-2 bg-green-500 text-white rounded">&larr; Terug</a>
            </div>
        </div>
    </div>
</x-app-layout>
