@extends('layouts.front.layout.main')
@section('content')

<div id="page-wrapper">
     
    @include('layouts.front.frontPage.jumbotron')
    @include('layouts.front.frontPage.carousel')
    @include('layouts.front.frontPage.featurette')
    @include('layouts.front.frontPage.footer_sign_up')

</div>
<!-- /#page-wrapper -->

@endsection