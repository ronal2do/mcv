{!! Form::open(['url' => '/admin/categorias']) !!}

	  <fieldset class="form-group">
	    {!! Form::label('titulo','Titulo') !!}
	    {!! Form::text('titulo', null, ['class'=>'form-control', 'placeholder'=>'Entre com o titulo']) !!}
	    <small class="text-muted">We'll never share your email with anyone else.</small>
	  </fieldset>

  <button type="submit" class="btn btn-primary">Enviar</button>

{!! Form::close() !!}


