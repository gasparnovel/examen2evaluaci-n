@extends('layouts.head')
@section('title', 'Posts')

@section('content')
    <div class="min-h-screen bg-gray-100">
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            </div>
        </header>
        <div class="bg-dark p-5">
            <h1 class="text-center text-white pb-4"><u>@lang('traduccion.Posts')</u></h1>
            <div class="container d-flex justify-content-center align-items-center">
                <table class="table">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th scope="col">Id</th>
                            <th scope="col">@lang('traduccion.Title')</th>
                            <th scope="col">@lang('traduccion.Extract')</th>
                            <th scope="col">@lang('traduccion.Content')</th>
                            <th scope="col">@lang('traduccion.Caducable')</th>
                            <th scope="col">@lang('traduccion.Coment')</th>
                            <th scope="col">@lang('traduccion.Access')</th>
                            <th>
                                @auth
                                    @can('create', \App\Models\Post::class)
                                        <button class="btn btn-primary"><a class="text-white"
                                            href="{{ route('posts.create') }}">@lang('traduccion.Create Post')</a></button>
                                    @endcan
                                @endauth
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr class="text-center bg-white">
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->titulo }}</td>
                                <td>{{ $post->extracto }}</td>
                                <td>{{ $post->contenido }}</td>
                                <td>{{ $post->caducable }}</td>
                                <td>{{ $post->comentable }}</td>
                                <td>{{ $post->acceso }}</td>
                                <th>
                                    @auth
                                        @can('update', \App\Models\Post::class)
                                            <button class="btn btn-warning"><a class="text-white"
                                                    href="{{ url('posts/' . $post->id . '/edit') }}">@lang('traduccion.Edit')</a></button>
                                        @endcan
                                    @endauth
                                </th>
                                <th>
                                    @auth
                                        @can('delete', \App\Models\Post::class)
                                            <form method="post" action="{{ route('posts.destroy', $post) }}">
                                                @csrf @method('DELETE')
                                                <button class="btn btn-danger text-white">@lang('traduccion.Delete')</button>
                                            </form>
                                        @endcan
                                    @endauth
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection