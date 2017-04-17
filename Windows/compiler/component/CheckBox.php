<?php
	if( isset($_SESSION["obj"]) ) {
		$obj=$_SESSION["obj"];
 ?>
<input tabindex=<?php echo $obj->TabIndex ?> id=<?php echo $obj->id ?> value="" type="checkbox"  
	style="
		position: 			absolute;
		height: 			<?php echo $obj->Height-0.03?>in;
		width: 				<?php echo $obj->Width-0.03	?>in;
		top: 				<?php echo $obj->Top 		?>in;
		left: 				<?php echo $obj->Left 		?>in;
	"
<?php
	} else {
?>
class="checkbox" >
<?php
	}
?>