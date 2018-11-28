<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'post_id';

    protected $fillable = ['post'];

    public function usuario()
    {
        return $this->belongsTo('App\Usuario');
    }


}
