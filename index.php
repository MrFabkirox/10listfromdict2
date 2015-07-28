<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html> 
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf8" />
	<title>10listfromdict2, index</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<script>

	function updateList() {
		var txt = $("#filter").val();
		if(txt>2) return;
		$.ajax({
			url : "dico.php",
			data : {debut: txt},
			success : createList
		});
	}

	function createList(txt) {
		$("#sel").empty();

		for(i in txt) {
			var opt = document.createElement("option");
			var word = document.createTextNode(txt[i]);
			opt.appendChild(word);
			$("#sel").append(opt);
		}
	}


</script>


<div id="right"><?php include("menu.php"); ?></div>

<div id="left">

	<h3>10listfromdict2, index</h3>

	<input type="text" style="width:15em" placeholder="Country" onkeyup="updateList()" id="filter"/>
	<select style="width:10em" id="sel"></select>

</div>


</body>

</html>