<!DOCTYPE html>
<html>
<head>
	<title> Recipe Corner </title>	
	<meta charset = "UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<style>
.info{
font-family: Franklin Gothic Medium;
text-align: center;
padding-bottom: 50px;
padding-top: 0;	
}

</style>
</head>
<body>

<div class= header>
	<div class="cont">
		<h1>Recipe Corner</h1>
	</div>
	<nav> 
		 <ul class= "navlinks"> 
            <li><a href="home.php">Home page</a></li>
			<li><a href="addRecipe.php">Add recipe</a></li>
			<li><a href="editRecipes.php">Edit Recipe</a></li>
			<li><a href="deleteRecipe.php">Delete Recipe</a></li>
			<li><a href="ViewRecipes.php">View Recipes</a></li>
		</ul>
		</nav>	
</div>
<div class="info"> 
<p> Take a look at our popular recipes! </p>		
</div>
	<div class= "container">
		<div class="image fade">
		<img src="recipepic1.jpg" alt="cookies" width="100%">
		</div>
			<div class="image fade">
			<img src="recipepic2.jpg" alt="fries" width="100%">
			</div>
<div class="image fade">
<img src="recipepic3.jpg" alt="pizza" width="100%">
</div>
<i id="prev" onclick= "show_image(-1)" class="fas fa-chevron-left"></i>
<i id="next" onclick= "show_image(1)" class="fas fa-chevron-right"></i>

		<div class= "dots">
		<span class = "dot"></span>
		<span class = "dot"></span>
		<span class = "dot"></span>
		</div>
	</div>

<script src="script.js"></script>
<div class="content">
<?php 
include("footer.php");
?>