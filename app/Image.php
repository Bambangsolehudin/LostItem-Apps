<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\item;
use App\User;

class Image extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'item_id', 'image', 'user_id'
    ];

    public function item(){
        return $this->belongsTo( Item::class, 'item_id', 'id' );
    }

    public function user(){
        return $this->belongsTo( User::class, 'users_id', 'id' );
    }

}
