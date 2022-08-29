<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Agenda - Create</title>
    </head>
    <body>
        <form action="{{ route('agenda.store')}}" method="post">
            @method("POST")
            <label for="id">ID</label>
            <input type="number" name="id" id="id" readonly>
            <br>
            <label for="nome">Nome</label>
            <input name="nome" id="nome">
            <br>
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" id="telefone">
            <br>
            <label for="email">E-Mail</label>
            <input type="email" name="email" id="email">
            <br>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>