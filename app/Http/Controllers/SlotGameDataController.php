<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SlotInformation;

class SlotGameDataController extends Controller
{
    const GET_DATA_PERIOD = -2;

    // 機種データ一覧
    public function show($id) {
        $slotInfo = SlotInformation::find($id);

        $start_day = date("Y-m-d",strtotime(self::GET_DATA_PERIOD . " month"));

        $slotDatas = $slotInfo->slotGameDatas()->where('date_time', '>=', $start_day)->get();

        foreach ($slotDatas as $slotData) {
            print($slotData);
        }

        return;
    }
}
