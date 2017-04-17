<?php
	if( isset($_SESSION["obj"]) ) {
		$obj=$_SESSION["obj"];

?>
			<fieldset tabindex=<?php echo $obj->TabIndex ?> id=<?php echo $obj->id ?> class="StatusBar"
				style="
				position: 				absolute;
			    background-color: 		#e8e8e8;
			    height: 				1em;
				color:					grey;
				text-align: 			center;
				font-size:				90%;
			    border-radius: 			5px;
			    border-top: 			solid 1px #bbbbbb;
			    border-bottom: 			solid 1px #fbfbfb;
			    overflow: 				hidden;
			    text-transform: 		lowercase;
				left: 					0.8em;
				right: 					0.8em;
				bottom: 				0.5em;
				padding: 				0.2em 0.5em;
				margin-bottom: 			0px;
				">
				tes
			</fieldset>
<?php
	} else {
?>

<?php
	}
?>