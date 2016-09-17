<?
global $line;
global $line2;
global $line_out;
$line = "\n";
$line2 = '
';
$line_out = '
';
global $tab;
$tab = '	';

function get_lines($subject)
{
	global $line;
	return explode($line,$subject);
}
function purify_array($arr_)
{
	$arr = array();
	for($i=0; $i < count($arr_); $i++)
		$arr[] = trim($arr_[$i]);
	return $arr;
}
function get_min($a, $b)
{
	if($a < $b) return $a;
	else return $b;
}
?>