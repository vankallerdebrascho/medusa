<?php
	if( isset($_SESSION["obj"]) ) {
		$obj=$_SESSION["obj"];
?>
<input tabindex=<?php echo $obj->TabIndex ?> type="button" value=<?php echo $obj->Caption ?>
	style="
		position: 			absolute;
		height: 			<?php echo $obj->Height+0.04 	?>in;
		width: 				<?php echo $obj->Width 		?>in;
		top: 				<?php echo $obj->Top-0.008		?>in;
		left: 				<?php echo $obj->Left 		?>in;
	" 
<?php
	} else {
?>
 class="osx" />
<?php
	}
?>

