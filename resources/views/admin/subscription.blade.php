@extends('layouts.admin.layout.main')
@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Subscription Form Management</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
     
    @include('layouts.admin.subscription.subscription_form')

</div>
<!-- /#page-wrapper -->

@endsection