@extends('layouts.basic')

@section('title', 'Project')


@section('main')
    <h1>Progetti</h1>

    <table>
    <tr>
        <th>Titolo</th>
        <th>Descrizione</th>
        <th>Immagine</th>
        <th>Linguaggi</th>
    </tr>
    @foreach($projects as $item)
    <tr>
        <td>{{$item['title']}}</td>
        <td>{{$item['description']}}</td>
        <td>{{$item['preview']}}</td>
        <td>{{$item['language']}}</td>
    </tr>
    @endforeach
    </table>
@endsection

