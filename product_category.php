<?php
include("auth_session.php");
include("include/header.php");
?>

            <div class="container-fluid px-4">

              <div class="row my-5">
                <div class="upper">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3 class="fs-4 mb-3">Product Category</h3>
                            
                        </div>
                        <div class="col-lg-4">
                            
                            
                        </div>
                        <div class="col-lg-2 mr-3">
                            <button type="button" class="btn btn-secondary upper-button" data-bs-toggle="modal" data-bs-target="#myModal">Add New</button>
                            
                        </div>
                        
                    </div>
                    
                </div>
                    

                    <div class="col">
                        <table id="table1" class="table bg-white rounded shadow-sm table-striped  table-hover">
                            <caption></caption>
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                   <?php
                                require('db.php');

                                $selectque = " select * from product_category ";

                                $q= mysqli_query($conn, $selectque);
                                $nums = mysqli_num_rows($q);

                                while($res = mysqli_fetch_array($q)){
                                    ?>
                                        <tr>
                                            <td><?php echo($res['product_category_id']); ?></td>
                                            <td><?php echo($res['product_category_name']); ?></td>
                                            <td>
                                        <button type="submit" class="btn btn-success mr-3 editbtn1">
                                            <em class="fas fa-pen"></em>
                                        </button>
                                         <button type="submit" class="btn btn-danger deletebtn1" name="delete" value="delete">
                                            <em class="fas fa-trash-alt"></em>
                                        </button>
                                    </td>
                                </tr>

                                <?php
                                }

                                 ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>


                <!-- The Modal -->
                        <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Add Product Category</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                              </div>

                              <!-- Modal body -->
                              <div class="modal-body">
                               <form class="form" action="insert1.php" method="POST">
                          <div class="mb-3 mt-3">
                            <label for="product_category_name" class="form-label">Product Category Name:</label>
                            <input type="text" class="form-control" id="product_category_name" placeholder="Product Category Name" name="product_category_name">
                          </div>
                              <div class="mb-3 mt-3">
                                  <button type="submit" value="submit" name="save" class="btn btn-primary savebutton">Save</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            </div>

                        </form>
                              </div>

                            </div>
                          </div>
                        </div>


                         <!-- The edit Modal -->
                        <div class="modal" id="editmodal1" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Edit Product Category</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                              </div>
                                <form class="form" action="update1.php" method="POST">

                                <input type="hidden" name="product_category_id" id="pid">

                              <!-- Modal body -->
                              <div class="modal-body">
                          <div class="mb-3 mt-3">
                            <label for="product_category_name" class="form-label">Product Category Name:</label>
                            <input type="text" class="form-control" id="pname" placeholder="Product Category Name" name="product_category_name">
                          </div>
                                  <div class="mb-3 mt-3">
                                  <button type="submit" value="submit" id="update1" name="update1" class="btn btn-primary savebutton">Update</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            </div>

                        </form>
                              </div>

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
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>

      <script>
        $(document).ready(function () {

            $('.editbtn1').on('click', function () {

                $('#editmodal1').modal('show');

                 $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#pid').val(data[0]);
                $('#pname').val(data[1]);

            });
        });



    </script>


    <!-- The Delete Modal -->
                        <div class="modal" id="deletemodal1">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Delete Product Category</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>></button>
                              </div>
                              <form class="form" action="delete1.php" method="POST">

                                <input type="hidden" name="product_category_id" id="productcategoryid">

                              <!-- Modal body -->
                              <div class="modal-body">
                                <div class="mb-3 mt-3">
                                 <h4>Do You Want to Delete??</h4>
                             </div>
                                  <div class="mb-3 mt-3">
                                  <button type="submit" value="submit" id="delete" name="delete1" class="btn btn-primary savebutton">Yes</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                            </div>

                                </form>
                              </div>

                            </div>
                          </div>
    <script>
        $(document).ready(function () {

            $('.deletebtn1').on('click', function () {

                $('#deletemodal1').modal('show');
                 $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#productcategoryid').val(data[0]);

              
            });
        });
    </script>



    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
        <script>
        $(document).ready(function () {

            $('#table1').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search",
                }
            });

        });
    </script>
</body>
</html>

