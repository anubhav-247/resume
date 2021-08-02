
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blog Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/preloader.min.css" rel="stylesheet">
    <link href="css/circle.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="css/yellow.css" rel="stylesheet">

    
    <!-- Modernizr JS File -->
    <script src="js/modernizr.custom.js"></script>
</head>

<style type="css/text">



    html {
      overflow-x: hidden;
      height: 100%;
    }
    
    img
    {
        border-radius:20px;
        margin-top:10px;
    }
    
    
    
    
    
    body {
      font-family: 'Poppins', sans-serif;
      font-size: 15px;
      color: #fff;
      font-weight: 500;
      line-height: 1.6;
      position: relative;
      background-size: cover;
      background-position: center;
      height: 100%;
      width: 100%;
      background-color: #111;
    }
    
    .poppins-font {
      font-family: 'Poppins', sans-serif;
    }
    
    .open-sans-font {
      font-family: 'Open Sans', sans-serif;
    }
    
    hr.separator {
      border-top: 1px solid #252525;
      margin: 70px auto 55px;
      max-width: 40%;
    }
    
    .ft-wt-600 {
      font-weight: 600;
    }
    
    .mb-30 {
      margin-bottom: 30px;
    }
    
    .no-transform {
      transform: none !important;
    }
    
    .custom-title {
      padding-bottom: 22px;
      font-size: 26px;
    }
    
    /*** Light Body ***/
    
    body.light {
      color: #666;
      background-color: #fff;
    }
    
    body.home.light .home-details h1 span {
      color: #666;
    }
    
    body.home.light .home-details h6 {
      color: #777;
    }
    
    body.home.light .bg {
      background-image: url(../img/light.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: top;
      box-shadow: 0 0 7px rgba(0,0,0,.3);
    }
    
    body.light .preloader .black_wall {
      background-color: #eee;
    }
    
    body.light .preloader {
      background-color: #fff;
    }
    
    body.light .title-section h1 {
      color: #666;
    }
    
    body.light .title-bg {
      color: rgba(30, 37, 48, 0.07);
    }
    
    body.light.about .box-stats {
      border: 1px solid #ddd;
    }
    
    body.light.about .c100,
    body.light.about .resume-box .time {
      background-color: #eee;
    }
    
    body.light.about .resume-box .time,
    body.light.about .resume-box p {
      color: #666;
    }
    
    body.light.about .resume-box .place:before {
      background-color: #666;
    }
    
    body.light.about  .resume-box li:after {
      border-left: 1px solid #ddd;
    }
    
    body.light.about .c100 > span {
      color: #666;
    }
    
    body.light.about .c100:after {
      background-color: #fff;
    }
    
    body.light.portfolio .slideshow figure {
      background-color: #fff;
    }
    
    body.light.portfolio .slideshow ul > li:after {
      background: rgba(255,255,255,0.77);
    }
    
    body.light.portfolio .slideshow {
      background: rgba(0,0,0,0.7);
    }
    
    body.light.contact .contactform input[type=text],
    body.light.contact .contactform input[type=email],
    body.light.contact .contactform textarea {
      background-color: #fff;
      border: 1px solid #ddd;
      color: #666;
    }
    
    body.light.contact  ul.social li a {
      color: #666;
      background: #eee;
    }
    
    body.light.contact  ul.social li a:hover {
      color: #fff;
    }
    
    body.light.blog .post-content {
      background-color: #f2f2f2;
    }
    
    body.light.blog .post-content .entry-header h3 a {
      color: #666;
    }
    
    body.light.blog .page-link {
      color: #666;
      background-color: #eee;
      border: 1px solid #eee;
    }
    
    body.light.blog-post .meta {
      color: #888;
    }
    
    body.light.blog .page-item.active .page-link {
      color: #fff;
    }
    
    body.light hr.separator {
      border-top: 1px solid #ddd;
    }
    
    @media (min-width: 992px) {
      body.light .header ul.icon-menu li.icon-box {
        background-color: #eee;
      }
    
      body.light .header ul.icon-menu li.icon-box i {
        color: #666;
      }
    
      body.light .header ul.icon-menu li.icon-box.active,
      body.light .header ul.icon-menu li.icon-box:hover,
      body.light .header ul.icon-menu li.icon-box.active i,
      body.light .header ul.icon-menu li.icon-box:hover i {
        color: #fff;
      }
    }
    
    @media (max-width: 991px) {
    
      body.light .main-img-mobile {
        border: 4px solid #eee;
      }
    
      body.light #menuToggle {
        border: 1px solid #ddd;
      }
    
      body.light #menuToggle,
      body.light #menu {
        background: #eee;
      }
    
      body.light #menuToggle > span,
      body.light #menuToggle input:checked ~ span {
        background: #666;
      }
    
      body.light #menu li a {
        color: #666;
      }
    
      body.light #menu li:after {
        background: #ddd;
      }
    
      body.light.portfolio .slideshow nav {
        background: #eee;
        border-bottom: 1px solid #ddd;
      }
    
      body.light.portfolio .slideshow nav span img {
        display: none;
      }
    
      body.light.portfolio .slideshow nav span.nav-next {
        background-image: url("../img/projects/navigation/right-arrow.png");
        background-size: cover;
      }
    
      body.light.portfolio .slideshow nav span.nav-prev {
        background-image: url("../img/projects/navigation/left-arrow.png");
        background-size: cover;
      }
    
      body.light.portfolio .slideshow nav span.nav-close {
        background-image: url("../img/projects/navigation/close-button.png");
        background-size: cover;
      }
    
      body.light.portfolio .slideshow nav span.nav-next,
      body.light.portfolio .slideshow nav span.nav-prev {
        top: 51px;
      }
    
      body.light.portfolio .slideshow {
        background: #fff;
      }
    }
    
    @media (max-width: 576px) {
      body.light .title-section {
        background: #eee;
        border-bottom: 1px solid #ddd;
      }
    
      body.light #menuToggle {
        border: 0;
      }
    
      body.light.portfolio .slideshow nav span.nav-next,
      body.light.portfolio .slideshow nav span.nav-prev {
        top: 31px;
      }
    }
    /*** Buttons ***/
    .btn {
      box-shadow: none !important;
      border-radius: 26px;
      font-weight: 500;
      height: 46px;
      line-height: 46px;
      font-size: 15px;
      text-transform: uppercase;
      color: #fff;
      padding: 0 40px;
      outline: none !important;
      overflow: hidden;
      display: inline-block;
      position: relative;
      font-family: 'Poppins', sans-serif;
      letter-spacing: .5px;
      border: 0;
    }
    
    .btn,
    .btn:hover,
    .btn:focus {
      color: #fff;
      text-decoration: none;
    }
    
    /*** Page Title ***/
    
    .title-section {
      margin: 0 auto;
      width: 100%;
      position: relative;
      padding: 80px 0;
    }
    
    .title-section h1 {
      font-size: 56px;
      font-weight: 900;
      color: #fff;
      text-transform: uppercase;
      margin: 0;
    }
    
    .title-bg {
      font-size: 110px;
      left: 0;
      letter-spacing: 10px;
      line-height: 0.7;
      position: absolute;
      right: 0;
      top: 50%;
      text-transform: uppercase;
      font-weight: 800;
      -webkit-transform: translateY(-50%);
      -moz-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      -o-transform: translateY(-50%);
      transform: translateY(-50%);
      color: rgba(255, 255, 255, 0.07);
    }
    
    /* [ HEADER ] */
    /*================================================== */
    
    /*** Desktop Navigation ***/
    
    @media (min-width: 992px) {
    
      /*** Navigation ***/
    
      .header {
        position: fixed;
        right: 30px;
        bottom: 0;
        z-index: 3;
        display: flex;
        align-items: center;
        height: calc(100vh - 200px);
        top: 100px;
        opacity: 1;
        transition: opacity 0.3s;
        -webkit-transition: opacity 0.3s;
      }
    
      .header.hide-header {
        z-index: 0 !important;
        opacity: 0;
      }
    
      .header ul.icon-menu {
        margin: 0;
        padding: 0;
      }
    
      .header ul.icon-menu li.icon-box {
        width: 50px;
        height: 50px;
        list-style: none;
        position: relative;
        display: flex;
        align-items: center;
        transition: .3s;
        margin: 20px 0;
        border-radius: 50%;
        background: #2b2a2a;
      }
    
      .header ul.icon-menu li.icon-box i {
        color: #ddd;
        font-size: 19px;
        transition: .3s;
      }
    
      .header ul.icon-menu li.icon-box.active,
      .header ul.icon-menu li.icon-box:hover,
      .header ul.icon-menu li.icon-box.active i,
      .header ul.icon-menu li.icon-box:hover i {
        color: #fff;
      }
    
      .header .icon-box h2 {
        font-size: 15px;
        font-weight: 500;
      }
    
      .header .icon-box a {
        display: block;
        padding: 0;
        width: 50px;
        height: 50px;
      }
    
      .header .icon-box i.fa {
        position: absolute;
        pointer-events: none;
      }
    
      .header .icon-menu i {
        left: 0;
        right: 0;
        margin: 0 auto;
        display: block;
        text-align: center;
        font-size: 35px;
        top: 15px;
      }
    
      .header .icon-box h2 {
        z-index: -1;
        position: absolute;
        top: 0;
        right: 0;
        opacity: 0;
        color: #fff;
        line-height: 50px;
        font-weight: 500;
        transition: all .3s;
        border-radius: 30px;
        text-transform: uppercase;
        padding: 0 25px 0 30px;
        height: 50px;
      }
    
      .header .icon-box a:hover h2 {
        opacity: 1;
        right: 27px;
        margin: 0;
        text-align: center;
        border-radius: 30px 0 0 30px;
      }
    }
    
    /* [ Pages ] */
    /*================================================== */
    
    /*** Homepage ***/
    
    .home .color-block {
      position: fixed;
      height: 200%;
      width: 100%;
      transform: rotate(-15deg);
      left: -83%;
      top: -50%;
    }
    
    .home .bg {
      background-image: url(../img/2.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: top;
      height: calc(100vh - 60px);
      z-index: 111;
      border-radius: 15px;
      left: 30px;
      top: 30px;
      box-shadow: 0 0 7px rgba(0,0,0,.9);
    }
    
    .home .container-home {
      display: flex;
      align-items: center;
      min-height: 100%;
    }
    
    .home .home-details > div {
      max-width: 550px;
      margin: 0 auto;
    }
    
    .home .home-details h1 {
      font-size: 45px;
      line-height: 45px;
      font-weight: 700;
      margin: 18px 0 10px;
    }
    
    .home .home-details h1 span {
      color: #fff;
      font-weight: 600;
    }
    
    .home .home-details h6 {
      color: #eee;
      font-size: 22px;
      font-weight: 400;
      display: block;
    }
    
    .home .home-details p {
      margin: 10px 0 23px;
      font-size: 16px;
      line-height: 32px;
    }
    
    /*** About ***/
    
    .about .main-content {
      padding-bottom: 20px;
    }
    
    /* Personal Info List */
    
    .about .about-list li:not(:last-child) {
      padding-bottom: 20px;
    }
    
    .about .about-list .title {
      opacity: .8;
      text-transform: capitalize;
    }
    
    .about .about-list .value {
      font-weight: 600;
    }
    
    /* Box Stats */
    
    .about .box-stats {
      padding: 20px 30px 25px 40px;
      border-radius: 5px;
      border: 1px solid #252525;
    }
    
    .about .box-stats.with-margin {
      margin-bottom: 30px;
    }
    
    .about .box-stats h3 {
      position: relative;
      display: inline-block;
      margin: 0;
      font-size: 50px;
      font-weight: 700;
    }
    
    .about .box-stats h3:after {
      content: '+';
      position: absolute;
      right: -24px;
      font-size: 33px;
      font-weight: 300;
      top: 2px;
    }
    
    .about .box-stats p {
      padding-left: 45px;
    }
    
    .about .box-stats p:before {
      content: "";
      position: absolute;
      left: 0;
      top: 13px;
      width: 30px;
      height: 1px;
      background: #777;
    }
    
    /* Resume */
    
    .about .resume-box ul {
      margin: 0;
      padding: 0;
      list-style: none;
    }
    
    .about .resume-box li {
      position: relative;
      padding: 0 20px 0 60px;
      margin: 0 0 50px;
    }
    
    .about .resume-box li:after {
      content: "";
      position: absolute;
      top: 0;
      left: 20px;
      bottom: 0;
      border-left: 1px solid #333;
    }
    
    .about .resume-box .icon {
      width: 40px;
      height: 40px;
      position: absolute;
      left: 0;
      right: 0;
      line-height: 40px;
      text-align: center;
      z-index: 1;
      border-radius: 50%;
      color: #fff;
      background-color: #252525;
    }
    
    .about .resume-box .time {
      color: #fff;
      font-size: 12px;
      padding: 1px 10px;
      display: inline-block;
      margin-bottom: 12px;
      border-radius: 20px;
      font-weight: 600;
      background-color: #252525;
      opacity: .8;
    }
    
    .about .resume-box h5 {
      font-size: 18px;
      margin: 7px 0 10px;
    }
    
    .about .resume-box p {
      margin: 0;
      color: #eee;
      font-size: 14px;
    }
    
    .about .resume-box .place {
      opacity: .8;
      font-weight: 600;
      font-size: 15px;
      position: relative;
      padding-left: 26px;
    }
    
    .about .resume-box .place:before {
      position: absolute;
      content: '';
      width: 10px;
      height: 2px;
      background-color: #fff;
      left: 7px;
      top: 9px;
      opacity: .8;
    }
    
    /* Skills */
    
    .about .c100 {
      float: none !important;
      margin: 0 auto;
      background-color: #252525;
    }
    
    .about .c100 > span {
      color: #fff;
    }
    
    .about .c100:after {
      background-color: #111;
    }
    
    /*** Portfolio ***/
    .portfolio .main-content {
      padding-bottom: 60px;
      margin-top: -15px;
    }
    
    /* Grid */
    
    .portfolio .grid-gallery ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }
    
    .portfolio .grid-gallery figure {
      margin: 0;
    }
    
    .portfolio .grid-gallery figure img {
      display: block;
      width: 100%;
      border-radius: 5px;
      transition: .3s;
    }
    
    .portfolio .grid-wrap {
      margin: 0 auto;
    }
    
    .portfolio .grid {
      margin: 0 auto;
    }
    
    .portfolio .grid li {
      width: 33.333333%;
      float: left;
      cursor: pointer;
      padding: 15px;
    }
    
    .portfolio .grid figure {
      -webkit-transition: 0.3s;
      transition: 0.3s;
      border-radius: 5px;
      padding: 0;
      position: relative;
      overflow: hidden;
    }
    
    .portfolio .grid figure img {
      display: block;
      position: relative;
    }
    
    .portfolio .grid li a {
      overflow: hidden;
    }
    
    .portfolio .grid li figure div {
      position: absolute;
      width: 100%;
      height: 100%;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      text-align: center;
      justify-content: center;
    }
    
    .portfolio .grid li figure div span {
      margin: 0;
      text-transform: uppercase;
      color: #fff;
      font-size: 18px;
    }
    
    /* Slideshow */
    
    .portfolio .slideshow {
      position: fixed;
      background: rgba(0,0,0,0.85);
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      z-index: 1111;
      opacity: 0;
      visibility: hidden;
      overflow: hidden;
      -webkit-perspective: 1000px;
      perspective: 1000px;
      -webkit-transition: opacity 0.5s, visibility 0s 0.5s;
      transition: opacity 0.5s, visibility 0s 0.5s;
      text-align: left;
    }
    
    .portfolio .slideshow-open .slideshow {
      opacity: 1;
      visibility: visible;
      -webkit-transition: opacity 0.5s;
      transition: opacity 0.5s;
    }
    
    .portfolio .slideshow ul {
      width: 100%;
      height: 100%;
      -webkit-transform-style: preserve-3d;
      transform-style: preserve-3d;
      -webkit-transform: translate3d(0,0,150px);
      transform: translate3d(0,0,150px);
      -webkit-transition: -webkit-transform 0.5s;
      transition: transform 0.5s;
    }
    
    .portfolio .slideshow ul.animatable > li {
      -webkit-transition: -webkit-transform 0.5s;
      transition: transform 0.5s;
    }
    
    .portfolio .slideshow-open .slideshow ul {
      -webkit-transform: translate3d(0,0,0);
      transform: translate3d(0,0,0);
    }
    
    .portfolio .slideshow ul > li {
      width: 660px;
      position: absolute;
      top: 50%;
      left: 50%;
      margin: -280px 0 0 -330px;
      visibility: hidden;
    }
    
    .portfolio .slideshow ul > li.show {
      visibility: visible;
    }
    
    .portfolio .slideshow ul > li:after {
      content: '';
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      background: rgba(0,0,0,0.7);
      -webkit-transition: opacity 0.3s;
      transition: opacity 0.3s;
      z-index: 111;
      border-radius: 10px;
    }
    
    .portfolio .slideshow ul > li.current:after {
      visibility: hidden;
      opacity: 0;
      -webkit-transition: opacity 0.3s, visibility 0s 0.3s;
      transition: opacity 0.3s, visibility 0s 0.3s;
    }
    
    .portfolio .slideshow figure {
      width: 100%;
      height: 100%;
      background: #252525;
      padding: 30px;
      overflow: auto;
      border-radius: 10px;
    }
    
    .portfolio .slideshow a {
      text-decoration: underline;
    }
    
    .portfolio .slideshow figcaption {
      margin-bottom: 15px;
    }
    
    .portfolio .slideshow figcaption h3 {
      text-transform: uppercase;
      padding: 10px 0 20px;
      font-weight: 700;
      text-align: center;
      font-size: 33px;
    }
    
    /* Embedded Videos */
    
    .portfolio .slideshow .videocontainer,
    .portfolio .slideshow .responsive-video {
      max-width: 100%;
      border-radius: 4px;
      display: block;
      object-fit: cover;
    }
    
    .portfolio .slideshow .videocontainer {
      position: relative;
      padding-bottom: 56.20%;
      padding-top: 0;
      height: 0;
      max-width: 100%;
      overflow: hidden;
      width: 100%;
      display: block;
      margin: 0;
      border-radius: 4px;
    }
    
    .portfolio .slideshow .videocontainer iframe,
    .portfolio .slideshow .videocontainer object,
    .portfolio .slideshow .videocontainer embed {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;
    }
    
    /* Carousel */
    
    .portfolio .slideshow .carousel-indicators {
      bottom: 0;
      background: rgba(0,0,0,.4);
      padding: 10px 0;
      margin: 0;
    }
    
    .portfolio .slideshow .carousel-indicators li {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      margin: 0 7px;
      background-color: #fff;
      opacity: 1;
    }
    
    /* Navigation */
    
    .portfolio .slideshow nav span {
      position: fixed;
      z-index: 1000;
      text-align: center;
      cursor: pointer;
      padding: 200px 30px;
      color: #fff;
    }
    
    .portfolio .slideshow nav span.nav-prev,
    .portfolio .slideshow nav span.nav-next {
      top: 50%;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      font-size: 41px;
      line-height: 58px;
    }
    
    .portfolio .slideshow nav span.nav-prev {
      left: 0;
    }
    
    .portfolio .slideshow nav span.nav-next {
      right: 0;
    }
    
    .portfolio .slideshow nav span.nav-close {
      top: 30px;
      right: 30px;
      padding: 0;
    }
    
    /*** Contact ***/
    .contact .main-content {
      padding-bottom: 85px;
    }
    /* Left Side */
    
    .contact .custom-span-contact {
      font-weight: 600;
      padding-left: 50px;
      line-height: 21px;
      padding-top: 5px;
    }
    
    .contact .custom-span-contact i {
      left: 0;
      top: 10px;
      font-size: 33px;
    }
    
    .contact .custom-span-contact i.fa-phone-square {
      font-size: 39px;
      top: 7px;
    }
    
    .contact .custom-span-contact span {
      text-transform: uppercase;
      opacity: .8;
      font-weight: 400;
    }
    
    .contact ul.social {
      margin-left: -5px;
    }
    
    .contact ul.social li {
      display: inline-block;
    }
    
    .contact ul.social li a {
      display: inline-block;
      height: 40px;
      width: 40px;
      line-height: 42px;
      text-align: center;
      color: #fff;
      transition: .3s;
      font-size: 17px;
      margin: 0 6px;
      background: #2b2a2a;
      border-radius: 50%;
    }
    /* Form */
    .contact .contactform input[type=text],
    .contact .contactform input[type=email] {
      border: 1px solid #111;
      width: 100%;
      background: #252525;
      color: #fff;
      padding: 11px 26px;
      margin-bottom: 30px;
      border-radius: 30px;
      outline: none !important;
      transition: .3s;
    }
    
    .contact .contactform textarea {
      border: 1px solid #111;
      background: #252525;
      color: #fff;
      width: 100%;
      padding: 12px 26px;
      margin-bottom: 20px;
      height: 160px;
      overflow: hidden;
      border-radius: 30px;
      outline: none !important;
      transition: .3s;
    }
    
    .contact .contactform .form-message {
      margin: 24px 0;
    }
    
    .contact .contactform .output_message {
      display: block;
      color: #fff;
      height: 46px;
      line-height: 46px;
      border-radius: 30px;
    }
    
    .contact .contactform .output_message.success {
      background: #28a745;
    }
    
    .contact .contactform .output_message.success:before {
      font-family: FontAwesome;
      content: "\f14a";
      padding-right: 10px;
    }
    
    .contact .contactform .output_message.error {
      background: #dc3545;
    }
    
    .contact .contactform .output_message.error:before {
      font-family: FontAwesome;
      content: "\f071";
      padding-right: 10px;
    }
    
    /*** Blog ***/
    
    .blog .main-content {
      padding-bottom: 85px;
    }
    
    /* Latest Posts */
    
    .blog .post-container {
      display: block;
    }
    
    .blog .post-content {
      background-color: #252525;
      padding: 20px 25px 25px 25px;
      border-radius: 0 0 5px 5px;
    }
    
    .blog .post-content .entry-header h3 {
      line-height: 26px;
      cursor: pointer;
    }
    
    .blog .post-content .entry-header h3 a {
      text-decoration: none;
      transition: .5s;
    }
    
    .blog .post-thumb {
      border-radius: 5px 5px 0 0;
      cursor: pointer;
    }
    
    .blog .post-thumb a {
      border-radius: 5px 5px 0 0;
    }
    
    .blog .post-container:hover img {
      transform: scale(1.2);
    }
    
    .blog .post-thumb a img {
      border-radius: 5px 5px 0 0;
      transition: .3s;
    }
    
    .blog .post-content .entry-content p {
      margin: 15px 0 5px;
    }
    
    .blog .post-content .entry-header h3 a {
      color: #fff;
      font-size: 20px;
      font-weight: 600;
    }
    
    /* pagination */
    
    .blog .pagination {
      margin-bottom: 30px;
    }
    
    .blog .page-link {
      color: #fff;
      background-color: #252525;
      border: 1px solid #252525;
      padding: 0;
      margin: 0 10px;
      border-radius: 50% !important;
      width: 43px;
      height: 43px;
      line-height: 43px;
      text-align: center;
      transition: .3s;
    
    }
    
    .blog .page-link:focus,
    .blog .page-link:active{
      box-shadow: none !important;
    }
    
    .blog .page-link:hover {
      color: #fff !important;
    }
    
    /* Blog Post */
    
    .blog-post article {
      max-width: 700px;
      margin: 0 auto;
    }
    
    .blog-post article h1 {
      font-weight: 600;
      margin: 13px 0 20px;
    }
    
    .blog-post article img {
      border-radius: 5px;
      margin-bottom: 20px;
    }
    
    .blog-post .meta {
      color: #eee;
      font-size: 13px;
    }
    
    .blog-post .meta span {
      padding-right: 15px;
    }
    
    .blog-post .meta i {
      padding-right: 3px;
    }
    
    /* [ RESPONSIVE DESIGN STYLES ] */
    
    @media (min-width: 1351px) {
      .portfolio .container-portfolio .grid {
        text-align: left;
      }
    }
    
    @media (max-width: 1350px) and (min-width: 992px) {
      .container {
        max-width: calc(100% - 195px);
      }
    
      .portfolio .container-portfolio {
        max-width: calc(100% - 195px);
      }
    }
    
    @media (max-width: 1100px) and (min-width: 992px) {
      .home .home-details > div {
        max-width: 450px;
      }
    }
    
    @media (min-width: 1600px) {
      .home .home-details > div {
        max-width: 600px;
      }
    }
    
    @media (min-width: 992px) {
      .home .home-details-container {
        width: 100%;
        height: 100vh;
      }
    
      body.home {
        overflow: hidden;
      }
    
      .btn:before {
        font: 15px/1.2em FontAwesome;
        color: #fff;
        position: absolute;
        height: 100%;
        right: 25px;
        top: 50%;
        margin-top: -9px;
        transition: all 0.3s;
        opacity: 0;
        filter: alpha(opacity=0);
        -webkit-transform: translateX(-20px);
        transform: translateX(-20px);
      }
    
      .btn.btn-about:before {
        content: "\f007";
      }
    
      .btn.btn-portfolio:before {
        content: "\f07c";
        margin-top: -8px;
      }
    
      .btn.btn-preview:before {
        content: "\f08e";
      }
    
      .btn.btn-download:before {
        content: "\f019";
      }
    
      .btn.btn-contact:before {
        content: "\f1d8";
      }
    
      .btn span {
        position: relative;
        display: block;
        transition: all 0.3s;
      }
    
      .btn:hover span {
        -webkit-transform: translateX(-10px);
        transform: translateX(-10px);
      }
    
      .btn:hover:before {
        opacity: 1;
        filter: alpha(opacity=100);
        -webkit-transform: translateX(0);
        transform: translateX(0);
      }
    }
    
    /* Mobile  Navigation */
    
    @media (max-width: 991px) {
      .btn {
        padding: 0 28px;
      }
    
      body.home {
        padding: 25px;
      }
    
      body.home .main-container {
        padding: 30px 0 !important;
      }
    
      .home .home-details-container {
        margin: 0 auto;
      }
    
      .home .home-details {
        padding: 0;
      }
    
      .main-img-mobile {
        border-radius: 50%;
        width: 270px;
        height: 270px;
        border: 4px solid #252525;
        margin: 0 auto 25px;
        display: block;
      }
    
      .home .home-details h1 {
        font-size: 38px;
        line-height: 38px;
        margin: 29px 0 13px;
      }
    
      .home .home-details p {
        margin: 10px 0 23px;
        font-size: 15px;
        line-height: 30px;
      }
    
      #menuToggle {
        display: inline-block;
        position: fixed;
        top: 30px;
        right: 30px;
        z-index: 1111;
        user-select: none;
        padding: 19px 0 0 16px;
        width: 54px;
        height: 54px;
        border-radius: 5px;
        background: #252525;
      }
    
      #menuToggle input {
        display: flex;
        width: 54px;
        height: 54px;
        position: absolute;
        cursor: pointer;
        opacity: 0;
        z-index: 2;
        top: 0;
        left: 0;
      }
    
      #menuToggle > span {
        display: flex;
        width: 23px;
        height: 2px;
        margin-bottom: 5px;
        position: relative;
        background: #ffffff;
        border-radius: 3px;
        z-index: 1;
        transform-origin: 5px 0;
        transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
        background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
        opacity 0.55s ease;
      }
    
      #menuToggle > span:first-child {
        transform-origin: 0 0;
      }
    
      #menuToggle > span:nth-last-child(2) {
        transform-origin: 0 100%;
      }
    
      #menuToggle input:checked ~ span {
        opacity: 1;
        transform: rotate(45deg) translate(4px, 0);
        background: #fff;
      }
    
      #menuToggle input:checked ~ span:nth-last-child(3) {
        opacity: 0;
        transform: rotate(0deg) scale(0.2, 0.2);
      }
    
      #menuToggle input:checked ~ span:nth-last-child(2) {
        transform: rotate(-45deg) translate(2px, 4px);
      }
    
      #menu {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        margin: 0;
        padding-top: 60px;
        background-color: #252525;
        -webkit-font-smoothing: antialiased;
        transform-origin: 0 0;
        transform: translate(-100%, 0);
        transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
      }
    
      #menuToggle input:checked ~ ul {
        transform: none;
      }
    
      #menu li {
        position: relative;
        padding-left: 30px;
      }
    
      #menu li:after {
        position: absolute;
        content: '';
        height: 1px;
        width: calc(100% - 60px);
        background: #333;
        left: 30px;
      }
    
      #menu li:last-child:after {
        display: none;
      }
    
      #menu li.active a span {
        font-weight: 600;
      }
    
      #menu li a {
        color: #fff;
        text-transform: uppercase;
        transition-delay: 2s;
        font-size: 26px;
        display: block;
        text-decoration: none;
        padding: 14px 0;
        position: relative;
      }
    
      #menu li a span {
        position: absolute;
        left: 50px;
        font-weight: 400;
      }
    
      .portfolio .grid li {
        width: 50%;
      }
    
      .portfolio .grid li figure div {
        display: none !important;
      }
    
      .portfolio .slideshow {
        background: #252525;
      }
    
      .portfolio .slideshow nav span {
        padding: 0;
      }
    
      .portfolio .slideshow ul > li {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        margin: 0;
      }
    
      .portfolio .slideshow ul > li:after {
        display: none;
      }
    
      .portfolio .slideshow figure {
        padding: 125px 30px 30px;
        border-radius: 0;
        max-width: 720px;
        margin: 0 auto;
      }
    
      .portfolio .slideshow nav span.nav-prev,
      .portfolio .slideshow nav span.nav-next {
        top: 35px;
        width: 32px;
        height: 32px;
      }
    
      .portfolio .slideshow nav span.nav-next {
        right: 30px;
      }
    
      .portfolio .slideshow nav span.nav-prev {
        left: 30px;
      }
    
      .portfolio .slideshow nav span.nav-prev img,
      .portfolio .slideshow nav span.nav-next img {
        width: 32px;
        height: 32px;
      }
    
      .portfolio .slideshow nav span:before {
        display: none;
      }
    
      .portfolio .slideshow nav span.nav-close {
        top: 35px;
        right: 0;
        left: 0;
        margin: 0 auto;
        width: 32px;
        height: 32px;
        display: block;
        line-height: 0;
      }
    
      .portfolio .slideshow nav span.nav-close img {
        width: 32px;
        height: 32px;
      }
    
      .portfolio .slideshow nav {
        position: fixed;
        top: 0;
        width: 100%;
        height: 102px;
        background: #252525;
        z-index: 1;
        border-bottom: 1px solid #333;
      }
    
      .contact .main-content {
        padding-bottom: 0;
      }
    }
    
    @media (max-width: 767px) {
      .home .home-details p {
        font-size: 14px;
        line-height: 28px;
      }
    }
    
    @media (max-width: 576px) {
      .btn {
        font-size: 14px;
      }
    
      body {
        font-size: 14px;
      }
    
      .title-section.revealator-delay1 {
        transform: none !important;
        opacity: 1 !important;
      }
    
      #menuToggle {
        right: 10px;
        top: 4px;
        padding: 19px 0 0 13px;
        width: 49px;
        height: 49px;
      }
    
      .home #menuToggle {
        right: 25px;
        top: 25px;
        padding: 17px 0 0 13px;
      }
    
      #menu li {
        padding-left: 25px;
      }
    
      #menu li a {
        font-size: 18px;
      }
    
      #menu li:after {
        width: calc(100% - 50px);
        left: 25px;
      }
    
      #menu li a span {
        left: 35px;
      }
    
      .main-content {
        padding-top: 85px;
      }
    
      .main-content > .container {
        padding: 0 25px;
      }
    
      .main-img-mobile {
        width: 230px;
        height: 230px;
      }
    
      .home .home-details h1 {
        font-size: 29px;
        line-height: 29px;
        margin: 18px 0 13px;
      }
    
      .home .home-details h6 {
        font-size: 19px;
      }
    
      .title-section {
        padding: 16px 25px 14px;
        background: #252525;
        border-bottom: 1px solid #333;
        margin-bottom: 36px;
        position: fixed;
        right: 0;
        left: 0;
        z-index: 11;
        top: 0;
      }
    
      .title-section h1 {
        font-size: 26px;
      }
    
      .title-bg {
        display: none;
      }
    
      .custom-title {
        font-size: 21px;
      }
    
      .about .main-content {
        padding-bottom: 0;
      }
    
      .about .resume-box h5 {
        font-size: 17px;
      }
    
      .about .box-stats {
        padding: 15px 20px 20px 25px;
      }
    
      .about .c100 {
        transform: scale(.8);
      }
    
      .about .box-stats.with-margin {
        margin-bottom: 25px;
      }
    
      .about .box-stats h3 {
        font-size: 40px;
      }
    
      .about .box-stats p {
        padding-left: 0;
      }
    
      .about .box-stats p:before {
        display: none;
      }
    
      .portfolio .main-content {
        padding-bottom: 10px;
        margin-top: -12px;
      }
    
      .portfolio .grid li {
        width: 100%;
      }
    
      .portfolio .main-content > .container {
        padding: 0 10px;
      }
    
      .portfolio .slideshow figure {
        padding: 85px 25px 25px;
      }
    
      .portfolio .slideshow figcaption h3 {
        font-size: 25px;
      }
    
      .portfolio .slideshow nav span.nav-prev,
      .portfolio .slideshow nav span.nav-next {
        top: 9px;
        width: 20px;
        height: 20px;
      }
    
      .portfolio .slideshow nav span.nav-next {
        right: 20px;
      }
    
      .portfolio .slideshow nav span.nav-prev {
        left: 20px;
      }
    
      .portfolio .slideshow nav span.nav-prev img,
      .portfolio .slideshow nav span.nav-next img {
        width: 20px;
        height: 20px;
      }
    
      .portfolio .slideshow nav span.nav-close {
        top: 21px;
        width: 20px;
        height: 20px;
      }
    
      .portfolio .slideshow nav span.nav-close img {
        width: 20px;
        height: 20px;
      }
    
      .portfolio .slideshow nav {
        height: 62px;
      }
    
      .blog .main-content {
        padding-bottom: 55px;
      }
    
      .blog-post article h1 {
        font-size: 25px;
      }
    
      .separator.mt-1 {
        margin-top: 35px !important;
      }
    }
    
    
    </style>
    


<body class="blog">

<header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box">
            <i class="fa fa-home"></i>
            <a href="index.php">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-user"></i>
            <a href="about.php">
                <h2>About</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-briefcase"></i>
            <a href="portfolio.php">
                <h2>Portfolio</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-envelope-open"></i>
            <a href="contact.php">
                <h2>Contact</h2>
            </a>
        </li>
        <li class="icon-box active">
            <i class="fa fa-comments"></i>
            <a href="blog.php">
                <h2>Blog</h2>
            </a>
        </li>
    </ul>
    <!-- Fixed Navigation Ends -->
    <!-- Mobile Menu Starts -->
    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li><a href="index.php"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li><a href="about.php"><i class="fa fa-user"></i><span>About</span></a></li>
                <li><a href="portfolio.php"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                <li><a href="contact.php"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                <li class="active"><a href="blog.php"><i class="fa fa-comments"></i><span>Blog</span></a></li>
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>
<!-- Header Ends -->
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>my <span>blog</span></h1>
    <span class="title-bg">posts</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <!-- Articles Starts -->
        <div class="row">
            <!-- Article Starts -->
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                <article class="post-container">
                    <div class="post-thumb">
                        <a href="blog-post.html" class="d-block position-relative overflow-hidden">
                            <img src="img/blog/blog-post-1.jpg" class="img-fluid" alt="Blog Post">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="entry-header">
                            <h3><a href="blog-post.html">How to Own Your Audience by Creating an Email List</a></h3>
                        </div>
                        <div class="entry-content open-sans-font">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore...
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            <!-- Article Ends -->
            <!-- Article Starts -->
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                <article class="post-container">
                    <div class="post-thumb">
                        <a href="blog-post.html" class="d-block position-relative overflow-hidden">
                            <img src="img/blog/blog-post-2.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="entry-header">
                            <h3><a href="blog-post.html">Top 10 Toolkits for Deep Learning in 2020</a></h3>
                        </div>
                        <div class="entry-content open-sans-font">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore...
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            <!-- Article Ends -->
            <!-- Article Starts -->
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                <article class="post-container">
                    <div class="post-thumb">
                        <a href="blog-post.html" class="d-block position-relative overflow-hidden">
                            <img src="img/blog/blog-post-3.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="entry-header">
                            <h3><a href="blog-post.html">Everything You Need to Know About Web Accessibility</a></h3>
                        </div>
                        <div class="entry-content open-sans-font">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore...
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            <!-- Article Ends -->
            <!-- Article Starts -->
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                <article class="post-container">
                    <div class="post-thumb">
                        <a href="blog-post.html" class="d-block position-relative overflow-hidden">
                            <img src="img/blog/blog-post-4.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="entry-header">
                            <h3><a href="blog-post.html">How to Inject Humor & Comedy Into Your Brand</a></h3>
                        </div>
                        <div class="entry-content open-sans-font">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore...
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            <!-- Article Ends -->
            <!-- Article Starts -->
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                <article class="post-container">
                    <div class="post-thumb">
                        <a href="blog-post.html" class="d-block position-relative overflow-hidden">
                            <img src="img/blog/blog-post-5.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="entry-header">
                            <h3><a href="blog-post.html">Women in Web Design: How To Achieve Success</a></h3>
                        </div>
                        <div class="entry-content open-sans-font">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore...
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            <!-- Article Ends -->
            <!-- Article Starts -->
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                <article class="post-container">
                    <div class="post-thumb">
                        <a href="blog-post.html" class="d-block position-relative overflow-hidden">
                            <img src="img/blog/blog-post-6.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="entry-header">
                            <h3><a href="blog-post.html">Evergreen versus topical content: An overview</a></h3>
                        </div>
                        <div class="entry-content open-sans-font">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore...
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            <!-- Article Ends -->
            <!-- Pagination Starts -->
            <div class="col-12 mt-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Pagination Ends -->
        </div>
        <!-- Articles Ends -->
    </div>

</section>

<!-- Template JS Files -->
<script src="js/jquery-3.5.0.min.js"></script>
<script src="js/styleswitcher.js"></script>
<script src="js/preloader.min.js"></script>
<script src="js/fm.revealator.jquery.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpGridGallery.js"></script>
<script src="js/jquery.hoverdir.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/custom.js"></script>

</body>

</html>
