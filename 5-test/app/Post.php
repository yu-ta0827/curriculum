<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Post extends Model
{
    //
    use softDeletes;
    //
    protected $guarded = array('id');

    protected $fillable = [
        'user_id',
        'body'
    ];

    public static $rules = array(
        'body' => 'required'
    );

    public function user() {
        return $this->belongsTo(\App\User::class, 'user_id');
    }
}
