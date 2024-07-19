<?php
  $con =mysqli_connect("localhost","root","","ayurvedha");
  $sql="select * from medicine";
  $ans=mysqli_query($con,$sql);
  $res=$con->query($sql);

  $no_of_medicine=$res->num_rows;

  $no_of_medicine_per_page=3;

  $no_of_pages=ceil($no_of_medicine/$no_of_medicine_per_page);

  $page=1;

       if(isset($_GET["page"])){
                $page=$_GET["page"];
          }

  $start_limit=($page-1)*$no_of_medicine_per_page;

  $sql="select * from medicine limit  $start_limit,$no_of_medicine_per_page";
  $res=$con->query($sql);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AYUVERSE</title>
    <link rel="stylesheet" href="css/Medicinal-herbs.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/main-logo.png">
    <style>
        
     
  
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
       
        <div class="home">
          <div class="home-logo"></div>
          <span><a href="index.html">Home</a></span>
      </div>
      <div class="Medicinal-herbs">
          <div class="Medicinal-herbs-logo"></div>
          <span><a href="Medicinal_herbs.php">Medicinal Herbs</a></span>
      </div> 
      <div class="know-your-slokas">
          <div class="know-your-slokas-logo"></div>
          <span><a href="know-your-slokas.html">Know Your Slokas</a></span>
      </div>
      <div class="diagnose-and-treat">
          <div class="diagnose-and-treat-logo"></div>
          <span><a href="diagnose-and-treat.html">Diagnose And Treat</a></span>
      </div>
      <div class="veda">
          <div class="veda-logo"></div>
          <span><a href="veda.html">Veda (Chat bot)</a></span>
      </div>
      <div class="paper-guide">
          <div class="paper-guide-logo"></div>
          <span><a href="paper-guide.html">Paper Guide</a></span>
      </div>
      
      </div>
      
      
      <span style="font-size:30px;cursor:pointer;margin-left: 10px;" onclick="openNav()">&#9776;</span>
      
      <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "270px";
      }
      
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0px";
      }
      </script>
   

        <div class="main" style="margin-left: 50px;">
            <div class="nav">
                <nav>
                    <div class="ayu-logo"></div>
                
                    <div class="heading_name">
                    
                    <a href="index.html" >AYURVERSE</a>
                    </div>
                </nav>
            </div>
               
                    <a href="Medicinal_herbs.php"><h2 class="display-10 text-center">MEDICINAL HERBS</h2></a>
                
                    <div class ="page-count1">
                                <?php
                                // echo "PAGES: ";
                                for($i=1;$i<=$no_of_pages;$i++){
                                    if($page==$i){
                                    echo "<a href='Medicinal_herbs.php?page={$i}' class='link1 active'>{$i}</a>";
                                }
                                else{
                                    echo "<a href='Medicinal_herbs.php?page={$i}' class='link1'>{$i}</a>";
                                }
                            }
                             ?>  
                          </div>      

                    <table class="table table-bordered">
                            <tr>
                                <td> S.NO</td>
                                <td> MEDICINAL NAME</td>
                                <td> ENGLISH NAME</td>
                                <td> TAMIL NAME</td>
                                <td> HINDI NAME</td>
                                <td> USE CASES</td>
                            </tr>
              
                           <?php
                           while($row=$res->fetch_assoc()){
                            ?> 
                            
                                  <tr>
                                  <td><?php echo  $row['med_id'];?></td>
                                  <td><?php echo  $row['med_name'];?></td>
                                  <td><?php echo  $row['english_name'];?></td>
                                  <td><?php echo  $row['tamil_name'];?></td>
                                  <td><?php echo  $row['hindi_name'];?></td>
                                  <td><?php echo  $row['description'];?></td>

                            </tr>
                           
                                    <?php
                                }
                                ?>

                                </table>

                           <div class ="page-count">
                                <?php
                                for($i=1;$i<=$no_of_pages;$i++){
                                    if($page==$i){
                                    echo "<a href='Medicinal_herbs.php?page={$i}' class='link active'>{$i}</a>";
                                }
                                else{
                                    echo "<a href='Medicinal_herbs.php?page={$i}' class='link'>{$i}</a>";
                                }
                            }
                             ?>  
                          </div>      
              </div>
              <!-- <footer class="footer"> -->
        <!-- <div class="container">
            <ul style="list-style-type: none;">
                <li ><a href="#">Home</a></li>
                <li ><a href="#">About</a></li>
                <li ><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
                <li style="display: inline-flex;"><a href="veda.html"><img src="images/veda.png" alt="">veda chatbot</a></li>
                <li style="display: inline-flex;"><a href="Medicinal_herbs.php"><img src="images/notes.png"> medicinal herbs</a></li>
                <li style="display: inline-flex;"><a href="paper-guide.html"><img src="images/paper-guide.png">paper-guide</a></li>
            </ul>
        </div> -->
    <!-- </footer>
    
      
      <footer class="footer1">
        
          <span class="text-muted">Ayuverse©2024</span>
        
      </footer> -->
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </html>