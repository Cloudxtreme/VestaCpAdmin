@extends('layout.admin.index')

@section('title', 'Resellers')

@section('content')
<h1 class="page-header">
    @yield('title')
</h1>
<ol class="breadcrumb">
    <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('/admin') }}">Dashboard</a></li>
    <li class="active"><i class="fa fa-file"></i> @yield('title')</li>
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

{!!Form::open( ['url' => "admin/resellers/edit/$reseller->id", 'files' => true, 'class' => 'form-horizontal'] )!!}
    

<fieldset>
    <legend>Change reseller</legend>
    
    {!! Form::model($reseller)!!}
    
    @include('admin.resellers._form')
    
    <hr>    
    <div class="form-group">
      <label  class="col-lg-2 control-label"></label>
      <div class="col-lg-10">
          <a href="/admin/resellers" class="btn btn-default">Go Back</a>
        {!! Form::submit('Update', ['class'=>'btn btn-primary']); !!}
      </div>
    </div>
    
</fieldset>

{!!Form::close()!!}
@endsection



