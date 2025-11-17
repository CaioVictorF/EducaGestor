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

    <h2>Alunos:</h2>
    @forelse($alunos as $aluno)
        <p>
            {{ $aluno->nome }} - Matrícula: {{ $aluno->matricula }} - Mensalidade: R$ {{ number_format($aluno->mensalidade, 2, ',', '.') }}
        </p>
    @empty
        <p>Não há alunos cadastrados nesta turma.</p>
    @endforelse     
</body>
</html>    
</div>
