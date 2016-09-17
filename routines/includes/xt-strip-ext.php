<?
include('inc/functions.php');
$paths_list= trim($_POST['paths-list']);
$type = trim($_POST['type']);
$paths_list = str_replace("\\", '/', $paths_list);
$arr_paths_list = purify_array(get_lines($paths_list));
$arr_results_split = array();
$arr_results_get = array();
for($i=0; $i < count($arr_paths_list); $i++)
{
	$path = $arr_paths_list[$i];
	$arr_parts = explode('.', $path);
	$arr_results_get[] = array_pop($arr_parts);
	$arr_results_split[] = implode('.',  $arr_parts);
}
$final_string =  implode($line2,($type == 'strip')?$arr_results_split:$arr_results_get);
?>
<textarea name="results-se-txt" id="results-se-txt">
<?= $final_string;?>
</textarea>

