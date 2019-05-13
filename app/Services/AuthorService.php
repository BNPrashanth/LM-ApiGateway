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
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.authors.base_uri');
    }

    /**
     * Obtain full list of Authors from the AuthorsMicroservice
     * @return string
     */
    public function obtainAuthors()
    {
        return $this->performRequest(
            'GET',
            'authors-api/v1/all'
        );
    }

    /**
     * Create a new Author from the AuthorsMicroservice
     * @return string
     */
    public function createAuthor($data)
    {
        return $this->performRequest(
            'POST',
            'authors-api/v1/add',
            $data
        );
    }

}

?>
