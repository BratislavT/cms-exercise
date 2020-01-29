@extends('layouts.front.layout.main')
@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Subscribe to our newsletter</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
     
    @include('layouts.front.subscription.subscription_form')

</div>
<!-- /#page-wrapper -->

@endsection
