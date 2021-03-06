<!DOCTYPE html>
<html>
<head>
@include('includes/solutionhead')

   <!-- Please dont edit this code-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131576038-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131576038-1');
  </script>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WT6FX7W');</script>
<!-- End Google Tag Manager -->
<!-- to this -->

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
  FB.init({
    xfbml            : true,
    version          : 'v3.2'
  });
};

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=install_email
  page_id="1872050236414372"
  theme_color="#082941">
</div>

</head>
<body>
    <!-- Dont edit this code-->
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WT6FX7W"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- to this -->



<!-----------------------NAVBAR------------------------------->
{{-- @include("includes/navsolution") --}}
@include('frontend.itSolution.common.include.nav')
 
<!-------------------------NAVBAR END--------------------------------->


<!--------------------------NON-SLIDER----------------------->
<section class="container-fluid p-0 non" style="position: relative;">

  <img src="img/train.jpg">


<!-------------------------TEXT CONTAINER-------------------->
  <section class="container-fluid" id="topper"><!--this id "topper" is the transparent box over the slider--->

    <div class="row pt-5 pb-4 rib">
    
    <div class="row">
      <div class="col-xl-12 text-center" style="color: white;">
        <h3>Solution-->Contact</h3>
      </div>
    </div>

  </section>

</section>
<!-------------------------TEXT CONTAINER END---------------->

<!------------------------DETAILS START-------------------->
<section class="container-fluid p-5" style="background-color: mediumpurple; color: white;">
  <div class="row det">

    <div class="col-xl-4">
      <div class="row">
        <div class="col-xl-4">
          <img src="img/send.png">
        </div>
        <div class="col-xl-8 pt-4">
          <h5>info@hubit.com.np</h5>
        </div>
      </div>
    </div>

    <div class="col-xl-4">
      <div class="row">
        <div class="col-xl-4">
          <img src="img/call.png">
        </div>
        <div class="col-xl-8 pt-4">
          <h5>071-549281</h5>
        </div>
      </div>
    </div>

    <div class="col-xl-4">
      <div class="row">
        <div class="col-xl-4">
          <img src="img/come.png">
        </div>
        <div class="col-xl-8 pt-4">
          <h5>Tinkune-Milanchowk, Butwal</h5>
        </div>
      </div>
    </div>

  </div>
</section>
<!------------------------DETAILS END---------------------->



<section class="jumbotron" style="background-color: white;">
  <div class="row">
<!----------------------------------FORM--------------------------->
<div class="col-xl-6">
<div class="container contact-form">
            
            <form action="php/contact_process.php" method="post">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name *" required="" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Your Email *" required="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *" required="" />
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="msg" class="form-control" placeholder="Your Message *" required="" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div><br><br>
                <div class="row">
                  
                  <div class="form-group">
                       <input type="submit" name="submit" class="btnContact" value="Send Message" />
                    </div>
                  
                </div>
            </form>
</div>
</div>
<!----------------------------------FORM END----------------------->

<div class="col-xl-6 text-center">
<div class="container pt-4" style="border: 5px solid darkslategray; height: 400px;">
  <div class="row">
    <div class="col-xl-12" style="font-size: 1.5rem;">
    Provide yourself the <br><strong>POWER</strong><br> of<br> <strong>KNOWLEDGE</strong><br> to generate the <strong>WINGS</strong><br> for your <br><strong>DREAMS .</strong><br><br><strong style="font-size: 1rem;">-Geeta Thapa</strong>
      </div>
  </div>
</div>
</div>


</div>
</section>
<!------------------------------------MAP---------------------------->
<div class="container-fluid" style="height: 300px;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.8742753767083!2d83.46012671453796!3d27.690280432849796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39968662a25d8b87%3A0xd99439204a831c46!2sHUB+IT+WORKGROUP!5e0!3m2!1sen!2snp!4v1542103565521" width="100%;" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div><br>
<!-----------------------------------MAP END------------------------->




    <!-- <footer> -->

    @include('includes.footer')

<!-- </footer>  -->


<script src="js/miss.js"></script>

</body>
</html>