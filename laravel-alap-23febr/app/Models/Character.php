<?php

namespace App\Models;

use App\Models\House;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    protected $table = "characters";
    public $timestamps = false;

    public function house()
    {
        return $this->belongsTo(House::class,"house_id","id");
    }
}
