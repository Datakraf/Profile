<?php

namespace Modules\Profile\Entities;

use Illuminate\Database\Eloquent\Model;
use Datakraf\User;

class Academic extends Model
{
    protected $table = 'academics';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
