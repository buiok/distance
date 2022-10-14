<?php

namespace App\Http\Controllers;

use App\Http\Requests\Distance;
use Illuminate\Http\Request;
use Location\Coordinate;
use Location\Distance\Vincenty;

class CalculateDistance extends Controller
{
    public function Calculate(Distance $request): \Illuminate\Http\RedirectResponse
    {
        $coordinate_curr = new Coordinate($request->geo_lat1, $request->geo_lon1);
        $coordinate_pur = new Coordinate($request->geo_lat2, $request->geo_lon2);
        $result = round(($coordinate_curr->getDistance($coordinate_pur, new Vincenty()))/1000, 1);

        return redirect()->route('main')->with('add1', $request->address1)->with('add2', $request->address2)
            ->with('res', $result);
    }
}
