<?
include('inc/functions.php');
$input = trim($_POST['list']);
$arr_all_lines = purify_array(get_lines($input));
$input = implode($line, $arr_all_lines);
$input = preg_replace("/(\\n{2,})/",str_repeat($line,2),$input);
$arr_inputs = explode(str_repeat($line,2), $input);
$arr_inputs_lines = array();
$arr_field_expression = array();
for($i=0; $i < count($arr_inputs); $i++)
{
	$input = $arr_inputs[$i];
	$arr_inputs_lines[] = get_lines($input);
	$arr_field_expression[] = '|F'.($i+1).'|';
}


function get_arr_cols($arr_of_arrs)
{
	$count_lines = count($arr_of_arrs[0]);
	$arr_of_cols = array();
	for($i=0; $i < $count_lines; $i++)
	{
		$arr_ = array();
		for($j=0; $j < count($arr_of_arrs); $j++)
		{
			$the_input_arr = $arr_of_arrs[$j];
			$arr_[] = $the_input_arr[$i];
		}
		$arr_of_cols[$i] = $arr_;
	}
	return $arr_of_cols;
}


$exp = $_POST['exp-1'];
$arr_of_cols = get_arr_cols($arr_inputs_lines);
$final_string = '';
for($i=0; $i < count($arr_of_cols); $i++)
{
	$final_string .= str_replace($arr_field_expression, $arr_of_cols[$i], $exp);
}
/*
$base_dir_temp = 'C:\\Users\\spaulinx\\Documents\\SCOTT\\Tasks\\EOL\\-3--Other\\temp\\';
$fp = fopen($base_dir_temp.'sr32.bat', 'w');
fwrite($fp, $final_string);
*/

?>
<textarea name="results-rem-txt" id="results-rem-txt">
<?= stripslashes($final_string);?>
</textarea>

