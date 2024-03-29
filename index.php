<?php

$PageAddress = "https://www.jd-sh.co.uk/dj/index.php";
$PageTitle = "JD-Bingo";
$Keywords = "HTML,CSS,XML,JavaScript,PHP,Bingo,Web-App";
$PageDisc = "A simple bingo app allowing remote control from secondary device";
$FrontImgAddress = "https://www.jd-sh.co.uk/dj/assets/download.jpg";
$TwitterTag = "@jonathan300514";
$CreateTime = "2018-12-29T00:23:00+01:00";
$EditTime = "2018-04-29T00:23:00+01:00";
$LogoImg = "https://www.jd-sh.co.uk/dj/assets/thelogo.png";

?>
<!DOCTYPE html>


<html itemscope itemtype="<?php echo $PageAddress ?>" lang="en">

	<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1"/>
	  <title><?php echo $PageTitle ?></title>
    <meta name="keywords" content="<?php echo $Keywords ?>">

	   <!-- Update your HtMl tag to include the itemscope and itemtype attributes. -->

	<!-- Place this data between the <head> tags of your website -->

	<meta name="description" content="<?php echo $PageDisc ?>"/>
	<!-- Schema.org markup for Google+ -->
	<meta itemprop="name" content="<?php echo $PageTitle ?>"/>
	<meta itemprop="description" content="<?php echo $PageDisc ?>"/>
	<meta itemprop="image" content="<?php echo $FrontImgAddress ?>"/>
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary_large_image"/>
	<meta name="twitter:site" content="<?php echo $TwitterTag ?>"/>
	<meta name="twitter:title" content="<?php echo $PageTitle ?>"/>
	<meta name="twitter:description" content="<?php echo $PageDisc ?>"/>
	<meta name="twitter:creator" content="<?php echo $TwitterTag ?>"/>
	<!-- Twitter summary card with large image must be at least 280x150px -->
	<meta name="twitter:image:src" content="<?php echo $FrontImgAddress ?>"/>
	<!-- Open Graph data -->
	<meta property="og:title" content="<?php echo $PageTitle ?>"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="<?php echo $PageAddress ?>"/>
	<meta property="og:image" content="<?php echo $FrontImgAddress ?>"/>
	<meta property="og:description" content="<?php echo $PageDisc ?>"/>
	<meta property="og:site_name" content="<?php echo $PageTitle ?>"/>
	<meta property="article:published_time" content="<?php echo $CreateTime ?>"/>
	<meta property="article:modified_time" content="<?php echo $EditTime ?>"/>
	<meta property="article:section" content="Article Section"/>
	<meta property="article:tag" content="Article Tag"/>
	<!-- DEVICE ICONS -->
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="icon" href="<?php echo $LogoImg ?>">
	<link rel="shortcut icon" href="<?php echo $LogoImg ?>" />
	<link rel="apple-touch-icon" href="<?php echo $LogoImg ?>"/>
	<link rel="apple-touch-icon-precomposed" href="<?php echo $LogoImg ?>"/>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>


<body>

  <h2 class="center light-blue-text"><img src="assets/Logo.png" alt="logo" height="50" width="100"></h2>

  <div class="container center">
    <h5 class="center">About the Project </h5><br>

    <p class="light thisContainer" align="justify">
      This simple app allows live updating and reseting with a fully
      random number output. The design elements are still being tinkered
      with and are subject to change. The app consists of two parts, the remote
      and the output board. Plans are to make more features avalible from the
      remote and to make the output more interactive to the viewer from animations
      and user feedback to Line and Bingo calls. This is meant for events allowing
      the user to remotley interact with the app.
    </p>

		<!-- Modal Trigger -->
  <a class="waves-effect waves-light btn modal-trigger" href="#modal1"><i class="large material-icons">add</i></a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Upcoming Features</h4>
    <p>	&#8709; Customizable theme <br>
			  &#8709; Line callout animations <br>
				&#8709; Bingo Callout animations <br>
				&#8709; Array value set Numbers/Awnsers <br>
				&#8709; Finilaized CSS <br>
				&#8709; Remote called/Last called values <br>
				&#8709; Line/Full House indicator <br>
				</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Exit</a>
    </div>
  </div>
  </div>

