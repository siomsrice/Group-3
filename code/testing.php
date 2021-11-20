<?php
    include_once 'includes/dbh.inc.php';
    include_once 'header.php';
    require 'includes/function.inc.php';
?>

    <h1>Profile</h1>
    <h2> TEST TEST TEST </h2>
    <br>
    <br>
    <h1> Your Profile </h1>
    <br>
    <div class="profbox">
        <?php 
            echo "<p>Username: ". $_SESSION["useruid"]  ."</p>";
            $UserName = $_SESSION["useruid"];
        ?>

        <br>

        <?php
              
               // if(isset($_SESSION['useruid'])){
                  //  $usersData = getUsersData(getId($_SESSION['useruid']));
               // }
        ?>

        

            <?php
              // $sql = "SELECT * FROM users";
             $sql = "SELECT * FROM users WHERE usersuid='$UserName'";
              
               $result = mysqli_query($conn, $sql);
               $resultcheck = mysqli_num_rows($result);

              if($resultcheck > 0)
              {
                   while($row = mysqli_fetch_assoc($result))
                   {
                        echo "Name: ";          echo $row['usersName'] . "<br>";
                        echo "Email: ";          echo $row['usersEmail'] . "<br>";
                        echo "<br>";
                   }
                
                
        ?>





    </div>


    <br>
    <br>
    <button><a href="#"> DELETE ACCOUNT </a></button>
        <?
            echo "<button><a href='delete.php'></a></button>"

        ?>


<?php
    include_once 'footer.php';}
    ?>