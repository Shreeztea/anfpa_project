<!-- footer -->
 <footer>
      <p class="text-center bg-dark text-white mb-0">© 2019 Vision Nepal, All rights reserved </p>
 </footer>
 <!-- footer end -->

<script>
$( "#english" ).hide();
$(".nep").hide();
$( "#english" ).click(function( event ) {
  event.preventDefault();
  $( this ).hide();
  $(".nep").hide();
  $(".eng").show();
  $("#nepali").show();
});

$( "#nepali" ).click(function( event ) {
  event.preventDefault();
  $( this ).hide();
  $(".eng").hide();
  $(".nep").show();
  $("#english").show();
});
</script>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>