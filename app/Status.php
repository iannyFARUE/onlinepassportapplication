<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $guarded = [];

    protected $attributes = [
        'status' => 'PENDING',
    ];

    //
    public function nationalID()
    {
        return $this->belongsTo(NationalID::class);
    }
}
