<?php
	if( isset($_SESSION["obj"]) ) {
		$obj=$_SESSION["obj"];
		$obj->Top = $obj->Top;
?>
			<div class="ListView" id=<?php echo $obj->id ?> tabindex=<?php echo $obj->TabIndex ?>  style="
				overflow: 			auto;
				position: 			absolute;
				border-radius: 		3px;
				background-color: 	white;
				border-top: 		1px solid #8c8b8b;
				border-bottom: 		1px solid #fff;
				width: 				auto;
				top: 				<?php echo $obj->Top+0.05	?>in;
				left: 				1.4em;
				right: 				1.4em;
				bottom: 			2.3em;
			">
				<table class="responsive">
<tbody><tr>
<th style="width:44%">Description</th>
<th style="width:28%">Windows</th>
<th style="width:28%">Mac OS</th>
</tr>
<tr>
<td>Edit menu</td>
<td>Alt + E</td>
<td>Ctrl + F2 + F</td>
</tr>
<tr>
<td>File menu</td>
<td>Alt + F</td>
<td>Ctrl + F2 + E</td>
</tr>
<tr>
<td>View menu</td>
<td>Alt + V</td>
<td>Ctrl + F2 + V</td>
</tr>     
<tr>
<td>Select all text</td>
<td>Ctrl + A</td>
<td>Cmd + A</td>
</tr>
<tr>
<td>Copy text</td>
<td>Ctrl + C</td>
<td>Cmd + C</td>
</tr>
<tr>
<td>Find text</td>
<td>Ctrl + F</td>
<td>Cmd + F</td>
</tr>  
<tr>
<td>Find and replace text</td>
<td>Ctrl + H</td>
<td>Cmd + F</td>
</tr>     
<tr>
<td>New Document</td>
<td>Ctrl + N</td>
<td>Cmd + N</td>
</tr>
<tr>
<td>Open a file</td>
<td>Ctrl + O</td>
<td>Cmd + O</td>
</tr>
<tr>
<td>Print options</td>
<td>Ctrl + P</td>
<td>Cmd + P</td>
</tr>
<tr>
<td>Save file</td>
<td>Ctrl + S</td>
<td>Cmd + S</td>
</tr>  
<tr>
<td>Paste text</td>
<td>Ctrl + V</td>
<td>Cmd + V</td>
</tr>
<tr>
<td>Cut text</td>
<td>Ctrl + X</td>
<td>Cmd + X</td>
</tr>
<tr>
<td>Redo text</td>
<td>Ctrl + Y</td>
<td>Shift + Cmd + Z </td>
</tr>
<tr>
<td>Undo text</td>
<td>Ctrl + Z</td>
<td>Cmd + Z</td>
</tr>
</tbody>
				</table>
			</div>
<?php
	} else {
?>

<?php
	}
?>


