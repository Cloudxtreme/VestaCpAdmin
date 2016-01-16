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
<div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
    {!! Form::label('username', 'Username', array('class' => 'col-lg-2 control-label')); !!}
    <div class="col-lg-10">
        {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Create username']) !!}
        @if ($errors->has('username'))
        <span class="help-block">
            <strong>{{ $errors->first('username') }}</strong>
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
<div class="form-group {{ $errors->has('domain') ? ' has-error' : '' }}">
    {!! Form::label('domain', 'Domain', array('class' => 'col-lg-2 control-label')); !!}
    <div class="col-lg-10">
        {!! Form::text('domain', null, ['class' => 'form-control', 'placeholder' => 'Your domain']) !!}
        @if ($errors->has('domain'))
        <span class="help-block">
            <strong>{{ $errors->first('domain') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group">
    <label  class="col-lg-2 control-label">Select the package</label>
    <div class="col-lg-10">
        <select name="package" class="form-control">
            @foreach ($packages as $package)
            <option value="{{$package->name}}" >{{$package->name}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group">
    <label  class="col-lg-2 control-label">Select the reseller</label>
    <div class="col-lg-10">
        <select name="id_reseller" class="form-control">
            @foreach ($resellers as $reseller)
            <option value="{{ $reseller->id }}" >{{ $reseller->name }} - {{ $reseller->email }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group">
    <label  class="col-lg-2 control-label">Server actual</label>
    <div class="col-lg-10">
        <select name="hostname" class="form-control">
            @foreach ($servers as $server)
            <option value="{{ $server->hostname }}" >{{ $server->hostname }}</option>
            @endforeach
        </select>
    </div>
</div>



