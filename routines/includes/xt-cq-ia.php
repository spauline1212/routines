<?
include('inc/functions.php');
$parent_list= trim($_POST['parent-list']);
$redirect_list = trim($_POST['redirect-list']);
$geo_intro_index = 3;
$parent_list = str_replace("\\", '/', $parent_list);
$arr_parent_list = purify_array(get_lines($parent_list));
$arr_redirect_list = purify_array(get_lines($redirect_list));
$arr_redirect_pairs = array();
for($i=0; $i < count($arr_redirect_list); $i++)
{
	$row = $arr_redirect_list[$i];
	if(trim($row) != '')
	{
		$from_to_pair = explode($tab, $row);
		$arr_redirect_pairs[$from_to_pair[0]] = $from_to_pair[1];
	}
}
$arr_results = array();
for($i=0; $i < count($arr_parent_list); $i++)
{
	$url = $arr_parent_list[$i];
	$arr_subdirs = explode('/', $url);
	$geo_part = implode('/', array_slice($arr_subdirs, 0, $geo_intro_index));
	$geo_neutral_path = '/'.implode('/', array_slice($arr_subdirs, $geo_intro_index));
	if(array_key_exists($geo_neutral_path, $arr_redirect_pairs))
		$arr_results[] = $geo_part.$arr_redirect_pairs[$geo_neutral_path];
	else
		$arr_results[] = '';
}
?>
<textarea name="results-cq-ia-txt" id="results-cq-ia-txt">
<?= implode($line2,$arr_results);?>
</textarea>

