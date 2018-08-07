<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller{
    public function showByCategory(Request $request){
        $user_id = $request->input('user_id');
        $category = $request->input('category');
        $data = app('db')->select('SELECT * FROM items WHERE user_id='.$user_id.' AND category="'.$category.'"');

        if(empty($data))
            return response()->json(array(), 200);
        else
            return response()->json($data, 200);
    }
    public function create(Request $request){
        /*
        // if error, send 500
        // insert INTO items(title,category,img_link,user_id) 	values('title','movies','link',10);
        $author = Author::create($request->all());
        return response()->json($request->All(), 201);
        */
    }
    public function delete($id){
        // if error, send 500
        return response('Deleted Successfully', 200);
    }
}