<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use App\Services\AuthorService;

class AuthorController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the authors microservice
     * @var AuthorService
     */
    public $authorService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    /**
     * Return the list of Authors
     * @return Illuminate/Http/Response
     */
    public function index()
    {

    }

    /**
     * Create a new Author
     * @return Illuminate/Http/Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Return an existing Author
     * @return Illuminate/Http/Response
     */
    public function show($author)
    {

    }

    /**
     * Update an existing Author
     * @return Illuminate/Http/Response
     */
    public function update(Request $request, $author)
    {

    }

    /**
     * Remove an existing Author
     * @return Illuminate/Http/Response
     */
    public function destroy($author)
    {

    }

}
