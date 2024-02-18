<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function ByBrandPage(){
        return view('fontend.pages.product-by-brand');
    }
    public function ByCategoryPage()
    {
        return view('fontend.pages.product-by-category');
    }
    public function CategoryList():JsonResponse{
        $data = Category::all();
        return ResponseHelper::Out('Success', $data, 200);
    }
}
