@extends('layouts.app')

@section('title', 'Níveis')

@section('content')
<h1>Niveis</h1>

<form action="{{ route('niveis.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection