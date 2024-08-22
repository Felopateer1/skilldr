<?php
// Start session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: prem.log.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Watch Free Online Courses With Skilldr Academy!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Skilldr | Premium Access </title>
    <link rel="stylesheet" href="../css/style.css" />
    <meta name="keywords" content="courses , skilldr courses , courses skilldr">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://skilldr.vercel.app">

<style>
  .loader-wrapper { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: #001220; display: flex; justify-content: center; align-items: center; z-index: 9999; }
        .loader { border: 8px solid #de5b00; border-radius: 50%; border-top: 8px solid #001220; width: 50px; height: 50px; animation: spin 1s linear infinite; }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
        .content { opacity: 0; transition: opacity 1s; }
        .fade-in { opacity: 1; }

        .navbar{
          box-shadow:  5px 5px 10px #000000,
             -5px -5px 10px #000000;
        }
#ioc{
  transition: transform 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      color: white;
      text-align: center;
}
        #ioc:hover{
          transform: translateY(-10px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
}
.fqsc{
  display: flex;
    justify-content: center;
    align-items: center;
}
.faq-container {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 10px;
    padding: 15px;
   width: 90%;

}

.question {
    cursor: pointer;
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

.question h2 {
    margin: 0;
    font-size: 18px;
    color: #333;
}

.answer {
    display: none;
    padding: 10px;
}

.answer p {
    margin: 0;
    font-size: 16px;
    color: #666;
}
.card {
            background-color: #1a1a1a;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            padding: 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            
        }
        .card img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        .card h1 {
            font-size: 24px;
            margin: 10px 0;
        }
        .card p {
            font-size: 16px;
            line-height: 1.5;
            margin: 10px 0;
        }
        .ssss {
            display: inline-block;
            padding: 10px 20px;
            background-color: #f44336;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            text-align: center;
        }
        .ssss:hover {
            background-color: #d32f2f;
        }
@media screen and (max-width:1023px){
  .ssss{
    display: none;
  }
}
.itslogo{
    width: 90%;height: 7vh;
}
@media screen and (max-width:1023px) {
    .itslogo{
        width: 90%;height: 5vh;
    }
}
  </style>

<!-- Open Graph Meta Tags -->
<meta property="og:title" content="Skilldr Academy">
<meta property="og:description" content="Studying & Online Courses With Skilldr Website . There are programming courses and graphic design courses and more! . Studying with the best teachers in all subjects ! ">
<meta property="og:image" content="../imgs/log1 (1).png">
<meta property="og:url" content="https://skilldr.vercel.app">

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Skilldr Academy">
<meta name="twitter:description" content="Studying & Online Courses With Skilldr Website . There are programming courses and graphic design courses and more! . Studying with the best teachers in all subjects ! ">
<meta name="twitter:image" content="../imgs/skilldr-high-resolution-logo-black-transparent.png">
<!-- Others -->
<meta name="author" content="Felopateer">


<link rel="manifest" href="../manifest.json">


    <link
      rel="shortcut icon"
      href="../imgs/skilldr-favicon-color.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="../bootstrap/css/all.min.css" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../WOW-master/css/libs/animate.css" />

    <meta name="google-adsense-account" content="ca-pub-4585657499719833">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4585657499719833"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  </head>
  <body>
    
    <div class="loader-wrapper"><div class="loader"></div><div class="txt" style="margin-left: 10px;font-size: 1.9em;font-weight: bold;color:white;">Please Wait...</div></div>
    <div class="content">

    
    <nav class="navbar navbar-expand-lg" id="navbar">
      <div class="container">
        <div class="logoofweb">
          
          <a style="margin-right: 30px;text-decoration: none;" href="index.html" >

            <img src="../imgs/skilldr-high-resolution-logo-transparent.png" class="itslogo">
          </a>
        </div>
        
        <a class="navbar-brand" id="openaccountinf">

       
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#main"
          aria-controls="main"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="main">



          <div class="navbar-nav ms-auto mb-2 mb-lg-0">

            <a href="index.html" class="nav-link active">Home</a>
            
            <div class="dropdown-center">
              <button class=" nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
              </button>
              <ul class="dropdown-menu">
                <li><a style="font-weight: bold;" class="dropdown-item" href="html/whiteboard.html"><i class="fas fa-chalkboard-teacher"></i> Whiteboard</a></li>
                <li><a style="font-weight: bold;" class="dropdown-item" href="#about"><i class="fas fa-question-circle"></i> About Us</a></li>
                <li><a style="font-weight: bold;" class="dropdown-item" href="html/courses.html"><i class="fas fa-video"></i> Courses</a></li>
                <li><a style="font-weight: bold;" class="dropdown-item" href="api/share.php"><i class="fas fa-share"></i> Share</a></li>
                <li><a style="font-weight: bold;" class="dropdown-item" href="html/userdata.html"><i class="fas fa-user"></i> Account</a></li>
                <li><a style="font-weight: bold;" class="dropdown-item" href="html/redeemcode.html"><i class="fas fa-gift"></i> Redeem Code</a></li>
                <li><a style="font-weight: bold;" class="dropdown-item" href="html/community.html"><i class="fas fa-comments"></i> Community</a></li>
                <li><a style="font-weight: bold;" class="dropdown-item" href="html/studio.html"><i class="fa-brands fa-studiovinari"></i> Studio</a></li>
                <li><a style="font-weight: bold;" class="dropdown-item" href="https://skilldrblog.blogspot.com"><i class="fas fa-blog"></i> Blog</a></li>
              </ul>
            </div>
            <div class="dropdown-center">
              <button class=" nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Courses
              </button>
              <ul class="dropdown-menu">
                <li><a style="font-weight: bold;" class="dropdown-item" href="html/code/intro.html"><i class="fas fa-code"></i> Programming</a></li>
                <li><a style="font-weight: bold;" class="dropdown-item" href="html/typefast/typefast.html"><i class="fas fa-keyboard"></i> Typing Fast</a></li>
                <li><a style="font-weight: bold;" class="dropdown-item" href="html/courses.html"><i class="fas fa-search"></i> More...</a></li>
              </ul>
            </div>      
               







           </div>



          <h1 class="h1al2" style="margin-right: 0px">|</h1>
          <hr style="color: white" />
          <br />




      <div class="opt" id="opt">
      </div>



          <a  class="btn main-btn" href="html/courses.html" id="login"
            ><span style="font-size: 1.1em">Get Started               <span style="font-size: 1em;">&#x2192;</span>
          </span></a
          ><br>
          
        
          
        </div>
      </div>
    </nav>

   
    

    <div class="tutu" id="tutu">
      <section id="home">
        <br><br>
        <div class="homee">
          <br /><br />
<h1  style="font-weight: bold;font-size: 3em;" id="logo_txt"><svg style="margin-right: 10px;" width="46" height="46" fill="#de5b00" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M20.438 3.75H3.563A2.065 2.065 0 0 0 1.5 5.813v12.375a2.065 2.065 0 0 0 2.063 2.062h16.875a2.064 2.064 0 0 0 2.062-2.063V5.813a2.065 2.065 0 0 0-2.063-2.062ZM5.25 18.188a.562.562 0 0 1-.563.562H3.563A.563.563 0 0 1 3 18.187v-1.125a.562.562 0 0 1 .563-.562h1.124a.563.563 0 0 1 .563.563v1.125Zm0-3.75a.562.562 0 0 1-.563.562H3.563A.563.563 0 0 1 3 14.437v-1.124a.562.562 0 0 1 .563-.563h1.124a.563.563 0 0 1 .563.563v1.124Zm0-3.75a.562.562 0 0 1-.563.562H3.563A.563.563 0 0 1 3 10.687V9.563A.563.563 0 0 1 3.563 9h1.124a.563.563 0 0 1 .563.563v1.124Zm0-3.75a.563.563 0 0 1-.563.562H3.563A.563.563 0 0 1 3 6.937V5.813a.563.563 0 0 1 .563-.562h1.124a.563.563 0 0 1 .563.563v1.125Zm11.329 5.812H7.42a.75.75 0 1 1 0-1.5h9.158a.75.75 0 1 1 0 1.5ZM21 18.188a.562.562 0 0 1-.563.562h-1.125a.562.562 0 0 1-.562-.563v-1.125a.562.562 0 0 1 .563-.562h1.125a.562.562 0 0 1 .562.563v1.125Zm0-3.75a.562.562 0 0 1-.563.562h-1.125a.562.562 0 0 1-.562-.563v-1.124a.562.562 0 0 1 .563-.563h1.125a.562.562 0 0 1 .562.563v1.124Zm0-3.75a.562.562 0 0 1-.563.562h-1.125a.562.562 0 0 1-.562-.563V9.563A.563.563 0 0 1 19.313 9h1.125a.562.562 0 0 1 .562.563v1.124Zm0-3.75a.563.563 0 0 1-.563.562h-1.125a.562.562 0 0 1-.562-.563V5.813a.563.563 0 0 1 .563-.562h1.125a.562.562 0 0 1 .562.563v1.125Z"></path>
</svg>Watch <span style="color: #de5b00;">Free</span> Online Courses</h1>
          <br />
    
        
          <div class="search">
            <div class="ddfff">
              <form method="get" action="api/result.php" style="display: flex; justify-content: center" class="search_form">
                <input
                title="Search Skilldr"
                  type="search"
                  name="query"
                  style="border-radius: 10px;color: #de5b00;font-weight: 700;font-size: 1em;border: none;background-color: white;"
                  placeholder="Search Skilldr..."
                  id="search"
                />
                <button title="Search" class="buttonofsearch" style="border-radius: 10px;" id="opensearchresults">
                  <svg width="46" height="46" class="thde" fill="#000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="m21.75 20.063-5.816-5.818a7.523 7.523 0 0 0 1.44-4.433c0-4.17-3.393-7.562-7.562-7.562-4.17 0-7.562 3.392-7.562 7.562s3.392 7.562 7.562 7.562a7.523 7.523 0 0 0 4.433-1.44l5.818 5.816 1.687-1.688ZM9.812 14.986a5.174 5.174 0 1 1-.002-10.35 5.174 5.174 0 0 1 0 10.349Z"></path>
                  </svg>
                </button>
              </form>
              <br />

              </div>

            </div>
          <br />
 
        <br /><br /><br />
      </section>


<section id="courses">

  <center>
    <h1 style="color: #de5b00; text-decoration: none;"><svg style="margin-right: 10px;" width="46" height="46" fill="#de5b00" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M15.75 9.75V6a.75.75 0 0 0-.75-.75H1.5A.75.75 0 0 0 .75 6v12a.75.75 0 0 0 .75.75H15a.75.75 0 0 0 .75-.75v-3.75l7.5 4.5V5.25l-7.5 4.5Z"></path>
    </svg>Courses</h1>
  <h4>- What will you learn from us ? -</h4>
  </center>
<br>

  <div class="cards">









<a href="html/code/intro.html" style="text-decoration: none;">

  <div class="cardj" id="ioc" style="background-color:rgb(1, 1, 92);border-radius: 0px" >
    <div class="child_card">
      <h1><svg width="55" height="55" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M7.5 18.234a.98.98 0 0 1-.648-.244l-6-5.25a.985.985 0 0 1 0-1.48l6-5.25a.984.984 0 1 1 1.296 1.48L2.994 12l5.154 4.509a.984.984 0 0 1-.649 1.725Z"></path>
        <path d="M16.5 18.234a.984.984 0 0 1-.648-1.725l5.154-4.51-5.153-4.508a.984.984 0 1 1 1.296-1.482l6 5.25a.985.985 0 0 1 0 1.482l-6 5.25a.979.979 0 0 1-.648.243Z"></path>
        <path d="M9.75 20.481a.985.985 0 0 1-.943-1.266l4.5-15a.984.984 0 1 1 1.885.563l-4.5 15a.984.984 0 0 1-.942.703Z"></path>
      </svg><span class="iotext">Programming</span></h1>
    </div>
  </div>

</a>


<a href="html/typefast/typefast.html" style="text-decoration: none;" title="Typing Faster">

  <div class="cardj" id="ioc" style="background-color:rgb(18, 92, 1);border-radius: 0px" >
    <div class="child_card">
      <h1><svg width="55" height="55" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M21 9H3a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V10a1 1 0 0 0-1-1Z"></path>
        <path fill="#ffffff" stroke="none" d="M7 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"></path>
        <path fill="#ffffff" stroke="none" d="M8 16a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"></path>
        <path fill="#ffffff" stroke="none" d="M5 16a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"></path>
        <path fill="#ffffff" stroke="none" d="M10 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"></path>
        <path fill="#ffffff" stroke="none" d="M11 16a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"></path>
        <path fill="#ffffff" stroke="none" d="M13 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"></path>
        <path fill="#ffffff" stroke="none" d="M14 16a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"></path>
        <path fill="#ffffff" stroke="none" d="M16 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"></path>
        <path fill="#ffffff" stroke="none" d="M17 16a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"></path>
        <path fill="#ffffff" stroke="none" d="M19 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"></path>
        <path d="M8.5 18h7"></path>
        <path d="M16.5 9V6.562a.5.5 0 0 1 .5-.5h2.5a.5.5 0 0 0 .5-.5V3"></path>
      </svg><br><span class="iotext">Typing Fast</span></h1>
    </div>
  </div>

</a>





  </div>



  <br><br>
                                
 
</section>


<section id="about">
  <br>
  <center>
    <h1 style="color: #de5b00; text-decoration: none;"><svg width="46" height="46" fill="none" stroke="#de5b00" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M11.625 3a8.626 8.626 0 1 0 .001 17.251A8.626 8.626 0 0 0 11.625 3Z"></path>
      <path d="M10.313 10.313h1.5v5.437"></path>
      <path d="M9.75 15.938h4.125"></path>
      <path fill="#de5b00" stroke="none" d="M11.625 6.094a1.219 1.219 0 1 0 0 2.437 1.219 1.219 0 0 0 0-2.437Z"></path>
    </svg>About Us</h1>
  <h4>- Who are we ? -</h4>
  </center>
  <br>
  <div class="cards">




    <div class="card">
      <svg width="49" height="49" fill="#de5b00" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M12.473 2.496a1.2 1.2 0 0 0-.946 0l-8.4 3.6a1.2 1.2 0 0 0 0 2.208L6.3 9.661c.118-.133.264-.238.427-.308l4.8-2.057a1.2 1.2 0 1 1 .946 2.206L9.2 10.906l2.328.997a1.2 1.2 0 0 0 .945 0l8.4-3.6a1.2 1.2 0 0 0 0-2.206l-8.4-3.6v-.001Zm-8.501 8.78L6 12.144v4.922a10.76 10.76 0 0 0-1.26-.208 1.2 1.2 0 0 1-1.068-1.068 13.338 13.338 0 0 1 .3-4.515v.001Zm7.188 8.612a10.831 10.831 0 0 0-2.76-1.966v-4.748l2.182.936a3.6 3.6 0 0 0 2.836 0l6.61-2.834c.358 1.477.46 3.004.3 4.515a1.2 1.2 0 0 1-1.068 1.068 10.76 10.76 0 0 0-6.42 3.029 1.2 1.2 0 0 1-1.68 0ZM7.2 21.6a1.2 1.2 0 0 0 1.2-1.2v-2.478a10.72 10.72 0 0 0-2.4-.854V20.4a1.2 1.2 0 0 0 1.2 1.2Z"></path>
      </svg>
      <h1>About Skilldr</h1>
      <p style="font-weight: bold;">Welcome to Skilldr, your platform for free online courses. We offer various subjects to help you gain skills and advance your career. Join our community and start learning today!</p>
  </div>
  
    <div class="card">
      <svg width="46" height="46" fill="#de5b00" stroke="#de5b00" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M8 3H4a1 1 0 0 0-1 1v4"></path>
        <path d="M8 21H4a1 1 0 0 1-1-1v-4"></path>
        <path d="M16 21h4a1 1 0 0 0 1-1v-4"></path>
        <path d="M16 3h4a1 1 0 0 1 1 1v4"></path>
        <path d="M17 12a5 5 0 1 0-10 0 5 5 0 0 0 10 0Z"></path>
        <path fill="#ffffff" stroke="none" d="M12 13.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Z"></path>
      </svg>
      <h1>Our Mission</h1>
      <p style="font-weight: bold;">At Skilldr, our mission is to make quality education accessible to everyone. Whether you're learning new skills or enhancing existing ones, we provide the resources you need. Discover the power of learning with Skilldr.</p>
  </div>
  
    <div class="card">
      <svg width="46" height="46" fill="#de5b00" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10Zm-1-7v2h2v-2h-2Zm2-1.645A3.502 3.502 0 0 0 12 6.5a3.501 3.501 0 0 0-3.433 2.813l1.962.393A1.5 1.5 0 1 1 12 11.5a1 1 0 0 0-1 1V14h2v-.645Z"></path>
      </svg>
      <h1>Why Choose Skilldr?</h1>
      <p style="font-weight: bold;">Skilldr is dedicated to providing free, top-notch courses for your needs. With expert instructors and various topics, you can learn at your pace and achieve your goals. Experience the difference with Skilldr.</p>
 
    </div>



  </div>
  <br><br><br>
</section>

 <section id="faQs">
  <br>
  <center>
    <h1 style="color: #de5b00; text-decoration: none;"><svg width="46" height="46" fill="#de5b00" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M22.276 9.68a10.281 10.281 0 0 0-3.62-5.844A10.66 10.66 0 0 0 11.992 1.5c-2.856 0-5.523 1.1-7.517 3.098C2.548 6.531 1.492 9.083 1.5 11.783c0 1.98.581 3.915 1.671 5.567l.204.283L2.25 22.5l5.381-1.339s.108.036.188.067c.08.03.765.293 1.493.497.604.168 1.863.422 2.848.422 2.796 0 5.407-1.083 7.352-3.05a10.332 10.332 0 0 0 2.988-7.308c0-.709-.075-1.416-.224-2.108ZM7.5 13.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm4.5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm4.5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Z"></path>
    </svg>FAQS</h1>
  <h4>- Most FAQS that questioned ? -</h4>
  </center>
  <br>

<div class="fqsc">





  


  <div class="faq-container">








    
    <div class="question" onclick="toggleAnswer(this)">
        <h2 style="color: #de5b00;"><strong>What types of courses do you offer?</strong></h2>
    </div>
    <div class="answer" style="font-weight: bold;">
        <p>We offer a wide range of courses including but not limited to programming, data science, business management, creative arts, and personal development.</p>
    </div>



    
    <div class="question" onclick="toggleAnswer(this)">
        <h2 style="color: #de5b00;"><strong>Do you offer any community or networking opportunities?</strong></h2>
    </div>
    <div class="answer" style="font-weight: bold;">
        <p>Yes, we have forums and discussion groups where you can interact with fellow learners and instructors. We also host regular webinars and networking events.</p>
    </div>










    <br>
</div>

</div>




<br>
 </section>

 <footer style="background-color: #000c15; color: rgb(255, 255, 255); padding: 20px; text-align: center;">

  <h6 style="font-weight: bold;">© Skill<span style="color: #de5b00;">dr.</span> Made By <span style="color: #de5b00;">Dark Alpha</span></h6>

  <div class="icons" style="display: flex;text-align: center;justify-content: center;margin-top: 20px;">
  
  <a href="api/result.php?query=python" style="color: white;">
    <svg width="40" height="40" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="m21.407 19.753-4.41-4.41a8.148 8.148 0 0 0 1.633-4.903c0-4.516-3.674-8.19-8.19-8.19s-8.19 3.674-8.19 8.19 3.674 8.19 8.19 8.19a8.148 8.148 0 0 0 4.902-1.633l4.41 4.41a1.171 1.171 0 0 0 1.655-1.654ZM4.59 10.44a5.85 5.85 0 1 1 5.85 5.85 5.857 5.857 0 0 1-5.85-5.85Z"></path>
    </svg>
  </a>
  
  <a href="html/userdata.html" style="color: white;">
    <svg width="40" height="40" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M12 2.25c-5.376 0-9.75 4.374-9.75 9.75s4.374 9.75 9.75 9.75 9.75-4.374 9.75-9.75S17.376 2.25 12 2.25Zm.094 4.5a3.375 3.375 0 1 1 0 6.75 3.375 3.375 0 0 1 0-6.75ZM12 20.25a8.23 8.23 0 0 1-6.055-2.653C6.359 15.45 10.08 15 12 15s5.64.45 6.055 2.596A8.228 8.228 0 0 1 12 20.25Z"></path>
    </svg>
  </a>
  <a href="api/share.php" style="color: white;">
    <svg width="40" height="40" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M2.756 20.584a.75.75 0 0 1-.506-.71c0-3.426.688-6.166 2.046-8.144C5.936 9.338 8.525 8.052 12 7.891V4.125a.75.75 0 0 1 1.268-.542l8.25 7.875a.75.75 0 0 1 0 1.084l-8.25 7.875A.75.75 0 0 1 12 19.875v-3.74c-2.11.064-3.703.406-4.972 1.062-1.371.709-2.365 1.768-3.437 3.14a.75.75 0 0 1-.835.248Z"></path>
    </svg>
  </a>
  </div>
  </footer>

     
    </div>

  </div>
  
<script src="https://forms.app/static/embed.js" type="text/javascript" async defer onload="new formsapp('66b8d3b3560c6a7ae2e5b191', 'sidetab', {'button':{'text':'Rate Me!','color':'#DE5B00'},'align':{'horizontal':'right','vertical':'middle'},'width':'400px','height':'500px'});"></script>

</div>


</div>

    <script src="../bootstrap/js/all.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../WOW-master/dist/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <script>
      if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('../service-worker.js')
          .then(registration => {
            console.log('Service Worker registered with scope:', registration.scope);
          })
          .catch(error => {
            console.error('Service Worker registration failed:', error);
          });
      }
      // Add this script to the existing script block in your HTML file

let deferredPrompt;

window.addEventListener('beforeinstallprompt', event => {
  event.preventDefault();
  deferredPrompt = event;

  // Show your own install button or prompt here
  // Example: Display a button with an "Install" label
  document.getElementById('installButton').style.display = 'block';
});

// Attach an event listener to your install button
document.getElementById('installButton').addEventListener('click', () => {
  deferredPrompt.prompt();
  deferredPrompt.userChoice.then(choiceResult => {
    if (choiceResult.outcome === 'accepted') {
      console.log('User accepted the A2HS prompt');
    } else {
      console.log('User dismissed the A2HS prompt');
    }
    deferredPrompt = null;
  });
});

    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
          setTimeout(function () {
              var loaderWrapper = document.querySelector(".loader-wrapper");
              loaderWrapper.style.display = "none";

              var content = document.querySelector(".content");
              content.classList.add("fade-in");
          }, 1800);
      });</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const commentForm = document.getElementById('commentForm');
    const commentsContainer = document.getElementById('commentsContainer');

    // Function to save comments to local storage
    function saveCommentsToLocalStorage(comments) {
        localStorage.setItem('comments', JSON.stringify(comments));
    }

    // Function to retrieve comments from local storage
    function getCommentsFromLocalStorage() {
        const comments = localStorage.getItem('comments');
        return comments ? JSON.parse(comments) : [];
    }

    // Function to display comments
    function displayComments() {
        commentsContainer.innerHTML = '';
        const comments = getCommentsFromLocalStorage();
        comments.forEach(function(comment) {
            const commentElement = document.createElement('div');
            commentElement.classList.add('comment');
            commentElement.innerHTML = `<p><strong style="color:#de5b00;"><svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 9a4 4 0 1 1-8 0 4 4 0 0 1 8 0Zm-2 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" clip-rule="evenodd"></path>
                <path fill-rule="evenodd" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1ZM3 12c0 2.09.713 4.014 1.908 5.542A8.986 8.986 0 0 1 12.065 14a8.984 8.984 0 0 1 7.092 3.458A9 9 0 1 0 3 12Zm9 9a8.963 8.963 0 0 1-5.672-2.012A6.992 6.992 0 0 1 12.065 16a6.991 6.991 0 0 1 5.689 2.92A8.964 8.964 0 0 1 12 21Z" clip-rule="evenodd"></path>
            </svg> <span style="font-size: 20px;">${comment.username} :</span></strong></p><p>${comment.text}</p>`;
            commentsContainer.appendChild(commentElement);
        });
    }

    // Display existing comments on page load
    displayComments();

    // Check if a user is logged in
    const currentUser = sessionStorage.getItem('currentUser');
    if (!currentUser) {
        return;
    }

    // Event listener for comment submission
    commentForm.addEventListener('submit', function(e) {
        e.preventDefault();

        // Get input values
        const commentText = document.getElementById('commentText').value;

        // Create new comment object with the logged-in user's name
        const newComment = {
            username: currentUser, // Use the current logged-in user's username
            text: commentText
        };

        // Get existing comments from local storage
        const comments = getCommentsFromLocalStorage();

        // Add new comment to the array of comments
        comments.push(newComment);

        // Save updated comments to local storage
        saveCommentsToLocalStorage(comments);

        // Display comments again (including the new one)
        displayComments();

        // Clear the form
        commentForm.reset();
    });
});

</script>

<script>
  function toggleAnswer(element) {
      const answer = element.nextElementSibling;
      if (answer.style.display === "none" || answer.style.display === "") {
          answer.style.display = "block";
      } else {
          answer.style.display = "none";
      }
  }
</script>


  </body>
</html>

<!-- <h1>Welcome, <?php echo $_SESSION['name']; ?>!</h1>
    <p>Your username is: <?php echo $_SESSION['username']; ?></p>
    <p>Your email is: <?php echo $_SESSION['email']; ?></p> -->