<html>
	<head>
		<title>Command Center</title>
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="css/style.php">
	</head>
	
	<body>
	<div  class='page-container'>
	

<form method='POST' action=''>
<div  class='box-container'>
<a style="float:right" href="settings_theme.php">View Themes </a>
<h4 class="title">Theme </h4> 
<table>
    <?php 

	
	 
	include("config/db.php");
$counter=0;

$query = "Select * from theme where enabled=1";

//echo $query;

$rows=mysql_query($query, $mysql_conn);

echo "<table>";
while($row = mysql_fetch_array($rows)) {

echo '<input type="hidden" name="themeid" id= "themeid" value="' . $themeid . '"/> ';

echo '<tr>';
echo '<td>theme name</td> <td><input type="text" name="themename" id= "themename" value="' . $row['themename'] . '"/> </td>';
echo '</tr>';

echo '<tr>';
echo '<td>container border color</td>';
echo '<td><input class="jscolor" name="container_border_color" id= "container_border_color" value="' . $row['container_border_color'] . '"></td>';
echo '</tr>';

echo '<tr>';
echo '<td>container border shadow_color</td> <td><input class="jscolor" type="text" name="container_border_shadow_color" id= "container_border_shadow_color"  value="' . $row['container_border_shadow_color'] . '"/> </td>';
echo '</tr>';

echo '<tr>';
echo '<td>container border shadow depth</td> <td><input type="text" name="container_border_shadow_depth" id= "container_border_shadow_depth" value="' . $row['container_border_shadow_depth'] . '"/> </td>';
echo '</tr>';

echo '<tr>';
echo '<td>container border radius</td> <td><input type="text" name="container_border_radius" id= "container_border_radius" value="' . $row['container_border_radius'] . '"/> </td>';
echo '</tr>';

echo '<tr>';
echo '<td>contentslide background color</td> <td><input class="jscolor" type="text" name="contentslide_background_color" id= "contentslide_background_color" value="' . $row['contentslide_background_color'] . '"/> </td>';
echo '</tr>';

echo '<tr>';
echo '<td>contentslide border radius</td> <td><input type="text" name="contentslide_border_radius" id= "contentslide_border_radius" value="' . $row['contentslide_border_radius'] . '"/> </td>';
echo '</tr>';

echo '<tr>';
echo '<td>contentslide tweet color</td> <td><input class="jscolor" type="text" name="contentslide_tweet_color" id= "contentslide_tweet_color" value="' . $row['contentslide_tweet_color'] . '"/> </td>';
echo '</tr>';

echo '<tr>';
echo '<td>contentslide tweet size</td> <td><input type="text" name="contentslide_tweet_size" id= "contentslide_tweet_size" value="' . $row['contentslide_tweet_size'] . '"/> </td>';
echo '</tr>';

echo '<tr>';
echo '<td>contentslide tweet from size</td> <td><input type="text" name="contentslide_tweet_from_size" id= "contentslide_tweet_from_size" value="' . $row['contentslide_tweet_from_size'] . '"/> </td>';
echo '</tr>';

echo '<tr>';
echo '<td>contentslide tweet from color</td> <td><input class="jscolor" name="contentslide_tweet_from_color" id= "contentslide_tweet_from_color" value="' . $row['contentslide_tweet_from_color'] . '"> </td>';
echo '</tr>';

echo '<tr>';
echo '<td>contentslide_tweet_screenname color</td> <td><input class="jscolor" type="text" name="contentslide_tweet_screenname_color" id= "contentslide_tweet_screenname_color" value="' . $row['contentslide_tweet_screenname_color'] . '"/> </td>';
echo '</tr>';

echo '<tr>';
echo '<td>contentslide tweet screenname size</td> <td><input type="text" name="contentslide_tweet_screenname_size" id= "contentslide_tweet_screenname_size" value="' . $row['contentslide_tweet_screenname_size'] . '" /> </td>';
echo '</tr>';

echo '<tr>';
echo '<td>contentslide_image_border</td> <td><input type="text" name="contentslide_image_border" id= "contentslide_image_border" value="' . $row['contentslide_image_border'] . '" /> </td>';
echo '</tr>';

echo '<tr>';
echo '<td>	contentslide_image_border_color</td> <td><input class="jscolor"  type="text" name="	contentslide_image_border_color" id= "	contentslide_image_border_color" value="' . $row['	contentslide_image_border_color'] . '" /> </td>';
echo '</tr>';

echo '<tr>';
echo '<td>contentslide_image_border_radius</td> <td><input type="text" name="contentslide_image_border_radius" id= "contentslide_image_border_radius" value="' . $row['contentslide_image_border_radius'] . '" /> </td>';
echo '</tr>';

echo '<tr>';
echo '<td>contentslide_image_shadow</td> <td><input type="text" class="jscolor"  name="contentslide_image_shadow" id= "contentslide_image_shadow" value="' . $row['contentslide_image_shadow'] . '" /> </td>';
echo '</tr>';

echo '<tr>';
echo '<td>image_background_color</td> <td><input type="text" class="jscolor" name="image_background_color" id= "image_background_color" value="' . $row['image_background_color'] . '" /> </td>';
echo '</tr>';

echo '<tr>';
echo '<td>image_border_color</td> <td><input type="text" class="jscolor" name="image_border_color" id= "image_border_color" value="' . $row['image_border_color'] . '" /> </td>';
echo '</tr>';

echo '<tr>';
echo '<td>image border radius</td> <td><input type="text" name="image_border_radius" id= "image_border_radius" value="' . $row['image_border_radius'] . '" /> </td>';
echo '</tr>';

echo '<tr>';
echo '<td>image border size</td> <td><input type="text" name="image_border_size" id= "image_border_size" value="' . $row['image_border_size'] . '" /> </td>';
echo '</tr>';


}
echo '</table>';
?>
<input type="submit" name="saveTheme" id="saveTheme" value="Save Theme"/>
<?php

