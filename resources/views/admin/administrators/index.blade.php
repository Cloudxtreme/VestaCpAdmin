@extends('layout.admin.index')

@section('title', 'Administrators')

@section('content')
<h1 class="page-header">
    @yield('title')
</h1>
<ol class="breadcrumb">
    <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('/admin') }}">Dashboard </a></li>
    <li class="active"><i class="fa fa-file"></i> @yield('title')</li>
</ol>

<a href="administrators/create" class="btn btn-primary">Add new administrator</a>
<hr>

@if($status != "")
<div class="alert alert-dismissible alert-success">
    <strong>Well done!</strong> {{$status}} </a>.
</div>
@endif

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="fa fa-server"></i> Administrators ( {{$admins->total()}} Registered administrator )
        </h3>
    </div>
    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Created At</th>
            <th colspan="2" align="center">Actions</th>
        </tr>
        <tbody>
            @forelse($admins as $admin)
            <tr>
                <td>{{$admin->id}}</td>
                <td>{{$admin->name}}</td>
                <td>{{$admin->email}}</td>
                <td>{{$admin->created_at}}</td>
                <td align="center">
                    <a href="administrators/edit/{{$admin->id}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o"></i> Edit</a>
                </td>
                <td align="center">
                    <a href="administrators/delete/{{$admin->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8">There is no registered users</td>
            </tr>
            @endforelse
            <tr>
                <td colspan="8" align="center">
                    {!! $admins->render() !!}
                </td>
            </tr>
        </tbody>
    </table>
    
@endsection


