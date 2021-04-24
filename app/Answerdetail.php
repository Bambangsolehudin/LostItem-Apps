<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Item;

class Answerdetail extends Model
{

    protected $fillable = [
        'user_id', 'item_id', 'answer'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
