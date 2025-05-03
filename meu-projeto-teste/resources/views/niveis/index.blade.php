@extends('layouts.app')

@section('title', 'Níveis')

@section('content')
<h1>Niveis</h1>

<a href="{{ route('niveis.create') }}" class="btn btn-primary">Adicionar</a>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-white">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($niveis as $nivel)
            <tr>
                <td scope="col">{{ $nivel->id }}</td>
                <td scope="col">{{ $nivel->nome }}</td>
                <td scope="col">
                    <form 
                        action="{{ route('niveis.destroy', $nivel->id) }}"
                        method="POST"
                        onsubmit="return confirm('Tem certeza que deseja excluir este nível?');"
                    >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection