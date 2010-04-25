<html>
<head>
<title>Ornagai PHP SDK test</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body>
<?php
include_once 'ornagai.php';
$api=new ornagai();

echo "<h3>First Page, restult of test</h3>";
echo "<pre>";

print_r($api->get_word('test'));

echo "</pre>";

////////////

echo "<h3>Second Page, restult of test</h3>";
echo "<pre>";

print_r($api->get_word('test',2));

echo "</pre>";

//////////////
echo "<h3>Count restult, restult of test</h3>";

print_r($api->get_word_count('test'));

//use count object
$total=$api->get_word_count('test');
echo $total->count;
?>
</body>
</html>