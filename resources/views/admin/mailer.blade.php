@extends('layouts.admin.layout.main')
@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Compose Email</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    @include('layouts.admin.mailToCustomer.message_sent')    

    <div class="row">

        @include('layouts.admin.mailToCustomer.email_form')
        @include('layouts.admin.mailToCustomer.display_stored_mails')
 
        {{ $mails-> links() }}

    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

@endsection
