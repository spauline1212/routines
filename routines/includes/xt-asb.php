<?
include('inc/functions.php');
$needles_list = strtolower(trim($_POST['needles-list']));
$haystack_list = strtolower(trim($_POST['haystack-list']));
$arr_needles = purify_array(get_lines($needles_list));
$arr_haystack = purify_array(get_lines($haystack_list));
sort($arr_needles);
sort($arr_haystack);
$arr_needles = array_keys(array_count_values($arr_needles));
$arr_haystack_count = array_count_values($arr_haystack);
$arr_haystack_unique = array_keys($arr_haystack_count);
$total = 0;
for($i=0;$i<count($arr_needles);$i++)
	$total += ((in_array($arr_needles[$i], $arr_haystack_unique)) ? $arr_haystack_count[$arr_needles[$i]] : 0);
?>
<textarea name="results-asb-txt" id="results-asb-txt">
<?= $total;?>
</textarea>
