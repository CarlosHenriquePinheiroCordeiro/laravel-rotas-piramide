@if(!isset($dados['visualizar']))
    @csrf
@endif
<label for="id">ID</label>
<input type="number" name="id" id="id" value=@if(isset($dados)) {{ $dados['contato']->id }} @endif @if (isset($dados['visualizar'])) {{'readonly'}} @endif >
<br>
<label for="nome">Nome</label>
<input name="nome" id="nome" value=@if(isset($dados)) {{ $dados['contato']->nome }} @endif @if (isset($dados['visualizar'])) {{'readonly'}} @endif >
<br>
<label for="telefone">Telefone</label>
<input type="tel" name="telefone" id="telefone" value=@if(isset($dados)) {{ $dados['contato']->telefone }} @endif @if (isset($dados['visualizar'])) {{'readonly'}} @endif>
<br>
<label for="email">E-Mail</label>
<input type="email" name="email" id="email" value=@if(isset($dados)) {{ $dados['contato']->email }} @endif @if (isset($dados['visualizar'])) {{'readonly'}} @endif>
<br>
@if(!isset($dados['visualizar']))
    <button type="submit">Enviar</button>
@endif