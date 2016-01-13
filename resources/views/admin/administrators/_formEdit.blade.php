<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Name', array('class' => 'col-lg-2 control-label')); !!}
    <div class="col-lg-10">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Your name']) !!}
        @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group">
    {!! Form::label('email', 'E-Mail', array('class' => 'col-lg-2 control-label')); !!}
    <div class="col-lg-10">
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Your e-mail']) !!}
    </div>
</div>
<div class="form-group">
    <label  class="col-lg-2 control-label">Server actual</label>
    <div class="col-lg-10">
        <select id="id_server"  name="id_server" class="form-control">
            @foreach ($servers as $server)
            <option value="{{ $server->id }}" >{{ $server->hostname }}</option>
            @endforeach
        </select>
    </div>
</div>





