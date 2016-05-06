<?php

include("config/db.php");
if($data_type == "db")
include("getdata_db.php");

if($data_type == "json")
include("getdata_json.php");

   
?>

<script>

function showdetail() {

var cnt=document.getElementById('cntr').value;
var rn =Math.floor((Math.random() * cnt) + 1);
var w = window.innerWidth;
var h = window.innerHeight;

var curimg = $('#img' + rn);
curimg.addClass('imgHighlight');
console.log(curimg);
//alert(curimg.left);
var pos = curimg.position();

var temp_left=pos.left+130;
var temp_top=pos.top;

if((temp_left+ 390)>w)
{
temp_left=temp_left-400-130;
}

if((temp_top+ 250)>h)
temp_top=temp_top-250;


var link = $('#div' + rn);
link.css({top: temp_top, left: temp_left, width:390});
link.fadeIn(1500);
setTimeout(function() {
	curimg.removeClass('imgHighlight');
	link.fadeOut(1500);
	showdetail(); 
}, 15000);
}

  
</script> 

<div class="col9">
<div class='type1'>

<?php echo $ar_imgs; ?>
</div>
</div>

<input type="hidden" id="cntr" value="<?php echo $counter;?>" />