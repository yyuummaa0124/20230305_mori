@extends('layouts.default')
@php
  dd($form);
@endphp

<p class="title">Todo List</p>
<form action="/todo/create" method="POST">
  @csrf
<input type="text" name="content">
<select name="select" value="" name="tag">
  <option value="">家事</option>
  <option value="">勉強</option>
  <option value="">運動</option>
  <option value="">食事</option>
  <option value="">移動</option>
<input type="submit" value="追加">
</form>
<table>
  <tr>
    <th>作成日</th>
    <th>タスク名</th>
    <th>タグ名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
  <form action="" method="POST">
    @csrf
  @foreach ($todos as $todo)
  <tr>
    <td>{{$todo->created_at}}</td>
    <td>{{$todo->content}}</td>
    @foreach ($tags as $tag)
    <td><select name="select">
    <option value="">{{$tag->tag}}</option>
    <option value="">{{$todo->tag->tag}}</option>
    <option value="">{{$todo->tag->tag}}</option>
    </select></td>@endforeach
    <td><input name="" type="submit" value="更新"></td>
    <td><input name="" type="submit" value="削除"></td>
  </tr>
  @endforeach
  </form>

</table>
