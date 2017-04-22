<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
<script src="http://malsup.github.com/jquery.form.js"></script> 
<script> 
        
  $(document).ready(function() { 
          
       $('#myForm').ajaxForm({
       
       dataType: "json",
       success:function(data){
          $("#a1").text(data.a1); 
          $("#a4").text(data.a4);
          $("#a3").html(data.a3);
          $("#img_m").attr("src", "/posters/preview/"+data.img1);
       }
       
       }); 
  }); 
 </script> 
<div id="content" style="box-shadow:15px 10px 15px rgba(0,0,0,0.5); border-radius: 10px; max-height: 1500px; overflow: auto;">

   <h2> Все афиши</h2>
    <hr>

<?php
 $y=db::s("select * from posters order by a4 desc");
foreach($y as $x)    
{
?>

<form id="myForm" method="post" action="../core/form.php">
<input type="hidden" name="id" value="<?=$x->id;?>" />

<input type="submit" name="af" value="<?=$x->a4;?>" style="float: left; margin: 5px;">
</form>
<?php 
 }
 ?>
<div style="clear: both;"></div>
<br><hr>
<div> 
<h3 id="a4" style="color: #f00;"></h3>
<h2 id="a1"></h2><br> 
<img id="img_m" src="/posters/20 декабря 2014 г. - А1.jpg" height="450" style="float: left;margin-right: 50px; margin-bottom: 50px;box-shadow:15px 10px 15px rgba(0,0,0,0.5); 
              border-radius: 10px;">
<div id="a3"></div>
 </div>  

