<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlotInformation extends Model
{
    use HasFactory;

    public function slotGameDatas()
    {
        return $this->hasMany(SlotGameData::class,'slot_id');
    }
}
