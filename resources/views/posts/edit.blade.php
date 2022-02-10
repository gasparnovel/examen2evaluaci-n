@extends('layouts.head')
@section('title', 'Editar Post')

@section('content')
<div class="min-h-screen bg-gray-100"> 
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        </div>
    </header>
    <div class="container col-12 col-md-5 bg-dark d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-12">
                <div class="well well-sm">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <li class="text-danger text-center pt-4">{{ $error }}</li>
                        @endforeach
                    @endif
                    <form class="form-horizontal" action="{{ url('posts/'.$posts->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('layouts.form_edit')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection