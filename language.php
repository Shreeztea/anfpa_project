<html lang="en">
<head>
  <meta charset="utf-8">
  <title>hide demo</title>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>
 
<p>Hello</p>
<a href="#" id="english">change language to english</a>
<a href="#" id="nepali">change language to nepali</a>
<p class="eng">english</p>
<p class="nep">nepali</p>


<p class="eng">english 1</p>
<p class="nep">nepali 1</p>

<p class="eng">english 2</p>
<p class="nep">nepali 2</p>

 
<script>
$( "#nepali" ).hide();
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
 
</body>
</html>