<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-orange-800 leading-tight">
            Allergenen - {{ $product->Naam }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="min-w-full">
                    <thead>
                        <tr class="bg-orange-100">
                            <th class="border border-gray-300 px-4 py-2">Naam Product</th>
                            <th class="border border-gray-300 px-4 py-2">Barcode</th>
                            <th class="border border-gray-300 px-4 py-2">Naam Allergeen</th>
                            <th class="border border-gray-300 px-4 py-2">Omschrijving</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4" class="border border-gray-300 px-4 py-2 font-bold">Product: {{ $product->Naam }} | Barcode: {{ $product->Barcode }}</td>
                        </tr>
                        @foreach($allergens as $a)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $a->AllergeenNaam }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $a->Omschrijving }}</td>
                            <td></td><td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                <a href="{{ route('magazijn.overview') }}" class="inline-block px-4 py-2 bg-green-500 text-white rounded">&larr; Terug</a>
            </div>
        </div>
    </div>
</x-app-layout>
