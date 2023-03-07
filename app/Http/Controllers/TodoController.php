<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TodoRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Todo;
use App\Models\Tag;

class TodoController extends Controller
{
    public function index(){

        $todos = Todo::all();
        $tags = Tag::all();
        $param = ['todos' => $todos ,'tags' => $tags];
        return view('index',$param);
    }

    public function create(TodoRequest $request){

        $form = $request->all();
        unset($form['_token']);
        Todo::create($form);
        return redirect('/todo');
    }

    public function update(){
        
    }

    public function delete(){
        
    }

    public function find(){
    
        return view('find');
    }

    public function search(){
    
    }
}
