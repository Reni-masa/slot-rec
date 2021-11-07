<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SlotInformation;

class SlotInformationController extends Controller
{
    public function index(Request $request)
    {
        $slotInfos = SlotInformation::where('enable', 1);
        return view ('index', ['slotInfos' => $slotInfos]);
    }
}
