<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    /**
     * @OA\Get(
     *   tags={"articles"},
     *   path="/api/articles",
     *   summary="Get all articles",
     *   @OA\Response(
     *     response=200,
     *     description="Success",
     *     @OA\JsonContent(
     *       @OA\Property(
     *         property="articles",
     *         type="array",
     *         @OA\Items(
     *           ref="#/components/schemas/Article"
     *         )
     *       )
     *     )
     *   )
     * ) 
     */
    public function index()
    {
        $articles = Article::all();
        return response()->json($articles);
    }

    /**
     * @OA\Get(
     *   tags={"articles"},
     *   path="/api/articles/show/{id}",
     *   summary="Get an article by id",
     *   @OA\Response(
     *     response=200,
     *     description="Success",
     *     @OA\JsonContent(
     *       ref="#/components/schemas/Article"
     *     )
     *   )
     * ) 
     */
    public function show($id)
    {
        $article = Article::find($id);
        return response()->json($article);
    }

    /**
     * @OA\Post(
     *   tags={"articles"},
     *   path="/api/articles/create",
     *   summary="Create an article",
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\JsonContent(ref="#/components/schemas/Article")
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="Success",
     *     @OA\JsonContent(
     *       ref="#/components/schemas/Article"
     *     )
     *   )
     * )
     */
    public function create(Request $request)
    {
        // create new article
        $article = Article::create($request->all());
        return response()->json($article);
    }

    /**
     * @OA\Put(
     *   tags={"articles"},
     *   path="/api/articles/update/{id}",
     *   summary="Update an article by id",
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\JsonContent(ref="#/components/schemas/Article")
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="Success",
     *     @OA\JsonContent(
     *       ref="#/components/schemas/Article"
     *     )
     *   )
     * )
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->update($request->all());
        return response()->json($article);
    }

    /**
     * @OA\Delete(
     *   tags={"articles"},
     *   path="/api/articles/delete/{id}",
     *   summary="Delete an article by id",
     *   @OA\Response(
     *     response=200,
     *     description="Success",
     *     @OA\JsonContent(
     *       @OA\Property(
     *         property="message",
     *         type="string",
     *         description="deleted"
     *       )
     *     )
     *   )
     * )
     */
    public function delete(Request $request, $id)
    {
        $article = Article::find($id);
        $article->delete();
        return response()->json('deleted');
    }
}
