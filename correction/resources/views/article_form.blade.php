@extends('layout')

@section('content')
    @isset($article)
        @section('subheader', 'Modifier article')
        {!! Form::model($article, ['route' => ['articles.update', $article->id]]) !!}
    @else
        @section('subheader', 'Nouvel article')
        {!! Form::open(['route' => 'articles.store']) !!}
    @endisset

    <div class="form-group">
        {!! Form::label('name', 'Article') !!}
        {!! Form::text('name') !!}
    </div>
    <div class="form-group">
        {!! Form::label('category_id', 'Catégorie') !!}
        {!! Form::select('category_id', $categories) !!}
    </div>
    <div class="form-group">
        {!! Form::label('unit_id', 'Unité') !!}
        {!! Form::select('unit_id', $units) !!}
    </div>
    <div class="form-group">
        {!! Form::label('sales_price', 'Prix de vente') !!}
        {!! Form::text('sales_price') !!}
    </div>

    {!! Form::submit('Sauver') !!}
    {!! Form::close() !!}
@endsection
