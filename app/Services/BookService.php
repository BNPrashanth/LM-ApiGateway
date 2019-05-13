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
    public $baseUri;

    /**
     * The secret to consume the books service
     * @var string
     */
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.books.base_uri');
        $this->secret = config('services.books.secret');
    }

    /**
     * Obtain full list of Books from the BooksMicroservice
     * @return string
     */
    public function obtainBooks()
    {
        return $this->performRequest(
            'GET',
            'books-api/v1/all'
        );
    }

    /**
     * Create a new Book from the BooksMicroservice
     * @return string
     */
    public function createBook($data)
    {
        return $this->performRequest(
            'POST',
            'books-api/v1/add',
            $data
        );
    }

    /**
     * Obtain an existing instance of an Book from the BooksMicroservice
     * @return string
     */
    public function obtainBook($book)
    {
        return $this->performRequest(
            'GET',
            "books-api/v1/get/{$book}"
        );
    }

    /**
     * Update an existing instance of an Book from the BooksMicroservice
     * @return string
     */
    public function editBook($data, $book)
    {
        return $this->performRequest(
            'PUT',
            "books-api/v1/update/{$book}",
            $data
        );
    }

    /**
     * Remove an existing instance of an Book from the BooksMicroservice
     * @return string
     */
    public function deleteBook($book)
    {
        return $this->performRequest(
            'DELETE',
            "books-api/v1/delete/{$book}"
        );
    }

}

?>
