<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>
<body bgcolor=#ffffff>

<?php

echo "<h2>Search Results:</h2><p>";

//If they did not enter a search term we give them an error
if ($hair == "")
{
echo "<p>You forgot to enter a search term!!!";
exit;
}

// Otherwise we connect to our Database
mysql_connect("xxxx.com", "xxxx", "xxxxpw") or             die(mysql_error());
mysql_select_db("xxxx") or die(mysql_error());

// We perform a bit of filtering
$find = strtoupper($find);
$find = strip_tags($find);
$find = trim ($find);

//Now we search for our search term, in the field the user specified
$iname = mysql_query("SELECT * FROM test WHERE upper($field) LIKE'%$hair%'");

//And we display the results
while($result = mysql_fetch_array( $iname ))
{
echo $result['hair'];
echo " ";

    
    