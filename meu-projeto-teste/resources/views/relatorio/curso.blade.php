<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<body>
    @if(isset($dados))
        <h1>{{ $dados['curso'] }}</h1>

        @foreach ($dados['alunos'] as $aluno)
            <p>{{ $aluno }}</p>
        @endforeach

        <p>{{ $dados['duracao'] }}</p>
    @endif
</body>
</html>