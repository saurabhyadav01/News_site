<div id ="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="col-sm-3" id="">
                <span class="font-icon"><a href="https://www.facebook.com/facebook
"><i id="font-color" class="fa fa-facebook-square" aria-hidden="true"></i>&nbsp faceboook</a></br><a href="https://www.facebook.com/facebook
">www.facebbok.com</a></span>
            </div>
            <div class="col-sm-3" id="div-border">
                <span class="font-icon"><a href="https://www.facebook.com/facebook
"><i class="fa fa-twitter-square"></i>&nbsp  twitter </a></br><a href="https://www.facebook.com/facebook
">www.instagram.com</a></span>
            </div>
            <div class="col-sm-3" id="div-border">
                <span class="font-icon"><a href="https://www.twitter.com
"><i class="fa fa-facebook-square" aria-hidden="true"></i>&nbspinstagram</a></br><a href="https://www.facebook.com/facebook
">www.facebbok.com</a></span>
            </div>
            <div class="col-sm-3" id="div-border">
                <span class="font-icon"><a href="https://www.whatsapp.com
"><i class="fa fa-facebook-square" aria-hidden="true"></i>&nbsp whatsapp</a></br><a href="https://whatsapp.com
">www.whatsapp.com</a></span>
            </div>
            
          </div> 
          
             <?php
            
            include "config.php";

             $sql="select * from settings";

            $result=mysqli_query($conn,$sql) or die("Query failed");

            if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){

            ?>
             <br>   <span id="padding"><?php echo $row['footerdesc']; ?></span>
             <?php 
             }
         }
              ?>   
            </div>
        </div>
    </div>
</div>
<div class="container">
 
  <div class="spinner-border text-success"></div>
</div>

</body>
</html>
