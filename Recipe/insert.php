<?php
$server = "localhost";
$username = "root";
$password = "147777";
$dbname = "recipe";

$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit'])){
		
		if(!empty($_POST['name'])&& !empty($_POST['recipeName']) && !empty($_POST['recipeDescriptions'])&& !empty($_POST['recipeIngredients'])&& !empty($_POST['recipeInstructions'])){
			
		$name = $_POST['name'];
        $recipeName	= $_POST['recipeName'];
		$recipeDescriptions = $_POST['recipeDescriptions'];
		$recipeIngredients = $_POST['recipeIngredients'];
		$recipeInstructions = $_POST['recipeInstructions'];
		
		$query = "insert into recipe_info(name, recipe_name, recipe_description, recipe_ingredients,recipe_instructions) values('$name', '$recipeName', '$recipeDescriptions', '$recipeIngredients', '$recipeInstructions')";
		
		$run = mysqli_query($conn, $query) or die(mysqli_error($conn));
		
		if($run){
			echo "Form submitted successfully";
		}
		else{
		echo "Form was not submitted";
		}
		}
		else{
			echo " all fields required";
		}
}
?>