<?php 

	$userid=0;
	if(isset($_GET['user']))
	$userid=$_GET['user'];
	
		if(isset($_SESSION['userid']))
	$userid=$_SESSION['userid'];
	
	 
	include("config/db.php");
	
	

$counter=0;

$current_theme=-1;
$query = "Select * from theme_user where userid =" . $userid . " and active=1";
	$rows=mysql_query($query, $mysql_conn);

while($row = mysql_fetch_array($rows)) {
$current_theme = $row['themeid'];
}


$query = "Select * from theme where themename != ''";

echo $query;
	$rows=mysql_query($query, $mysql_conn);


$row1= ""; $row1_1= ""; $row2= ""; $row3= ""; $row4= ""; $row5= ""; $row6= ""; $row7= "";$row8= "";$row9= "";$row10= "";$row11= "";$row12= "";$row13= ""; $row14="";
$row15=""; 
$row16="";
$row17="";
$row18="";
$row19="";
$row20="";
$row21="";
$row22="";

while($row = mysql_fetch_array($rows)) {
 //print_r($row);
$row1 .= '<td><span>' . $row['themename'] . '</span> <input type="hidden" name="templateid" id="templateid" value ="' . $templateid . '" /></td>';

$row1_1 .= '<td><span style="background:#' . $row['body_background']. '">' . $row['body_background'] . '</span></td>';


$row2 .= '<td><span style="background:#' . $row['container_border_color']. '">' . $row['container_border_color'] . '</span></td>';

$row3 .= '<td><span style="background:#' . $row['container_border_shadow_color']. '">' . $row['container_border_shadow_color'] . '</span> </td>';


$row4 .= '<td><span>' . $row['container_border_shadow_depth'] . '</span></td>';

$row5 .= '<td><span>' . $row['container_border_radius'] . '</span> </td>';

$row6 .= '<td><span style="background:#' . $row['contentslide_background_color']. '">' . $row['contentslide_background_color'] . '</span> </td>';

$row7 .= '<td><span>' . $row['contentslide_border_radius'] . '</span> </td>';

$row8 .= '<td><span style="background:#' . $row['contentslide_tweet_color']. '">' . $row['contentslide_tweet_color'] . '</span> </td>';

$row9 .= '<td><span>' . $row['contentslide_tweet_size'] . '</span> </td>';

$row10 .= '<td><span>' . $row['contentslide_tweet_from_size'] . '</span> </td>';

$row11 .= '<td><span style="background:#' . $row['contentslide_tweet_from_color']. '">' . $row['contentslide_tweet_from_color'] . '</span> </td>';

$row12 .= '<td><span style="background:#' . $row['contentslide_tweet_screenname_color']. '">' . $row['contentslide_tweet_screenname_color'] . '</span> </td>';

$row13 .= '<td><span>' . $row['contentslide_tweet_screenname_size'] . '</span> </td>';

$row14 .= '<td><span>' . $row['contentslide_image_border'] . '</span> </td>';

$row15 .= '<td><span style="background:#' . $row['contentslide_image_border_color']. '">' . $row['contentslide_image_border_color'] . '</span> </td>';

$row16 .= '<td><span>' . $row['contentslide_image_border_radius'] . '</span> </td>';

$row17 .= '<td><span style="background:#' . $row['contentslide_image_shadow']. '">' . $row['contentslide_image_shadow'] . '</span> </td>';

$row18 .= '<td><span style="background:#' . $row['image_background_color']. '">' . $row['image_background_color'] . '</span> </td>';

$row19 .= '<td><span style="background:#' . $row['image_border_color']. '">' . $row['image_border_color'] . '</span> </td>';

$row20 .= '<td><span>' . $row['image_border_radius'] . '</span> </td>';

$row21.= '<td><span>' . $row['image_border_size'] . '</span> </td>';

$checked= "";
if($current_theme  == $row['themeid'])
$checked = "checked";
$row22 .= '<td><input type="radio" name="themes" value='. $row['themeid'] . '  ' . $checked  . ' /> </td>';


}


echo '<tr>';
echo '<td>theme name</td>' . $row1 ;
echo '</tr>';


echo '<tr>';
echo '<td>body background</td>' . $row1_1 ;
echo '</tr>';



echo '<tr>';
echo '<td>container border color</td>' . $row2; 
echo '</tr>';

echo '<tr>';
echo '<td>container border shadow_color</td>' . $row3;
echo '</tr>';

echo '<tr>';
echo '<td>container border shadow depth</td>' . $row4;
echo '</tr>';

echo '<tr>';
echo '<td>container border radius</td>' . $row5;
echo '</tr>';

echo '<tr>';
echo '<td>contentslide background color</td>' . $row6;
echo '</tr>';

echo '<tr>';
echo '<td>contentslide border radius</td>' . $row7;
echo '</tr>';

echo '<tr>';
echo '<td>contentslide tweet color</td>' . $row8;
echo '</tr>';

echo '<tr>';
echo '<td>contentslide tweet size</td>' . $row9;
echo '</tr>';

echo '<tr>';
echo '<td>contentslide tweet from size</td>' . $row10;
echo '</tr>';

echo '<tr>';
echo '<td>contentslide tweet from color</td>' . $row11;
echo '</tr>';

echo '<tr>';
echo '<td>contentslide_tweet_screenname color</td>' . $row12;
echo '</tr>';

echo '<tr>';
echo '<td>contentslide tweet screenname size</td>' . $row13;
echo '</tr>';

echo '<tr>';
echo '<td>contentslide_image_border</td>' . $row14;
echo '</tr>';

echo '<tr>';
echo '<td>contentslide_image_border_color</td>' . $row15;
echo '</tr>';

echo '<tr>';
echo '<td>	contentslide_image_border_radius</td>' . $row16;
echo '</tr>';

echo '<tr>';
echo '<td>	contentslide_image_shadow</td>' . $row17;
echo '</tr>';

echo '<tr>';
echo '<td>image_background_color</td>' . $row18;
echo '</tr>';

echo '<tr>';
echo '<td>	image_border_color</td>' . $row19;
echo '</tr>';

echo '<tr>';
echo '<td>	image_border_radius</td>' . $row20;
echo '</tr>';

echo '<tr>';
echo '<td>image_border_size</td>' . $row21;
echo '</tr>';

echo '<tr>';
echo '<td> </td>' . $row22;
echo '</tr>';


?>