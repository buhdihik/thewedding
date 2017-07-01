<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php wp_head(); ?>
		<link rel="stylesheet" type="text/css" href="http://ishedorene.com/wp-content/themes/theWedding/css/main.css" media="screen">

		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script>
	  $(document).ready(function(){
		$('a[href^="#"]').on('click',function(e){
		  e.preventDefault();
		  
		  var target = this.hash;
		  var $target = $(target);
		  
		  //Scroll and show hash
		  
		 //$('html,bod').animate({
			  //'scrollTop': $target.offset().top
			//}, 1000, 'swing' , function() {
			 // window.location.hash = target;
		 //});
		  
		  //Scroll and don't show hash
		 $('html,body').animate({
			  'scrollTop': $target.offset().top
		   }, 1000, 'swing');
		  });
		});
   </script>
   </head>
    <body>
 

        
 <div class="container-fluid index" id="first">
          <nav class="navbar navbar-inverse navbar-fixed-top ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><h3 class="theWedding">the Wedding</h3></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse ">
          <ul class="nav navbar-nav navbar-right ">
            <li class="active "><a href="#first">Home</a></li>
            <li><a href="#second">About</a></li>
            <li><a >Tour</a></li>
            <li><a>Gallery</a></li>
            <li><a >Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
          <!--center content-->
            <div class="col-md-2"></div>
            <div class="col-md-8">
                  
                        <div class="panel i-padding-top" style="background-color: rgba(255, 255, 255, 0.1)">
                          <h1 class="text-center ampersand">Nes <img src="http://ishedorene.com/wp-content/themes/theWedding/images/ampersand.png" >Donna</h1>
                          
                        </div>
               <h4 class="text-center july">--July twenty second, two thousand eleven--</h4>          
            </div>
           
            <div class="col-md-2"></div>
            
     </div>
   
   
   
  
  


