<?php
$conn = new mysqli('localhost', 'root', '147777', 'recipe');
$query = "select distinct id, name, recipe_name, recipe_description, recipe_ingredients, recipe_instructions from recipe_info sort by id";
$result = $conn->query($query) or die($conn->error . __LINE__);
$fetch_data = array();
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		$fetch_data[] = $row;
		
	}
}
	
$jResponse = json_encode($fetch_data);
echo $jResponse;

?>