<?php

namespace Mattjamesvogt\Laramyob\Models\Remote;

use Mattjamesvogt\Laramyob\Models\BaseModel as Model;

class CompanyFile extends Model
{
    //Base URL for company file is default so we override
    public $endpoint = '';

    public function __construct() {
        parent::__construct();
        $this->baseurl = 'https://api.myob.com/accountright';
    }
}