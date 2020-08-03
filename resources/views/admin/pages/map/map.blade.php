@extends('admin.layouts.main')
@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Map</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
     
    @include('admin.pages.map.partials.location')
    @include('admin.pages.map.partials.coordinates')

</div>
<!-- /#page-wrapper -->

@endsection

