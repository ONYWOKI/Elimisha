<!DOCTYPE html>
<html>
<head>
	<title>Handouts</title>
<?php include_once("templates/links.php");?>
</head>
<body>

<?php include_once("templates/header.php");?>
<?php include_once("templates/main_menu.php");?>

<div class=" maincontainer">
	<h1>View and Download Handouts</h1>
	<center>
		<div class="handouts_filter_bar">
			<form>
				<label>Unit Code:</label>
				<select>
					<option>All</option>
					<option>Comp 362</option>
					<option>Comp 260</option>
					<option>ICTS 150</option>
					<option>Math 241</option>
				</select>
				<label style="margin-left: 20px">Year:</label>

				<select>
					<option>All</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>Others</option>
				</select>
			</form>
		</div>
		</center>
		<label>All Handouts</label>
		
		<div class="display_handouts">
			<div class="handouts">
				<label>Handout Title</label><br>
				<label>Unit Code</label><br>
				<label>Unit Title</label><br>
				<a href="#" class="fas fa-eye">&nbsp;View</a>
				<button style="float: right;" class="fas fa-download btn_download">Download</button>

			</div>
			
        
		</div>
	
</div>
</body>
<?php include_once("templates/footer.php");?>
</html>