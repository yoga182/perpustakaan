<!DOCTYPE html>
<html lang="en">

@include('admin.templates.partials.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('admin.templates.partials.header')

        @include('admin.templates.partials.sidebar')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">{{Breadcrumbs::current()->title}}</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            {{Breadcrumbs::render()}}
                                <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li> -->
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('admin.templates.partials.footer')

        <!-- Control Sidebar -->
        @include('admin.templates.partials.control')
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    @include('admin.templates.partials.script')

</body>

</html>