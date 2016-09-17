var current_item = 0;
function get_id_i_icon(elem)
{
	var full_id = elem.attr('instr-id');
	return full_id.replace("i-icon-", "");
}
function max(a, b)
{
	if(a > b) return a;
	return b;
}

function close_how_to()
{
	$('.close-x').click(function(event){
		event.preventDefault();
		$(this).parent().parent().parent().parent().hide(300);
	}).mouseover(function(){
		$(this).addClass("active");
	}).mouseout(function(){
		$(this).removeClass("active");
	});	
}

var arr_ = ['rem', 're', 'so', 'sp', 'se', 'ul', 'asb', 'cq-ia', 'sinppets'];
var shell = '';
var submit_str;
var form_str;
var results_str;

function set_str(str_)
{
	submit_str = '#submit-'+str_;
	form_str = '#'+str_+'-form';
	results_str = '#results-'+str_;
}

function set_tool(str_)
{
	set_str(str_);
	shell = $(results_str);
	$(form_str).submit();
}



$(document).ready(function () {


	$('ul.nav li').click(function(event){
		event.preventDefault();
		n_list = $(this);
		var i = n_list.index();
		if(i != current_item)
		{
			var c_animate = $($('#tool-case > div').get(current_item));
			var n_animate = $($('#tool-case > div').get(i));
			$($('ul.nav li').get(current_item)).removeClass('active');
			n_list.addClass('active');
			c_animate.hide(400, function(){n_animate.show(400);});
		}
		current_item = i;
	}).mouseover(function(){
		p = $(this);
		if(!p.hasClass('active'))
			p.addClass('active');
	}).mouseout(function(){
		p = $(this);
		var i = p.index();
		if(i != current_item)
			p.removeClass('active');
	});	

	
	function inst_window(event, elem)
	{
		if($.browser.mozilla) event.stopPropagation(); else event.preventDefault();
		var win = $('.instructions-div');
		win.load('instructions/'+get_id_i_icon($(elem))+'.php');
		win.css({"top": ($(window).scrollTop() + max(($(window).height() - win.height())/2, 20)).toString() + "px", "left": ($(window).scrollLeft()  + max(($(window).width() - win.width())/2, 20)).toString() + "px"});
		win.show(300, close_how_to);
	}

	
	$('.i-icon, .i-icon-a').click(function(event){inst_window(event,this)})
	.mouseover(function(){
		$(this).addClass("active");
	}).mouseout(function(){
		$(this).removeClass("active");
	});	

	$($('#tool-case > div').get(current_item)).show(400);

	$('#exp-choice' ).change(function () { 
		$example_id = $(this).find(":selected").val();
	   $("#exp").val($('#'+$example_id+'-e').html()); 
	   $("#re-form #list").val($('#'+$example_id+'-i').html()); 
	}); 

	$('#exp-choice-1' ).change(function () { 
		$example_id = $(this).find(":selected").val();
	   $("#exp-1").val($('#'+$example_id+'-e').html()); 
	   $("#rem-form #list").val($('#'+$example_id+'-i').html()); 
	}); 

	for(var i=0; i<arr_.length; i++)
	{set_str(arr_[i]);$(form_str).ajaxForm(success_);}
	
	$('#submit-rem').click(function(){set_tool('rem')});
	$('#submit-re').click(function(){set_tool('re')});
	$('#submit-so').click(function(){set_tool('so')});
	$('#submit-sp').click(function(){set_tool('sp')});
	$('#submit-se').click(function(){set_tool('se')});
	$('#submit-ul').click(function(){set_tool('ul')});
	$('#submit-asb').click(function(){set_tool('asb')});
	$('#submit-cq-ia').click(function(){set_tool('cq-ia')});
	$('#submit-sinppets').click(function(){set_tool('sinppets')});

	

	
});

function success_(response, st, err)
{shell.html(response);}


