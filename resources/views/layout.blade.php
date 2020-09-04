

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>Adam Wathan</title>

    <!-- Scripts -->
 

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      body{
        background:white;
       
      }
      .header-name a{
        color:#22292f;
        font-family: Verdana;
        font-weight:bolder;
        font-size:30px;
        
      
      }
      .header-name a:hover{
          text-decoration:none;
      }
      .navbar-expand-lg .navbar-nav .nav-link {
        padding-left:0;
        padding-right:1.3rem;
        
        
      }
      .navbar{
        padding:0;
      }
      .nav-link{
        font-family:Helvetica;
        color: 	#E0E0E0;
        padding-top:0px;
        padding-bottom:10px;
        font-size:12px;
        font-weight:bold;
       
      }
      .body-content{
        font-size:17px;
        color:#3d4852;
      }
      .body-content a{
        color:black;
        font-weight:bold;
        font-family: Verdana;
        text-decoration:underline;
      }
      .allpages-body{
        padding:0px;
      }
      .allpages-body a{

      }
      .allpages-body a:hover{

      }
      
    </style>
</head>

<body>
<div class="container-fluid">
  <div class="row mt-5">
    <div class="col-lg-2 col-md-2 mt-3">
    <a href="/"><img src="\image\4323180.jpg" class="rounded-circle float-center offset-5 mt-3" width="80" height="80"></a>
    
    </div>
    <div class="col-lg-10 col-md-10 ">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <p class="header-name mt-4"><a href="/">Adam Wathan</a></p>
          <nav class="navbar navbar-expand-lg navbar-light  ">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link" href="/articles">ARTICLES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/talks">TALKS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/screencast">SCREENCASTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/podcast">PODCAST</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/courses">COURSES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/projects">PROJECTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/journal">JOURNAL</a>
              </li>
            </ul> 
          </nav>
        </div>
      </div>
      @yield('uselink-content')
      @yield('welcome-content')
      @yield('article-content')
      @yield('talks-content')
      @yield('screencast-content')
      @yield('podcast-content')
      @yield('course-content')
      @yield('project-content')
      @yield('journal-content')
      
    </div>
  </div>
</div>

</body>
</html>