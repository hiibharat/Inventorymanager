<?php
include("auth_session.php");
include("include/header.php");
?>

            <div class="container-fluid px-4">


            <div class="row height d-flex justify-content-center align-items-center">

              <div class="col-md-12">

                <div class="card py-5">

                    <h3>Add New Products</h3>
                    <form class="form" action="insert3.php" method="POST">
                    <div class="row mt-3 g-2">

                    <div class="col-md-6">
                        <div class="inputs px-4">
                          <span class="form-label">Select Category:</span>
                              <select name="category_id" class="form-select">
                                        <option value="-1">Please Select Category</option>
                                        <?php
                                        require('db.php');
                               
                               $selectquery = " select * from product_category ";

                                $qn= mysqli_query($conn, $selectquery);
                                $nums = mysqli_num_rows($qn);

                                while($res = mysqli_fetch_array($qn)){
                                    ?>
                                     <option value="<?php echo $res['product_category_id'] ?>"><?php echo $res['product_category_name'] ?></option>
                         
                                 <?php } ?>
                                   </select>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="inputs px-4">
                          <span class="form-label">Product Name</span>
                         <input type="text" class="form-control" id="product_name" placeholder="Product Name" name="product_name">
                        </div>
                      </div>
                  </div>
                      <div class="col">
                        <div class="inputs px-4">
                          <span class="form-label">Description</span>

                         <textarea id="product_description" name="product_desc" placeholder="Product Description" rows="2"></textarea>
                        </div>
                      </div>
                       <div class="col">
                          <span class="form-label">Single Product</span> <button type="submit" class="btn btn-dark">Add Variations</button>

                      </div>
                <div class="row mt-3 g-2">

                      <div class="col-md-6">
                        <div class="inputs px-4">
                          <span class="form-label">Master SKU</span>
                         <input type="text" class="form-control" id="product_master_sku" placeholder="Product Master SKU" name="product_master_sku">
                        </div>
                      </div>
                  </div>
                     

                    <div class="mt-3 px-4 d-flex justify-content-between align-items-center">

                      <button type="submit" value="submit" name="submit" class="btn btn-primary">Create Products</button>
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