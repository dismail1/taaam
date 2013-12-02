<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("recipe.xml");
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
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    
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
  
 
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
        <?php
              $xpath = new DOMXPath($xmlDoc); 
              $appetizer = $xpath->query("/collection/recipe[related/category='Appetizer']");
              foreach ($appetizer as $recipe)
{
  
  
  $titles = $recipe->getElementsByTagName( "title" );
  $title = $titles->item(0)->nodeValue;
  
  $photos = $xpath->query("/collection/recipe[title='$title']/photo");  

   foreach( $photos as $photo ) 
{ 
	
  $valueuri = $photo->getAttribute('uri'); 
	
	
}   
  
  $descriptions = $recipe->getElementsByTagName( "description" );
  $description = $descriptions->item(0)->nodeValue;
}
          echo "<img src=\"$valueuri\">";?>
          <div class="container">
           <div class="carousel-caption">
           <?php echo  "<h1>$title</h1>";
             echo "<p class=\"lead\">$description</p>";
             echo "<a class=\"btn btn-large btn-primary\" href=\"recipe.php?title=$title\">View recipe</a>
            ";?>
            </div>
          </div>
        </div>
        <div class="item">
          <?php
              $xpath = new DOMXPath($xmlDoc); 
              $appetizer = $xpath->query("/collection/recipe[related/category='Salad']");
              foreach ($appetizer as $recipe)
{
  
  
  $titles = $recipe->getElementsByTagName( "title" );
  $title = $titles->item(0)->nodeValue;
  
  $photos = $xpath->query("/collection/recipe[title='$title']/photo");  

   foreach( $photos as $photo ) 
{ 
	
  $valueuri = $photo->getAttribute('uri'); 
	
	
}   
  
  $descriptions = $recipe->getElementsByTagName( "description" );
  $description = $descriptions->item(0)->nodeValue;
}
          echo "<img src=\"$valueuri\">";?>
          <div class="container">
           <div class="carousel-caption">
           <?php echo  "<h1>$title</h1>";
             echo "<p class=\"lead\">$description</p>";
             echo "<a class=\"btn btn-large btn-primary\" href=\"recipe.php?title=$title\">View recipe</a>
            ";?> </div>
          </div>
        </div>
        <div class="item">
          <?php
              $xpath = new DOMXPath($xmlDoc); 
              $appetizer = $xpath->query("/collection/recipe[related/category='Soup']");
              foreach ($appetizer as $recipe)
{
  
  
  $titles = $recipe->getElementsByTagName( "title" );
  $title = $titles->item(0)->nodeValue;
  
  $photos = $xpath->query("/collection/recipe[title='$title']/photo");  

   foreach( $photos as $photo ) 
{ 
	
  $valueuri = $photo->getAttribute('uri'); 
	
	
}   
  
  $descriptions = $recipe->getElementsByTagName( "description" );
  $description = $descriptions->item(0)->nodeValue;
}
          echo "<img src=\"$valueuri\">";?>
          <div class="container">
           <div class="carousel-caption">
           <?php echo  "<h1>$title</h1>";
             echo "<p class=\"lead\">$description</p>";
             echo "<a class=\"btn btn-large btn-primary\" href=\"recipe.php?title=$title\">View recipe</a>
            ";?> </div>
          </div>
        </div>
        <div class="item">
          <?php
              $xpath = new DOMXPath($xmlDoc); 
              $appetizer = $xpath->query("/collection/recipe[related/category='Main']");
              foreach ($appetizer as $recipe)
{
  
  
  $titles = $recipe->getElementsByTagName( "title" );
  $title = $titles->item(0)->nodeValue;
  
  $photos = $xpath->query("/collection/recipe[title='$title']/photo");  

   foreach( $photos as $photo ) 
{ 
	
  $valueuri = $photo->getAttribute('uri'); 
	
	
}   
  
  $descriptions = $recipe->getElementsByTagName( "description" );
  $description = $descriptions->item(0)->nodeValue;
}
          echo "<img src=\"$valueuri\">";?>
          <div class="container">
           <div class="carousel-caption">
           <?php echo  "<h1>$title</h1>";
             echo "<p class=\"lead\">$description</p>";
             echo "<a class=\"btn btn-large btn-primary\" href=\"recipe.php?title=$title\">View recipe</a>
            ";?></div>
          </div>
        </div>
        <div class="item">
          <?php
              $xpath = new DOMXPath($xmlDoc); 
              $appetizer = $xpath->query("/collection/recipe[related/category='Desserts']");
              foreach ($appetizer as $recipe)
{
  
  
  $titles = $recipe->getElementsByTagName( "title" );
  $title = $titles->item(0)->nodeValue;
  
  $photos = $xpath->query("/collection/recipe[title='$title']/photo");  

   foreach( $photos as $photo ) 
{ 
	
  $valueuri = $photo->getAttribute('uri'); 
	
	
}   
  
  $descriptions = $recipe->getElementsByTagName( "description" );
  $description = $descriptions->item(0)->nodeValue;
}
          echo "<img src=\"$valueuri\">";?>
          <div class="container">
           <div class="carousel-caption">
           <?php echo  "<h1>$title</h1>";
             echo "<p class=\"lead\">$description</p>";
             echo "<a class=\"btn btn-large btn-primary\" href=\"recipe.php?title=$title\">View recipe</a>
            ";?></div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->
      <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img  src="image/CAKE/giftCake.jpg">
          <h2>Cake Decoration</h2>
          <p>Cake decoration is an art implement all over the world. It present the cake in fabulous ways. From birthdays to wedding all occasions will be unique and prety with a fantastic creative cake. It varies from using icing and frosting to using fondant and marzipan. </p>
          <p><a class="btn" href="recipeCategory.php?category=Cake Decoration">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img src="image/NAPKINS/napkinZahri13.jpg">
          <h2>Napkin Folding</h2>
          <p>Napkin folding is a decoration for the table. Is used on retaurants and fancy parties. It give the table a decorative sence and beautiful view. It is an arrangements that varies from simple to complicated ways. It adds charming the dinner time celebrations. </p>
          <p><a class="btn" href="decorationCategory.php?category=Napkin Folding">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img src="image/GARNISH/cucumberBoat.jpg">
          <h2>Garnish</h2>
          <p>Garnish is a piece of decoration add to the food to make it more adorable. It present the meal as a sample of art. Acutlly it is an art itself since it change usual food to creative craft. It differ from vegetable to fruit all can present a gorgeous plate.</p>
          <p><a class="btn" href="decorationCategory.php?category=Garnish">View details &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->
  
    
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
    
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
</body>
</html>
