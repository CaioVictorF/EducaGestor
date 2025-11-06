<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EducaGestor</title>
</head>
<body>
    <a href="{{ route('turmas.index') }}">Voltar</a>
    <h2>Editar turma</h2>

    @if($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color: red;">
            {{ $error }}  
            </p>
        @endforeach
    @endif

    <form action="{{ route('turma-update', ['turma' => $turma->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nome:</label>
        <input type="text" name="nome" value="{{ old('nome', $turma->nome) }}"><br>
        <label>Horário</label>
        <input type="time" name="horario" value="{{ old('horario', $turma->horario) }}">><br>

        <button type="submit">Atualizar</button>

    </form>
</body>
</html>