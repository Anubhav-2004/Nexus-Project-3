<html>
    <body>
    <?php
            $a=$_GET['t33'];
            $b=$_GET['t44'];
            $c=$_GET['t11'];
            $d=$_GET['t22'];
            $con=mysqli_connect('localhost','root','anubhav','feedback'); 
            $q="insert into userfeedback values('$a','$b','$c','$d')";
            $rs=mysqli_query($con,$q);
            if($rs)
            {
                Session_start();
                echo"<script>alert('Your Feedback is Submited')</script>";
            }
            else 
            {
                echo"Error";
            }
    ?>
    </body>
</html>