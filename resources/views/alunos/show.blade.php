<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('turmas.show', $aluno->id) }}">Voltar</a>
    <h2>Dados do Aluno(a)</h2>
    <br>ID: {{ $aluno->id }} <br>
    Aluno(a): {{ $aluno->nome }}<br>
    Matrícula: {{ $aluno->matricula }}<br>
    Endereço: {{ $aluno->endereco }}<br>
    Transtornos: {{ $aluno->transtornos }}<br>
    Nome do responsável: {{ $aluno->nome_responsavel }}<br>
    Número do responsável: {{ $aluno->numero_responsavel }}<br>
    Mensalidade: R$ {{ number_format($aluno->mensalidade, 2, ',', '.') }}
</body>
</html>