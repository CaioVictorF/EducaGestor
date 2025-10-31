<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EducaGestor</title>
</head>
<body>
    <a href="{{ route('turmas.create')}}">Criar nova turma</a><br>
    <h2>Turmas</h2>
    
    @if(session('success'))
        <p style="color: #086;">
            {{ session('success') }}
        </p>
    @endif
    
    @forelse($turmas as $turma)
        <br>ID: {{ $turma->id }}<br>
        Nome: {{ $turma->nome }}<br>
        Horário: {{ $turma->horario }}<br>
        <a href="{{ route('turmas.show', ['turma' => $turma->id]) }}">Visualizar</a><hr>
    @empty
    @endforelse

</body>
</html>