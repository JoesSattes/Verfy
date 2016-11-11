<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Verfy</title>
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/animations.min.css" rel="stylesheet" />
  <link href="assets/css/logofb.css" rel="stylesheet" />
  <link href="assets/css/style-blue.css" rel="stylesheet" />
  <link href="assets/img/favicon.png" rel="icon">
</head>
<body data-spy="scroll" data-target="#menu-section">

  <!--MENU SECTION START-->
  <div class="navbar navbar-inverse navbar-fixed-top scroll-me" id="menu-section" >
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="assets/img/logo/logo2.png" style="width: 34px; height: 30px;">
        </a>
        <a class="navbar-brand" href="#">Verfy
        </a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#main">MAIN</a></li>
          <li><a href="#upload">UPLOAD</a></li>
          <li><a href="#check">CHECKLIST</a></li>
          <li><a href="#history">HISTORY</a></li>
          <li><a href="#team">ABOUT</a></li>
          <li><a href="#contact">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--MENU SECTION END-->

  <!--MAIN SECTION START-->
  <div id="main" >
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 ">
          <div id="carousel-slider" data-ride="carousel" class="carousel slide  animate-in" data-anim-type="fade-in-up">
            <img src="assets/img/logo/logo2.png" style="width: 50%; height: 50%;">
            <div class="carousel-inner">
              <div class="item active">
                <h3 id="headmain">
                  Welcome To Verfy
                </h3>
                <p>
                  Verfy is the one who verify your right
                  <br>You can upload file and will send a hash code to you.
                  <br>File you uploaded will be in Verfy's data. 
                </div>
                <div class="item">
                  <h3 id="headmain">
                    What is Verfy
                  </h3>
                  <p>
                    You can check your file detail from Verfy's hash code to receive.
                    <br>You can upload your file and will be in Verfy's data.
                    <br>If your file is uncopy or first upload, We will send you a copyright certificate. 
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row animate-in" data-anim-type="fade-in-up">
          <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 scroll-me">
            <p >
              You can start upload file this buttom.
            </p>
            <div class="social">
              <a href="#upload" class=" btn button-custom btn-custom-two">START VERFY</a>
            </div>
          </div>
        </div>
      </div>
      <!--MAIN SECTION END-->

      <!--UPLOAD SECTION START-->
      <section id="upload" >
        <div class="container">
          <div class="row text-center header">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animate-in" data-anim-type="fade-in-up">
              <h3>Our upload</h3>
              <hr />
            </div>
          </div>
          <div class="row animate-in" data-anim-type="fade-in-up">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="upload-wrapper">
                <h3>Verfy Upload</h3>
                <br>You can upload file.
                <br>l
                <br>l
                <br>l
                <br>V
                <!-- drag and drop section start-->
                <form action="/file-upload" class="dropzone">
                  <div class="fallback">
                    <input name="file" type="file" multiple />
                  </div>
                </form>
                <!-- HTML heavily inspired by http://blueimp.github.io/jQuery-File-Upload/ -->
                <div class="table table-striped" class="files" id="previews">
                  <div id="template" class="file-row">
                    <!-- This is used as the file preview template -->
                    <div>
                      <span class="preview"><img data-dz-thumbnail /></span>
                    </div>
                    <div>
                      <p class="name" data-dz-name></p>
                      <strong class="error text-danger" data-dz-errormessage></strong>
                    </div>
                    <div>
                      <p class="size" data-dz-size></p>
                      <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                        <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                      </div>
                    </div>
                    <div>
                      <button class="btn btn-primary start">
                        <i class="glyphicon glyphicon-upload"></i>
                        <span>Start</span>
                      </button>
                      <button data-dz-remove class="btn btn-warning cancel">
                        <i class="glyphicon glyphicon-ban-circle"></i>
                        <span>Cancel</span>
                      </button>
                      <button data-dz-remove class="btn btn-danger delete">
                        <i class="glyphicon glyphicon-trash"></i>
                        <span>Delete</span>
                      </button>
                    </div>
                  </div>
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-sm-12">
                     </div>
                   </div><!--/row-->
                   <hr>
                   <div> 
                    <form action="/upload" class="dropzone" drop-zone="" id="file-dropzone"></form>
                  </div>
                </div>
                <!--Drag and drop section end-->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--UPLOAD SECTION END-->

      <!--CHECK SECTION START-->
      <section id="check" >
        <div class="container">
          <div class="row text-center header animate-in" data-anim-type="fade-in-up">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h3>Check Options</h3>
              <hr />
            </div>
          </div>
          <div class="row animate-in" data-anim-type="fade-in-up">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="check-wrapper">
                <h3>Verfy Checklist</h3>
                <br>You can check this file.
                <br>l
                <br>l
                <br>l
                <br>V
              </div>
            </div>
          </div>
        </section>
        <!--PRIICING SECTION END-->

        <!--WORK SECTION START-->
        <section id="history" >
          <div class="container">
            <div class="row text-center header animate-in" data-anim-type="fade-in-up">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>History</h3>
                <hr />
              </div>
            </div>
            <div class="row animate-in" data-anim-type="fade-in-up">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="history-wrapper">
                  <h3>Verfy History upload</h3>
                  <br>History file upload.
                  <br>l
                  <br>l
                  <br>l
                  <br>V
                </div>
              </div>
            </div>
          </section>
          <!--WORK SECTION END-->

          <!--TEAM SECTION START-->
          <section id="team" >
            <div class="container">
              <div class="row text-center header animate-in" data-anim-type="fade-in-up">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <h3>Team Members </h3>
                  <hr />
                </div>
              </div>
              <div class="row animate-in" data-anim-type="fade-in-up">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                  <div class="team-wrapper">
                    <div class="team-inner" style="background-image: url('assets/img/team/1.jpg')" >
                      <a href="https://www.facebook.com/JoesSattes?fref=ts" target="_blank" > <i class="fa fa-facebook" ></i></a>
                    </div>
                    <div class="description">
                      <h3> Sattaya <br>Singkul</h3>
                      <h5> <strong> Student IT KMITL</strong></h5>
                      <p>
                        Hello i'm Joe.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                  <div class="team-wrapper">
                    <div class="team-inner" style="background-image: url('assets/img/team/2.jpg')" >
                      <a href="https://www.facebook.com/PRW.JJ?fref=ts" target="_blank" > <i class="fa fa-facebook" ></i></i></a>
                    </div>
                    <div class="description">
                      <h3> Puriwat <br>Thongsad</h3>
                      <h5> <strong>Student IT KMITL</strong></h5>
                      <p>
                        Hi i'm Job.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                  <div class="team-wrapper">
                    <div class="team-inner" style="background-image: url('assets/img/team/3.jpg')" >
                      <a href="https://www.facebook.com/IIIKJIII?fref=ts" target="_blank" ><i class="fa fa-facebook" ></i></a>
                    </div>
                    <div class="description">
                      <h3> Werapat <br>Subsomboon</h3>
                      <h5> <strong> Student IT KMITL</strong></h5>
                      <p>
                        Hello i'm Kanomjean.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                  <div class="team-wrapper">
                    <div class="team-inner" style="background-image: url('assets/img/team/4.jpg')" >
                      <a href="https://www.facebook.com/pbigpooh.thongyoo?hc_ref=NEWSFEED" target="_blank"><i class="fa fa-facebook" ></i></a>
                    </div>
                    <div class="description">
                      <h3> Phopat <br>Thongyu</h3>
                      <h5> <strong> Student IT KMITL</strong></h5>
                      <p>
                        Hi i'm Pooh.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--TEAM SECTION END-->
          <!--CONTACT SECTION START-->
          <section id="contact" >
            <div class="container">
              <div class="row text-center header animate-in" data-anim-type="fade-in-up">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <h3>Contact Details </h3>
                  <hr />
                </div>
              </div>
              <div class="row animate-in" data-anim-type="fade-in-up">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                  <div class="contact-wrapper">
                    <h3>We Are Social</h3>
                    <p>
                      it social me 1 or 1 = 1.
                    </p>
                    <div class="social-below">
                      <a href="https://www.facebook.com/JoesSattes?fref=ts" class="btn button-custom btn-custom-two" > Facebook</a>
                      <a href="#" class="btn button-custom btn-custom-two" > Twitter</a>
                      <a href="https://plus.google.com/118045868298492650319" class="btn button-custom btn-custom-two" > Google +</a>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                  <div class="contact-wrapper">
                    <h3>Quick Contact</h3>
                    <h4><strong>Email : </strong> joeysattaya@gmail.com</h4>
                    <h4><strong>Call : </strong> +66801995935</h4>
                    <h4><strong>Skype : </strong> JoesSattes</h4>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                  <div class="contact-wrapper">
                    <h3>Address : </h3>
                    <h4>129/195 , Ladkrabang , </h4>
                    <h4>Thailand</h4>
                    <div class="footer-div" >
                      &copy; 2016 Verfy | <a href="http://www.bootstrap.com/" target="_blank" >by Bootstrap</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--CONTACT SECTION END-->

          <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME -->
          <!-- CORE JQUERY -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
          <!-- BOOTSTRAP SCRIPTS -->
          <script src="assets/js/bootstrap.js"></script>
          <!-- EASING SCROLL SCRIPTS PLUGIN -->
          <script src="assets/js/vegas/jquery.vegas.min.js"></script>
          <!-- VEGAS SLIDESHOW SCRIPTS -->
          <script src="assets/js/jquery.easing.min.js"></script>
          <!-- ISOTOPE SCRIPTS -->
          <script src="assets/js/jquery.isotope.js"></script>
          <!-- VIEWPORT ANIMATION SCRIPTS   -->
          <script src="assets/js/appear.min.js"></script>
          <script src="assets/js/animations.min.js"></script>
          <!-- CUSTOM SCRIPTS -->
          <script src="assets/js/custom.js"></script>
          <!--drage and drop-->
          <script src="assets/js/dropzone.js"></script>
        </body>

        </html>
