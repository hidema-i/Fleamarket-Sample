<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //出品
    const STATE_SELLING = 'selling';
    //購入済
    const STATE_BOUGHT = 'bought';

    //商品に紐づく小カテゴリを取得
    public function secondaryCategory()
    {
        return $this->belongsTo(SecondaryCategory::class);
    }

    //商品に紐付く出品者や商品の状態
    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }
    public function condition()
    {
        return $this->belongsTo(ItemCondition::class, 'item_condition_id');
    }

    //商品が出品中かどうか
    public function getIsStateSellingAttribute()
    {
        return $this->state === self::STATE_SELLING;
    }

    //購入済みかどうか
    public function getIsStateBoughtAttribute()
    {
        return $this->state === self::STATE_BOUGHT;
    }
}
