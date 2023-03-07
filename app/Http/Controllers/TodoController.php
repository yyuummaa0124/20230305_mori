<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\TodoRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Todo;
use App\Models\Tag;

class TodoController extends Controller
{
    public function index(){
        $user = Auth::user();
        $todos = Todo::all();
        $tags = Tag::all();
        $param = ['user' =>$user, 'todos' => $todos, 'tags' => $tags];
        return view('index', $param);
    }

    public function create(TodoRequest $request){

        $form = new Post($request->get('tag', []));
        $form->todos()->create($request->get('todos', []));

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
