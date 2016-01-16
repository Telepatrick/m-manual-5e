<html>
<head>
	<title>Live Search With jQuery & JSON</title>
	<style type="text/css">
	body{
		background: #eee;
	}
	#searcharea{
		margin: 0 auto;
		text-align: center;
	}
	</style>
</head>
<body>
	<center>
		<a target="_blank" href="http://hunklessons.blogspot.com/2014/02/live-search-with-jquery-json.html">Tutorial</a> / 
		<a target="_blank" href="https://www.facebook.com/hunklessons">Like You On Facebook</a> / 
		<a target="_blank" href="https://www.facebook.com/hunk.husain">Add hunk as Friend</a> / 
		<a target="_blank" href="http://hunklessons.blogspot.in/">HunkLessons</a>
	</center>
	<br>
	<div id="searcharea">
		<h2>Live Search</h2>
		<input type="search" id="search"/>
	</div>
	<div id="update">
	</div>
	<script type="text/javascript" src='//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script type="text/javascript">
	$('#search').keyup(function() {//when key is pressed in search bar
		var searchTerm = $(this).val(); //val of search bar
		var myExp = new RegExp(searchTerm, "i"); //regular experation

		$.getJSON('hunklessons.json', function(data){//get the json file

			var output = "<ul id='result'>";
			$.each(data, function(key, val){
				if(val.name.search(myExp) != -1){//search for the data in the json file
					output += '<li>';
					output += '<h3>' +val.name+ '</h3>';
					output += '<img src="'+val.photo+'" style="height:100px;">';
					output += '</li>';
				}
			});//end each
			output += "</ul>";
			$('#update').html(output);//output result to the update div
		});
	});
	</script>
	<?php include '../counter.html' ?>
</body>
</html>