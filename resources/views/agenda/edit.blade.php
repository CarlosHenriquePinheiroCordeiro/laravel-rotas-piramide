<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Agenda - Edit</title>
    </head>
    <body>
        <form action="{{route('agenda.update', $dados['id'])}}" method="post">
            @method("PATCH")
            <label for="id">ID</label>
            <input type="number" name="id" id="id" value={{$dados['id']}} readonly>
            <br>
            <label for="nome">Nome</label>
            <input name="nome" id="nome" value={{$dados['nome']}}>
            <br>
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" id="telefone" value={{$dados['telefone']}}>
            <br>
            <label for="email">E-Mail</label>
            <input type="email" name="email" id="email" value={{$dados['email']}}>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>