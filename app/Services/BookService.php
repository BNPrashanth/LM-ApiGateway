<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class BookService
{
    use ConsumesExternalService;

    /**
     * The base uri to consume the books service
     * @var string
     */
    public $base_uri;

    public function __construct()
    {
        $this->base_uri = config('services.books.base_uri');
    }

}

?>
