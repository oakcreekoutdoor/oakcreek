<?php
include_once("functions/db.php");

$arrOrders = runSelectSQL("
	SELECT 
		orders.id, 
		users.strFullName,
		users.strEmailAddress,
		order_status.strName AS strOrderStatus
	
	FROM 
		orders 

	LEFT JOIN users ON orders.nUsersID = users.id
	LEFT JOIN order_status ON orders.nOrder_StatusID = order_status.id
");

?>

<div id="orderList">
	<form method="post" action="search.php">
		<div class="searchField">
			<label>Search Orders:</label>
			<input type="text" name="strKeyword" id="searchField"  autocomplete="off"/>
		</div><!--searchField-->
	</form>

	<div id="orderContainer">
		<table cellspacing="0">
			<thead>
				<tr>
					<td></td>
					<td><a href="#" data-filtervalue="id">Order No.</a></td>
					<td><a href="#" data-filtervalue="strOrderStatus">Status</a></td>
					<td><a href="#" data-filtervalue="strFullName">Customer</a></td>
					<td><a href="#" data-filtervalue="strEmailAddress">Email Address</a></td>
				</tr>
			</thead>

			<tbody id="tableBody">
				<?php include("filter.php");?>
			</tbody>
		</table>
	</div>
</div><!--orderList-->

<script>
	$(function(){

		$("#searchField").keyup(function(){
			$.ajax(
			{
				url: "filter.php",
				method: "GET",
				data: {strKeyword: $("#searchField").val()}, 
				success: function(result){
					
					$("#tableBody").html(result);
	        		return false;
	        	},
	   		 	error: function(response)
	   		 	{
	   		 		console.log(response.statusText);
	   		 	}
	   		});
		});

			
		$("table thead tr td a").click(function(){
				
			$.ajax(
			{
				url: "filter.php",
				method: "GET",
				data: {strKeyword: $("#searchField").val(),strSortBy: $(this).data("filtervalue")}, 
				success: function(result){
					
					$("#tableBody").html(result);
	        		return false;
	        	},
	   		 	error: function(response)
	   		 	{
	   		 		console.log(response.statusText);
	   		 	}
	   		});
		});
	});
</script>