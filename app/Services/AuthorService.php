<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class AuthorService
{
    use ConsumesExternalService;

    /**
     * The base uri to consume the authors service
     * @var string
     */
    public $base_uri;

    public function __construct()
    {
        $this->base_uri = config('services.authors.base_uri');
    }

}

?>
