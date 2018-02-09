<?php
$fajl = file_get_contents('https://www.youtube.com/feeds/videos.xml?playlist_id=PLUg_N7ZopzUUhadbN2YE-c9Yxa4pBx_gS');

$xml = new SimpleXMLElement($fajl);

?>
<div><strong>Play lista:</strong><?= $xml->title;?></div><br><hr>

<form method="POST">
<select name="pjesma">
<option value="default">Choose song...</option>;

<?php
		foreach ($xml->entry as $naziv) {
				 	 $vid =$naziv->link['href'];
		    		$p = str_replace("https://www.youtube.com/watch?v=","","$vid");
		    		echo "<option value='{$p}'>".$naziv->title."</option>";
		    		};
?>

</select><br><br><hr>
<button type="submit" name="sub_btn" value="Play pjesmu" class="button">Choose</button>
</form>
<div style="text-align:center;">
<?php
 if (isset($_POST['pjesma']) && $_POST['sub_btn'] !== 'default') {
 	echo "<iframe 
	width='400'
	height='250'
	src='https://www.youtube.com/embed/".$_POST['pjesma']."'
	frameborder='0'
	allowfullscreen></iframe>";
};
?>
</div>

