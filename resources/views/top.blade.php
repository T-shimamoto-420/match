@extends('layouts.layout')
@section('content')
  <div class="loginPage">
    <div class="container">
      <div class="loginPage_contents">
        <h1 class="h3 loginpage_contents_title">新しいマッチを見つけよう</h1>
        <div class="btn loginPage_contents_btn">
          <a href="{{route('login')}}" class="text-white">メールアドレスでログインする</a>
        </div>
      </div>
    </div>
  </div>
@endsection