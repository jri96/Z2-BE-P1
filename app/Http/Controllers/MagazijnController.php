<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Magazijn;
use App\Models\ProductPerLeverancier;
use App\Models\ProductPerAllergeen;
use App\Models\Allergeen;
use Illuminate\Http\Request;

class MagazijnController extends Controller
{
    public function overview()
    {
        $products = Product::with('magazijn')->orderBy('Barcode', 'asc')->get();
        return view('magazijn.overview', ['products' => $products]);
    }

    public function leveringInfo($id)
    {
        $product = Product::findOrFail($id);
        $magazijn = Magazijn::where('ProductId', $id)->first();
        $leveringen = ProductPerLeverancier::where('ProductId', $id)
            ->join('Leverancier', 'ProductPerLeverancier.LeverancierId', '=', 'Leverancier.Id')
            ->select('ProductPerLeverancier.*', 'Leverancier.Naam as LeverancierNaam', 'Leverancier.ContactPersoon', 'Leverancier.LeverancierNummer', 'Leverancier.Mobiel')
            ->orderBy('DatumLevering', 'asc')
            ->get();
        $firstNextDelivery = ProductPerLeverancier::where('ProductId', $id)
            ->whereNotNull('DatumEerstVolgendeLevering')
            ->orderBy('DatumEerstVolgendeLevering', 'asc')
            ->first();

        if ($magazijn && ($magazijn->AantalAanwezig == null || $magazijn->AantalAanwezig == 0)) {
            return view('magazijn.geenVoorraad', ['product' => $product, 'firstNextDelivery' => $firstNextDelivery]);
        }
        return view('magazijn.leveringInfo', ['product' => $product, 'leveringen' => $leveringen, 'firstNextDelivery' => $firstNextDelivery]);
    }

    public function allergenenInfo($id)
    {
        $product = Product::findOrFail($id);
        $hasAllergens = ProductPerAllergeen::where('ProductId', $id)->count() > 0;

        if ($hasAllergens) {
            $allergens = ProductPerAllergeen::where('ProductId', $id)
                ->join('Allergeen', 'ProductPerAllergeen.AllergeenId', '=', 'Allergeen.Id')
                ->select('Allergeen.Naam as AllergeenNaam', 'Allergeen.Omschrijving')
                ->orderBy('Allergeen.Naam', 'asc')
                ->get();
            return view('magazijn.allergenen', ['product' => $product, 'allergens' => $allergens]);
        }
        return view('magazijn.geenAllergenen', ['product' => $product]);
    }
}
