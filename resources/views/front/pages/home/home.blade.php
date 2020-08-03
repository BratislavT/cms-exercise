@extends('front.layouts.app')
@section('content')

<div id="page-wrapper">
    
    @include('front.pages.home.partials.jumbotron')
    @include('front.pages.home.partials.carousel')
    @include('front.pages.home.partials.featurette')
    @include('front.pages.home.partials.motto')

</div>
<!-- /#page-wrapper -->

@endsection