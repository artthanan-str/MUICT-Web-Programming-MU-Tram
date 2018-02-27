<?php
    $id = $_SESSION['stationID'];
    // $sql = "SELECT * FROM photos WHERE stationID=$id";
    $sql = "SELECT * FROM photos WHERE stationID =".$id.";";
    $data = $connect->query($sql);
    $uName = array();
    $blobIMG = array();
    $stringModal = array();
    $count = 0;
    while($row = $data->fetch_assoc()){
      $stringModal[$count] = '<div style="width:100px;height:100px;display:inline-block">';
      $stringModal[$count] .= '<a title="'.$row['userName'].'" href="#">';
      $stringModal[$count] .= '<img class="thumbnail img-responsive"';
      $stringModal[$count] .= 'src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
      $stringModal[$count] .= '</a></div>';
      $count++;
    }
    $count = 0;
?>

<html>
<head>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="row">

      <?php
        foreach ($stringModal as $value) {
          echo "$value";
        }
      ?>

  </div>
</div>

<div tabindex="-1" class="modal fade" id="myModal" role="dialog" style="z-index: 2000">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
		<button class="close" type="button" data-dismiss="modal"></button>
		<h3 class="modal-title">Heading</h3>
	</div>
	<div class="modal-body">

	</div>
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
   </div>
  </div>
</div>
</body>
</html>

<style>
.modal-dialog {width:600px;}
.thumbnail {margin-bottom:6px;}
</style>

<script>
$(document).ready(function() {
$('.thumbnail').click(function(){
    $('.modal-body').empty();
  var title = $(this).parent('a').attr("title");
  $('.modal-title').html(title);
  $($(this).parents('div').html()).appendTo('.modal-body');
  $('#myModal').modal({show:true});
});
});
</script>
