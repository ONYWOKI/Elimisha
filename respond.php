<!DOCTYPE html>
<html>
<head>
	<title>Respond Questions</title>
<?php include_once("templates/links.php");?>
</head>
<body>

<?php include_once("templates/header.php");?>
<?php include_once("templates/main_menu.php");?>

<div class=" maincontainer">
	<center>
	<div class="respond_filter_bar">
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
				<label>Subject</label>
				<select>
					<option>Computer</option>
					<option>Math</option>
					<option>All</option>
					<option>Geography</option>
				</select>
			</form>
		</div>
		</center>
		<div class="question">
		<div class="question_asked">Question goes here</div><br>
		<button class="btn_respond">Respond</button><br><br>
		<div class="respond_to_question hideme">
		<form>
			<textarea style="width: 100%">
			</textarea>
			<button class="btn_post_answer">post answer</button><br><br>
		</form>
	</div>
		<div>Previous answers</div>

		
	</div>

	<script type="text/javascript">
		$("document").ready(function(){
			$(".btn_respond").click(function(event){
				event.preventDefault();
				$(".respond_to_question").stop();
				$(".respond_to_question").slideToggle();
			});
		});
	</script>
</div>




</body>
<?php include_once("templates/footer.php");?>
</html>