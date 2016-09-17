function get_lines(str)
{return str.split("\n");}

function get_line_lengths(arr_str)
{
	var arr_lengths = new Array(arr_str.length);
	for(var i=0;i<arr_str.length;i++)
		arr_lengths[i] = arr_str[i].length;
}

function get_end_line_positions(arr_lengths)
{
	var arr_end_positions = new Array(arr_lengths.length);
	var last_end_position = 0;
	for(var i=0;i<arr_lengths.length;i++)
		arr_end_positions[i] = last_end_position + arr_lengths[i] + i;
} 





$(document).ready(function () {

	$.fn.extend({
	insert_at_caret: function(str_to_insert, io){
	  return this.each(function(i) {
		  //For browsers like Firefox and Webkit based
		  var start_pos = this.selectionStart;
		  var end_pos = this.selectionEnd;
		  var scrollTop = this.scrollTop;
		  this.value = this.value.substring(0, start_pos)+str_to_insert+this.value.substring(end_pos,this.value.length);
		  this.focus();
		  var pos = start_pos + str_to_insert.length; 
		  if(io == 'i') pos -= Math.Floor(str_to_insert.length/2);
		  this.selectionStart = this.selectionEnd = pos;
		  this.scrollTop = scrollTop;
	  });
	}
	});

	$('.a-snippets a').click(function(event){
		event.preventDefault();
		var selector_id = '#sna-'+($(this).html());
		var io = $(selector_id).attr('io');
		$('#shorthand').insert_at_caret($(selector_id).val(), io);
	});

	
});

