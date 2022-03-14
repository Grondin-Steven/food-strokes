<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{
    use HasFactory;
    protected $table = 'clients';
    public $timestamps = false;

    public function clients()
    {
        return $this->belongsTo(ClientModel::class);
    }
}
