<html>
<head>
<title>Edit Recipes</title>
    <meta charset = "UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name ="viewport" content="width=device-width, initial-scale=1.0">
	
 <style>
  body{
	  background-color: #6D8B74;
	  
  }
  input{
	  width: 40%;
	  height: 5%;
	  border: 1px;
	  border-radius: 05px;
	  padding: 8px 15px 8px 15px;
	  margin: 10px 0px 15px 0px;
	  box-shadow: 1px 1px 2px 1px grey;
	  
  }
  .header{
padding-left: 400px;
color: #5F7161;
font-size: 50px;

}
.cont{
	padding-left: 45 px;
}
li, a{
	font-weight: 500;
	font-size: 15px;
	color: white;
	text-decoration: none;
}
.navlinks{
	list-style: none;
	padding-bottom: 0;
	padding-right: 0;
}
.navlinks li{
	display: inline-block;
	text-align: center;
	padding: 10px 50px;
	padding-left: 0px;
}
.navlinks li a{
	transition: all  0.4s ease 0s;
}
.navlinks li a:hover{
	color: #D0C9C0;
	
}
.cont{
	padding-left: 45px;
}
 </style>
</head>
<body>
<div class="header">
<div class="cont">
		<h1>Recipe Corner</h1>
	</div>
	<nav>
		<ul class= "navlinks">
            <li><a href="home.php">Home page</a></li>
			<li><a href="addRecipe.php">Add recipe</a></li>
			<li><a href="editRecipes.php">Edit Recipe</a></li>
			<li><a href="deleteRecipe.php">Delete Recipe</a></li>
			<li><a href="viewRecipes.php">View Recipes</a></li>
		</ul>
		</nav>
		</div>	
<center
<form action="edit.php" method= "POST">
<input type="text" name="id" placeholder = "Enter id"/><br/><br/>
<input type="text" name="name" placeholder = "Enter Name"/><br/><br/>
<input type="text" name="recipeName" placeholder = "Enter Recipe Name"/><br/><br/>
<input type="text" name="recipeDescription" placeholder = "Enter Recipe Description"/><br/><br/>
<input type="text" name="recipeIngredients" placeholder = "Enter Recipe Ingredients"/><br/><br/>
<input type="text" name="recipeInstructions" placeholder = "Enter Recipe Instructions"/></br><br/>
<input type="submit" name="update" value="Update Data"/>
</form>
</center>
</body>
</html>

<?php

include("footer.php");
?>