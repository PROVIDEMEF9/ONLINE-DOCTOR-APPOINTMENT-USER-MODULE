<?php
if(isset($_POST['sign_in'])){
        include 'conection_share1.php';
        array_pop($_POST);
        echo "<pre>";
        array_splice($_POST,3,1);
        print_r($_POST);
        echo "</pre>";
        session_start();
            
           
        $obj3=new Database();
        if(! $obj3->used_mail('user_db',$_POST['email'])){
            $obj3->insert('user_db',$_POST);
            // session_start();
            $_SESSION['username']=$_POST['username'];
            $_SESSION['full_name']=$_POST['name'];
            include 'send.php';
            // header('Location: http://localhost/php_for_work/full_website_by_suvo/'.'full_website - Copy.php');
            // here we redirect in our website(main/full)
        }else{
            echo '<script>
            alert("this mail already exists.")
            </script>';
            header('Location: http://localhost/backend/full_website_by_suvo/'.'full_website - Copy.php?x=1');
            // here we redirect in our website(main/full) with error massage.
            echo '
             <script>
             $(document).ready(function(){

                $("#sign_up").modal("show");
            });

             </script>
            
            ';
        }
        
    }
    
    
?>