<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Location\Coordinate;
use Location\Distance\Vincenty;

class CalculateDistance extends Controller
{
    public function calculate(Request $request)
    {
        $coordinate_curr = new Coordinate($request->geo_lat, $request->geo_lon);
        $coordinate_pur = new Coordinate(55.662882, 37.485601);

        //echo $coordinate_curr->getDistance($coordinate_pur, new Vincenty());
        $result = round(($coordinate_curr->getDistance($coordinate_pur, new Vincenty()))/1000, 1);
        return redirect()->route('main')->with('success', 'Расстояние от ' . $request->address .
            ' до Москва, Проспект Вернадского, 105: ' . $result . 'км.');
    }
}
