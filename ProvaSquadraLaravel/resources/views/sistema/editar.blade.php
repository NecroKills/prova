<!-- Inclui o header no template  -->
@extends('layout.site')

<!-- Passa o titulo Sistemas -->
@section('titulo','Editar Sistema')

<!-- Passa o conteudo para a pagina -->
@section('conteudo')

  <div class="container">
    <h3 class="center">Editando Sistema</h3>

    <!--Verifica se existem erros, se exister mais de um erro então ira mostrar na interface  -->
    @if(isset($errors) && count($errors) >0)
    <div class="card-panel red lighten-4 red-text text-darken-4">
      @foreach($errors->all() as $error)
        <p>{{$error}}</p>
      @endforeach
    </div>
    @endif
    <div class="row">
      <form class="" action="{{route('sistema.atualizar', $registro->id)}}" method="post">
        <input type="hidden" name="_method" value="put">
        {{ csrf_field() }}
        <div class="input-field">
          <!-- verifica se existe a variavel descrição, então mostra no campo, caso não exista mostrar vazio -->
          <input maxlength="100" type="text" maxlength="100" size="100" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
          <label>Descrição</label>
        </div>
        <div class="input-field">
          <input maxlength="10" type="text" maxlength="10" size="10" name="sigla" value="{{isset($registro->sigla) ? $registro->sigla : ''}}">
          <label>Sigla</label>
        </div>
        <div class="input-field">
          <input maxlength="100" type="text" maxlength="100" size="100" name="email" value="{{isset($registro->email) ? $registro->email : ''}}">
          <label>E-mail de atendimento do sistema</label>
        </div>
        <div class="input-field">
          <input maxlength="50" type="text" maxlength="50" size="50" name="url" value="{{isset($registro->url) ? $registro->url : ''}}">
          <label>URL</label>
        </div>
        <div class="input-field">
          <select type ="text" name="status" value="{{isset($registro->status) ? $registro->status : ''}}">
            <option value="Ativo">Ativo</option>
            <option value="Cancelado">Cancelado</option>
          </select>
          <label>Status</label>
        </div>
        <div class="input-field">
          <input type="text" maxlength="100" size="100" name="usuario" disabled value="{{isset($registro->usuario) ? $registro->usuario : ''}}">
          <label>Usuário responsavel pela última alteração</label>
        </div>
        <div class="input-field">
          <input type="text" name="updated_at" disabled value="{{isset($registro->updated_at) ? $registro->updated_at : ''}}">
          <label>Data da última alteração</label>
        </div>
        <div class="input-field">
          <input type="text" maxlength="500" size="500" name="justificativa" disabled value="{{isset($registro->justificativa) ? $registro->justificativa : ''}}">
          <label>Justificativa da última alteração</label>
        </div>
        <div class="input-field">
          <textarea maxlength="500" size="500"name="justificativa"></textarea>
          <label>Nova justificativa de alteração</label>
        </div>
        <div class="col s10">
          <a class="btn deep-blue" href="{{route('home')}}">Voltar</a>
        </div>
        <div class="row">
            <div class="col s2">
              <button class="btn deep-orange">Atualizar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection
