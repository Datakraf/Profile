<?php

namespace Modules\Profile\Entities;

use Illuminate\Database\Eloquent\Model;
use Datakraf\User;

class Award extends Model
{
    protected $table = 'awards';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
