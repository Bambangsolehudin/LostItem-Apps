<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;
use App\User;
use App\Answerdetail;

class Answer extends Model
{
    

    protected $fillable = [
        'item_id', 'user_id', 'answer', 'name', 'nomor'
    ];

    public function item(){
        return $this->belongsTo( Item::class, 'item_id', 'id' );
    }

    public function user(){
        return $this->belongsTo( User::class, 'users_id', 'id' );
    }

    // public function answerdetail() {
    //     return $this->hasMany( Answerdetail::class, 'answer_id', 'id' );
    // }
}
