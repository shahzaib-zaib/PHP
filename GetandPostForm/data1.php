<?php

        if(isset($_POST['submitbtn'])){
            $name = $_POST['username'];
            $email = $_POST['useremail'];
            $category = $_POST['category'];
            $time = $_POST['timing'];
            $payment = $_POST['payment'];

            echo "<h1> $name </h1>";
            echo "<h1> $email </h1>";
            echo "<h1> $category </h1>";
            echo "<h1> $time </h1>";
            echo "<h1> $payment </h1>";

        }
    ?>