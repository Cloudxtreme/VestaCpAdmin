@extends('layout.admin.index')

@section('title', 'Página do vendedor')


@section('content')
<h1 class="page-header">
    @yield('title')
</h1>
<ol class="breadcrumb">
    <li><i class="fa fa-dashboard"></i>  <a href="{{ URL::to('/') }}">Dashboard</a></li>
    <li class="active"><i class="fa fa-file"></i> Servers</li>
</ol>


Você está autenticado como vendedor.
@endsection
