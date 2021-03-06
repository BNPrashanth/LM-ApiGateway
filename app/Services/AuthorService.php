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

    /**
     * The secret to consume the authors service
     * @var string
     */
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.authors.base_uri');
        $this->secret = config('services.authors.secret');
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

    /**
     * Obtain an existing instance of an Author from the AuthorsMicroservice
     * @return string
     */
    public function obtainAuthor($author)
    {
        return $this->performRequest(
            'GET',
            "authors-api/v1/get/{$author}"
        );
    }

    /**
     * Update an existing instance of an Author from the AuthorsMicroservice
     * @return string
     */
    public function editAuthor($data, $author)
    {
        return $this->performRequest(
            'PUT',
            "authors-api/v1/update/{$author}",
            $data
        );
    }

    /**
     * Remove an existing instance of an Author from the AuthorsMicroservice
     * @return string
     */
    public function deleteAuthor($author)
    {
        return $this->performRequest(
            'DELETE',
            "authors-api/v1/delete/{$author}"
        );
    }

}

?>
