<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard - Inventory Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">


<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>





    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><a href="index.php"><em
                    class="fas fa-shopping-cart me-2"></em>Inventory</a></div>
            <div class="list-group list-group-flush my-3">
                <a href="index.php" class="list-group-item list-group-item-action bg-transparent second-text active"><em
                        class="fas fa-home me-2"></em>Dashboard</a>

                <a href="warehouse.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><em
                        class="fas fa-warehouse me-2"></em>Warehouse</a>
                <a href="product_category.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><em
                        class="fas fa-shopping-cart me-2"></em>Product Category</a>        
                
                <a href="variation_type.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><em
                        class="fas fa-fist-raised me-2"></em>Variation Type</a>
                <a href="products.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><em
                        class="fas fa-gift me-2"></em>Products</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <em class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></em>
                    <h2 class="fs-2 m-0">Warehouse</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <em class="fas fa-user me-2"></em>Bharat Kumar
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>