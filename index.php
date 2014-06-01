<html>
<head>
<style type="text/css"> 
	body{
	background: #c0a154 url(//www.blogblog.com/1kt/watermark/body_background_birds.png) repeat scroll top left;
	}
	.test{  max-width: 108px;
    min-width: 1080px;
	background: url("//www.blogblog.com/1kt/watermark/post_background_birds.png") repeat scroll left top rgba(0, 0, 0, 0);
    border: 1px dotted #CCBB99;

    margin: 0 0 25px;
    padding: 15px 20px;
	
	}
    
</style> 
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#getgeocode").click(function(){
  var address= $('#address').val()
		$.ajax({
          url: "GoogleMapAPIV3.class.php",
          method: "post",
          dataType: "text", 
          data: { address: address},
          success: function(reslut){ 
			var test =reslut;
             $('#lon').val('123');
			 alert(test);
			 alert(1);
          }
        });	
	$("#lat").val(address);
  });
});
</script>

</head>
<body>
<div class="test">
<form name="table" id="table" action="" method="post">	
<input size="60" name="address" id="address" value="雲林縣虎尾鎮林森路二段四七七巷七十五號" type="text" />
<input name="editButton" id="editButton" type="submit"  value="確定" " />
 <?
	require_once('GoogleMapAPIV3.class.php');
	echo "<br>".$_POST['address']."--	座標為:";
    $map = new GoogleMapAPI();
	$address_post=$_POST['address'];
    $geocode=$map->geoGetCoords($address_post);
	echo $geocode['lat'].",".$geocode['lon'];
 ?>
<p>lat=<input size="10" name="lat" id="lat" value="" type="text" />  ,lon=
<input size="10" name="lon" id="lon" value="" type="text" /></p>
<button id="getgeocode" type="button">Click me</button>
</div>
<br>
<div>
	<div>
		<div>

		</div>
	</div>
</div>

</body>
</html>
    <br>


  







