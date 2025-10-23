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
        <p>
            {{ session('success') }}
        </p>
    @endif
</body>
</html>