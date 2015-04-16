<!DOCTYPE html>
<html>
<head>
	<link href="../demoengine/demoengine.min.css" rel="stylesheet">
	<script src="../demoengine/demoengine.min.js" defer></script>
	<title>jQuery UI Autocomplete: Load Data via AJAX</title>
	<link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/ui-darkness/jquery-ui.min.css" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
	<style>
		/* autocomplete adds the ui-autocomplete-loading class to the textbox when it is _busy_ */
		#autocomplete.ui-autocomplete-loading {
			background-image: url(loading.gif);
			background-position: right center;
			background-repeat: no-repeat;
		}
	</style>
</head>
<body>
	<form action="http://www.rottentomatoes.com/search/" target="_blank">
		<input id="autocomplete" type="text" placeholder="Nome do Golpe" name="search">
	</form>
	<script>
		/*
		 * jQuery UI Autocomplete: Load Data via AJAX
		 * http://salman-w.blogspot.com/2013/12/jquery-ui-autocomplete-examples.html
		 */
		$(function() {
			$("#autocomplete").autocomplete({
				delay: 500,
				minLength: 3,                               
				source: function(request, response) {
					$.getJSON("golpes.php?",{
                                        golpe: request.term},
					function(data) {
						var array = data.map( function(m) {
							return {
								label: m.name,
								url: m.name
							};
						});
						response(array);
					});
				},
				focus: function(event, ui) {
					// prevent autocomplete from updating the textbox
					event.preventDefault();
				},
				select: function(event, ui) {
					// prevent autocomplete from updating the textbox
					event.preventDefault();
					// navigate to the selected item's url
				//	window.open(ui.item.url);
                                        $("#autocomplete").val(ui.item.url);       
				}
			});
		});
	</script>
	<p>This example uses <a href="http://developer.rottentomatoes.com/" target="_blank">Rotten Tomatoes API</a>.</p>
</body>
</html>