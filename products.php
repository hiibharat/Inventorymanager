<?php
include("auth_session.php");
include("include/header.php");
?>

            <div class="container-fluid px-4">

              <div class="row my-5">
                <div class="upper">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3 class="fs-4 mb-3">Products</h3>
                            
                        </div>
                        <div class="col-lg-4">
                            
                            
                        </div>
                        <div class="col-lg-2 mr-3">
                            <a href="add_products.php">
                           <button type="button" class="btn btn-secondary upper-button" data-bs-toggle="modal">Add New</button></a>
                            
                        </div>
                        
                    </div>
                    
                </div>
                    

                    <div class="col">
                        <table id="table3" class="table bg-white rounded shadow-sm table-striped  table-hover">
                            <caption></caption>
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Sku</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                require('db.php');

                                $sql = "SELECT * FROM products INNER JOIN product_category ON product_category.product_category_id = products.category_id";  

                                

                                $qn= mysqli_query($conn, $sql);


                                  if(mysqli_num_rows($qn) > 0) 

                          {  

                               while($res = mysqli_fetch_array($qn) )  
                               {  
                          ?>  

                                <tr>

                                      <td><?php echo($res['product_item_id']); ?></td>
                                            
                                            <td><?php echo($res['product_name']); ?></td>
                                             <td><?php echo($res['product_category_name']); ?></td>
                                            <td><?php echo($res['product_desc']); ?></td>
                                            <td><?php echo($res['product_master_sku']); ?></td>
                                    <td>
                                        
                                        <button type="submit" class="btn btn-success mr-3 editbtn3" name="view" value="view"><a href="edit_products.php?product_item_id=<?php echo $res["product_item_id"]; ?>">
                                            <em class="fas fa-pen"></em></a>
                                        </button>
                                         <button type="submit" class="btn btn-danger deletebtn3" name="delete" value="delete">
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

      <!-- The Delete Modal -->
                        <div class="modal" id="deletemodal3">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Delete Products</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>></button>
                              </div>
                              <form class="form" action="delete3.php" method="POST">

                                <input type="hidden" name="product_item_id" id="itemid">

                              <!-- Modal body -->
                              <div class="modal-body">
                                <div class="mb-3 mt-3">
                                 <h4>Do You Want to Delete??</h4>
                             </div>
                                  <div class="mb-3 mt-3">
                                  <button type="submit" value="submit" id="delete" name="delete3" class="btn btn-primary savebutton">Yes</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                            </div>

                                </form>
                              </div>

                            </div>
                          </div>
    <script>
        $(document).ready(function () {

            $('.deletebtn3').on('click', function () {

                $('#deletemodal3').modal('show');
                 $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#itemid').val(data[0]);

              
            });
        });
    </script>







        <script>
        $(document).ready(function () {

            $('#table3').DataTable({
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