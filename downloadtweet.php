<html>
<head>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/style.php">
</head>

<?php

$counter=0;
?>
<h3>Twitter Listening </h3>

    <div id = "downloadform">
        
            <form method = "post" action = "">
             
                <label> Keywords <input type = "text" required id = "password" name = "txtKeyword" placeholder = "Comma seperated Keywords"><i> </label>
                <input type = "submit" id = "search" name="Search" value = "Download Tweets">
            </form>

        </div>
		
	
<?php
if(isset($_POST['Search']))
{
include("config/db.php");

$keywords=$_POST['txtKeyword'];

if($keywords != "")
$_SESSION['keywords']=$keywords;

$parts = explode(", ",trim($keywords));
$clauses=array();
foreach ($parts as $part){
    //function_description in my case ,  replace it with whatever u want in ur table
    $clauses[]='"' . mysql_real_escape_string($part) . '"';
}
$clause=implode(' OR ' ,$clauses);

//echo $clause;

if($keywords == "")
$keywords="twitter";

	$created_at = date('Y-m-d H:i:s');
	

require_once("twitteroauth/twitteroauth.php"); //Path to twitteroauth library

//$notweets = 100;

$consumerkey = "<consumer key>";
$consumersecret = "<consumer secret>";
$accesstoken = "<access token>";
$accesstokensecret = "<access token secret>";


  
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
   
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
$tweets = $connection->get("https://api.twitter.com/1.1/search/tweets.json?q=$keywords since:2015-01-01&count=100");
$counter=0;

echo '<table>';
printTweet($tweets->statuses, $keywords);
$glf=0;
$next = $tweets->search_metadata->next_results;
a:
if(substr($next,0,1) == "?")
{
$tweets = $connection->get("https://api.twitter.com/1.1/search/tweets.json" . $next );
printTweet($tweets->statuses, $keywords);
$next = $tweets->search_metadata->next_results;
echo  $tweets->search_metadata->next_results;
$glf++;
}
if($next != "" && $glf < 10)
{ 
	goto a;
}
echo '</table>';

}

function printTweet($tweets, $keywords)
{
echo '<br> ' . $keywords . '<br>';

foreach($tweets as $tweet1) {

$counter++;
	print_r($tweet1);
	$id_str= $tweet1->id_str;
	$text= mysql_real_escape_string($tweet1->text);
	$user_id_str= $tweet1->user->id_str;
	$user_name= mysql_real_escape_string($tweet1->user->name);
	$user_screen_name= mysql_real_escape_string($tweet1->user->screen_name);
	$follower_count= $tweet1->user->followers_count;
	$friends_count= $tweet1->user->friends_count;
	$favourites_count= $tweet1->user->favourites_count;
	$statuses_count= $tweet1->user->statuses_count;
	$language= $tweet1->lang;
	$profile_image_url= $tweet1->user->profile_image_url;
	$retweet_count= $tweet1->retweet_count;
	$favorite_count= $tweet1->favorite_count;
	$published = date('Y-m-d H:i:s',strtotime($tweet1->created_at));
	$created_at = date('Y-m-d H:i:s');


	if($text != "")
	{
		$result=mysql_query("SELECT * FROM twitter where id_str='$id_str'");
		$rn=mysql_num_rows($result);
		if($rn<=0)
		{
		
		$query = "Insert into twitter (id_str, hashtag, text, user_id_str, user_name, user_screen_name, follower_count, friends_count, favourites_count, statuses_count, profile_image_url, retweet_count, favorite_count, created_at) Values('$id_str', '$keywords','$text', '$user_id_str', '$user_name', '$user_screen_name', '$follower_count', '$friends_count', '$favourites_count', '$statuses_count', '$profile_image_url', '$retweet_count', '$favorite_count','$created_at')";
				//to store the data in UTF8 in the database (to display unicode characters)
		mysql_query("SET CHARACTER SET utf8"); 
		mysql_query("SET NAMES utf8");   

		echo '<br><br>' . $query .'<br><br>';
		$result=mysql_query($query);
		echo '<br><br>result of insert query is ' . $result;
		}
	}
}
}

function fixtags($text){

$text = htmlspecialchars($text,ENT_QUOTES);
$text = htmlspecialchars($text);
$text = htmlentities($str, ENT_QUOTES, "UTF-8");
$text=mysql_real_escape_string($text);
return $text;
}
  ?>
