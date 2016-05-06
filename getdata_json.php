<?php
$filename_data= "config/twitter.json";

$json = file_get_contents($filename_data);
//echo $json;

$rows = json_decode( $json, true );

//print_r($rows["data"]);
$ar_imgs="";
$flag=0;
$counter=0;
//print_r($json);
foreach($rows["data"] as $row) { //foreach element in $arr
    //print_r($row);
	//echo '<br><br>';
	$picture1=$row['profile_image_url'];
	$picture=str_replace("_normal","",$picture1);
	$text=$row['text'];
	$from=$row['user_name'] ;
    $screen_name=$row['user_screen_name'] ;
	$follower_count=$row['follower_count'];
    $friends_count=$row['friends_count'];
	$favourites_count=$row['favourites_count'];
	$statuses_count=$row['statuses_count'];	
	$retweet_count=$row['retweet_count'];
	$favorite_count=$row['favorite_count'];	
	$created_at=$row['created_at'];	

	$datetime1 = date_create($created_at);
    $datetime2 = date_create(date('m/d/Y h:i:s a', time()));

    $interval = date_diff($datetime1, $datetime2);
	$time_yr=$interval->format('%y');	
	$time_mon=$interval->format('%m');
	$time_day=$interval->format('%d');
	$time_hr=$interval->format('%h');
	$time_min=$interval->format('%i');
	$time_day=$interval->format('%s');
	
	if($time_yr >0 )
	$xs = $time_yr . " years ago";
	elseif($time_mon >0 )
	$xs = $time_mon . " months ago";
	elseif($time_day >0 )
	$xs = $time_day . " days ago";
	elseif($time_hr >0 )
	$xs = $time_hr . " hours ago";
	elseif($time_min >0 )
	$xs = $time_min . " minutes ago";
	elseif($time_sec >0 )
	$xs = $time_sec . " seconds ago";	
	
	if($picture == "")
	$picture = "../images/user.png";
	$counter++;

    $ar_imgs .= " <img id='img$counter' src='$picture' /> 
	<div class='contentslide divhide position_fixed' id='div$counter'>
		<table>
		   <tr>
			   <td><img src='$picture' /></td>
			   <td style='float:left;padding-left:5px;'>
					<span class='from'>$from </span><br>
					<a href='https://www.twitter.com/$screen_name' target='_blank' class='screenname'>@$screen_name</a> 
					<table>
						<tr>
							<td>Tweets</td>
							<td>Followers</td>
							<td>Following</td>
						</tr>
						<tr>
							<td><span class='counts'>$statuses_count</span></td>
							<td><span class='counts'>$follower_count</span></td>
							<td><span class='counts'>$friends_count</span></td>
						</tr>
					</table>
				</td>
			</tr>

			<tr>
				<td colspan='2'  class='tweet'><hr><span>" . addslashes($text) . "</span></td>
			</tr>

		</table>

		<div>
			<span class='counts rt'>$retweet_count</span>
			<span class'spanspace' />
			<span class='counts favs'>$favorite_count</span>
		</div>
    </div> 
	";
	
	
	
}
/*
$query ="Select * from twitter group by user_name order by created_at desc LIMIT 0, 36";
//echo $query;
$rows=mysql_query($query, $mysql_conn);

$ar_imgs="";
$flag=0;
$counter=0;
while ($row = mysql_fetch_array($rows))
{
	$picture1=$row['profile_image_url'];
	$picture=str_replace("_normal","",$picture1);
	$text=$row['text'];
	$from=$row['user_name'] ;
    $screen_name=$row['user_screen_name'] ;
	$follower_count=$row['follower_count'];
    $friends_count=$row['friends_count'];
	$favourites_count=$row['favourites_count'];
	$statuses_count=$row['statuses_count'];	
	$retweet_count=$row['retweet_count'];
	$favorite_count=$row['favorite_count'];	
	$created_at=$row['created_at'];	

	$datetime1 = date_create($created_at);
    $datetime2 = date_create(date('m/d/Y h:i:s a', time()));

    $interval = date_diff($datetime1, $datetime2);
	$time_yr=$interval->format('%y');	
	$time_mon=$interval->format('%m');
	$time_day=$interval->format('%d');
	$time_hr=$interval->format('%h');
	$time_min=$interval->format('%i');
	$time_day=$interval->format('%s');
	
	if($time_yr >0 )
	$xs = $time_yr . " years ago";
	elseif($time_mon >0 )
	$xs = $time_mon . " months ago";
	elseif($time_day >0 )
	$xs = $time_day . " days ago";
	elseif($time_hr >0 )
	$xs = $time_hr . " hours ago";
	elseif($time_min >0 )
	$xs = $time_min . " minutes ago";
	elseif($time_sec >0 )
	$xs = $time_sec . " seconds ago";	
	
	if($picture == "")
	$picture = "../images/user.png";
	$counter++;

    $ar_imgs .= " <img id='img$counter' src='$picture' /> 
	<div class='contentslide divhide position_fixed' id='div$counter'>
		<table>
		   <tr>
			   <td><img src='$picture' /></td>
			   <td style='float:left;padding-left:5px;'>
					<span class='from'>$from </span><br>
					<a href='https://www.twitter.com/$screen_name' target='_blank' class='screenname'>@$screen_name</a> 
					<table>
						<tr>
							<td>Tweets</td>
							<td>Followers</td>
							<td>Following</td>
						</tr>
						<tr>
							<td><span class='counts'>$statuses_count</span></td>
							<td><span class='counts'>$follower_count</span></td>
							<td><span class='counts'>$friends_count</span></td>
						</tr>
					</table>
				</td>
			</tr>

			<tr>
				<td colspan='2'  class='tweet'><hr><span>" . addslashes($text) . "</span></td>
			</tr>

		</table>

		<div>
			<span class='counts rt'>$retweet_count</span>
			<span class'spanspace' />
			<span class='counts favs'>$favorite_count</span>
		</div>
    </div> 
	";
	
}		
*/
?>