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
                  <p>Opens 7 days a week</p>
                  <p>Service from 8 am to 8 pm</p>
                </div>
                  </div>
              </div>
          </div>
        <p class="text-center bg-dark text-white mb-0">© 2019 Vision Nepal, All rights reserved </p>
   </footer>
   <!-- footer end -->
  <script>
    function clickCounter() {
  if(typeof(Storage) !== "undefined") {
    if (sessionStorage.lang ) {
      if(sessionStorage.lang == 'english'){
        sessionStorage.lang = 'nepali';
        console.log(sessionStorage.lang);
        location.reload();
        // $( "#english" ).hide();
        // $(".nep").hide();
        // $( "#nepali" ).show();
        // $(".eng").show();
      }
      else{
        sessionStorage.lang = 'english';
        console.log(sessionStorage.lang);
        location.reload();
        // $( "#nepali" ).hide();
        // $(".eng").hide();
        // $( "#english" ).show();
        // $(".nep").show();
      }
    } else {
      sessionStorage.lang = 'english';
      console.log(sessionStorage.lang);
      location.reload();
    }
  }
    }
  if(sessionStorage.lang){
    if(sessionStorage.lang == 'english'){
        // sessionStorage.lang = 'nepali';
        // console.log(sessionStorage.lang);
        $( "#english" ).hide();
        $(".nep").hide();
        $( "#nepali" ).show();
        $(".eng").show();
      }
      else{
        // sessionStorage.lang = 'english';
        // console.log(sessionStorage.lang);
        $( "#nepali" ).hide();
        $(".eng").hide();
        $( "#english" ).show();
        $(".nep").show();
        
      }

    }else{
          sessionStorage.lang = 'english';
          $( "#english" ).hide();
          $(".nep").hide();
          $( "#nepali" ).show();
          $(".eng").show();
   
    }
   
   </script>
   <!-- Optional JavaScript -->
       <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       <script type="text/javascript" src="lightbox-plus-jquery.min.js"></script>
  </body>
  </html>