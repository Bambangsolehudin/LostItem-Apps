<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Image;
use App\Answer;
use App\User;
use App\Answerdetail;

class Item extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'category', 'weight', 'detail', 'user_id','question', 'type'
    ];

    public function image(){
        return $this->hasMany( Image::class, 'item_id', 'id' );
    }

    public function answer() {
        return $this->hasMany( Answer::class, 'item_id', 'id' );
    }

    public function user(){
        return $this->belongsTo( User::class);
    }
    
    public function answerdetail() {
        return $this->hasMany( Answerdetail::class, 'item_id', 'id' );
    }
    

}
