<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<script>
// Synchronize words in jumbotron with carousel slides

$( document ).ready(function() {
    
    $('.word').hide();
    $('.first').show();
    
    $('#myCarousel').on('slid.bs.carousel', function (ev) {
        
        var idx = $(ev.relatedTarget).index() + 1;
        idx = parseInt(idx);

        switch (idx) {
        case 1:
            $('.word').hide(100);
            $('.first').show("fast");
        break;
        case 2:
            $('.word').hide(100);
            $('.second').show("fast");
        break;
        case 3:
            $('.word').hide(100);
            $('.third').show("fast");
        break;
        case 4:
            $('.word').hide(100);
            $('.fourth').show("fast");
        break;
        default:
            $('.word').hide(100);
            $('.fifth').show("fast");
        };
    });
});
</script>

<script src="js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>