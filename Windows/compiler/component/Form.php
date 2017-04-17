<?php
	if( isset($_SESSION["obj"]) ) {
		$obj=$_SESSION["obj"];
	    ?>
<div class="form" id="form" state="normal" style="
    	position: 		absolute;
    	overflow: 		auto;
		width: 			<?php echo $obj->ClientWidth*0.0007 ?>in;
	">	
	<nav class="control-window">
	    <a href="javascript:" 	class="minimize" 	onclick="minimize($(this))">	minimize</a>
	    <a href="javascript:" 	class="maximize" 	onclick="maximize($(this))">	maximize</a>
	    <a href="javascript:" 	class="close" 		onclick="hapus($(this))">		close</a>
    </nav>
    <h1 class="titleInside"><?php echo $obj->Caption ?></h1>    
    <div class="container" style="
    	position: 		relative;
    	overflow: 		auto;
		height: 		<?php echo $obj->ClientHeight*0.0007 ?>in; 
		">
		<div class="container-inside" style="position: relative;
		height: 		100%; 
		">
<?php
	} else {
?>

		</div>
	</div>
</div>


<script>

</script>
<?php
	}
?>


