<?php
include("auth_session.php");
include("include/header.php");
?>


            <div class="container-fluid px-4">

              <div class="row my-5">
                <div class="upper">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3 class="fs-4 mb-3">Variation Type</h3>
                            
                        </div>
                        <div class="col-lg-4">
                            
                            
                        </div>
                        <div class="col-lg-2 mr-3">
                           <button type="button" class="btn btn-secondary upper-button" data-bs-toggle="modal" data-bs-target="#myModal">Add New</button>
                            
                        </div>
                        
                    </div>
                    
                </div>
                    

                    <div class="col">
                        <table id="table2" class="table bg-white rounded shadow-sm table-striped  table-hover">
                            <caption></caption>
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php
                                require('db.php');

                                $sql = "SELECT * FROM variation_type INNER JOIN product_category ON product_category.product_category_id = variation_type.category_id";  

                                

                                $qn= mysqli_query($conn, $sql);


                                  if(mysqli_num_rows($qn) > 0) 

                          {  

                               while($res = mysqli_fetch_array($qn) )  
                               {  
                          ?>  

                                        <tr>
                                            <td><?php echo($res['variation_type_id']); ?></td>
                                            
                                            <td><?php echo($res['variation_type_name']); ?></td>
                                            <td><?php echo($res['product_category_name']); ?></td>
                                            
                                            <td>
                                        <button type="submit" class="btn btn-success mr-3 editbtn2" name="view" value="view">
                                            <em class="fas fa-pen"></em>
                                        </button>
                                         <button type="submit" class="btn btn-danger deletebtn2" name="delete" value="delete">
                                            <em class="fas fa-trash-alt"></em>
                                        </button>
                                    </td>
                                </tr>

                                <?php
                                }
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
                                <h4 class="modal-title">Add Variation Type</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                              </div>

                              <!-- Modal body -->
                              <div class="modal-body">
                               <form class="form" action="insert2.php" method="POST">
                          <div class="mb-3 mt-3">
                            <label for="variation_type_name" class="form-label">Variation Type Name:</label>
                            <input type="text" class="form-control" id="variation_type_name" placeholder="Variation Type Name" name="variation_type_name">
                          </div>
                          <div class="mb-3 mt-3">
                               <label for="category" class="form-label">Select Category:</label>



                                    <select name="category_id" class="form-select">
                                        <option value="-1">Please Select Category</option>
                                        <?php
                               
                               $selectquery = " select * from product_category ";

                                $qn= mysqli_query($conn, $selectquery);
                                $nums = mysqli_num_rows($qn);

                                while($res = mysqli_fetch_array($qn)){
                                    ?>
                                     <option value="<?php echo $res['product_category_id'] ?>"><?php echo $res['product_category_name'] ?></option>
                         
                                 <?php } ?>
                                   </select>
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
                         <div class="modal" id="editmodal2" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Add Variation Type</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                              </div>
                        <form class="form" action="update2.php" method="POST">

                             <input type="hidden" name="variation_type_id" id="vid">
                              <!-- Modal body -->
                              <div class="modal-body">
                               
                          <div class="mb-3 mt-3">
                            <label for="variation_type_name" class="form-label">Variation Type Name:</label>
                            <input type="text" class="form-control" id="vname" placeholder="Variation Type Name" name="variation_type_name">
                          </div>
                          <div class="mb-3 mt-3">
                               <label for="category"  class="form-label">Select Category:</label>



                                    <select id="cid" name="category_id" class="form-select">

                                        <option  value="-1">Please Select Category</option>

                                        <option id="selectedval" selected></option>


                                        <?php
                               
                               $selectquery = " select * from product_category ";


                                $qn= mysqli_query($conn, $selectquery);
                                $nums = mysqli_num_rows($qn);

                                while($res = mysqli_fetch_array($qn)){
                                    ?>
                                     <option value="<?php echo $res['product_category_id'] ?>"><?php echo $res['product_category_name'] ?></option>
                         
                                 <?php } ?>
                                   </select>
                          </div>
                             <div class="mb-3 mt-3">
                                  <button type="submit" value="submit" id="update2" name="update2" class="btn btn-primary savebutton">Update</button>
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

            $('.editbtn2').on('click', function () {

                $('#editmodal2').modal('show');

                 $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#vid').val(data[0]);
                $('#vname').val(data[1]);
                $('#selectedval').val(data[2]);
                 $('#selectedval').text(data[2]);

            });
        });



    </script>





     <!-- The Delete Modal -->
                        <div class="modal" id="deletemodal2">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Delete Variation Type</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>></button>
                              </div>
                              <form class="form" action="delete2.php" method="POST">

                                <input type="hidden" name="variation_type_id" id="vtypeid">

                              <!-- Modal body -->
                              <div class="modal-body">
                                <div class="mb-3 mt-3">
                                 <h4>Do You Want to Delete??</h4>
                             </div>
                                  <div class="mb-3 mt-3">
                                  <button type="submit" value="submit" id="delete" name="delete2" class="btn btn-primary savebutton">Yes</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                            </div>

                                </form>
                              </div>

                            </div>
                          </div>
    <script>
        $(document).ready(function () {

            $('.deletebtn2').on('click', function () {

                $('#deletemodal2').modal('show');
                 $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#vtypeid').val(data[0]);

              
            });
        });
    </script>




      <script>
        $(document).ready(function () {

            $('#table2').DataTable({
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