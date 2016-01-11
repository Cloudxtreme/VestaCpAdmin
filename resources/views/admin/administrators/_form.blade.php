<div class="form-group">
    <label  class="col-lg-2 control-label">Name</label>
    <div class="col-lg-10">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Your name']) !!}
    </div>
</div>
<div class="form-group">
    <label  class="col-lg-2 control-label">E-Mail</label>
    <div class="col-lg-10">
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Your e-mail']) !!}
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
    <label  class="col-lg-2 control-label">Password</label>
    <div class="col-lg-10">
        {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Password']) !!}
    </div>
</div>




