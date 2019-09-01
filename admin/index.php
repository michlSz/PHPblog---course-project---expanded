<?php 

include "includes/admin_header.php"; 
?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php 

if($_SESSION['user_role'] == 'admin'){

include "includes/admin_nav.php";; 

}else{


include "includes/sub_nav.php";
}
?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Witaj 
                            <small>
                                <?php echo $_SESSION['user_role'] ?>
                                <?php echo $_SESSION['username']; ?>

                            </small>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
