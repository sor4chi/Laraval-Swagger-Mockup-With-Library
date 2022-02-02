<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    // define CURD methods api
    public function index()
    {
        // get all articles
        $articles = Article::all();
        return response()->json($articles);
    }

    public function show($id)
    {
        // get article by id
        $article = Article::find($id);
        return response()->json($article);
    }

    public function create(Request $request)
    {
        // create new article
        $article = Article::create($request->all());
        return response()->json($article);
    }

    public function update(Request $request, $id)
    {
        // update article by id
        $article = Article::find($id);
        $article->update($request->all());
        return response()->json($article);
    }

    public function delete(Request $request, $id)
    {
        // delete article by id
        $article = Article::find($id);
        $article->delete();
        return response()->json('deleted');
    }
}
