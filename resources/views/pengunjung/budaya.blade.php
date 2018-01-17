<!DOCTYPE html>
<!--
Template Name: Prosperous
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Kabar Berita</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="{{asset('layout/styles/layout.css')}}" type="text/css">
<script type="text/javascript" src="{{asset('layout/scripts/jquery-PseudoCSS.1.0.js')}}"></script>
<script type="text/javascript" src="{{asset('layout/scripts/jquery-easySlider1.7.js')}}"></script>
<script type="text/javascript">
$(document).ready(function () {
    $("#slider").easySlider({
        auto: true,
        continuous: true,
        numeric: true,
        speed: 1200,
        pause: 5000 // change slide interval speed here
    });
});
</script>
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="index.html">Kabar Berita</a></h1>
      <h2>infomasi berita terkini</h2>
    </div>
    <form action="#" method="post">
      <fieldset>
        <legend>Search:</legend>
        <input type="text" value="Search Our Website&hellip;" onFocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;">
        <input type="submit" id="sf_submit" value="submit">
      </fieldset>
    </form>
    <nav class="clear">
      <ul>
        <li class="active"><a href="index.html">Homepage</a></li>
        @php
                                    $kategori = App\Kategori::all();
                                    @endphp
                                    @foreach($kategori as $data)
                                    <li><a href="{{url('/berita',$data->id)}}">{{$data->name}}</a></li>
                                    @endforeach
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear"> 
    <!-- Slider -->
   
    <!-- main content -->
    <div id="homepage"> 
      <!-- Introduction -->
      <!-- / Introduction --> 
      <!-- ########################################################################################## --> 
      <!-- Services -->
      <section id="services" class="last clear">
       @foreach($budaya as $data)
        <article class="one_third">
          <figure><img src="{{asset('img/'.$data->cover)}}" width="290" height="120" alt="">
            <figcaption>
              <h4>{{$data->judul}}</h4>
              <p>{!!str_limit($data->isi_berita,100)!!}</p>
              <footer class="st--button"><a href="{{url('/selengkapnya',$data->id)}}">Read More......<i class="zmdi zmdi-long-arrow-right"></i></a></footer>
            </figcaption>
          </figure>
        </article>
        @endforeach
      </section>
      <!-- / Services --> 
    </div>
    <!-- / content body --> 
  </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
  <div id="footer" class="clear"> 
    <!-- ########################################################################################## -->
    <section class="one_quarter">
      <h2 class="title">From The Blog</h2>
      <article>
        <header>
          <h2>Post Title</h2>
          <address>
          <a href="#">Admin</a>, domainname.com
          </address>
          <time datetime="2000-04-06">Friday, 6<sup>th</sup> April 2000</time>
        </header>
        <p>Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet.</p>
        <footer class="more"><a href="#">Read More &raquo;</a></footer>
      </article>
    </section>
    <section class="one_quarter">
      <h2 class="title">Quick Links</h2>
      <nav>
        <ul>
          <li><a href="#">Lorem ipsum dolor sit</a></li>
          <li><a href="#">Amet consectetur</a></li>
          <li><a href="#">Praesent vel sem id</a></li>
          <li><a href="#">Curabitur hendrerit est</a></li>
          <li class="last"><a href="#">Sed a nulla urna</a></li>
        </ul>
      </nav>
    </section>
    <section class="two_quarter lastbox">
      <h2 class="title">About US</h2>
      <img class="imgl" src="images/demo/130x130.gif" width="130" height="130" alt="">
      <p>“Jangan pernah takut dengan perubahan. Kita mungkin akan kehilangan sesuatu yang baik, namun sebagai gantinya, sesuatu yang jauh lebih baik akan datang menjemput kita”</p>
      <footer class="more"><a href="#">Read More &raquo;</a></footer>
    </section>
    <!-- ########################################################################################## --> 
  </div>
</div>
<!-- Copyright -->
<div class="wrapper row4">
  <footer id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2018- All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </footer>
</div>
</body>
</html>