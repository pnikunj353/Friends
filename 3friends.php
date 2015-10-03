<html>
<body  BACKGROUND="bg1.jpg">

<form method="POST" name="frm1">
Write Your Name Here<input type="text" name="YourName" placeholder="Your Name"><br>
<input type="submit" name="sub" value="Enter">
</form>

<script type="text/javascript">
    function printGrid() {
        var gridData = document.getElementById('<%= grdResultDetails.ClientID %>');
        var windowUrl = 'about:blank';
        //set print document name for gridview
        var uniqueName = new Date();
        var windowName = 'Print_' + uniqueName.getTime();

        var prtWindow = window.open(windowUrl, windowName,
        'left=100,top=100,right=100,bottom=100,width=700,height=500');
        prtWindow.document.write('<html><head></head>');
        prtWindow.document.write('<body style="background:none !important">');
        prtWindow.document.write(gridData.outerHTML);
        prtWindow.document.write('</body></html>');
        prtWindow.document.close();
        prtWindow.focus();
        prtWindow.print();
        prtWindow.close();
    }
</script>

<?php

if(isset($_POST['sub']))
{
     ?><table border=2 cellspacing=10px cellpadding=10px>
   <tr>
         <td height=100px>Your Name:</td>
         <td>City:</td>
         <td>Ph No.:</td>
         <td>Friend Since:</td>
         <td>Email Id:</td>
   </tr>

<?php
   $connect= mysqli_connect('localhost', 'root', '','test');			

			$nm = $_POST['YourName'];
      if($nm=="parth")
      {

             $query = mysqli_query($connect ,'SELECT * FROM parth');
           
                while($rows=mysqli_fetch_array($query))
                {
                  ?>
                  <embed src="parth2.mp3" autostart="true" loop="true" width="2" height="0">
                  </embed>
                  <h1 align:center>Hello Mota,How Are You.!</h1><div id="sidebar" style="float:left;width:150px;height:300px;"><image src="p1.jpg" id="pimage" width="150" height="170"><br> <?php
                  include("Parth.html");
                  echo "<tr><td>".$rows[0]."</td>";
                  echo "<td>".$rows[1]."</td>";
                  echo "<td>".$rows[2]."</td>";
                  echo "<td>".$rows[3]."</td>";
                  echo "<td>".$rows[4]."</td></tr>";

                  ?><script>alert("Parth Your Data is Here")</script> <script src="ss.js"></script>
                  <?php
                }   
                }  
                elseif($nm=="mufaddal")
      {
             $query = mysqli_query($connect ,'SELECT * FROM mufaddal');
           
                while($rows=mysqli_fetch_array($query))
                {
                  ?>
                    <embed src="mufaddal2.mp3" autostart="true" loop="true" width="2" height="0">
                    </embed>
                  <h1 align:center>Hello Muffu,How Are You.!</h1><div id="sidebar" style="float:left;width:150px;height:300px;"><image src="m1.jpg" id="mimage" width="150" height="170"><br> <?php
                  include("Mufti.html");
                  echo "<tr><td>".$rows[0]."</td>";
                  echo "<td>".$rows[1]."</td>";
                  echo "<td>".$rows[2]."</td>";
                  echo "<td>".$rows[3]."</td>";
                  echo "<td>".$rows[4]."</td></tr>";
                ?><script>alert("Mufaddal Your Data is Here")</script> <script src="ss1.js">
</script><?php
                }   
                } 
                elseif($nm=="tejan")
      {
             $query = mysqli_query($connect ,'SELECT * FROM tejan');
           
                while($rows=mysqli_fetch_array($query))
                {
                  ?>
                  <embed src="tejan2.mp3" autostart="true" loop="true" width="2" height="0">
                  </embed>
                  <h1 align:center>Hello Teja,How Are You.!</h1><div id="sidebar" style="float:left;width:150px;height:300px;"><image src="t1.jpg" id="timage" width="150" height="170"><br> <?php
                  include("Tejo.html");
                  echo "<tr><td>".$rows[0]."</td>";
                  echo "<td>".$rows[1]."</td>";
                  echo "<td>".$rows[2]."</td>";
                  echo "<td>".$rows[3]."</td>";
                  echo "<td>".$rows[4]."</td></tr>";
                 ?><script>alert("Tejan Your Data is Here")</script></script> <script src="ss2.js">
</script><?php
                }   
                } 
                

       elseif($nm=="khodat")
      {
             $query = mysqli_query($connect ,'SELECT * FROM khodat');
           
                while($rows=mysqli_fetch_array($query))
                {
                  ?>
                  <embed src="khodat2.mp3" autostart="true" loop="true" width="2" height="0">
                  </embed>
                  <h1 align:center>Hello Khodu,How Are You.!</h1><div id="sidebar" style="float:left;width:150px;height:300px;"><image src="kh1.jpg" id="khimage" width="150" height="170"><br> <?php
                  include("Khodu.html");
                  echo "<tr><td>".$rows[0]."</td>";
                  echo "<td>".$rows[1]."</td>";
                  echo "<td>".$rows[2]."</td>";
                  echo "<td>".$rows[3]."</td>";
                  echo "<td>".$rows[4]."</td></tr>";
                ?><script>alert("Khodat Your Data is Here")</script> <script src="ss3.js">
</script><?php
                }   
                } 

          elseif($nm=="karan")
      {
             $query = mysqli_query($connect ,'SELECT * FROM karan');
           
                while($rows=mysqli_fetch_array($query))
                {
                  ?>
                  <embed src="karan2.mp3" autostart="true" loop="true" width="2" height="0">
                  </embed>
                  <h1 align:center>Hello Chanu,How Are You.!</h1><div id="sidebar" style="float:left;width:150px;height:300px;"><image src="ka1.jpg" id="kaimage" width="150" height="170"><br> <?php
                  include("Chanu.html");
                  echo "<tr><td>".$rows[0]."</td>";
                  echo "<td>".$rows[1]."</td>";
                  echo "<td>".$rows[2]."</td>";
                  echo "<td>".$rows[3]."</td>";
                  echo "<td>".$rows[4]."</td></tr>";
                ?><script>alert("Karan Your Data is Here")</script> <script src="ss4.js">
</script><?php
                }   
                } 
    else{
                  mysql_errno();
                }
                }    


    ?>  
</body>
</html>