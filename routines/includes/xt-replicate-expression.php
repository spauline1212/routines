<?
include('inc/functions.php');
$input = $_POST['list'];
$exp = $_POST['exp'];
$arr_fields = get_lines($input);
$final_string = '';
for($i=0; $i < count($arr_fields); $i++)
	$final_string .= str_replace('|F|', $arr_fields[$i], $exp);
?>
<textarea name="results-re-txt" id="results-re-txt">
<?= stripslashes($final_string);?>
</textarea>

