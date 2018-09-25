@extends ('layout')

@section('subheader', 'Statistiques')
@section ('content')
    <p><strong><em>Valeur totale : {{ $totalStockValue }} &euro;</em></strong></p>
    <h3>Valeur par cat&eacute;gorie</h3>
    <table class="table">
        @foreach($categoryValues as $categoryValue)
            <tr>
                <td>{{ $categoryValue->category }}</td>
                <td>{{ $categoryValue->category_value }} &euro;</td>
            </tr>
        @endforeach
    </table>
@endsection
