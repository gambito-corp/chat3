@extends('layouts.front')
@section('content')
<div class="content">
    <div class="title m-b-md">
        Chat de M...
    </div>

    <br>
    <br>
    <br>
    <div class="col-md-3">
        @livewire('subasta-vivo')
    </div>
    <div class="col-md-9">
        @livewire('lista-pujas')
    </div>
    <br>
    <br>
    <br>

    <div class="links">
        <a href="https://laravel.com/docs">Docs</a>
        <a href="https://laracasts.com">Laracasts</a>
        <a href="https://laravel-news.com">News</a>
        <a href="https://blog.laravel.com">Blog</a>
        <a href="https://nova.laravel.com">Nova</a>
        <a href="https://forge.laravel.com">Forge</a>
        <a href="https://vapor.laravel.com">Vapor</a>
        <a href="https://github.com/laravel/laravel">GitHub</a>
    </div>
</div>
@endsection

