<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationModel extends Model
{
    use HasFactory;
    protected $table = 'reservations';
    public $timestamps = false;

    public function reservation()
    {
        return $this->belongsTo(ReservationModel::class);
    }
}
