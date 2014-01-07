<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="content/picture/icon.png">

    <title>PAPU!</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="../../dist/css/bootstrap.css" rel="stylesheet">-->
    <link href="content/css/bootstrap.css" rel="stylesheet">
    <link href="content/css/papu.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="content/js/bootstrap.js"></script>
    <!-- Custom styles for this template -->
    <link href="content/css/starter-template.css" rel="stylesheet">
    <link href="content/css/changePicture.css" rel="stylesheet"/>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
      
  </head>

  <body style="overflow-x: auto; overflow-y: hidden;">
    <style type=text/css> 
        body { font-family: 微軟正黑體,Times New Roman,新細明體;}
        A{color:black}
        A:link {color: white}
        A:visited {color: red}
        A:active {color: red}
        A:hover {color: white}
    </style>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<img src = "content/picture/icon.png" width="40" height="40" style="position: absolute; top:5px; left: 20px;">-->
          <a class="navbar-brand" href="#">PAPU!</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li id="fb-login-in" class="active"><a href="#">FB login</a></li>
            <li><a href="#paTemp">PA!</a></li>
            <li><a href="#myModal" data-toggle="modal">PU!</a></li>
            <li><img id="my-profile-picture" class="img-thumbnail" src="" alt=""></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <!-- modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Here is your PU! today</h4>
          </div>
          <div class="modal-body" style="bgcolor:#CDFEFF">
      
          </div>
          <div class="modal-footer">
            <button class="btn btn-success btn-lg" role="button" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>

    <div class="container opacity">
      <div class="col-md-8">
         <div class="starter-template mapbox">          
          <div style="position: relative; width: 1000px; height: 1000px; top:0px; left: 0px;">
            <img id ="myPhoto" style="position: absolute; top: 45px; left: 390px; z-index: 20;" src = "logo/papu/sizes/papu-24.png">
            <img src = "content/picture/map2/background.png" alt="mpbg" width="600" height="600" style="position: absolute; top:0px; left:10px;">
            <img id ="Taipei" Title="台北" src = "content/picture/map2/Taipei.png" onClick="taipei()" class='Taipei animated css'>
            <img id ="Taoyuan" Title="桃園" src = "content/picture/map2/Taoyuan.png" onClick="taoyuan()" class='Taoyuan animated css'>
            <img id ="Ilan" Title="宜蘭" src = "content/picture/map2/Ilan.png" onClick="ilan()" class='Ilan animated css'>
            <img id ="Hsinchu" Title="新竹" src = "content/picture/map2/Hsinchu.png" onClick="hsinchu()" class='Hsinchu animated css'>
            <img id ="Miaoli" Title="苗栗" src = "content/picture/map2/Miaoli.png" onClick="miaoli()" class='Miaoli animated css'>
            <img id ="Taichung" Title="台中" src = "content/picture/map2/Taichung.png" onClick="taichung()" class='Taichung animated css'>
            <img id ="Hualien" Title="花蓮" src = "content/picture/map2/Hualien.png" onClick="hualien()" class='Hualien animated css'>
            <img id ="Changhua" Title="彰化" src = "content/picture/map2/Changhua.png" onClick="changhua()" class='Changhua animated css'>
            <img id ="Nantou" Title="南投" src = "content/picture/map2/Nantou.png" onClick="nantou()" class='Nantou animated css'>
            <img id ="Yunlin" Title="雲林" src = "content/picture/map2/Yunlin.png" onClick="yunlin()" class='Yunlin animated css'>
            <img id ="Chiayi" Title="嘉義" src = "content/picture/map2/Chiayi.png" onClick="chiayi()" class='Chiayi animated css'>
            <img id ="Tainan" Title="台南" src = "content/picture/map2/Tainan.png" onClick="tainan()" class='Tainan animated css'>
            <img id ="Kaohsiung" Title="高雄" src = "content/picture/map2/Kaohsiung.png" onClick="kaohsiung()" class='Kaohsiung animated css'>
            <img id ="Pingtung" Title="屏東" src = "content/picture/map2/Pingtung.png" onClick="pingtung()" class='Pingtung animated css'>
            <img id ="Taitung" Title="台東" src = "content/picture/map2/Taitung.png" onClick="taitung()" class='Taitung animated css'>
          </div><!--/.container-->
        </div>
      </div>
      <div class="col-md-4">
        <div class="starter-template">
            <img src = "content/picture/map2/scorllbar.png" alt="scorllbg" width="178" height="400" style="position: absolute; top:60px; left:0px;">
            <div style="position: absolute; top:130px; left:45px;">
                <div class="row" style="font-color:white">
                    <a style="font-size:30px"><b>PA!</b></a>
                </div><div class="row">
                    <a href="#myModal" data-toggle="modal" style="font-size:30px"><b>PU!</b></a>
                </div><div class="row">
                    <a style="font-size:30px"><b>Friends</b></a>
                </div><div class="row">
                    <a style="font-size:30px"><b>Profile</b></a>
                </div><div class="row">
                    <a style="font-size:30px"><b>Ranking</b></a>
                </div><div class="row">
                    <a style="font-size:30px"><b>Quota</b></a>
                </div>
            </div>
        </div>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script type="text/javascript">
      function hello(){
        var name = document.getElementById("Taipei").value;
        if( name == "") {
            alert("请输入你的姓名！");
            return false;
        } else {
            alert(name + "，你好！");
        }
     }
    </script>

    <script type="text/javascript">
      function taipei(){
        document.getElementById("myPhoto").style.top = document.getElementById("Taipei").offsetTop+(document.getElementById("Taipei").offsetHeight/3)+"px";
        document.getElementById("myPhoto").style.left = document.getElementById("Taipei").offsetLeft+(document.getElementById("Taipei").offsetWidth/3)+"px";
      }
      function taoyuan(){
        document.getElementById("myPhoto").style.top = document.getElementById("Taoyuan").offsetTop+(document.getElementById("Taoyuan").offsetHeight/3)+"px";
        document.getElementById("myPhoto").style.left = document.getElementById("Taoyuan").offsetLeft+(document.getElementById("Taoyuan").offsetWidth/3)+"px";
      }
      function ilan(){
        document.getElementById("myPhoto").style.top = document.getElementById("Ilan").offsetTop+(document.getElementById("Ilan").offsetHeight/3)+"px";
        document.getElementById("myPhoto").style.left = document.getElementById("Ilan").offsetLeft+(document.getElementById("Ilan").offsetWidth/3)+"px";
      }

      function hsinchu(){
        document.getElementById("myPhoto").style.top = document.getElementById("Hsinchu").offsetTop+(document.getElementById("Hsinchu").offsetHeight/3)+"px";
        document.getElementById("myPhoto").style.left = document.getElementById("Hsinchu").offsetLeft+(document.getElementById("Hsinchu").offsetWidth/3)+"px";
      }

      function miaoli(){
        document.getElementById("myPhoto").style.top = document.getElementById("Miaoli").offsetTop+(document.getElementById("Miaoli").offsetHeight/3)+"px";
        document.getElementById("myPhoto").style.left = document.getElementById("Miaoli").offsetLeft+(document.getElementById("Miaoli").offsetWidth/3)+"px";
      }

      function taichung(){
        document.getElementById("myPhoto").style.top = document.getElementById("Taichung").offsetTop+(document.getElementById("Taichung").offsetHeight/3)+"px";
        document.getElementById("myPhoto").style.left = document.getElementById("Taichung").offsetLeft+(document.getElementById("Taichung").offsetHeight/3)+"px";
      }

      function hualien(){
        document.getElementById("myPhoto").style.top = document.getElementById("Hualien").offsetTop+(document.getElementById("Hualien").offsetHeight/3)+"px";
        document.getElementById("myPhoto").style.left = document.getElementById("Hualien").offsetLeft+(document.getElementById("Hualien").offsetWidth/3)+"px";
      }

      function changhua(){
        document.getElementById("myPhoto").style.top = document.getElementById("Changhua").offsetTop+(document.getElementById("Changhua").offsetHeight/3)+"px";
        document.getElementById("myPhoto").style.left = document.getElementById("Changhua").offsetLeft+(document.getElementById("Changhua").offsetWidth/3)+"px";
      }
      
      function nantou(){
        document.getElementById("myPhoto").style.top = document.getElementById("Nantou").offsetTop+(document.getElementById("Nantou").offsetHeight/3)+"px";
        document.getElementById("myPhoto").style.left = document.getElementById("Nantou").offsetLeft+(document.getElementById("Nantou").offsetWidth/3)+"px";
      }

      function yunlin(){
        document.getElementById("myPhoto").style.top = document.getElementById("Yunlin").offsetTop+"px";
        document.getElementById("myPhoto").style.left = document.getElementById("Yunlin").offsetLeft+(document.getElementById("Yunlin").offsetWidth/3)+"px";
      }
      
      function chiayi(){
        document.getElementById("myPhoto").style.top = document.getElementById("Chiayi").offsetTop+"px";
        document.getElementById("myPhoto").style.left = document.getElementById("Chiayi").offsetLeft+(document.getElementById("Chiayi").offsetWidth/3)+"px";
      }

      function tainan(){
        document.getElementById("myPhoto").style.top = document.getElementById("Tainan").offsetTop+(document.getElementById("Tainan").offsetHeight/3)+"px";
        document.getElementById("myPhoto").style.left = document.getElementById("Tainan").offsetLeft+(document.getElementById("Tainan").offsetWidth/3)+"px";
      }
      
      function kaohsiung(){
        document.getElementById("myPhoto").style.top = document.getElementById("Kaohsiung").offsetTop+(document.getElementById("Kaohsiung").offsetHeight/3)+"px";
        document.getElementById("myPhoto").style.left = document.getElementById("Kaohsiung").offsetLeft+(document.getElementById("Kaohsiung").offsetWidth/3)+"px";
      }

      function pingtung(){
        document.getElementById("myPhoto").style.top = document.getElementById("Pingtung").offsetTop+(document.getElementById("Pingtung").offsetHeight/3)+"px";
        document.getElementById("myPhoto").style.left = document.getElementById("Pingtung").offsetLeft+(document.getElementById("Pingtung").offsetWidth/3)+"px";
      }
      
      function taitung(){
        document.getElementById("myPhoto").style.top = document.getElementById("Taitung").offsetTop+(document.getElementById("Taitung").offsetHeight/3)+"px";
        document.getElementById("myPhoto").style.left = document.getElementById("Taitung").offsetLeft+(document.getElementById("Taitung").offsetWidth/3)+"px";
      }
    </script>

<?php
  // Remember to copy files from the SDK's src/ directory to a
  // directory in your application on the server, such as php-sdk/
  require_once('php-sdk/facebook.php');

  $config = array(
    'appId' => '599502590123242',
    'secret' => '9cddb4ed5631ae8a5cb28291ea8324f4',
    'allowSignedRequest' => false // optional but should be set to false for non-canvas apps
  );

  $facebook = new Facebook($config);
  $user_id = $facebook->getUser();
?>

    <script>
      window.fbAsyncInit = function() {
          // init the FB JS SDK
          FB.init({
          appId      : '599502590123242',                    // App ID from the app dashboard
          cookie     : true,                                 // Allowed server-side to fetch fb auth cookie
          status     : true,                                 // Check Facebook Login status
          xfbml      : true                                  // Look for social plugins on the page
          });

          // Additional initialization code such as adding Event Listeners goes here
          window.fbLoaded();
      };

      // Load the SDK asynchronously
      (function(d, s, id){
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) {return;}
          js = d.createElement(s); js.id = id;
          //js.src = "//connect.facebook.net/en_US/all.js";
          // Debug version of Facebook JS SDK
          js.src = "//connect.facebook.net/en_US/all/debug.js";
          fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <script id="my-script-playground">
        window.fbLoaded = function(){
            // define the events when login status changed.
            FB.Event.subscribe('auth.login', function(response) {
                // when user has been logged in, this block will be triggered.
                var msg = "You're logged in.";
                $("#my-login-message").html(msg);
                console.log("Your login response:");
                console.log(response);
            });

            // define the action when user clicked the login button.
            $("#fb-login-in").click(function(){
                FB.getLoginStatus(function (response) {
                   if (response.status === 'connected') {        
                     var uid = response.authResponse.userID;
                     login_success(uid);
                   } else {
                        FB.login(function (response) {
                            if (response.authResponse) {
                                        var uid = response.authResponse.userID;
                                        var accessToken = response.authResponse.accessToken;                                        
                                login_success(uid);
                            } else {
                                alert('login failed!');
                            }
                        }, {
                            scope: 'publish_stream,user_hometown,user_location,user_photos,user_friends'
                        });
                   }

                })
                //FB.login();
            });

            FB.getLoginStatus(function(response) { //init
                if (response.status === 'connected') {

                            var uid = response.authResponse.userID;
                            var accessToken = response.authResponse.accessToken;
                            $("#my-login-message").html("You're logged in.");
                      } else {
                            FB.login(function(response) {                        
                             }, {scope: 'publish_stream,user_hometown,user_location,user_photos,user_friends'});
                      }
            });
            
            var fetch_my_profile = function () {
                /*
                Fetching profile information.
                For more detail, please vist the following url:

                (Graph API: User documentation)
                https://developers.facebook.com/docs/graph-api/reference/user/
                */
                FB.api('/me', function(response) {
                    var my_name = response.name;
                    var my_gender = response.gender;
                    var my_username = response.username;
                    var my_facebook_id = response.id;

                    $("#my-profile-name").html(my_name);
                    $("#my-profile-gender").html(my_gender);
                    $("#my-profile-username").html(my_username);
                    $("#my-profile-facebook-id").html(my_facebook_id);
                });

                /*
                Fetching profile picture from Facebook.
                For more detail, please visit the following url:

                (Graph API: User/Picture reference)
                https://developers.facebook.com/docs/graph-api/reference/user/picture/
                */
                FB.api('/me/picture?width=250', function(response) {
                    var my_picture_url = response.data.url;
                
                    $("#my-profile-picture").attr('src', my_picture_url);
                });
            };
            
        };
    </script>

  </body>
</html>