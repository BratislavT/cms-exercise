<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>


<div class="container2">
    <form id="frm" action="/subscription" method="post">
        {{ csrf_field() }}

        <input type='hidden' id='frontEndJson' value='{{ $frontEndJson }}'    >

    </form>
</div>

<script src='js/my_script_front.js' type='text/javascript'></script>

