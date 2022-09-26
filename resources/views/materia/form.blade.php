@if(!isset($dados['visualizar']))
    @csrf
@endif
<label for="matcodigo">ID</label>
<input type="number" name="matcodigo" id="matcodigo" value=@if(isset($dados['materia'])) {{ $dados['materia']->matcodigo }} @endif @if (isset($dados['visualizar']) || isset($dados['insert'])) {{'readonly'}} @endif >
<br>
<label for="matnome">Nome</label>
<input name="matnome" id="matnome" value=@if(isset($dados['materia'])) {{ $dados['materia']->matnome }} @endif @if (isset($dados['visualizar'])) {{'readonly'}} @endif >
<br>
<label for="matdescricao">Descrição</label>
<input name="matdescricao" id="matdescricao" value=@if(isset($dados['materia'])) {{ $dados['materia']->matdescricao }} @endif @if (isset($dados['visualizar'])) {{'readonly'}} @endif >
<br>
@if(!isset($dados['visualizar']))
    <button type="submit">Enviar</button>
@endif