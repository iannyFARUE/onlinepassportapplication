<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NationalID extends Model
{
    //
    protected $guarded = [];

    protected $table = 'national_i_d_s';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function statuses()
    {
        return $this->hasOne(Status::class, 'national_id');
    }
}
