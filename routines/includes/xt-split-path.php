<?
include('inc/functions.php');
$paths_list= trim($_POST['paths-list']);
$start_index = trim($_POST['start-index']);
$end_index = trim($_POST['end-index']);
if($end_index != '') $length = $end_index - $start_index + 1;
else $length = 0;
$paths_list = str_replace("\\", '/', $paths_list);
$arr_paths_list = purify_array(get_lines($paths_list));
$input_delimiter = $_POST['input-delimiter'];
$output_delimiter = $_POST['output-delimiter'];

$arr_results = array();
$start = 0;
$end = 0;
$limit = 0;
for($i=0; $i < count($arr_paths_list); $i++)
{
	$path = $arr_paths_list[$i];
	$arr_subdirs = explode($input_delimiter, $path);
	$limit = count($arr_subdirs) - 1;
	if(ctype_alpha($start_index)  && strtolower($start_index) == "e")
	{
		$last_part = array_pop($arr_subdirs);
		$arr_results[] = implode($output_delimiter, $arr_subdirs)."/"."	".$last_part;
	}
	elseif($start_index <= $limit)
		$arr_results[] = '/'.implode($output_delimiter, ($length > 0)? array_slice($arr_subdirs, $start_index, $length):array_slice($arr_subdirs, $start_index));
	else
		$arr_results[] = '';
}
$final_string =  implode($line2,$arr_results);
?>
<textarea name="results-sp-txt" id="results-sp-txt">
<?= $final_string;?>
</textarea>

