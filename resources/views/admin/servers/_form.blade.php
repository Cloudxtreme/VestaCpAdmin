<div class="form-group">
    <label  class="col-lg-2 control-label">Server IP</label>
    <div class="col-lg-10">
        {!! Form::text('hostname', null, ['class' => 'form-control', 'placeholder' => 'Server IP']) !!}
    </div>
</div>
<div class="form-group">
    <label  class="col-lg-2 control-label">Username</label>
    <div class="col-lg-10">
        {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Usename VestaCP']) !!}
    </div>
</div>
<div class="form-group">
    <label  class="col-lg-2 control-label">Nameserver 1</label>
    <div class="col-lg-10">
        {!! Form::text('nsmaster', null, ['class' => 'form-control', 'placeholder' => 'Name sever master VestaCP']) !!}
    </div>
</div>
<div class="form-group">
    <label  class="col-lg-2 control-label">Nameserver 2</label>
    <div class="col-lg-10">
        {!! Form::text('nsslave', null, ['class' => 'form-control', 'placeholder' => 'Name server slave VestaCP']) !!}
    </div>
</div>
<div class="form-group">
    <label  class="col-lg-2 control-label">Password</label>
    <div class="col-lg-10">
        {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Password VestaCP']) !!}
    </div>
</div>


