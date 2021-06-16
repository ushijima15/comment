<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Test extends Model
{
    protected $primaryKey = 'id';
    public function tweet()
    {
        return $this->belongsTo('App\Tweet');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
