<!DOCTYPE html>
<html>
  <head>
    <title>Tu momento Relax! &raquo; Relax TV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf8">
    <!-- css -->
    <link href="css/reset-html5.css" rel="stylesheet" media="screen">
    <link href="css/relax-style.css" rel="stylesheet" media="all">
    
    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:100,400,600,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
	    <nav id="menuTop">
	    	<ul>
	    		<li>Home</li>
	    		<li class="active">Blog</li>
	    		<li>Video Blog</li>
	    		<li>Acerca de</li>
	    		<li>Magic</li>
	    		<li>Comunidad</li>
	    	</ul>
	    </nav>
    </header>
    <div id="wrapper">
    	<div id="container">
	    	<div id="sequence">
			    <ul class="sequence-canvas">
			        <li>
			            <div class="hello">
			            	<div>
				            	<p class="hola">HOLA!</p>
								<p class="whatisit">Unos amigos decidieron ponerle cámaras a sus momentos de Relax y compartirlos por internet. Tu también pasa un momento Relax con nosotros.</p>
			            	</div>
			                <div class="logo">
							 </div>
			            </div>
			        </li>
			    </ul>
			</div>
			
    	</div>
    	 <div id="lastest">
	 	
	</div>
    </div>
    <div id="wrapper-city">
	</div>
	

	
	

	
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="/js/plugins/jquery.sequence-min.js"></script>
    <script type="text/javascript">
    	var mov;
    		$(document).on('ready', function() {
				     
				var options = {
				        autoPlay: true,
				        autoPlayDelay: 3000,
				        animateStartingFrameIn: true
				    };
				    var sequence = $("#sequence").sequence(options).data("sequence");
				
				    sequence.afterLoaded = function(){
				        $(".sequence-prev, .sequence-next").fadeIn(500);
				    }
				
var movementStrength = 15;
				
				var height = movementStrength / $(window).height();
				var width = movementStrength / $(window).width();
				
				$("html").mousemove(function(e){
							
						  var pageX = e.pageX - ($(window).width() / 2);
						  var pageY = e.pageY - ($(window).height() / 2);
				
						  var newvalueX = width * pageX * -1;
						  var newvalueY = height * pageY * -1;
				
						  $('#wrapper-city').css("background-position", newvalueX+"px "+newvalueY+"px");
				});
				
				

				   
    		});
    		
    		
    		function shake() {
	    		
    		}
    </script>
  </body>
</html