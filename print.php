<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("recipe.xml");

$title=$_GET['title'];

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Arabic Food Recipes">
    <meta name="author" content="Daneih Ismail">

    <title>taaam</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
  </head>
<!-- NAVBAR
================================================== -->
  <body>

     <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      
      
      
        <h1><?php 
        
        
        echo "<h3>$title</h3>";
        
       $xpath = new DOMXPath($xmlDoc);
$collection = $xpath->query("/collection/recipe[title='$title']");
  foreach( $collection as $recipe )
  {
  
  $titles = $recipe->getElementsByTagName( "title" );
  $titleNode = $titles->item(0)->nodeValue;
  
  
  	  
  $descriptions = $recipe->getElementsByTagName( "description" );
  $description = $descriptions->item(0)->nodeValue;
  echo "<p>$description</p>";
  
  echo "<h4>Ingrediant</h4>";
  $ingrediants = $recipe->getElementsByTagName( "ingrediant" );
  echo "<ul>";
  foreach( $ingrediants as $ingrediant ) 
{ 
    $valueName = $ingrediant->getAttribute('name'); 

    $valueAmount = $ingrediant->getAttribute( 'amount' ); 


    $valueUnit = $ingrediant->getAttribute( 'unit'); 
    
    echo "<li> $valueAmount $valueUnit $valueName</li>"; 
}
echo "</ul>";

  
  echo "<h4>Preparation</h4>";
  $preparations = $recipe->getElementsByTagName( "preparation" );
  $preparation = $preparations->item(0)->nodeValue;
  echo "<p>$preparation</p>";
 
  }
        
        ?></h1>

      
    
    
<hr class="featurette-divider">


<!-- FOOTER -->
      <footer>
        <p>&copy; 2013 taaam.com.</p>
      </footer>
      
      
</div><!-- container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
</body>
</html>
