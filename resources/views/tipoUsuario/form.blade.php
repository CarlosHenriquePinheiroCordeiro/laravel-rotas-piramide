@if(!isset($dados['visualizar']))
    @csrf
@endif
<label for="tuscodigo">ID</label>
<input type="number" name="tuscodigo" id="tuscodigo" value=@if(isset($dados['tipoUsuario'])) {{ $dados['tipoUsuario']->tuscodigo }} @endif @if (isset($dados['visualizar']) || isset($dados['insert'])) {{'readonly'}} @endif >
<br>
<label for="tusnome">Nome</label>
<input name="tusnome" id="tusnome" value=@if(isset($dados['tipoUsuario'])) {{ $dados['tipoUsuario']->tusnome }} @endif @if (isset($dados['visualizar'])) {{'readonly'}} @endif >
<br>
@if(!isset($dados['visualizar']))
    <button type="submit">Enviar</button>
@endif