<?php
    include_once 'includes/dbh.inc.php';
    include_once 'header.php';
    require 'includes/function.inc.php';
?>

    <h1>Profile</h1>
    
    <div class="profbox">
        <?php 
           
            $UserName = $_SESSION["useruid"];
        ?>

        <br>

        <?php
             
        ?>

        

            <?php
             $sql = "DELETE FROM users WHERE usersuid='$UserName'";
             if (mysqli_query($conn, $sql)) {
                echo "Record deleted successfully";
                } else {
                echo "Error deleting record: " . mysqli_error($conn);
                }
                mysqli_close($conn);
                ?>

<?php
    include_once 'footer.php';
    ?>