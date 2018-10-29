<script src="https://momentjs.com/downloads/moment.js"></script>
<script src="https://momentjs.com/downloads/moment-with-locales.js"></script>
<script src="https://momentjs.com/downloads/moment-timezone-with-data.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<input id="utcTime" type="hidden" value="<?=time();?>"/>
<input id="serverTime" type="hidden" value=""/>
<input id="userTime" type="hidden" value=""/>

<script>
$(function(){
	var strTime = $("#utcTime").val();
	var serverTime = moment.unix(strTime).tz('Australia/Sydney').format("MM/DD/YYYY h:mm:ss a");
	var userTime = moment.unix(strTime).tz(moment.tz.guess()).format("MM/DD/YYYY h:mm:ss a");
	$("#severTime").val(serverTime);
	$("#userTime").val(userTime);
});
</script>

<!-- Setting dates/hour using UTC as reference. It's a separate page because we used in more than one page -->