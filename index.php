<!DOCTYPE HTML>
<html>
    <head>     

<style>
#slides{
	width: 1023px;
	height: 100px;
}
.caption {
  position: relative;
  margin-top: -75px;
  margin-right: 0;
  width: 300px;
  text-align: center;
  float: right;
  padding: 5px 10px;
  background: #000;
  color: #FFF;
  display: none;
  border-bottom-left-radius: 5px;
  border-top-left-radius: 5px;
}
</style>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.cross-slide.min.js"></script>
		

<script type="text/javascript">

$(function(){
 $('#cross').crossSlide({
  speed: 10,
  fade: 1
 }, [
  { src: 'aplicaciones-web.jpg', dir:'up', alt: 'desarrollo de aplicaciones web a medida' },
  { src: 'internet-marketing.jpg', dir:'up', alt: 'servicios de internet marketing. SEO, SEM, SMO' },
  { src: 'programacion-redes-sociales.jpg', dir:'down', alt: 'programacion de redes y herramientas sociales' }
], function(idx, img, idxOut, imgOut) {
    if (idxOut == undefined)
    {
        // starting single image phase, put up caption
        $('div.caption').text(img.alt).animate({ opacity: .7 })
            }
            else
            {
// starting cross-fade phase, take out caption
$('div.caption').animate({ opacity: 0 })
} });

$('div.caption').show().css({ opacity: 0 })
});
</script>

		
	</head>
    
    <body>
	<div id="slides">
		<div id="cross" style="width:1023px;height:100px;">Loading...</div>
		<div class="caption"></div>
	</div>
    </body>
    
</html>