<style>

@media only screen and (max-width: 363px) {
    .thisContainer {
        background-color: lightblue;
        padding-left: 1px;
        padding-right: 1px;

    }
.thatContainer {
    padding-left: 2px;
    padding-right: 2px;
  }
}

@media only screen and (min-width: 364px) {
    .thisContainer {

        padding-left: 2px;
        padding-right: 2px;

    }
.thatContainer {
    padding-left: 4px;
    padding-right: 4px;
  }
}

@media only screen and (min-width: 380px) {
    .thisContainer {

        padding-left: 5px;
        padding-right: 5px;

    }
.thatContainer {
    padding-left: 10px;
    padding-right: 10px;
  }
}

@media only screen and (min-width: 400px) {
    .thisContainer {

        padding-left: 10px;
        padding-right: 10px;

    }
.thatContainer {
    padding-left: 20px;
    padding-right: 20px;
  }
}

@media only screen and (min-width: 450px) {
    .thisContainer {

        padding-left: 20px;
        padding-right: 20px;

    }
.thatContainer {
    padding-left: 40px;
    padding-right: 40px;
  }
}

@media only screen and (min-width: 490px) {
  .thisContainer {

      padding-left: 30px;
      padding-right: 30px;

  }
.thatContainer {
  padding-left: 60px;
  padding-right: 60px;
}
}


@media only screen and (min-width: 534px) {
  .thisContainer {

      padding-left: 40px;
      padding-right: 40px;

  }
.thatContainer {
  padding-left: 80px;
  padding-right: 80px;
}
}

@media only screen and (min-width: 600px) {
  .thisContainer {

      padding-left: 45px;
      padding-right: 45px;

  }
  .thatContainer {
  padding-left: 90px;
  padding-right: 90px;
  }

}

@media only screen and (min-width: 730px) {
  .thisContainer {

      padding-left: 75px;
      padding-right: 75px;

  }
  .thatContainer {
  padding-left: 150px;
  padding-right: 150px;
  }

}

@media only screen and (min-width: 1050px) {
  .thisContainer {

      padding-left: 100px;
      padding-right: 100px;

  }
  .thatContainer {
  padding-left: 200px;
  padding-right: 200px;
  }

}

@media only screen and (min-width: 1115px) {
  .thisContainer {

      padding-left: 125px;
      padding-right: 125px;

  }
  .thatContainer {
  padding-left: 225px;
  padding-right: 225px;
  }

}

@media only screen and (min-width: 1205px) {
  .thisContainer {

      padding-left: 150px;
      padding-right: 150px;

  }
  .thatContainer {
  padding-left: 250px;
  padding-right: 250px;
  }

}

@media only screen and (min-width: 1350px) {
  .thisContainer {

      padding-left: 200px;
      padding-right: 200px;

  }
  .thatContainer {
  padding-left: 300px;
  padding-right: 300px;
  }

}

</style>



<div class="container thatContainer">
  <div class="row">

  <!-- COL START -->
  <div class="col s6 m6 l6">
    <h5 class="center">Remote</h5><br>
    <div align="center">
      <a href="remote.php" class="waves-effect waves-light btn-large"><h6 class="center light-blue-text"><i class="material-icons">settings_remote</i></h6></a>
    </div>
  </div>
  <!-- COL END -->

  <!-- COL START -->
  <div class="col s6 m6 l6">
    <h5 class="center">Output Board</h5><br>
    <div align="center">
      <a href="Display.php" class="waves-effect waves-light btn-large"><h6 class="center light-blue-text"><i class="material-icons">ondemand_video</i></h6></a>
    </div>
  </div>
  <!-- COL END -->

</div><!--ROW END -->
</div>




<script>
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);
  });

$(document).ready(function(){
	$('.modal').modal();
});

	</script>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
