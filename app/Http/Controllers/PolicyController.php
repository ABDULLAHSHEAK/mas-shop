<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Policy;

class PolicyController extends Controller
{
    public function policy (){
        return view('fontend.pages.policy-page');
    }
    public function PolicyByType(Request $req){
        $policy = Policy::where('type', '=', $req->type)->first();
        return response($policy);
    }
}
