<?php
$connection = mysqli_connect("localhost","root","147777");
$db = mysqli_select_db($connection,'recipe');

if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$recipeName = $_POST['recipeName'];
	$recipeDescription = $_POST['recipeDescription'];
	$recipeIngredients = $_POST['recipeIngredients'];
	$recipeInstructions = $_POST['recipeInstructions'];
	
	$query = "UPDATE recipe_info SET name = '$name',recipe_name = '$recipeName',recipe_description = '$recipeDescription',recipe_ingredients = '$recipeIngredients',recipe_instructions = '$recipeInstructions' where id='$id' ";
	$query_run = mysqli_query($connection,$query);
	
	if($query_run){
		echo 'Data has been updated';
	}else{
		echo 'Data has not updated'; 
	}
}

?>