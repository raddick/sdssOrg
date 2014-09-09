<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$url = 'http://skyserver.sdss3.org/dr10/en/tools/search/x_sql.aspx';

$theplatenumber = (int)$_POST['platenumber'];

$thecmd = 'select top 1 ra, dec from platex where plate='.$theplatenumber;

$data = array('format' => 'xml', 'cmd' => $thecmd);

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);

$a = file_get_contents($url,false,$context);

$b = new SimpleXMLElement($a);


$racenter = $b->Table[0]->Row[0]->Item[0];
$deccenter = $b->Table[0]->Row[0]->Item[1];

?>
<p>Plate number: <?php echo (int)$_POST['platenumber']; ?></p>

<iframe id="thatplate" src="http://skyserver.sdss3.org/dr10/en/tools/chart/navi.aspx?ra=<?php echo $racenter; ?>&dec=<?php echo $deccenter; ?>&scale=23&opt=Q" height="600" width="800">
</iframe>


</body>
</html>