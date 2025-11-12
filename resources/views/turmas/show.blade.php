<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos cadastrados</title>
</head>
<body>
    <a href="{{ route('turmas.index') }}">Voltar</a>
    <a href="{{ route('turmas.edit', ['turma' => $turma->id]) }}">Editar</a>
    <h2>Alunos Matriculados</h2>
    <a href="{{ route('alunos.create', ['turma' => $turma->id]) }}">Novo Aluno(a)</a>
     
</body>
</html>    
</div>
