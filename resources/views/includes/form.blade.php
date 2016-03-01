{!! Form::open(['url' => '/admin/posts', 'files' => true]) !!}
    <fieldset class="form-group">
      {!! Form::label('titulo','Titulo') !!}
      {!! Form::text('titulo', null, ['class'=>'form-control', 'placeholder'=>'Entre com o titulo']) !!}
      <small class="text-muted">We'll never share your email with anyone else.</small>
    </fieldset>
   

    <fieldset class="form-group">
      {!! Form::label('Categoria','Categoria:') !!}
      {!! Form::select('categoria_id', $categorias, null, ['class'=>'form-control']) !!}
    </fieldset>

    <fieldset class="form-group">
      <label for="texto">Texto</label>
      <textarea class="form-control" id="texto" rows="3" name="texto"></textarea>
    </fieldset>

    <fieldset class="form-group">
      <label for="foto">File input</label>
      <input type="file" class="form-control-file" id="foto" name="foto">
      <small class="text-muted">This is some placeholder block-level help text for the above input.</small>
    </fieldset>
 
    <button type="submit" class="btn btn-primary">Submit</button>
{!! Form::close() !!}