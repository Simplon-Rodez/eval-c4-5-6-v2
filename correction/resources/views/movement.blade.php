@extends ('layout')

@section('subheader', 'Saisie de movement')
@section ('content')
    @isset($status)
    <div class="alert alert-{{ $statusType }}">
        {{ $status }}
    </div>
    @endisset
    {!! Form::open(['route' => 'movements.store']) !!}
    <div class="form-group">
        {!! Form::label('article_id', 'Article') !!}
        {!! Form::select('article_id', $articles) !!}
    </div>
    <div class="form-group">
        {!! Form::label('quantity', 'Quantité') !!}
        {!! Form::number('quantity') !!}
    </div>
    <div class="form-group">
        {!! Form::label('movement_type_id', 'Type de movement') !!}
        {!! Form::select('movement_type_id', $movementTypes) !!}
    </div>
    {!! Form::submit('Enregistrer') !!}
    <a href="{{ route('home') }}" class="btn btn-secondary">Annuler</a>
    {!! Form::close() !!}
@endsection
