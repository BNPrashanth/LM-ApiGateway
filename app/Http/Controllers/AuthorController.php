<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;

class AuthorController extends Controller
{
    use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
