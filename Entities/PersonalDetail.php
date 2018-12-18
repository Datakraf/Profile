<?php

namespace Modules\Profile\Entities;

use Illuminate\Database\Eloquent\Model;
use Datakraf\User;
use Modules\Profile\Events\PersonalDetailCreated;

class PersonalDetail extends Model
{
    protected $table = 'personaldetails';

    protected $dispatchesEvents = [
        'saving' => PersonalDetailCreated::class,
        // 'updating' => PersonalDetailCreated::class
    ];
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
