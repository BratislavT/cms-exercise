{{-- display if message sent or not --}}
@if (Session::has('flash_message1'))
    <div class="alert alert-success"><em> {!! session('flash_message1') !!}</em></div>
    <?php session_unset(); ?>
@elseif (Session::has('flash_message2'))
    <div class="alert alert-danger"><em> {!! session('flash_message2') !!}</em></div>
    <?php session_unset(); ?>
@endif 
