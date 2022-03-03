<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyspecialsModel extends Model
{
    use HasFactory;
    protected $table = 'dailyspecials';

    public function dailyspecials()
    {
        return $this->belongsTo(DailyspecialsModel::class);
    }
}
