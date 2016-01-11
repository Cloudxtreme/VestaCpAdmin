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

<a href="resellers/create" class="btn btn-primary">Add new reseller</a>
<hr>

@if($status != "")
<div class="alert alert-dismissible alert-success">
    <strong>Well done!</strong> {{$status}} </a>.
</div>
@endif

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="fa fa-server"></i> @yield('title') ( {{$resellers->total()}} Registered reseller )
        </h3>
    </div>
    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Company</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Domains</th>
            <th>Created At</th>
            <th colspan="2" align="center">Actions</th>
        </tr>
        <tbody>
            @forelse($resellers as $reseller)
            <tr>
                <td>{{$reseller->id}}</td>
                <td>{{$reseller->company}}</td>
                <td>{{$reseller->name}}</td>
                <td>{{$reseller->email}}</td>
                <td>{{$reseller->domains}}</td>
                <td>{{$reseller->created_at}}</td>
                <td align="center">
                    <a href="resellers/edit/{{$reseller->id}}" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i> Edit</a>
                </td>
                <td align="center">
                    <a href="resellers/delete/{{$reseller->id}}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8">There is no registered users</td>
            </tr>
            @endforelse
            <tr>
                <td colspan="8" align="center">
                    {!! $resellers->render() !!}
                </td>
            </tr>
        </tbody>
    </table>
@endsection


