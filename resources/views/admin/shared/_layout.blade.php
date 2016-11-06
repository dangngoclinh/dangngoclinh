<!-- Header -->
@include('admin.shared._header')

<!-- Left side column. contains the sidebar -->
@include('admin.shared._leftside')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
@include('admin.shared._contentheader')

<!-- Main content -->
<section class="content">

@yield('content')

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Content Footer -->
@include('admin.shared._contentfooter')

<!-- Control Sidebar -->
@include('admin.shared._controlslider')

<!-- Footer -->
@include('admin.shared._footer')