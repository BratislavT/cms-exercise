@extends('layouts.admin.layout.main')
@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Map</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
     
    @include('layouts.admin.locationMap.display_map_with_marker')
    @include('layouts.admin.locationMap.enter_map_parameters')

</div>
<!-- /#page-wrapper -->

@endsection

