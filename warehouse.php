<?php
include("auth_session.php");
include("include/header.php");
?>



            <div class="container-fluid px-4">

              <div class="row my-5">
                <div class="upper">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3 class="fs-4 mb-3">Our Warehouses</h3>
                            
                        </div>
                        <div class="col-lg-4">
                            
                            
                        </div>
                        <div class="col-lg-2 mr-3">
                         <button type="button" class="btn btn-secondary upper-button" data-bs-toggle="modal" data-bs-target="#myModal">Add New</button>
                            
                        </div>
                        
                    </div>
                    
                </div>
                    

                    <div class="col">
                        <table id="tabledata" class="table bg-white rounded shadow-sm table-striped  table-hover">
                            <caption></caption>
                            <thead>
                                <tr>
                                    <th scope="col">W_Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                require('db.php');

                                $selectquery = " select * from warehouse ";

                                $qn= mysqli_query($conn, $selectquery);
                                $nums = mysqli_num_rows($qn);

                                while($res = mysqli_fetch_array($qn)){
                                    ?>
                                        <tr>
                                            <td><?php echo($res['warehouse_id']); ?></td>
                                            <td><?php echo($res['name']); ?></td>
                                            <td><?php echo($res['address']); ?></td>
                                            <td><?php echo($res['city']); ?></td>
                                            <td>
                                        <button type="submit" class="btn btn-success editbtn">
                                            <em class="fas fa-pen"></em>
                                        </button>
                                         <button type="submit" class="btn btn-danger deletebtn" name="delete" value="delete">
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
                                <h4 class="modal-title">Add Warehouse</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                              </div>

                              <!-- Modal body -->
                              <div class="modal-body">




                                <form class="form" action="insert.php" method="POST">
                                  <div class="mb-3 mt-3">
                                    <label for="name" class="form-label">Warehouse Name:</label>
                                    <input type="text" class="form-control" id="name" placeholder="Warehouse Name" name="name">
                                  </div>
                                  <div class="mb-3 mt-3">
                                    <label for="address" class="form-label">Address:</label>
                                    <input type="text" class="form-control" id="address" placeholder="Warehouse Address" name="address">
                                  </div>
                                   <div class="mb-3 mt-3">
                                    <label for="city" class="form-label">City:</label>
                                    <input type="text" class="form-control" id="city" placeholder="Warehouse City" name="city">
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


                        <!-- The Edit Modal -->
                        <div class="modal" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Edit Warehouse</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>></button>
                              </div>
                              <form class="form" action="update.php" method="POST">

                                <input type="hidden" name="warehouse_id" id="warehouse_id">

                              <!-- Modal body -->
                              <div class="modal-body">
                                
                                  <div class="mb-3 mt-3">
                                    <label for="name" class="form-label">Warehouse Name:</label>
                                    <input type="text" class="form-control" id="wname" placeholder="Warehouse Name" name="name">
                                  </div>
                                  <div class="mb-3 mt-3">
                                    <label for="address" class="form-label">Address:</label>
                                    <input type="text" class="form-control" id="waddress" placeholder="Warehouse Address" name="address">
                                  </div>
                                   <div class="mb-3 mt-3">
                                    <label for="city" class="form-label">City:</label>
                                    <input type="text" class="form-control" id="wcity" placeholder="Warehouse City" name="city">
                                  </div>
                                  <div class="mb-3 mt-3">
                                  <button type="submit" value="submit" id="update" name="update" class="btn btn-primary savebutton">Update</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
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

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                 $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#warehouse_id').val(data[0]);
                $('#wname').val(data[1]);
                $('#waddress').val(data[2]);
                $('#wcity').val(data[3]);

            });
        });



    </script>

                            <!-- The Delete Modal -->
                        <div class="modal" id="deletemodal">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Delete Warehouse</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>></button>
                              </div>
                              <form class="form" action="delete.php" method="POST">

                                <input type="hidden" name="warehouse_id" id="warehouseid">

                              <!-- Modal body -->
                              <div class="modal-body">
                                <div class="mb-3 mt-3">
                                 <h4>Do You Want to Delete??</h4>
                             </div>
                                  <div class="mb-3 mt-3">
                                  <button type="submit" value="submit" id="delete" name="delete" class="btn btn-primary savebutton">Yes</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                            </div>

                                </form>
                              </div>

                            </div>
                          </div>
    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');
                 $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#warehouseid').val(data[0]);

              
            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('#tabledata').DataTable({
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



   



