<div class="container2">
    <form id="frm" name="registration" action="/subscription" method="post">
        {{ csrf_field() }}

        <input type='hidden' id='frontEndJson' value='{{ $frontEndJson }}'    >

    </form>
</div>


<script src='js/my_script_front.js' type='text/javascript'></script>