<?php

namespace Mattjamesvogt\Laramyob\Models\Configuration;

use Illuminate\Database\Eloquent\Model;

class MyobConfiguration extends Model {

    protected $guarded = [];

    protected $dates = ['expires_at'];
}