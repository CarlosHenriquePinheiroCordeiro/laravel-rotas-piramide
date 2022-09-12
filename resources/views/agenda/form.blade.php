@if(!isset($dados['visualizar']))
    @csrf
@endif
<label for="id">ID</label>
<input type="number" name="id" id="id" value={{isset($dados)?$dados['id']:''}} {{isset($dados['visualizar'])? 'readonly' : ''}}>
<br>
<label for="nome">Nome</label>
<input name="nome" id="nome" value={{isset($dados)?$dados['nome']:''}} {{isset($dados['visualizar'])? 'readonly' : ''}}>
<br>
<label for="telefone">Telefone</label>
<input type="tel" name="telefone" id="telefone" value={{isset($dados)?$dados['telefone']:''}} {{isset($dados['visualizar'])? 'readonly' : ''}}>
<br>
<label for="email">E-Mail</label>
<input type="email" name="email" id="email" value={{isset($dados)?$dados['email']:''}} {{isset($dados['visualizar'])? 'readonly' : ''}}>
<br>
@if(!isset($dados['visualizar']))
    <button type="submit">Enviar</button>
@endif