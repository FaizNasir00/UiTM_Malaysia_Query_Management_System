<?php 

    session_start();
    include 'dbcon.php';

    if( isset($_GET["eid"]) ){
        $edtid = $_GET['eid'];
        $sqlE = "SELECT *  FROM query WHERE id = '$edtid'";
        $resultE = mysqli_query($conn, $sqlE);
        $rowE = mysqli_fetch_assoc($resultE);

        $sqlK = "SELECT *  FROM location";
        $resultK = mysqli_query($conn, $sqlK);
        $totalK = mysqli_num_rows($resultK);
        
    }else{
        echo "<script>alert('Select one system.');</script>";
        echo "<script>window.location.href='system.php';</script>";
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
    <title>Edit Query</title>
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

        <?php include 'component/sidebar.php' ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <?php include 'component/navbar.php' ?>

                <div class="container-fluid">

                    <div class="row">

                        <!-- User Card -->
                        <div class="col-12 col-md-10 mb-4">
                            <div class="card shadow h-100 pb-2">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h6 class="text-uppercase mb-0">Manage Response</h6>
                                    <a class="btn btn-sm btn-dark btn-add mb-0 px-4" href="query.php">Back</a>
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
                                  <form action="functions.php" enctype="multipart/form-data" method="post">
                                         
                                        <div class="row">

                                            <input type="hidden" name="idE" value="<?php echo $rowE['id']; ?>" />
                                            <div class="col-12">
                                                <p><b>Soalan:</b> <br> <?php echo $rowE['question']; ?></p>
                                            </div>
                                            <div class="col-12">
                                                <label>Response</label>
                                                <textarea name="responsE" rows="8" class="form-control"><?php echo $rowE['respond']; ?></textarea>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group mt-3">
                                                    <label>Status</label>
                                                    <select name="statusE" class="form-control">

                                                        <option value="ongoing" <?php echo ($rowE['status'] == 'ongoing') ? 'selected' : '' ?>>Masih Berlangsung</option>
                                                        <option value="completed" <?php echo ($rowE['status'] == 'completed') ? 'selected' : '' ?>>Selesai</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="text-center mt-3">
                                            <button type="submit" name="save-respone" class="btn  btn-dark">Save</button>
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

            // $('a[data-target="#collapseMenu"]').parent().addClass('active');
            // if(window.matchMedia('(min-width: 769px)').matches){
            //     $('#collapseMenu').addClass('show');
            // }
            
        });
    </script>
  
</body>

</html>