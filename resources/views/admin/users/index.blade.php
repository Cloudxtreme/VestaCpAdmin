@extends('layout.admin.index')

@section('title', 'Users')

@section('content')
<h1 class="page-header">
    @yield('title')
</h1>
<ol class="breadcrumb">
    <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('/admin') }}">Dashboard</a></li>
    <li class="active"><i class="fa fa-file"></i> @yield('title')</li>
</ol>

<a href="users/create" class="btn btn-primary">Add new user</a>
<hr>

@if($status != "")
<div class="alert alert-dismissible alert-success">
    <strong>Well done!</strong> {{$status}} </a>.
</div>
@endif

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="fa fa-users"></i> Users ( {{$users->total()}} Registered administrator )
        </h3>
    </div>
    
    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Last name</th>
            <th>E-mail</th>
            <th>Username</th>
            <th>Domain</th>
            <th>Server</th>
            <th>Package</th>
            <th>Reseller</th>
            <th>Created At</th>
            <th colspan="2" align="center">Actions</th>
        </tr>
        <tbody>
            @forelse($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->lasname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->domain}}</td>
                <td>{{$user->hostname}}</td>
                <td>{{$user->package}}</td>
                <td>{{$user->id_reseller}}</td>
                <td>{{$user->created_at}}</td>
                <td align="center">
                    <a href="users/edit/{{$user->id}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o"></i> Edit</a>
                </td>
                <td align="center">
                    <a href="users/delete/{{$user->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="11">There is no registered users</td>
            </tr>
            @endforelse
            <tr>
                <td colspan="11" align="center">
                    {!! $users->render() !!}
                </td>
            </tr>
        </tbody>
    </table>
@endsection


