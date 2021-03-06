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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>taaam</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    
  </head>
<!-- NAVBAR
================================================== -->
  <body>

   <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.php"><img src="image/taaam.png"></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recipes<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="RecipeCategory.php?category=Appetizer">Appetizer</a></li>
                  <li><a href="RecipeCategory.php?category=Salad">Salad</a></li>
                  <li><a href="RecipeCategory.php?category=Soup">Soup</a></li>
                  <li><a href="RecipeCategory.php?category=Main">Main dish</a></li>
                  <li><a href="RecipeCategory.php?category=Desserts">Desserts</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Sub Menu</li>
                  <li><a href="RecipeCategory.php?category=Easy">Easy</a></li>
                  <li><a href="RecipeCategory.php?category=Occasions">Occasions</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Units<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="Temperatures.html">Temperatures</a></li>
                    <li><a href="Length.html">Length</a></li>
                    <li><a href="Weight.html">Weight</a></li>
                    <li><a href="Capacity.html">Capacity</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div><!-- /.nav bar -->
    
 <a id="top"></a>  
 
     <div class="container-fluid">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
      
        <?php 
       
        $xpath = new DOMXPath($xmlDoc);

 
$photos = $xpath->query("/collection/recipe[title='$title']/photo");  

   foreach( $photos as $photo ) 
{ 
	
  $valueuri = $photo->getAttribute('uri'); 
	
	
} 

  $collection = $xpath->query("/collection/recipe[title='$title']");
  
  foreach( $collection as $recipe )
  {
  	  
  
  $titles = $recipe->getElementsByTagName( "title" );
  $titleNode = $titles->item(0)->nodeValue;
  
  
  	  
  $descriptions = $recipe->getElementsByTagName( "description" );
  $description = $descriptions->item(0)->nodeValue;
  
  echo "<div class=\"row-fluid\">
  <div class=\"span4\">";
  if ($valueuri!="")
  echo "<img src=\"$valueuri\" alt=\"$title\" width=\"200px\" >";
if ($valueuri =="")
  	  echo "<img src=\"image/NoImageAvailabe.png\" alt=\"no photo exist\"></a>";
  echo "</div><div class=\"span8\">
  <h3>$title</h3>";
  
  echo "<p>$description</p></div></div>";
  
  echo "<div class=\"row-fluid\"><div class=\"span12\"><h4>Ingrediant</h4>";
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

  
  echo "<h4>Preparation</h4><ol>";
  
  $preparations = $recipe->getElementsByTagName( "step" );
$i=0;
  foreach( $preparations as $steps ) 
{ 
	
	$preparation = $preparations->item($i)->nodeValue;
	echo "<li>$preparation</li>";

$i++;	
}
  
  echo "</ol></div>";
  }
        
        ?>
        <p><?php echo "<a class=\"btn btn-large btn-primary\" href=\"print.php?title=$title\">Print</a></p>" ?>
      </div>
      
    
    
<hr class="featurette-divider">


<!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#top">Back to top</a></p>
        <p>&copy; 2013 taaam.com<p>Code licensed under <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a></p>
      </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
    <script src="bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="bootstrap/js/bootstrap-tab.js"></script>
    <script src="bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="bootstrap/js/bootstrap-popover.js"></script>
    <script src="bootstrap/js/bootstrap-button.js"></script>
    <script src="bootstrap/js/bootstrap-collapse.js"></script>
    <script src="bootstrap/js/bootstrap-carousel.js"></script>
    <script src="bootstrap/js/bootstrap-typeahead.js"></script>
    
</body>
</html>
