<?php

namespace App\Models;

use App\Models\AdditionalBookinfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $with=['publisher'];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function additionalBookinfo(){
        return $this->hasOne(AdditionalBookinfo::class);
    }
}
