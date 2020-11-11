<!DOCTYPE html>
<html>
<head>
@include('includes/traininghead')
<title>Enroll</title>
<link rel="stylesheet" type="text/css" href="css/training/contact.css">
<link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@700&display=swap" rel="stylesheet">

</head>
<body>
   

<!-----------------------NAVBAR------------------------------->
@include('includes/navtraining')
 
<!-------------------------NAVBAR END--------------------------------->
<div class="container mt-5 mb-5" id="contact-form">
<div class="row ">
<div class="col-md-12 mt-3 mb-5">
  <h4 style="text-align:center; margin-bottom:20px; font-weight:bold;">Enquiry</h4>
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputname"></label>
      <input type="email" class="form-control" id="inputname" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4"></label>
      <input type="password" class="form-control" id="inputemail" placeholder="Email">
    </div>
  </div>
  <div class="form-row">

  <div class="form-group col-md-6">   
    <label for="inputAddress"></label>
    <input type="text" class="form-control" id="input number" placeholder="Number">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2"></label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Qualification">
  </div>
</div>
<div class="form-group">
    <label for="inputAddress"></label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
</div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Course"></textarea>
  </div>

  
  <button type="submit" class="btn btn-primary">Enquiry <i class="fas fa-paper-plane"></i></button>
</form>

<!------------------------------------MAP---------------------------->
<!-- <div class="container-fluid" style="height: 300px;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.8742753767083!2d83.46012671453796!3d27.690280432849796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39968662a25d8b87%3A0xd99439204a831c46!2sHUB+IT+WORKGROUP!5e0!3m2!1sen!2snp!4v1542103565521" width="100%;" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div><br> -->
<!-----------------------------------MAP END------------------------->
<!-- <footer> -->

@include('includes.footer')

<!-- </footer>  -->


<script src="js/miss.js"></script>

</body>
</html>