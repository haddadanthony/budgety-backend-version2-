<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = ['amount', 'title', 'start_date', 'end_date', 'user_id', 'currency_id'];
}
