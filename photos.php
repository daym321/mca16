<?php
  require_once 'core/init.php';
?>
<?php
  session_start();
  $_SESSION["header_image"] = "photos.jpg";
  $_SESSION["header_title"] = "Photos";
  $_SESSION["header_subtitle"] = "A picture is worth thousand words";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MCA16 - Photos</title>
    <link rel="icon" href="icon/favicon.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="photo-gallery.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<style>
    ul {
        padding:0 0 0 0;
        margin:0 0 0 0;
    }
    ul li {
        list-style:none;
        margin-bottom:25px;
    }
    ul li img {
        cursor: pointer;
    }
    .modal-body {
        padding:5px !important;
    }
    .modal-content {
        border-radius:0;
    }
    .modal-dialog img {
        text-align:center;
        margin:0 auto;
    }
  .controls{
      width:50px;
      display:block;
      font-size:16px;
      padding-top:8px;
      font-weight:bold;
  }
  .next {
      float:right;
      text-align:right;
  }
    /*override modal for demo only*/
    .modal-dialog {
        max-width:900px;
        padding-top: 90px;
    }
    @media screen and (min-width: 768px){
        .modal-dialog {
            width:900px;
            padding-top: 90px;
        }
    }

</style>

<body>

  <?php
  //Navigation bar
    require_once 'core/navbar.php';
  ?>


  <?php
  //header
    require_once 'core/header.php';
  ?>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
              <div class="panel panel-default post">
                <div class="panel-body">


                  <div class="col-lg-12">
                    <h1 class="page-header">Photo Gallery</h1>
                  </div>

                        <ul class="row">
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="img/cg.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="img/contact.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="img/oopd.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-174908-rocking-the-night-away-xs.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-287182-blah-blah-blah-yellow-road-sign-xs.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-460760-colors-xs.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-461673-retro-party-xs.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-514834-touchscreen-technology-xs.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-916206-legal-xs.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-1062948-nature-xs.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-1471528-insant-camera-kid-xs.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-2255072-relaxed-man-xs.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-2360379-colors-xs.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-2360571-jump-xs.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-2361384-culture-for-business-xs.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-2441670-spaghetti-with-tuna-fish-and-parsley-s.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-2943363-budget-xs.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-3444921-street-art-xs.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-3552322-insurance-xs.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-3807845-food-s.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-3835655-down-office-worker-xs.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-4619216-ui-control-knob-regulators-xs.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-5771958-health-xs.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-268693-businesswoman-using-laptop-outdoors-xs.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-352207-search-of-code-s.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-247190-secret-email-xs.jpg">
                          </li>
                          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                              <img class="img-responsive" src="images/photodune-682990-online-search-xs.jpg">
                          </li>
                        </ul>



                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Viewer</h4>
                        </div>
                        <div class="modal-body">
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->

                </div><!--panel body-->
              </div>






            </div>
        </div><!--Row-->
    </div><!--Container-->

    <hr>

    <?php
    //footer
      require_once 'core/footer.php';
    ?>



    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>


        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-36251023-1']);
          _gaq.push(['_setDomainName', 'jqueryscript.net']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>

</html>
