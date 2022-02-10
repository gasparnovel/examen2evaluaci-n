@extends('layouts.head')
@section('title', 'Post')

@section('content')
    <div class="bg-dark p-5">
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
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center bg-white">
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->titulo }}</td>
                        <td>{{ $post->extracto }}</td>
                        <td>{{ $post->contenido }}</td>
                        <td>{{ $post->caducable }}</td>
                        <td>{{ $post->comentable }}</td>
                        <td>{{ $post->acceso }}</td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection 