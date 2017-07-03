<!DOCTYPE html>
<html lang="en" ng-app="sampleApp">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>.:: Truco Online :: danielmmf@gmail.com :: brasil :: sp ::.</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">        
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/typicons/typicons.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body ng-controller="SampleCtrl">
    
        <!-- Loader -->
    	<div class="loader">
    		<div class="loader-img"></div>
    	</div>
				
        <!-- Top content -->
        <div class="top-content">
        	
        	<!-- Top menu -->
			<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html">Truco Online</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="top-navbar-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="scroll-link" href="#features">Logar</a></li>
							<li><a class="scroll-link" href="#how-it-works">Como jogar</a></li>
							<li><a class="btn btn-link-2" ng-click="logarFacebook()">Logar com facebook</a></li>
						</ul>
					</div>
				</div>
			</nav>
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 text">
                            <h1 class="wow fadeInLeftBig">Jogar como anonimo <strong>fala ai quem é você !</strong></h1>
                            <div class="description wow fadeInLeftBig">
                            	<p>
	                            	Quer entrar como anonimo
                            	</p>
                            </div>
                            <div class="top-big-link wow fadeInUp">
                            	<a class="btn btn-link-1 scroll-link" href="#pricing">Homem</a>
                            	<a class="btn btn-link-2 scroll-link" href="#features">Mulher</a>
                            	<a class="btn btn-link-1 scroll-link" ng-click="logarFacebook()">Facebook</a>
                            </div>
                        </div>
                        <div class="col-sm-5 form-box wow fadeInUp">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Jogar</h3>
                            		<p>Coloca seu dados pra gente saber quem é você:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<span aria-hidden="true" class="typcn typcn-pencil"></span>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post">
			                    	<div class="form-group">
			                    	<label class="sr-only" for="form-first-name">First name</label>
			                        	<input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
			                        </div>
			                     
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-email">Email</label>
			                        	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
			                        </div>
			                         <div class="form-group">
			                        	<label class="sr-only" for="form-email">Sexo</label>
			                        	<select name ="sexo"><option>Homem</option><option>mulher</option></select>
			                        </div>
			                        <button type="submit" class="btn">Sign me up!</button>
			                        <div class="form-links">
			                        	<a href="#" class="launch-modal" data-modal-id="modal-privacy">Privacy Policy</a> - 
			                        	<a href="#" class="launch-modal" data-modal-id="modal-faq">FAQ</a>
			                        </div>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- Features -->
        <div class="features-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 features section-description wow fadeIn">
	                    <h2>O que pode fazer</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                </div>
	            </div>
	            <div class="row">
                	<div class="col-sm-4 features-box features-box-gray wow fadeInUp">
	                	<div class="features-box-icon">
	                		<span aria-hidden="true" class="typcn typcn-eye-outline"></span>
	                	</div>
	                    <h3>Veja os sinais</h3>
	                    <p>Faça e veja os sinais do seu parceiro e adversario.</p>
                    </div>
                    <div class="col-sm-4 features-box wow fadeInDown">
	                	<div class="features-box-icon">
	                		<span aria-hidden="true" class="typcn typcn-thumbs-ok"></span>
	                	</div>
	                    <h3>selecione as cartas</h3>
	                    <p>Selecione as cartas como no baralho e jogue na mesa.</p>
                    </div>
                    <div class="col-sm-4 features-box features-box-gray wow fadeInUp">
	                	<div class="features-box-icon">
	                		<span aria-hidden="true" class="typcn typcn-cog-outline"></span>
	                	</div>
	                    <h3>Sistema Online</h3>
	                    <p>Jogue realtime com seus amigos</p>
                    </div>
	            </div>
	            <div class="row">
                	<div class="col-sm-4 features-box wow fadeInUp">
	                	<div class="features-box-icon">
	                		<span aria-hidden="true" class="typcn typcn-video-outline"></span>
	                	</div>
	                    <h3>Transmita as jogadas</h3>
	                    <p>Passe o link do jogo pessoas podem ver remotamente</p>
                    </div>
                    <div class="col-sm-4 features-box features-box-gray wow fadeInDown">
	                	<div class="features-box-icon">
	                		<span aria-hidden="true" class="typcn typcn-device-phone"></span>
	                	</div>
	                    <h3>Jogue do celular</h3>
	                    <p>Nunca mais dependa de um baralho , use o baralho digital direto do seu celular</p>
                    </div>
                    <div class="col-sm-4 features-box wow fadeInUp">
	                	<div class="features-box-icon">
	                		<span aria-hidden="true" class="typcn typcn-group-outline"></span>
	                	</div>
	                    <h3>Social</h3>
	                    <p>Faça uma tela ou um outro celular de mesa e as outras pessoas podem acompanhar como se fosse num buteco</p>
                    </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 section-bottom-button wow fadeInUp">
                        <a class="btn btn-link-1 scroll-link" href="#top-content">Jogar</a>
	            	</div>
	            </div>
	        </div>
        </div>



        <!-- Footer -->
        <footer>
	        <div class="container">
	        	<div class="row">
                    <div class="col-sm-12 footer-social">
                    	<a href="#"><span class="typcn typcn-social-facebook"></span></a>
                    	<a href="#"><span class="typcn typcn-social-dribbble"></span></a>
                    	<a href="#"><span class="typcn typcn-social-twitter"></span></a>
                    	<a href="#"><span class="typcn typcn-social-google-plus"></span></a>
                    	<a href="#"><span class="typcn typcn-social-instagram"></span></a>
                    	<a href="#"><span class="typcn typcn-social-pinterest"></span></a>
                    </div>
	            </div>
	            <div class="row">
                    <div class="col-sm-12 footer-copyright">
                    	&copy; truco online <a href="http://facebook.com/danielmmf">danielmmf</a>.
                    </div>
                </div>
	        </div>
        </footer>
        
        
        <!-- MODAL: Privacy policy -->
        <div class="modal fade" id="modal-privacy" tabindex="-1" role="dialog" aria-labelledby="modal-privacy-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
        				<h2 class="modal-title" id="modal-privacy-label">Privacy policy</h2>
        			</div>
        			<div class="modal-body">
        				<h3>1. Dolor sit amet</h3>
        				<p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
	                    <ul>
	                    	<li>Easy To Use</li>
	                    	<li>Awesome Design</li>
	                    	<li>Cloud Based</li>
	                    </ul>
	                    <p>
	                    	Ut wisi enim ad minim veniam, <a href="#">quis nostrud exerci tation</a> ullamcorper suscipit lobortis nisl ut aliquip ex ea 
	                    	commodo consequat nostrud tation.
	                    </p>
	                    <h3>2. Sed do eiusmod</h3>
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
	                    <h3>3. Nostrud exerci tation</h3>
	                    <p>
	                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea 
	                    	commodo consequat nostrud tation.
	                    </p>
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
        			</div>
        			<div class="modal-footer">
        				<button type="button" class="btn" data-dismiss="modal">Close</button>
        			</div>
        		</div>
        	</div>
        </div>
        
        <!-- MODAL: Frequent questions -->
        <div class="modal fade" id="modal-faq" tabindex="-1" role="dialog" aria-labelledby="modal-faq-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
        				<h2 class="modal-title" id="modal-faq-label">Frequent questions</h2>
        			</div>
        			<div class="modal-body">
        				<h3>1. Lorem ipsum dolor?</h3>
        				<p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
	                    <h3>2. Ut wisi enim ad minim?</h3>
	                    <p>
	                    	Ut wisi enim ad minim veniam, <a href="#">quis nostrud exerci tation</a> ullamcorper suscipit lobortis nisl ut aliquip ex ea 
	                    	commodo consequat nostrud tation.
	                    </p>
	                    <h3>3. Sed do eiusmod tempor?</h3>
	                    <p>
	                    	Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
	                    <h3>4. Nostrud exerci tation?</h3>
	                    <p>
	                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea 
	                    	commodo consequat nostrud tation.
	                    </p>
	                    <h3>5. Consectetur adipisicing elit?</h3>
	                    <p>
	                    	Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
        			</div>
        			<div class="modal-footer">
        				<button type="button" class="btn" data-dismiss="modal">Close</button>
        			</div>
        		</div>
        	</div>
        </div>


        <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
	<script src="https://www.gstatic.com/firebasejs/3.6.6/firebase.js"></script>
	<script src="https://cdn.firebase.com/libs/angularfire/2.3.0/angularfire.min.js"></script>

	<script>
	  // Initialize the Firebase SDK
	  var config = {
	     apiKey: "AIzaSyBlZVMRe38jJfrwead1evIuV3OfIEVXlCY",
	    authDomain: "truco-b2e65.firebaseapp.com",
	    databaseURL: "https://truco-b2e65.firebaseio.com",
	    projectId: "truco-b2e65",
	    storageBucket: "",
	    messagingSenderId: "680811678214"
	  };
	  firebase.initializeApp(config);
	</script>
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script type="text/javascript">
        	
		var app = angular.module("sampleApp", ["firebase"]);
		app.controller("SampleCtrl", function($scope, $firebaseArray , $firebaseAuth) {

		  var ref = firebase.database().ref().child("mesas");
		  $scope.messages = $firebaseArray(ref);

		  $scope.addMessage = function() {
		    $scope.messages.$add({
		      text: $scope.newMessageText
		    });
		  };

$scope.logarFacebook = function() {
		     var auth = $firebaseAuth();

		  // login with Facebook
			  auth.$signInWithPopup("facebook").then(function(firebaseUser) {
			    console.log("Signed in as:", firebaseUser.uid);
			  }).catch(function(error) {
			    console.log("Authentication failed:", error);
			  });
		  };

		
		});
        </script>
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>