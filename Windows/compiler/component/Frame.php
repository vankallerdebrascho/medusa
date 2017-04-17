<?php
	if( isset($_SESSION["obj"]) ) {
		$obj=$_SESSION["obj"];
?>
			<fieldset id=<?php echo $obj->id ?> class="Frame" tabindex=<?php echo $obj->TabIndex ?> 
				style="
				position: 			absolute;
				height: 			<?php echo $obj->Height 	?>in;
				width: 				<?php echo $obj->Width 		?>in;
				top: 				<?php echo $obj->Top 		?>in;
				left: 				<?php echo $obj->Left 		?>in;
			    background-color: 	#e8e8e8;
			    border: 			1px solid #bfbfbf;
			    border-radius: 		3px;
				">
				<legend
					style="
					    padding: 0.2em 0.5em;
					    border:1px solid #d0cece;
					    font-size:90%;
					    text-align:left;
					    margin-left: 1em;
					    width: auto;
					    text-transform: none;
					    margin-bottom: 0px;
					    background-color: #ededed;
					    ">
					    <?php echo $obj->Caption ?>		
				</legend>
<?php
	} else {
?>
</fieldset>
<?php
	}
?>
