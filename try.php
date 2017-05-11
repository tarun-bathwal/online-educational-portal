<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	
	.twitter-typeahead .tt-query,
.twitter-typeahead .tt-hint {
	margin-bottom: 0;
}
.tt-hint {
	display: block;
	width: 100%;
	height: 38px;
	padding: 8px 12px;
	font-size: 14px;
	line-height: 1.428571429;
	color: #999;
	vertical-align: middle;
	background-color: #ffffff;
	border: 1px solid #cccccc;
	border-radius: 4px;
	-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	      box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	-webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
	      transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}
.tt-dropdown-menu {
	min-width: 160px;
	margin-top: 2px;
	padding: 5px 0;
	background-color: #ffffff;
	border: 1px solid #cccccc;
	border: 1px solid rgba(0, 0, 0, 0.15);
	border-radius: 4px;
	-webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
	      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
	background-clip: padding-box;

}
.tt-suggestion {
	display: block;
	padding: 3px 20px;
}
.tt-suggestion.tt-is-under-cursor {
	color: #fff;
	background-color: #428bca;
}
.tt-suggestion.tt-is-under-cursor a {
	color: #fff;
}
.tt-suggestion p {
	margin: 0;
}
</style>
<body>
	<form action="try.php" method="get">
		<input type="text" name="word" id="dict_word">
		<input type="submit" value="go">
	</form>
	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/typeahead/typeahead.js"></script>
	<script>
		 $(document).ready(function(){
		 	var words = new Bloodhound({
		 		datumTokenizer : Bloodhound.tokenizers.obj.whitespace('word'),
		 		queryTokenizer : Bloodhound.tokenizers.whitespace,
		 		remote : {
		 				url : 'dicsearch.php?query=%QUERY',
		 				wildcard : '%QUERY'
		 		}
		 	});
		 	words.initialize();

		 	$("#dict_word").typeahead({
		 		hint : true,
		 		highlight : true ,
		 		minLength:3
		 	},{
		 		name:'word',
		 		displayKey:'word',
		 		source : words.ttAdapter()
		 	});
		 });
	</script>
</body>
</html>