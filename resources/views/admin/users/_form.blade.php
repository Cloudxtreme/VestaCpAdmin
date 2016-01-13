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
<div class="form-group {{ $errors->has('lasname') ? ' has-error' : '' }}">
    {!! Form::label('lasname', 'Last Name', array('class' => 'col-lg-2 control-label')); !!}
    <div class="col-lg-10">
        {!! Form::text('lasname', null, ['class' => 'form-control', 'placeholder' => 'Your lasname']) !!}
        @if ($errors->has('lasname'))
        <span class="help-block">
            <strong>{{ $errors->first('lasname') }}</strong>
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
    <label  class="col-lg-2 control-label">Select the reseller</label>
    <div class="col-lg-10">
        <select id="id_reseller"  name="id_reseller" class="form-control">
            @foreach ($resellers as $reseller)
            <option value="{{ $reseller->id }}" >{{ $reseller->name }} - {{ $reseller->email }}</option>
            @endforeach
        </select>
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

<div class="form-group">
    {!! Form::label('password', 'Password', array('class' => 'col-lg-2 control-label')); !!}
    <div class="col-lg-10">
        {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Password']) !!}
    </div>
</div>



