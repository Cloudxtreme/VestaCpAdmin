@extends('layout.admin.index')

@section('title', 'Packages')

@section('content')
<h1 class="page-header">
    @yield('title')
</h1>
<ol class="breadcrumb">
    <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('/admin') }}">Dashboard</a></li>
    <li class="active"><i class="fa fa-file"></i> @yield('title')</li>
</ol>

<a href="packages/create" class="btn btn-primary">Add new package</a>
<hr>

@if($status != "")
<div class="alert alert-dismissible alert-success">
    <strong>Well done!</strong> {{$status}} </a>.
</div>
@endif

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="fa fa-server"></i> @yield('title') ( {{$packages->total()}} Registered package )
        </h3>
    </div>
    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Package</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
        <tbody>
            @forelse($packages as $package)
            <tr>
                <td>{{$package->id}}</td>
                <td>{{$package->name}}</td>
                <td>{{$package->created_at}}</td>
                
                <td align="center">
                    <a href="packages/delete/{{$package->id}}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4">There is no registered users</td>
            </tr>
            @endforelse
            <tr>
                <td colspan="4" align="center">
                    {!! $packages->render() !!}
                </td>
            </tr>
        </tbody>
    </table>
    @endsection




