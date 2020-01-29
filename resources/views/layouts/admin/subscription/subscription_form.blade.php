<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>



    <div class="container">
        <form id="frm" action="/admin/subscription" method="post">
            {{ csrf_field() }}

            <input type='hidden' id='formSettings' value='{{ $formSettings }}'    >

        </form>
    </div>
   
<script src='js/my_script.js' type='text/javascript'></script>

