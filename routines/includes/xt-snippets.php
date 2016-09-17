<?
include('inc/functions.php');
$input = $_POST['list'];
$arr_fields = get_lines($input);
sort($arr_fields);
$final_string = implode($line2, $arr_fields);
?>
<textarea name="results-so-txt" id="results-so-txt">
<?= $final_string;?>
</textarea>
