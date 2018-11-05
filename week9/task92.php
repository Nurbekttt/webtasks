
<a href="task92.php?category=sport">Sport news</a> | <a href="task92.php?category=politics">Politic news</a><br/><br/>
<a href="task92.php?category=sport&format=json">Sport news (JSON)</a> | <a href="task92.php?category=politics&format=json">Politic news (JSON)</a><br/><br/>

<?php
$news = ["sport"=>["C. Ronaldo has scored three goals in last five matches","Golovkin has won match for title"],"politics"=>["Trump has cancelled his visit to North Corea, because of sanction","N. Nazarbayev has approved new version of alphabet"]];
$category = "sport";
	#print $news[0];
	#print "i love".$news['politics'][0];

	
	// if ($category=="sport") {
	// 	print $news["sport"][0];
	// 	# code...
	// }
	// elseif ($category=="politics") {
	// 	print $news["politics"][0];
	// 	print $news["politics"][1];
	// 	# code...
	// }
 	if(isset($_GET['category'])){
	    $category = $_GET['category'];
		
		if(isset($_GET['format'])){
			echo json_encode($news[$category]);
		}
		else{
			print $news[$category][0]."<hr>".$news[$category][1];
		}
	
}
/* Write your code here */
?>
