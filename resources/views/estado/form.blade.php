@if(!isset($dados['visualizar']))
    @csrf
@endif
<label for="estcodigo">ID</label>
<input type="number" name="estcodigo" id="estcodigo" value=@if(isset($dados['estado'])) {{ $dados['estado']->estcodigo }} @endif @if (isset($dados['visualizar']) || isset($dados['insert'])) {{'readonly'}} @endif >
<br>
<label for="estnome">Nome</label>
<input name="estnome" id="estnome" value=@if(isset($dados['estado'])) {{ $dados['estado']->estnome }} @endif @if (isset($dados['visualizar'])) {{'readonly'}} @endif >
<br>
@if(!isset($dados['visualizar']))
    <button type="submit">Enviar</button>
@endif