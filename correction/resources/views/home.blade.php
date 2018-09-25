@extends ('layout', ['hideHome' => true])

@section('subtext', 'Exercice d\'évaluation des compétences C4, C5 et C6')

@section ('content')
    <p><a href="{{ route('articles.index') }}">Articles</a></p>
    <p><a href="{{ route('history') }}">Historique</a></p>
    <p>Saisie de mouvements</p>
    <p><a href="{{ route('statistics') }}">Statistiques</a></p>
@endsection
