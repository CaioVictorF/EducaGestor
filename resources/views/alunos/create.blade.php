<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastre um novo aluno(a)</h1>
    <form action="{{ route('store.alunos', $turma->id) }}" method="POST">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome" value="{{ old('nome') }}"><br>
        <label>Data de matrícula:</label>
        <input type="date" name="matricula" id=""><br>
        <label>Endereço:</label>
        <input type="text" name="endereco" id=""><br>
        <label>Transtornos:</label>
        <input type="text" name="transtornos" id=""><br>
        <label>Responsável: </label>
        <input type="text" name="nome_responsavel" id=""><br>
        <label>Contato:</label>
        <input type="number" name="numero_responsavel" id=""><br>
        <label>Mensalidade:</label>
        <input type="number" name="mensalidade" id=""><br>
        

        <button type="submit">Criar</button>

    </form>

</body>
</html>