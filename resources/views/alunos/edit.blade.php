<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Editando Alunos</h2>

    <form action="{{ route('alunos.update', ['turma' => $turma->id, 'aluno' => $aluno->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nome:</label>
        <input type="text" name="nome" value="{{ old('nome', $aluno->nome) }}"><br>

        <label>Data de matrícula:</label>
        <input type="date" name="matricula" value="{{ old('matricula', $aluno->matricula) }}" id=""><br>

        <label>Endereço:</label>
        <input type="text" name="endereco" value="{{ old('endereco', $aluno->endereco) }}" id=""><br>

        <label>Transtornos:</label>
        <input type="text" name="transtornos" value="{{ old('transtornos', $aluno->transtornos) }}" id=""><br>

        <label>Responsável: </label>
        <input type="text" name="nome_responsavel" value="{{ old('nome_responsavel', $aluno->nome_responsavel) }}" id=""><br>

        <label>Contato:</label>
        <input type="number" name="numero_responsavel" value="{{ old('numero_responsavel', $aluno->numero_responsavel) }}" id=""><br>
        
        <label>Mensalidade:</label>
        <input type="number" name="mensalidade" value="{{ old('mensalidade', $aluno->mensalidade) }}"id=""><br>

        <button type="submit">Atualizar</button>

    </form>
</body>
</html>
