 <?php
        session_start();
             if (isset($_SESSION["aid"]))
              {  
                       header('Location: dycart.php');
              } 
              else if(isset($_SESSION["id"]))
              {  
                       header('Location: addcus.php');
              } 
              else
              {
                  header('Location: wlogin.php');               
              }

?>              