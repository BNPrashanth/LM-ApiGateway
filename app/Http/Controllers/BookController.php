<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use App\Services\BookService;

class BookController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the books microservice
     * @var BookService
     */
    public $bookService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    /**
     * Return the list of Books
     * @return Illuminate/Http/Response
     */
    public function index()
    {

    }

    /**
     * Create a new Book
     * @return Illuminate/Http/Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Return an existing Book
     * @return Illuminate/Http/Response
     */
    public function show($book)
    {

    }

    /**
     * Update an existing Book
     * @return Illuminate/Http/Response
     */
    public function update(Request $request, $book)
    {

    }

    /**
     * Remove an existing Book
     * @return Illuminate/Http/Response
     */
    public function destroy($book)
    {

    }

}
