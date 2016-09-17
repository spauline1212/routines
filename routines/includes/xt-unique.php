<?
include('inc/functions.php');
$input = $_POST['list'];
$arr_fields = purify_array(get_lines($input));
sort($arr_fields);
$final_string = implode($line2, array_keys(array_count_values($arr_fields)));
?>
<textarea name="results-ul-txt" id="results-ul-txt">
<?= $final_string;?>
</textarea>
