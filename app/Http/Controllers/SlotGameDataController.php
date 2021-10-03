<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SlotInformation;

class SlotGameDataController extends Controller
{

    // 機種データ一覧
    public function show($id) {
        $slotInfo = SlotInformation::find($id);

        $slotDatas = $slotInfo->slotGameDatas;

        foreach ($slotDatas as $slotData) {
            print($slotData);
        }

    
        return;
    }
}
