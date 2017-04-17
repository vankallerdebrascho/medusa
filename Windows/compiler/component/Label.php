<?php
	if( isset($_SESSION["obj"]) ) {
		$obj=$_SESSION["obj"];
?>
<label class="label" id=<?php echo $obj->id ?> tabindex=<?php echo $obj->TabIndex ?> 
	style="
		position: 			absolute;
		height: 			<?php echo $obj->Height 	?>in;
		width: 				<?php echo $obj->Width 		?>in;
		top: 				<?php echo $obj->Top 		?>in;
		left: 				<?php echo $obj->Left 		?>in;
	"><?php echo $obj->Caption ?>
<?php
	} else {
?>
</label>
<?php
	}
?>



