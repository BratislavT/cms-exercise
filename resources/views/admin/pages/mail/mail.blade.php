@extends('admin.layouts.main')
@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Compose Email</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    @include('admin.pages.mail.partials.flash_message')    

    <div class="row">

        @include('admin.pages.mail.partials.form')
        @include('admin.pages.mail.partials.display_stored_mails')
 
        {{ $mails-> links() }}

    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

@endsection
