<!-- footer -->
<footer>
    <div class="footer-section" id="contact">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-4">
                          <h1 class="text-uppercase">Follow us</h1>
                          <ul class="social-media">
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          </ul>
                      </div>
                      <div class="col-md-4">
                          <h1 class="text-uppercase">Contact us</h1>
                  <p><i class="f fa fa-location-arrow"></i>Diktel Municipality Ward No 1 Old Base Camp</p>
                  <p><i class="f fa fa-phone"></i>Phone no: 036-420638/036420639</p>
                  <p><i class="f fa fa-envelope"></i>Email: salapabikasbank@gmail.com</p>
                </div>
                <div class="col-md-4">
                          <h1 class="text-uppercase">Salapa Bikas Bank</h1>
                  <p>Opens 6 days a week</p>
                  <p>Service from 10 am to 5 pm</p>
                </div>
                  </div>
              </div>
          </div>
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
   <!--  <script> 
        $( '.collaspe .navbar-nav a' ).on( 'click', function () {
  $( '.collaspe .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
  $( this ).parent( 'li' ).addClass( 'active' );
}); 
    </script>  -->
 <!--   <script>
$(document).ready(function(){
        $('.pl-5 li').click(function(e) {
        $('.pl-5 li.active').removeClass('active');
        var $this = $(this);
        if (!$this.hasClass('active')) {
            $this.addClass('active');
        }
        e.preventDefault();
        });
});
</script> -->
   <!-- Optional JavaScript -->
       <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       <script type="text/javascript" src="lightbox-plus-jquery.min.js"></script>
  </body>
  </html>