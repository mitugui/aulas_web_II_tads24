@extends('layouts.app')

@section('title', 'Níveis')

@section('content')
<h1>Niveis</h1>

<a href="{{ route('niveis.create') }}" class="btn btn-primary">Adicionar</a>

<table class="table table-white">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
        </tr>
    </thead>
    <tbody>
        @foreach($niveis as $nivel)
            <tr>
                <td scope="col">{{ $nivel->id }}</td>
                <td scope="col">{{ $nivel->nome }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection