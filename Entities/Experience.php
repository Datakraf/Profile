<?php

namespace Modules\Profile\Entities;

use Illuminate\Database\Eloquent\Model;
use Datakraf\User;

class Experience extends Model
{
    protected $table = 'experiences';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}