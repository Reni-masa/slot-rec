<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SlotInformation;
use App\Models\SlotGameData;

class SlotGameDataController extends Controller
{
    const GET_DATA_PERIOD = -2; // 取得期間(月)定義

    // 機種データ一覧
    public function show($id) {
        $slotInfo = SlotInformation::find($id);

        $start_day = date("Y-m-d",strtotime(self::GET_DATA_PERIOD . " month"));

        // データ一覧取得
        $slotDatas = $slotInfo->slotGameDatas()->where('date_time', '>=', $start_day)->orderBy('number')->get();

        // 日付一覧を取得
        $dates = $slotInfo->slotGameDatas()->distinct()->select('date_time')->where('date_time', '>=', $start_day)->orderBy('date_time','desc')->get();

        // 台番号一覧取得
        $numbers = $slotInfo->slotGameDatas()->distinct()->select('number')->where('date_time', '>=', $start_day)->get();

        return view ('show', [
            'slotInfo' => $slotInfo,
            'slotDatas' => $slotDatas,
            'dates' => $dates,
            'numbers' => $numbers,
        ]);

        return;
    }

    // 機種データ詳細取得
    public function detail($id) {

        $slotData = SlotGameData::findOrFail($id);
        $slotInfo = $slotData->SlotInformation;

        return view('detail', [
            'slotData' => $slotData,
            'slotInfo' => $slotInfo,
        ]);

        return;
    }
}
