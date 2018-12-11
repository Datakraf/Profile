<?php

namespace Modules\Profile\Entities;

use Illuminate\Database\Eloquent\Model;
use Datakraf\User;

class Family extends Model
{
    protected $table = 'families';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
