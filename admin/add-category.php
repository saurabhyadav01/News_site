<?php include "header.php"; 
include 'config.php';
if (isset($_POST['save']))
{
$category_name =$_POST['cat'];
 
$sql="insert into Category(category_name) values ('$category_name');";
 
 $query =mysqli_query($conn,$sql) or die("Query Failed");
if ($query) {
  header('Location://localhost/news_project/admin/POST.php');
   
}else
{
  echo "<script>alert('Query Failed')</script>";
}
}
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add New Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat" class="form-control" placeholder="Category Name" required>
                      </div>
                      <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                  </form>
                  <!-- /Form End -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
