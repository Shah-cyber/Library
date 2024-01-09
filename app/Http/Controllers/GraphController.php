<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class GraphController extends Controller
{
    public function generateBookGraph()
    {
        $books = Book::all();
        $categories = Category::all();
        $data = [];
        foreach ($categories as $category) {
            $data[] = [
                'name' => $category->name,
                'y' => $category->books->count()
            ];
        }
        return response()->json($data);
    }
}
