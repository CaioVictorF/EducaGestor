<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar nova turma</title>
</head>
<body>
    <a href="{{ route('turmas.index')}}">Voltar</a>
    <h2>Criando nova turma</h2>
    
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color: red">
            {{ $error }}  
            </p>
        @endforeach
    @endif
    
    <form action="{{ route('store-turmas') }}" method="POST">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome" value="{{ old('nome') }}"><br>
        <label>Horário</label>
        <input type="time" name="horario" value="{{ old('horario') }}">><br>

        <button type="submit">Criar</button>

    </form>
</body>
</html>