<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlotGameData extends Model
{
    use HasFactory;

    public function SlotInformation()
    {
        return $this->belongsTo(SlotInformation::class);
    }
}
