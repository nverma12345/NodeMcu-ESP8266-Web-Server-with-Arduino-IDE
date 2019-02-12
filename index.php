<html>
<head>
<link rel="icon" type="png" href="fevivon.png"/>
<script>

$(document).ready(function(){ 

$('body').find('img[src$="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]').remove();

}); 

</script>

<style>

img[src*="000webhost"]{

display: none !important;

}

</style>


<style>


.hide{
display:none;
}

</style>

<script src = "jquery-2.2.3.min.js" ></script>
<script>
$( document ).ready(function(){

$("#a_on").click(function(){
$("#a").attr("value",1);
$("#a").html("1");

post_data();
});

$("#a_off").click(function(){
$("#a").attr("value",0);
$("#a").html("0");

post_data();
});

$("#b_on").click(function(){
$("#b").attr("value",1);
$("#b").html("1");
post_data();

});

$("#b_off").click(function(){
$("#b").attr("value",0);
$("#b").html("0");
post_data();

});

$("#c_on").click(function(){
$("#c").attr("value",1);
$("#c").html("1");
post_data();

});

$("#c_off").click(function(){
$("#c").attr("value",0);
$("#c").html("0");

post_data();
});


$("#d_on").click(function(){
$("#d").attr("value",1);
$("#d").html("1");

post_data();
});

$("#d_off").click(function(){
$("#d").attr("value",0);
$("#d").html("0");

post_data();
});
     



function post_data()
{

  var a_data = $("#a").attr("value");
  var b_data = $("#b").attr("value");
  var c_data = $("#c").attr("value");
  var d_data = $("#d").attr("value");
  $.post( "my_data_write.php", { a_data: a_data,b_data: b_data,c_data: c_data,d_data: d_data  },function(){ location.reload();} );
}
//window.re
});

</script>
</head>


<body  background-size=100% background="logo_final_white_card1.png">

<?php 
$my_bit_array = Array();
$fp = fopen('file_to_read.html', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}
while (false !== ($char = fgetc($fp))) {
	if($char=="0")
	{
		$my_bit_array[] = $char;
		//echo "$char\n";
	}
	if($char == "1")
	{
		$my_bit_array[] = $char;
	}
    
}
 ?>

<div>
<font size="5" color="blue"> 

<p align =center> Use this link in your code to get data from the website. </p>
<p align =center > "https://nishantiitd.000webhostapp.com/file_to_read.html" </p>
<div>
<font size="2" color="red"> 
        <p>Designed By : </p>
        <p>Nishant Verma</p>
        <p>Email : nishantcoolboy1@gmail.com</p>
        
</div>

</font>
</div >


<div align=center; style="margin-left: 150px; margin-right: 150px;" >

<div style="width:25%;float:left;">

<?php if($my_bit_array[0]=="0") {
?>	
<img id="a_off"  src = "pic_bulboff.gif" width = "155" height = "250" >	
<?php } ?>
<?php if($my_bit_array[0]=="1") {
?>	
<img id="a_on" src = "pic_bulbon.gif" width = "155" height = "250" >	
<?php }
 ?>

<p>
<input id = "a_on" type = "button" value = "Light 1 On" >
<span id="a" value = "<?php echo $my_bit_array[0]; ?>"> <?php echo $my_bit_array[0] ?> </span>
<input id = "a_off" type = "button" value = "Light 1 Off" >
</p>

</div>


<div style="width:25%;float:left;">

<?php if($my_bit_array[1]=="0") {
?>	
<img id="b_off"  src = "pic_bulboff.gif" width = "155" height = "250">	
<?php } ?>
<?php if($my_bit_array[1]=="1") {
?>	
<img id="b_on" src = "pic_bulbon.gif" width = "155" height = "250" >	
<?php }
 ?>


<p>
 <input id = "b_on" type = "button" value = "Light 2 On" >
<span id="b" value = "<?php echo $my_bit_array[1]; ?>"> <?php echo $my_bit_array[1] ?> </span>
<input id = "b_off" type = "button" value = "Light 2 Off" >
</p>

</div>

<div style="width:25%;float:left;">

<?php if($my_bit_array[2]=="0") {
?>	
<img id="c_off"  src = "pic_bulboff.gif" width = "155" height = "250" >	
<?php } ?>
<?php if($my_bit_array[2]=="1") {
?>	
<img id="c_on" src = "pic_bulbon.gif" width = "155" height = "250">	
<?php }
 ?>

<p>
 <input id = "c_on" type = "button" value = "Light 3 On" >
<span id="c" value = "<?php echo $my_bit_array[2]; ?>"> <?php echo $my_bit_array[2] ?> </span>
<input id = "c_off" type = "button" value = "Light 3 Off">
</p>

</div>

<div style="width:25%;float:left;">

<?php if($my_bit_array[3]=="0") {
?>	
<img id="d_off"  src = "pic_bulboff.gif" width = "155" height = "250" >	
<?php } ?>
<?php if($my_bit_array[3]=="1") {
?>	
<img id="d_on" src = "pic_bulbon.gif" width = "155" height = "250" >	
<?php }
 ?>

<p>
 <input id = "d_on" type = "button" value = "Light 4 On" >
<span id="d" value = "<?php echo $my_bit_array[3]; ?>"> <?php echo $my_bit_array[3] ?> </span>
<input id = "d_off" type = "button" value = "Light 4 Off">
</p>

</div>
</div>



</body>
</html>	