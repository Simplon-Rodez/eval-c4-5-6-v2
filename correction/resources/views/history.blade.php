@extends ('layout')

@section('subheader', 'Historique des movements')
@section ('content')
    <table class="table">
        <tr>
            <th>Article</th>
            <th>Quantit&eacute;</th>
            <th>Date</th>
            <th>Type</th>
        </tr>
        @foreach($history as $item)
            <tr>
                <td>{{ $item->article->name }}</td>
                <td class="text-right">{{ $item->quantity }}</td>
                <td>{{ $item->date_time }}</td>
                <td>{{ $item->movementType->name }}</td>
            </tr>
        @endforeach
    </table>
@endsection