if(isset($_POST['saveTheme']))
{

	$themeid = $_POST['themeid'];
	$created_at = date('Y-m-d H:i:s');
	$created_by = $_SESSION['userid'];
	$themename = $_POST['themename'];
	$container_border_color= $_POST['container_border_color'];
	$container_border_shadow_color= $_POST['container_border_shadow_color'];
	$container_border_shadow_depth= $_POST['container_border_shadow_depth'];
	$container_border_radius= $_POST['container_border_radius'];
	$contentslide_background_color= $_POST['contentslide_background_color'];
	$contentslide_border_radius= $_POST['contentslide_border_radius'];
	$contentslide_tweet_color= $_POST['contentslide_tweet_color'];
	$contentslide_tweet_size= $_POST['contentslide_tweet_size'];
	$contentslide_tweet_from_size= $_POST['contentslide_tweet_from_size'];
	$contentslide_tweet_from_color= $_POST['contentslide_tweet_from_color'];
	$contentslide_tweet_screenname_color= $_POST['contentslide_tweet_screenname_color'];
	$contentslide_tweet_screenname_size= $_POST['contentslide_tweet_screenname_size'];
	$contentslide_image_border= $_POST['contentslide_image_border'];
	$contentslide_image_border_color= $_POST['contentslide_image_border_color'];
	$contentslide_image_border_radius= $_POST['contentslide_image_border_radius'];
	$contentslide_image_shadow= $_POST['contentslide_image_shadow'];
	$image_background_color	= $_POST['image_background_color'];
	$image_border_color	= $_POST['image_border_color'];
	$image_border_radius= $_POST['image_border_radius'];	
	$image_border_size	= $_POST['image_border_size'];

	//echo $themeid; 
	if($themeid  == -1)
	{
	$query = "Insert into theme (themename, container_border_color, container_border_shadow_color, container_border_shadow_depth, container_border_radius, contentslide_background_color, contentslide_border_radius, contentslide_tweet_color, contentslide_tweet_size, contentslide_tweet_from_size, contentslide_tweet_from_color, contentslide_tweet_screenname_color, contentslide_tweet_screenname_size, contentslide_image_border,
contentslide_image_border_color, contentslide_image_border_radius, contentslide_image_shadow, image_background_color, image_border_color, image_border_radius, image_border_size,created_by, created_at) ";

	$query .="Values(";
	$query .= "'$themename', ";
	$query .= "'$container_border_color','$container_border_shadow_color', '$container_border_shadow_depth', '$container_border_radius', '$contentslide_background_color', '$contentslide_border_radius', '$contentslide_tweet_color', '$contentslide_tweet_size', '$contentslide_tweet_from_size', '$contentslide_tweet_from_color', '$contentslide_tweet_screenname_color', '$contentslide_tweet_screenname_size', '$contentslide_image_border', '$contentslide_image_border_color', '$contentslide_image_border_radius', '$contentslide_image_shadow', '$image_background_color', '$image_border_color', '$image_border_radius', '$image_border_size', '$created_by','$created_at')";
		
		//echo $query;
		mysql_query("SET CHARACTER SET utf8"); 
		mysql_query("SET NAMES utf8");   

		//echo '<br><br>' . $query .'<br><br>';
		$result=mysql_query($query);
		echo '<br><br>result of insert query is ' . $result;
	}
	else
	{
	$query = "update theme set ";
	$query .="themename='$themename', ";
	$query .="container_border_color ='$container_border_color', ";
	$query .="container_border_shadow_color ='$container_border_shadow_color', ";
	$query .="container_border_shadow_depth ='$container_border_shadow_depth', ";
	$query .="container_border_radius ='$container_border_radius', ";
	$query .="contentslide_background_color ='$contentslide_background_color', ";
	$query .="contentslide_border_radius ='$contentslide_border_radius', ";
	$query .="contentslide_tweet_color ='$contentslide_tweet_color', ";
	$query .="contentslide_tweet_size = '$contentslide_tweet_size', ";
	$query .="contentslide_tweet_from_size ='$contentslide_tweet_from_size', ";
	$query .="contentslide_tweet_from_color ='$contentslide_tweet_from_color', ";
	$query .="contentslide_tweet_screenname_color = '$contentslide_tweet_screenname_color', ";
	$query .="contentslide_tweet_screenname_size = '$contentslide_tweet_screenname_size', ";
	
	$query .="contentslide_image_border = '$contentslide_image_border', ";
	$query .="contentslide_image_border_color = '$contentslide_image_border_color', ";
	$query .="contentslide_image_border_radius = '$contentslide_image_border_radius', ";
	$query .="contentslide_image_shadow = '$contentslide_image_shadow', ";
	$query .="image_background_color = '$image_background_color', ";
	$query .="image_border_color = '$image_border_color', ";
	$query .="image_border_radius = '$image_border_radius', ";
	$query .="image_border_size = '$image_border_size', ";
	
	
	$query .="created_by  ='$created_by', ";
	$query .="created_at = '" . $created_at ."'";
	$query .=" where themeid = " . $themeid;

		
		//echo $query;

		mysql_query("SET CHARACTER SET utf8"); 
		mysql_query("SET NAMES utf8");   

		echo '<br><br>' . $query .'<br><br>';
		$result=mysql_query($query);
		echo '<br><br>result of update query is ' . $result;
		
	
	}
		
	
}
?>
</div>

</form>
</div>
</body>
</html>