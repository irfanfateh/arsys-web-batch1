<?php include('./inlcudes/header.php');
    session_start();
    if(!isset($_SESSION['id'])){
        header('Location: ./index.php');
        exit;
    }
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 py-5">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>Sr#</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Designation</td>
                        <td>Salary</td>
                    </tr>
                </thead>
                <tbody>
                    <?php include('./inlcudes/data.php');
                    foreach ($employee as $key => $em) { ?>
                        <tr>
                            <td><?php echo $key+1;?></td>
                            <td><?php echo $em['name'];?></td>
                            <td><?php echo $em['email'];?></td>
                            <td><?php echo $em['designation'];?></td>
                            <td><?php echo $em['salary'];?></td>
                        </tr>
                    <?php }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('./inlcudes/footer.php') ?>