  

<?php 
 
 
 include 'config.php';
 
 if (isset($_POST['save'])) 
 
 {
   $name =$_POST['name'];
   $email=$_POST['email'];
   $phone =$_POST['phone'];
   $msg=$_POST['msg'];
 
 $reg="insert into user_comment(name,email,phone,msg) values ('$name','$email','$phone','$msg')";
 $query =mysqli_query($conn,$reg);
 if ($query)
  {  echo "<script>alert('I Will help you');</script>";     
 }
 else
 {
   echo "<script>alert('Your masssege is not submit!! please try latter')</script>";
 
 }
 
 
 }
 
 ?>
 <!-- Contact Section -->
     <section id="contact">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 text-center">
                     <h2 class="section-heading">Cantact Us</h2>
                     <h3 class="section-subheading">For Any Query</h3>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-12">
                     <form  action="<?php $_SERVER['PHP_SELF']?>" method ="POST">
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Your Name *" name="name" id="name" required data-validation-required-message="Please enter your email address.">
                                     <p class="help-block text-danger"></p>
                                 </div>
                                 <div class="form-group">
                                     <input type="email" class="form-control" placeholder="Your Email *" name="email" id="email" required data-validation-required-message="Please enter your email address.">
                                     <p class="help-block text-danger"></p>
                                 </div>
                                 <div class="form-group">
                                     <input type="tel" class="form-control" placeholder="Your Phone *" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
                                     <p class="help-block text-danger"></p>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <textarea class="form-control" placeholder="Your Message *" name="msg" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                     <p class="help-block text-danger"></p>
                                 </div>
                             </div>
                             <div class="clearfix"></div>
                             <div class="col-lg-12 text-center">
                                 <div id="success"></div>
                                 <button type="submit" class="btn btn-xl" name="save">Send Message</button>
 
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </section>
     <?php include 'gap.php  '?>