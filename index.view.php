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
  <link rel="stylesheet" type="text/css" href="assets/css/test.css">
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
          <li><a href="#upload">UPLOAD & CHECK</a></li>
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
                  Verfy is the proof of existence website
                  <br>Just upload file, it will be hashed automatically.
                  <br>Hashed file value will be in Verfy's database. 
                </div>
                <div class="item">
                  <h3 id="headmain">
                    What is Verfy
                  </h3>
                  <p>
                    You can check your file detail from Verfy's hash code.
                    <br>
                    <br>If your file is uncopy or first upload, Your hash would be store in our database. 
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row animate-in" data-anim-type="fade-in-up">
          <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 scroll-me">
            <p >
              Start UPLOAD NOW!!
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
              <h3>Upload & Check</h3>
              <hr />
            </div>
          </div>
          <div class="row animate-in" data-anim-type="fade-in-up">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="upload-wrapper">
                <h3>Verfy Upload</h3>
                <br>You can upload file here or check if file existed on the server.
                <!-- drag and drop section start-->
                <div class="content">
                  <form class="box" method="post" action="" enctype="multipart/form-data">
                    <div class="box__input">
                      <input class="box__file" type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple />
                      <label for="file"><strong>Choose a file</strong>
                        <span class="box__dragndrop"> or drag it here</span>.
                      </label>
                      <button class="box__button btn button-custom btn-custom-two" id="uploader">Upload</button>
                    </div>
                  </form>
                </div>
                <!--Drag and drop section end-->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--UPLOAD SECTION END-->

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
                  <table class="table" align='center' width='500'>
                    <thead>
                      <tr>
                        <th>Filename</th>
                        <th>Timestamp</th>
                        <th>Hash</th>
                        <th>Filetype</th>
                        <th>Filesize</th>
                      </tr>
                    </thead>
                    <?php foreach ($datas as $data): ?>
                      <?= "<tr>"?>
                      <?= "<td>".$data->file_name."</td>"?>
                      <?= "<td>".$data->timestamp."</td>"?>
                      <?= "<td>".$data->hash."</td>"?>
                      <?= "<td>".$data->file_type."</td>"?>
                      <?= "<td>".$data->file_size."</td>"?>
                      <?= "</tr>"?>
                    <?php endforeach; ?>
                  </table>
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
                    <h4>127.0.0.1</h4>
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
          <script type="text/javascript" src="assets/js/spark-md5.min.js"></script>
          <script type="text/javascript" src="assets/js/test.js"></script>
        </body>

        </html>
