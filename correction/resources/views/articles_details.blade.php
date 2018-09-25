@extends ('layout')

@section('subheader', 'Fiche article')
@section ('content')
    <table class="table">
        <tr>
            <td><em>Article</em></td>
            <td>{{ $article->name }}</td>
        </tr>
        <tr>
            <td><em>Cat&eacute;gorie</em></td>
            <td>{{ $article->category->name }}</td>
        </tr>
        <tr>
            <td><em>Prix de vente</em></td>
            <td>{{ $article->sales_price }} &euro;</td>
        </tr>
    </table>
@endsection
