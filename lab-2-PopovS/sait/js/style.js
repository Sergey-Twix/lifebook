<script type="text/javascript">
 $(document).ready(function(){
    $("#btn").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href');
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    })
});
</script>

// Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время
var btn = document.getElementById('btn');
btn.onclick = function() {
    alert ('Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время')
}
