<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use App\Models\CountryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    public function country()
    {
        return response()->json(CountryModel::get(), 200);
    }

    public function countryById($id)
    {
        $country = CountryModel::find($id);
        if (is_null($country)) {
            return response()->json(['error' => true, 'message' => 'Not found'], 404);
        }
        return response()->json(CountryModel::find($id), 200);
    }

    public function countrySave(Request $request)
    {
        //dd('sadad');
        //return response()->json($request, 201);
        //$country = CountryModel::$request->all()->save();

        $country = DB::table('country_lang')
            ->insert([
                'alias' => $request->alias,
                'name' => $request->name,
                'name_en' => $request->name_en
            ]);
        return response()->json($country, 201);
    }

    public function countryEdit(Request $request, CountryModel $country)
    {

        $count = DB::table('country_lang')
            ->update([
                'alias' => $request->alias,
                'name' => $request->name,
                'name_en' => $request->name_en
            ]);

        return response()->json($country, 200);
    }
}
