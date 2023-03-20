<?php
session_start();

             if(isset($_SESSION['id'])){
              $username=($_SESSION['username']);
              $userId=($_SESSION['id']);
            }
            else{
              header("Location:login.php");
            }

 $pagetitle="Home Page";
 include "includes/header.php";
     
      ?>
        <div class="templatemo-welcome" id="templatemo-welcome">
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey">Welcome to Home Page</span>
                    <p class="txt_slogan">
                </div>	
            </div>
        </div>   
        

    
