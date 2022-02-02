<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    /**
     * @OA\Get(
     *   tags={"categories"},
     *   path="/api/categories",
     *   summary="Get all categories",
     *   @OA\Response(
     *     response=200,
     *     description="Success",
     *     @OA\JsonContent(
     *       @OA\Property(
     *         property="categories",
     *         type="array",
     *         @OA\Items(
     *           ref="#/components/schemas/Category"
     *         )
     *       )
     *     )
     *   )
     * ) 
     */
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    /**
     * @OA\Get(
     *   tags={"categories"},
     *   path="/api/categories/show/{id}",
     *   summary="Get a category by id",
     *   @OA\Response(
     *     response=200,
     *     description="Success",
     *     @OA\JsonContent(
     *       ref="#/components/schemas/Category"
     *     )
     *   )
     * ) 
     */
    public function show($id)
    {
        $category = Category::find($id);
        return response()->json($category);
    }

    /**
     * @OA\Post(
     *   tags={"categories"},
     *   path="/api/categories/create",
     *   summary="Create a category",
     *   @OA\RequestBody(
     *     @OA\JsonContent(
     *       @OA\Property(
     *         property="name",
     *         type="string",
     *         description="required, max length 255",
     *         example="name1"
     *       )
     *     )
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="Success",
     *     @OA\JsonContent(
     *       ref="#/components/schemas/Category"
     *     )
     *   )
     * ) 
     */
    public function create(Request $request)
    {
        $category = Category::create($request->all());
        return response()->json($category);
    }

    /**
     * @OA\Put(
     *   tags={"categories"},
     *   path="/api/categories/update/{id}",
     *   summary="Update a category",
     *   @OA\RequestBody(
     *     @OA\JsonContent(
     *       @OA\Property(
     *         property="name",
     *         type="string",
     *         description="required, max length 255",
     *         example="name1"
     *       )
     *     )
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="Success",
     *     @OA\JsonContent(
     *       ref="#/components/schemas/Category"
     *     )
     *   )
     * ) 
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update($request->all());
        return response()->json($category);
    }

    /**
     * @OA\Delete(
     *   tags={"categories"},
     *   path="/api/categories/delete/{id}
     *   summary="Delete a category",
     *   @OA\Response(
     *     response=200,
     *     description="Success",
     *     @OA\JsonContent(
     *       ref="#/components/schemas/Category"
     *     )
     *   )
     * )
     */
    public function delete(Request $request, $id)
    {
        $category = Category::find($id);
        $category->delete();
        return response()->json('deleted');
    }
}
