<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Overzicht Magazijn Jamin
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="min-w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-300 px-4 py-2">Id</th>
                            <th class="border border-gray-300 px-4 py-2">Naam</th>
                            <th class="border border-gray-300 px-4 py-2">Barcode</th>
                            <th class="border border-gray-300 px-4 py-2">Aantal Aanwezig</th>
                            <th class="border border-gray-300 px-4 py-2">Leverantie Info</th>
                            <th class="border border-gray-300 px-4 py-2">Allergenen Info</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $product->Id }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $product->Naam }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $product->Barcode }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $product->magazijn->AantalAanwezig ?? 'N/A' }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ route('magazijn.levering', $product->Id) }}" title="Leveringsinformatie">&#128161;</a>
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ route('magazijn.allergenen', $product->Id) }}" title="Allergeeninformatie">&#10060;</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
