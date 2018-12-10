<?php

namespace Modules\Profile\Entities;

use Illuminate\Database\Eloquent\Model;
use Datakraf\User;

class PersonalDetail extends Model
{
    protected $table = 'personaldetails';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
