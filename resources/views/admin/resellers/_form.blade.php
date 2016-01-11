<div class="form-group">
    <label  class="col-lg-2 control-label">Company</label>
    <div class="col-lg-10">
        {!! Form::text('company', null, ['class' => 'form-control', 'placeholder' => 'Name of company']) !!}
    </div>
</div>
<div class="form-group">
    <label  class="col-lg-2 control-label">Name</label>
    <div class="col-lg-10">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Your name']) !!}
    </div>
</div>
<div class="form-group">
    <label  class="col-lg-2 control-label">E-mail</label>
    <div class="col-lg-10">
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Your login mail']) !!}
    </div>
</div>
<div class="form-group">
    <label  class="col-lg-2 control-label">Plan</label>
    <div class="col-lg-10">
        <select class="form-control" id="domains" name="domains">
            <option value="10">10 dominios</option>
            <option value="20">20 dominios</option>
            <option value="30">30 dominios</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label  class="col-lg-2 control-label">Key api</label>
    <div class="col-lg-10">
        {!! Form::text('key', null, ['class' => 'form-control', 'placeholder' => 'Key api integration whmcs']) !!}
    </div>
</div>

<div class="form-group">
    <label  class="col-lg-2 control-label">Password</label>
    <div class="col-lg-10">
        {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Password']) !!}
    </div>
</div>

<input type="hidden" name="status" value="1">

