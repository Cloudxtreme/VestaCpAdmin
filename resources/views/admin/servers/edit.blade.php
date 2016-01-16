@extends('layout.admin.index')

@section('title', 'Servers')

@section('content')
<h1 class="page-header">
    @yield('title')
</h1>
<ol class="breadcrumb">
    <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('/admin') }}">Dashboard</a></li>
    <li class="active"><i class="fa fa-file"></i> Servers</li>
</ol>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{!!Form::open( ['url' => "admin/servers/edit/$server->id", 'files' => true, 'class' => 'form-horizontal'] )!!}
    

<fieldset>
    <legend>Change server</legend>
    
    {!! Form::model($server)!!}
    
    @include('admin.servers._form')
    
    <hr>    
    <div class="form-group">
      <label  class="col-lg-2 control-label"></label>
      <div class="col-lg-10">
          <a href="/admin/servers" class="btn btn-default">Go Back</a>
        {!! Form::submit('Update', ['class'=>'btn btn-primary']); !!}
      </div>
    </div>
    
</fieldset>

{!!Form::close()!!}
@endsection



