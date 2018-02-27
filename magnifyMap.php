<html>
<head>
  <title>MU-Tram Project</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Quattrocento+Sans|Roboto|Signika" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/toggleStyle.css" />
  <link rel="stylesheet" type="text/css" href="css/search.css" />
  <link rel="stylesheet" type="text/css" href="css/Tramstyle.css" />
  <link rel="stylesheet" type="text/css" href="css/putTramStyle.css" />
  <link rel="stylesheet" type="text/css" href="css/LogInForm.css" />
  <link rel="stylesheet" type="text/css" href="css/magnify.css" />

  <script  type="text/javascript" src="javascript/jquery.js"></script>
	<script src="javascript/jquery.elevatezoom.js" type="text/javascript"></script>

</head>
<body>
  <?php include 'menubar.php';?>
    <h2 style="margin-top:50px;margin-left:320px"><b>Use magnify to see the big map</h2>
  	<!-- <img id="zoom_07" style="margin-right:25%;margin-left:25%;width:55%" src="image/map/save8.jpg" data-zoom-image="image/map/save8.jpg"/> -->
    <img id="zoom_07" style="margin-right:25%;margin-left:25%;width:55%" src="image/map/MahidolMap.jpg" data-zoom-image="image/map/MahidolMap.jpg"/>
</body>
</html>

<script>
$("#zoom_07").elevateZoom({
zoomType				: "lens",
lensShape : "round",
scrollZoom : true,
lensSize    : 200
})
</script>
