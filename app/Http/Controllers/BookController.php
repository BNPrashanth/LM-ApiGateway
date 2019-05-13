<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;

class BookController extends Controller
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
