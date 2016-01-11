<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="description" content="Crud Laravel 5.1">
        <meta name="author" content="Hélio Correia">
        <link rel="stylesheet" href="/asset/css/bootstrap.min.css" >
        <link rel="stylesheet" href="/asset/css/sb-admin.css" >
        <link href="/asset/css/font-awesome.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div id="wrapper">
            @include('layout.reseller.menu')

            <div id="page-wrapper">
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            

                            @yield('content')
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->

        <script src="/asset/js/jquery-2.1.4.min.js"></script>
        <script src="/asset/js/bootstrap.min.js"></script>


    </body>
</html>

