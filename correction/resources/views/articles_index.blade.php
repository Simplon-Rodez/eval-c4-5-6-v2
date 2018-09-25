@extends ('layout')

@section('subheader', 'Liste des articles')
@section ('content')
    @isset($status)
    {{ dd($status) }}
    <div class="alert">
        <p>{{ $status }}</p>
    </div>
    @endisset
    <table class="table">
        <tr>
            <th>Article</th>
            <th>Cat&eacute;gorie</th>
            <th>Unit&eacute;</th>
            <th>Prix de vente</th>
            <th>Actions</th>
        </tr>
        @foreach($articles as $article)
            <tr>
                <td><a href="{{ route('articles.show', $article->id) }}">{{ $article->name }}</a></td>
                <td>{{ $article->category->name }}</td>
                <td>{{ $article->unit->name }}</td>
                <td class="text-right">{{ $article->sales_price }}</td>
                <td><form action="{{ route('articles.destroy', $article->id) }}" method="POST" onclick="return confirm('Voulez-vous supprimer cet article ?')">
                        @method('DELETE')
                        @csrf
                        <button>Supprimer</button>
                    </form></td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('articles.create') }}">Ajouter</a>
@endsection
