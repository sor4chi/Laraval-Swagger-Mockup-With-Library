<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    // define CURD methods api
    public function index()
    {
        // get all categories
        $categories = Category::all();
        return response()->json($categories);
    }

    public function show($id)
    {
        // get category by id
        $category = Category::find($id);
        return response()->json($category);
    }

    public function create(Request $request)
    {
        // create new category
        $category = Category::create($request->all());
        return response()->json($category);
    }

    public function update(Request $request, $id)
    {
        // update category by id
        $category = Category::find($id);
        $category->update($request->all());
        return response()->json($category);
    }

    public function delete(Request $request, $id)
    {
        // delete category by id
        $category = Category::find($id);
        $category->delete();
        return response()->json('deleted');
    }
}
