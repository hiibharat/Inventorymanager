<?php
include("auth_session.php");
include("include/header.php");
include("db.php");


    if(isset($_POST['update3']))
    {   
       $product_item_id = $_GET['product_item_id'];
      $product_name = $_POST['product_name'];
    $category_id =  $_POST['category_id'];
    $product_desc=  $_POST['product_desc'];
     $product_master_sku=  $_POST['product_master_sku'];
        
        

        $query = "UPDATE products SET product_name ='$product_name', category_id='$category_id', product_desc ='$product_desc', product_master_sku='$product_master_sku' WHERE product_item_id='$product_item_id'";
        $query_run = mysqli_query($conn,$query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:products.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>




            <div class="container-fluid px-4">


            <div class="row height d-flex justify-content-center align-items-center">

              <div class="col-md-12">

                <div class="card py-5">

                    <h3>Edit Products</h3>







                    <form class="form" action="" method="POST">
                      <input type="hidden" name="product_item_id" id="pid">
                      <?php
                      $result = mysqli_query($conn,"SELECT * FROM products WHERE product_item_id='" . $_GET['product_item_id'] . "'");
                    $row= mysqli_fetch_array($result);
                    ?> 
                      <input type="hidden" name="product_item_id" id="pid">
                    <div class="row mt-3 g-2">

                    <div class="col-md-6">
                        <div class="inputs px-4">
                          <span class="form-label">Select Category:</span>
                              <select id="pid" name="category_id" class="form-select">
                                          <option  value="-1">Please Select Category</option>

                                        <option id="selectedval" selected></option>
                                       

                                <?php

                                $id =$_GET['product_item_id']; 
                               
                               $set = " select * from product_category WHERE product_category_id= $id";

                               $selectquery = " select * from product_category";

                               // print_r($selectquery); die;


                                $qn= mysqli_query($conn, $selectquery);
                                $nums = mysqli_num_rows($qn);

                                while($res = mysqli_fetch_array($qn)){
                                  $q = $res['product_category_id'];

                                    ?>
                                     <option <?php if($id===$q){echo 'selected';} ?> value="<?php echo $res['product_category_id'] ?>"><?php echo $res['product_category_name'] ?></option>
                         
                                 <?php } ?>
                                   </select>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="inputs px-4">
                          <span class="form-label">Product Name</span>
                         <input type="text" class="form-control" id="pname" placeholder="Product Name" name="product_name" value="<?php echo($row['product_name']); ?>" >
                        </div>
                      </div>
                  </div>
                      <div class="col">
                        <div class="inputs px-4">
                          <span class="form-label">Description</span>

                         <textarea id="pdesc" name="product_desc" placeholder="Product Description" rows="2">
                           <?php echo($row['product_desc']); ?>
                          
                         </textarea>
                        </div>
                      </div>
                       <div class="col">
                          <span class="form-label">Single Product</span> <button type="submit" class="btn btn-dark">Add Variations</button>

                      </div>
                <div class="row mt-3 g-2">

                      <div class="col-md-6">
                        <div class="inputs px-4">
                          <span class="form-label">Master SKU</span>
                         <input type="text" class="form-control" id="psku" placeholder="Product Master SKU" name="product_master_sku" value="<?php echo($row['product_master_sku']); ?>"  >
                        </div>
                      </div>
                  </div>
                     

                    <div class="mt-3 px-4 d-flex justify-content-between align-items-center">

                      <button type="submit" value="submit" name="update3" id="update3" class="btn btn-primary">Update Products</button>
                      <button type="button" class="btn btn-danger"><a href="products.php"> Cancel</a></button>                      
                    </div>

                  </form>

                 
                  
                </div>
                
              </div>
              
            </div>
             
            </div>







</div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>


</body>
</html>