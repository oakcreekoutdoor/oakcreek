$(function(){
	$('#goBack').on('click', function goBack(){
		parent.history.back();
        return false;
	});
});