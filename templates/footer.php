<footer>
<center>
	<a href="#" >Contact us</a><br>
	<a href="#">Terms and conditions</a><br>
	<a href="#">FAQ</a><br>
	<a href="#">&copy; <?php echo date("Y");?></a>
</center>
<script type="text/javascript">
	$(document).ready(function(){
		$(".question").hover(function(){
			$(".questions-dropdown ").stop();
			$(".questions-dropdown ").show("slow");
		});

	$(".question").mouseleave(function(){
		$(".questions-dropdown ").stop();
			$(".questions-dropdown ").hide("slow");
		});

			$(".pastpapers").hover(function(){
				$(".past-papers-dropdown ").stop();
			$(".past-papers-dropdown ").show("slow");
		});

	$(".pastpapers").mouseleave(function(){
		$(".past-papers-dropdown ").stop();
			$(".past-papers-dropdown ").hide("slow");
		});
	$("#mymenu").click(function(){
		$(".menu-items").stop();
		$(".menu-items").toggle(500);
	});
});
</script>
</footer>