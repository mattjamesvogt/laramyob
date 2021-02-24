<?php

namespace Mattjamesvogt\Laramyob\Models\Remote;

use Mattjamesvogt\Laramyob\Models\BaseModel as Model;

class Myob extends Model
{
    public $endpoint;
    public $data;

    public function __construct($endpoint, $data) {
        parent::__construct();
        $this->endpoint = $endpoint;
        $this->data = $data;
    }
}