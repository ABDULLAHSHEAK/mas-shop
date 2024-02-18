<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Helpers\ResponseHelper;
use App\Models\ProductDetails;
use App\Models\ProductReview;
use App\Models\ProductSlider;
use App\Models\CustomerProfile;
use App\Models\ProductWish;
use App\Models\ProductCart;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // ----------- List By Category ----------
    public function ProductListByCategory(Request $req): JsonResponse
    {
        $data = Product::where('category_id', $req->id)->with('brand', 'category')->get();
        return ResponseHelper::Out('success', $data, 200);
    }

    // ----------- List By Brand ----------
    public function ProductListByBrand(Request $req): JsonResponse
    {
        $data = Product::where('brand_id', $req->id)->with('brand', 'category')->get();
        return ResponseHelper::Out('success', $data, 200);
    }

    // ----------- List By Remark ----------
    public function ProductListByRemark(Request $req): JsonResponse
    {
        $data = Product::where('remark', $req->remark)->with('brand', 'category')->limit(8)->get();
        return ResponseHelper::Out('success', $data, 200);
    }

    // ----------- List By Slider ----------
    public function ProductListBySlider(): JsonResponse
    {
        $data = ProductSlider::all();
        return ResponseHelper::Out('success', $data, 200);
    }

    // ----------- Product Details By Id ----------
    public function ProductDetailsById(Request $req): JsonResponse
    {
        $data = ProductDetails::where('product_id', $req->id)->with('product', 'product.brand', 'product.category')->get();
        return ResponseHelper::Out('success', $data, 200);
    }

    // ----------- Product Details By Review ----------
    public function ProductDetailsByReview(Request $req): JsonResponse
    {
        $data = ProductReview::where('product_id', $req->product_id)->with([
            'profile' => function ($query) {
                $query->select('id', 'cus_name');
            }
        ])->get();
        return ResponseHelper::Out('success', $data, 200);
    }

    // -------- create product review ------------

    public function CreateProductReview(Request $request): JsonResponse
    {
        $user_id = $request->header('id');
        $profile = CustomerProfile::where('user_id', $user_id)->first();

        if ($profile) {
            $request->merge(['customer_id' => $profile->id]);
            $data = ProductReview::updateOrCreate(
                ['customer_id' => $profile->id, 'product_id' => $request->input('product_id')],
                $request->input()
            );
            return ResponseHelper::Out('success', $data, 200);
        } else {
            return ResponseHelper::Out('fail', 'Customer profile not exists', 200);
        }
    }

    // --------- whish list --------------

    public function ProductWishList(Request $request): JsonResponse
    {
        $user_id = $request->header('id');
        $data = ProductWish::where('user_id', $user_id)->with('product')->get();
        return ResponseHelper::Out('success', $data, 200);
    }

    public function CreateWishList(Request $request): JsonResponse
    {
        $user_id = $request->header('id');
        $data = ProductWish::updateOrCreate(
            ['user_id' => $user_id, 'product_id' => $request->product_id],
            ['user_id' => $user_id, 'product_id' => $request->product_id],
        );
        return ResponseHelper::Out('success', $data, 200);
    }


    public function RemoveWishList(Request $request): JsonResponse
    {
        $user_id = $request->header('id');
        $data = ProductWish::where(['user_id' => $user_id, 'product_id' => $request->product_id])->delete();
        return ResponseHelper::Out('success', $data, 200);
    }

    // ------------ Product card ---------------
    public function CreateCartList(Request $request): JsonResponse
    {
        $user_id = $request->header('id');
        $product_id = $request->input('product_id');
        $color = $request->input('color');
        $size = $request->input('size');
        $qty = $request->input('qty');

        $UnitPrice = 0;

        $productDetails = Product::where('id', '=', $product_id)->first();
        if ($productDetails->discount == 1) {
            $UnitPrice = $productDetails->discount_price;
        } else {
            $UnitPrice = $productDetails->price;
        }
        $totalPrice = $qty * $UnitPrice;


        $data = ProductCart::updateOrCreate(
            ['user_id' => $user_id, 'product_id' => $product_id],
            [
                'user_id' => $user_id,
                'product_id' => $product_id,
                'color' => $color,
                'size' => $size,
                'qty' => $qty,
                'price' => $totalPrice
            ]
        );

        return ResponseHelper::Out('success', $data, 200);
    }



    public function CartList(Request $request): JsonResponse
    {
        $user_id = $request->header('id');
        $data = ProductCart::where('user_id', $user_id)->with('product')->get();
        return ResponseHelper::Out('success', $data, 200);
    }



    public function DeleteCartList(Request $request): JsonResponse
    {
        $user_id = $request->header('id');
        $data = ProductCart::where('user_id', '=', $user_id)->where('product_id', '=', $request->product_id)->delete();
        return ResponseHelper::Out('success', $data, 200);
    }
}
