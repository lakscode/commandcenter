<?php
   header("Content-type: text/css; charset: UTF-8");
   $body_background="#FFF";	
   $container_border_color="#F40000";
   $container_border_shadow_color="#FF6159";
   $container_border_shadow_depth="5px";   
   $container_border_radius="15px";
   $contentslide_background_color="#719BAF";
   $contentslide_border_radius="15px";
   $contentslide_tweet_color="#FFDEBF";
   $contentslide_tweet_size="10pt";   
   $contentslide_tweet_from_color= "#000";
   $contentslide_tweet_from_size= "10pt";   
   $contentslide_tweet_screenname_color= "#FFF";
   $contentslide_tweet_screenname_size= "10pt";
   $contentslide_image_border = "2px";
   $contentslide_image_border_color = "#FFF";
   $contentslide_image_border_radius = "15px";
   $contentslide_image_shadow_highlight = "red";
   $contentslide_image_shadow = "#888888";
   	 
	
$filename_theme= "../config/theme.json";

$json = file_get_contents($filename_theme);
print_r($json);
$rows = json_decode( $json, true );
$ar_imgs="";
$flag=0;
$counter=0;

foreach($rows["themes"] as $row) 
{
if($row['enabled'] == 1)
{

   $body_background="#" . $row['body_background'] ;
   $container_border_color="#" . $row['container_border_color'] ;
   $container_border_shadow_color="#" . $row['container_border_shadow_color'];
   $container_border_shadow_depth="5px";   
   $container_border_radius="15px";
   $contentslide_background_color="#" . $row['contentslide_background_color'];
   $contentslide_border_radius="15px";
   $contentslide_tweet_color="#" . $row['contentslide_tweet_color'];
   $contentslide_tweet_size="10pt";   
   $contentslide_tweet_from_color= "#" . $row['contentslide_tweet_from_color'];
   $contentslide_tweet_from_size= "10pt";   
   $contentslide_tweet_screenname_color= "#" . $row['contentslide_tweet_screenname_color'];
   $contentslide_tweet_screenname_size= "10pt";
   $contentslide_image_border =  $row['contentslide_image_border'];
   $contentslide_image_border_color = "#" . $row['contentslide_image_border_color'];
   $contentslide_image_border_radius = $row['contentslide_image_border_radius'];
   $contentslide_image_shadow = "#" . $row['contentslide_image_shadow'];
      $contentslide_image_shadow_highlight = "#" . $row['contentslide_image_shadow_highlight'];
   }
}   

  // echo $body_background;
?>

body
{
background:<?php echo $body_background; ?>;
margin:0 auto;
}

.cont
{
width:1215px;
margin:0 auto;
padding:5px;
border: 10px solid <?php echo $container_border_color; ?>;
border-radius: <?php echo $container_border_radius; ?>;
-webkit-border-radius: <?php echo $container_border_radius; ?>;
-moz-border-radius: <?php echo $container_border_radius; ?>;
box-shadow: <?php echo $container_border_shadow_depth . " " . $container_border_shadow_depth . " " . $container_border_shadow_depth . " " .$container_border_shadow_color; ?>; 
-webkit-box-shadow:  <?php echo $container_border_shadow_color; ?> <?php echo $container_border_shadow_depth . " " . $container_border_shadow_depth . " " . $container_border_shadow_depth; ?>;
-moz-box-shadow:  <?php echo $container_border_shadow_color; ?> <?php echo $container_border_shadow_depth . " " . $container_border_shadow_depth . " " . $container_border_shadow_depth ?>;
}

 .contentslide {
    background: <?php echo $contentslide_background_color; ?>;
    width: 390px; 
	height:250px;
	font-size:10pt;
	font-family: Arial, Georgia, Serif;
	border-radius: <?php echo $contentslide_border_radius; ?>; 
	-webkit-border-radius: <?php echo $contentslide_border_radius; ?>;
	-moz-border-radius: <?php echo $contentslide_border_radius; ?>;
    background-repeat: no-repeat;
	background-position: right 10px bottom;

  }
  
  
    .position_relative
  {
	position: relative;
   }
   
   
.position_fixed
{
	position: fixed;
    top: 30%;
	z-index:200;
   }
  
  
 
.createdtime
  {
	bottom: 0;
	height: 16px;
	position: absolute;
	padding:5px;
	margin-bottom:5px;
	color:#CCCCCC;
	background:#486370;
    border: 1px solid #FFF;
    border-radius: 5px; -webkit-border-radius: 5px;-moz-border-radius: 5px;
	box-shadow: 5px 5px 5px #888888; -webkit-box-shadow: #888888 5px 5px 5px;-moz-box-shadow: #888888 5px 5px 5px;
  }
   
