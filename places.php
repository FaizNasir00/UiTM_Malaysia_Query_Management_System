<?php 
    session_start();
    include 'dbcon.php';


    $sql = "SELECT * FROM location";
    $result = mysqli_query($conn, $sql);
    $totalR = mysqli_num_rows($result);

    if(isset($_POST['delete'])){

        $id = $_POST['sid'];
    
        $sql = "DELETE FROM location WHERE location_id='$id'";

        if(mysqli_query($conn, $sql)){
            echo "<script>
                    alert('Successfully delete location!');
                    window.location.href= 'places.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Failed to delete location!');
                    window.location.href= 'places.php';
                  </script>";
        }
        mysqli_close($conn);
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

    <title>InQKA Query</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/lightbox/dist/css/lightbox.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'component/sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'component/navbar.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" id="form-table">

                    <!-- Page Heading -->
                    

                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <h1 class="h3 mb-0 text-gray-800 display-7">Location List</h1>
                                <a class="btn btn-sm btn-dark btn-add mb-0 px-4" href="new-place.php">New</a>
                            </div>
                        </div>
                        <div class="card-body" style="overflow: auto;">

                                <table class="table table-bordered" id="tableData" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Location Name</th>
                                            <th>Address</th>
                                            <th>Number of Programme</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>

                                        <?php
                                            
                                            
                                            if($totalR > 0){
                                                $count = 1;
                                                while($rows = mysqli_fetch_assoc($result)){

                                                 


                                            ?>


                                                <tr>   
                                                    <td><?php echo $count; ?>.</td>
                                                    <td><?php echo $rows['location_name']; ?></td>
                                                    <td><?php echo nl2br($rows['address']); ?></td>
                                                    <td><?php echo $rows['number_of_programme']; ?></td>
                                                    
                                                    <td>
                                                        
                                                        
                                                         <div class="d-flex align-items-center">

                                                          
                                                            <a class="btn btn-dark  btnIcon py-2-5 ml-2" href="edit-place.php?eid=<?php echo $rows['location_id'] ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fas fa-pen"></i></a>

                                                             <form method="POST" action="places.php" onsubmit="javascript:return confirm('Confirm to delete location info?')">

                                                             <input value="<?php echo $rows['location_id'] ?>" name="sid" type="hidden" />

                                                           
                                                             <button type="submit" name="delete" class="btn btn-danger btnIcon py-2-5 ml-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fas fa-trash"></i></button>
                                                            </form>

                                                           
                                                        </div>
                                                        

                                                    </td>

                                               
                                                                                    
                                                    <?php $count++; ?>
                                            
                                                </tr>

                                                


                                                <?php } ?>

                                        <?php }else{ ?>



                                        <?php } ?>
                                        
                                    
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Location Name</th>
                                            <th>Address</th>
                                            <th>Number of Programme</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                        </div>
                    </div>

                </div>       
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include 'component/footer.php' ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php include 'component/modal.php' ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/admin.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="vendor/lightbox/dist/js/lightbox.min.js"></script>
    <script type="text/javascript">
      
        $(document).ready(function() {
            
            $('#overlay').fadeIn();
            $('[data-bs-toggle="tooltip"]').tooltip();
            $('#tableData tfoot th').each(function () {
                var title = $(this).text();
                if(title == 'Action'){
                     $(this).html('-');
                }else{
                     $(this).html('<input class="form-control form-control-sm" type="text" placeholder="Search ' + title + '" />');
                }
            });
         
            // DataTable
            var table = $('#tableData').DataTable({
                initComplete: function () {
                    // Apply the search
                    this.api()
                        .columns()
                        .every(function () {
                            var that = this;
         
                            $('input', this.footer()).on('keyup change clear', function () {
                                if (that.search() !== this.value) {
                                    that.search(this.value).draw();
                                }
                            });
                        });
                },
            });
            $('a[href="places.php"]').addClass('active');
            $('a[data-target="#collapseMenu"]').parent().addClass('active');
            if(window.matchMedia('(min-width: 769px)').matches){
                $('#collapseMenu').addClass('show');
            }

            window.setTimeout(function(){

                $('#overlay').fadeOut();

            }, 500);
            
        });

      
    </script>

</body>

</html>