<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Google circle</title>
    <style type="text/css" media="screen">
       body {
	    font-family: "Arial";
	   }
        #main {
            width: 800px;
            height: 400px;
            overflow: hidden;
        }
		 #message {
            width:300px;
            height: 60px;
            overflow: auto;
        }
	
    </style>
</head>
<body>
<b>Demo of google circle creation method usage:</b>
<div>
<ul>
<li> Type the number of friends and circle name and click draw to draw the cirlce</li>
<li> Now you can drag drop the friends to the circle.</li>
<li> Click "add all" to add all friends at once</li>
</ul>
<input type="text" placeholder="Type number of friends" id="friends"/>
<input type="text" placeholder="Type circle name" id="circleName"/>
<a href="#" onclick="drawIt()">draw</a>
<a href="#" onclick="addAllFrens()">add all</a><br>
Message: 
<div id="message"></div>
</div>


    <div id="main" >
        
    </div>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>

<!-- Firebase -->
<script src="https://www.gstatic.com/firebasejs/3.6.6/firebase.js"></script>

<!-- AngularFire -->
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

	<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/raphael-min.js"></script> <!-- Raphael 1.5.2 -->
	<script type="text/javascript" src="js/gcircle.js"></script> 
    <script type="text/javascript">
	
	function onFriendAdded(id){
	
	   $("#message").append("added FriendId: "+id+"<br>");
	   $("#message").attr({ scrollTop: $("#message").attr("scrollHeight") });
	}
	function onFriendRemoved(id){
	    $("#message").append("removed FriendId: "+id+"<br>");
		 $("#message").attr({ scrollTop: $("#message").attr("scrollHeight") });
	}
	
	function drawIt() {
		//CONFIG OBJECT
		var config = {drawHeight:600,drawWidth:600,circleX : 150,
		 circleY : 150,
		 circleRadius : 80,
		 innerCircleRadius : 60,
		 text : 'mesa',
		 firendsPositionX : 30,
		 firendsPositionY : 300,
		 friendRadius:20,
		 divToDraw:'main',
		 friends:[]};
		 
		 // CREATE DUMMY FRIENDS OBJECTS
		var totalFrens =  document.getElementById("friends").value;
		for(var i=1;i<= totalFrens;i++) {
			  var obj =  {
				fill: 'green',
				stroke: 'none',
				opacity: .8,
				src:getImg(i),
				friendId:i
			}
			config.friends.push(obj);
		}
		//DRAWING THE GOOGLE CIRCLE
		com.amit.GC.drawGoogleCircle(config,onFriendAdded,onFriendRemoved);//drawGoogleCircle(configObj, onAddCallBack, onRemoveCallBack)
	}
	
	function getImg(val) {
	    if(val == 1) {
			return 'img/friend1.png';
		}else if(val % 3 == 0) {
			return 'img/friend3.png';
		}else if(val % 3 == 2){
			return 'img/friend2.png';
		}else {
			return 'img/friend1.png';
		}
	}





var app = angular.module("sampleApp", ["firebase"]);
app.controller("SampleCtrl", function($scope, $firebaseArray) {
  var ref = firebase.database().ref().child("messages");
  // create a synchronized array
  $scope.messages = $firebaseArray(ref);
  // add new items to the array
  // the message is automatically added to our Firebase database!
  $scope.addMessage = function() {
    $scope.messages.$add({
      text: $scope.newMessageText
    });
  };
  // click on `index.html` above to see $remove() and $save() in action
});   
    </script>

  <div ng-controller="SampleCtrl">
    <ul>
      <li ng-repeat="message in messages">{{ message.text }}</li>
    </ul>
  </div>

	
</body>
</html>