.contentslide img {
    width:75px;
    height:75px;
    border: <?php echo $contentslide_image_border; ?> solid <?php echo $contentslide_image_border_color; ?> ;
    border-radius: <?php echo $contentslide_image_border_radius; ?>; 
	-webkit-border-radius: <?php echo $contentslide_image_border_radius; ?>;
	-moz-border-radius: <?php echo $contentslide_image_border_radius; ?>;
	box-shadow: 5px 5px 5px <?php echo $contentslide_image_shadow; ?>; 
	-webkit-box-shadow: <?php echo $contentslide_image_shadow; ?> 5px 5px 5px;
	-moz-box-shadow: <?php echo $contentslide_image_shadow; ?> 5px 5px 5px;
   }
   
.contentslide .tweet{
	font-size:<?php echo $contentslide_tweet_size; ?>;
	line-height:120%;
  	font-family:verdana;
	color:<?php echo $contentslide_tweet_color; ?>;
	padding-top:10px;
	padding-left:10px;
   }
   
.contentslide  table{
	font-family:verdana;
	font-size:10pt;
  }
  
.contentslide  table tr td{
	padding-top:0px;
	padding-right:10px;
 }
 
.contentslide table span.from{
	font-family:verdana;
	font-size:<?php echo $contentslide_tweet_from_size; ?>;
	font-weight:normal;
	color:<?php echo $contentslide_tweet_from_color; ?>;
  }
  
.contentslide  table a.screenname{
	font-family:verdana;
	font-size:<?php echo $contentslide_tweet_screenname_size; ?>;
	color:<?php echo $contentslide_tweet_screenname_color; ?>;
  }  
  
.counts
{
	font-family:verdana;
	font-size:8pt;
	font-style:uppercase;
	display:inline;
	height:30px;
}

.favs
  {
    bottom: 0;
  height: 10px;
  position: absolute;
  padding:5px;
  margin-bottom:5px;
	right:100px;
	padding-left:20px;
	line-height:100%;
	background-image:url("../images/favourite.png");
	background-repeat:no-repeat;
	
  }
  
.rt
  {
    bottom: 0;
	right:50px;
  height: 10px;
  position: absolute;
  padding:5px;
  margin-bottom:5px;
  	padding-left:20px;
	background-image:url("../images/retweet.png");
	background-repeat:no-repeat;
	
  }
  
.col9
{
  width:1223px;
   margin:0 auto;
}
  
  
.type1
{
  position: absolute;
  width;100%;
  margin:0 auto;
  text-align:center;

  
}

.type1 img
{
margin:5px;
height:120px;
width:120px;
  border: <?php echo $contentslide_image_border;?> solid <?php echo $contentslide_image_border_color;?>;
  border-radius: 5px; -webkit-border-radius: 5px;-moz-border-radius: 5px;
 /* 	box-shadow: 5px 5px 5px #888888; -webkit-box-shadow: #888888 5px 5px 5px;-moz-box-shadow: #888888 5px 5px 5px; */
   
}

.imgHighlight
{	
border: <?php echo $contentslide_image_border;?> solid <?php echo $contentslide_image_border_color;?>;
box-shadow: 5px 5px 5px 5px <?php echo $contentslide_image_shadow_highlight;?>; 
-webkit-box-shadow: <?php echo $contentslide_image_shadow_highlight;?> 5px 5px 5px 5px;
-moz-box-shadow:<?php echo $contentslide_image_shadow_highlight;?> 5px 5px 5px 5px; 
}
 
.divshow
{
display:block;
}

.divhide
{
display:none;
}

.current
{
display:block;
}




#downloadform
{
margin:0 auto;
   width:90%;
   height:330px;
   border-radius:3px;
   box-shadow:0px 0px 10px 0px #424242;
   padding:10px;
   box-sizing:border-box;
   font-family:helvetica;
}
#downloadform label
{
 display:block;
 color:#FFF;
 margin-top:20px;
}
#downloadform input[type="text"]
{
   width:250px;
   height:40px;
   border:2px solid silver;
   border-radius:3px;
   padding:5px;
}

#downloadform #search
{
   margin-left:-5px;
   margin-top:10px;
   width:250px;
   height:40px;
   border:none;
   border-radius:3px;
   color:#E6E6E6;
   background-color:grey;
   font-size:20px;
}

