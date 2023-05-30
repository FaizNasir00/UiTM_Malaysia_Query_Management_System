<?php 

    session_start();
    include 'dbcon.php';
    
    // Redirect user to login page if not logged in
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
        header("Location: ./login.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="/img/icon.png">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>New Query</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style type="text/css">
       input[type='file']::file-selector-button {
          font-size: 12px;
          transform: translateY(-1px);
       }
    </style>

</head>

<body id="page-top">

    <div id="wrapper">

        <?php include 'component/sidebar-user.php' ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <?php include 'component/navbar.php' ?>

                <div class="container-fluid">

                    <div class="row">

                        <!-- User Card -->
                        <div class="col-12 col-md-10 mb-4">
                            <div class="card shadow h-100 pb-2">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h6 class="text-uppercase mb-0">Search Query</h6>
                                </div>
                                <div class="card-body">
                                  <?php if(isset($_SESSION['msg']) && !empty($_SESSION['msg']) ){ ?>

                                      <div class="alert alert-<?php echo $_SESSION['msg_status'] ?> alert-dismissible fade show" role="alert">
                                        <strong><?php echo $_SESSION['msg'] ?></strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>

                                <?php $_SESSION['msg'] = ''; $_SESSION['msg_status'] = ''; } ?>
                                    <form action="view-query.php" enctype="multipart/form-data" method="post">
                                        <div class="row">
                                            <div>
                                                <div class="form-group">
                                                    <label for="name">E-mail*</label>
                                                    <input type="text" class="form-control" id="email" placeholder="E-mail" name="email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-3">
                                            <button type="submit" name="search-query" class="btn btn-dark">Search Query</button>
                                        </div>
                                    </form>

                                    

                                </div>
                            </div>
                        </div>


                    </div>

                </div>


            </div>

            <?php include 'component/footer.php'; ?>

        </div>

    </div>

    <?php include 'component/modal.php'; ?>
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/admin.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $('[data-bs-toggle="tooltip"]').tooltip();
            $('a[href="new-query.php"]').addClass('active');
            $('a[data-target="#collapseMenu"]').parent().addClass('active');
            if(window.matchMedia('(min-width: 769px)').matches){
                $('#collapseMenu').addClass('show');
            }
            
        });
    </script>
  
</body>

</html>