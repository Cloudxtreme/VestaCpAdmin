@extends('layout.admin.index')

@section('title', 'Servers')

@section('content')
<h1 class="page-header">
    @yield('title')
</h1>
<ol class="breadcrumb">
    <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('/admin') }}">Dashboard</a></li>
    <li class="active"><i class="fa fa-file"></i> @yield('title')</li>
</ol>

<a href="servers/create" class="btn btn-primary">Add new server</a>
<hr>

@if($status != "")
<div class="alert alert-dismissible alert-success">
    <strong>Well done!</strong> {{$status}} </a>.
</div>
@endif

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="fa fa-server"></i> Servers ( {{$servers->total()}} Registered server )
        </h3>
    </div>
    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Hostname</th>
            <th>Username</th>
            <th>Nameserver Master</th>
            <th>Nameserver Slave</th>
            <th>Created At</th>
            <th colspan="2" align="center">Actions</th>
        </tr>
        <tbody>
            @forelse($servers as $server)
            <tr>
                <td>{{$server->id}}</td>
                <td>{{$server->hostname}}</td>
                <td>{{$server->username}}</td>
                <td>{{$server->nsmaster}}</td>
                <td>{{$server->nsslave}}</td>
                <td>{{$server->created_at}}</td>
                <td align="center">
                    <a href="servers/edit/{{$server->id}}" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i> Edit</a>
                </td>
                <td align="center">
                    <a href="servers/delete/{{$server->id}}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8">There is no registered server</td>
            </tr>
            @endforelse
            <tr>
                <td colspan="8" align="center">
                    {!! $servers->render() !!}
                </td>
            </tr>
        </tbody>
    </table>
@endsection


