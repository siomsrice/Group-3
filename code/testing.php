<?php
    include_once 'includes/dbh.inc.php';
    include_once 'header.php';
?>

    <h1>Profile</h1>
    <div class="index-intro">
        <?php   
            if(isset($_SESSION["useruid"])){
            $sql = "SELECT * FROM users WHERE usersName or usersUid = 'useruid';";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);

            if($resultcheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "Name: ";       echo $row['usersName'] . "<br>";
                    echo "Username: ";   echo $row['usersUid'] . "<br>";
                    echo "Email: ";      echo $row['usersEmail'] . "<br><br>";
                }
            }
        }
        
        ?>

      
    </div>

<?php
    include_once 'footer.php';
?>