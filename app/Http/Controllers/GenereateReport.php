<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citizen;
use App\Models\Ward;
use App\Models\Lga;
use App\Models\State;

class GenereateReport extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        // count all the models data
        $countryCount = Citizen::all()->count();
        $stateCount = State::all()->count();
        $wardsCount = Ward::all()->count();
        $lgaCount = Lga::all()->count();


        $lgas = Lga::with('citizens')->get();
        $wards = Ward::with('citizens')->get();
        $states = State::with('citizens')->get();

        return view('generate')->with('states', $states)
            ->with('lgas', $lgas)
            ->with('wards', $wards)
            ->with('countryCount', $countryCount)
            ->with('stateCount', $stateCount)
            ->with('wardsCount', $wardsCount)
            ->with('lgaCount', $lgaCount);
    }
}
