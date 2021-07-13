<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SecondaryCategory extends Model
{
    //小カテゴリに紐づく大カテゴリを取得
    public function primaryCategory()
    {
        return $this->belongsTo(PrimaryCategory::class);
    }
}
