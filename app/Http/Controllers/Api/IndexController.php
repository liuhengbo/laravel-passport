<?php


namespace App\Http\Controllers\Api;


use App\Http\Resources\UserCollection;
use App\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class IndexController extends ApiController
{
    public function index(Request $request){
        return UserCollection::collection(User::paginate($request->input('name')) ?: 20);
    }
}
