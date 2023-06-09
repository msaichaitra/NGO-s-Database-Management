<!DOCTYPE html>
<html>
<head> 
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
.w3-bar-block .w3-bar-item {padding:20px}
</style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">MANAGEMENT OF NGOs</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ngo.html">NGOs</a>
              </li>
              <li class="nav-item">
               <a class="nav-link" href="activities.html">Activities</a>
             </li>
             <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="donation.php">Donate Blood</a>
             </li>
             
             <li class="nav-item">
               <a class="nav-link" href="searchinfo.php">Info</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="faq.html">FAQ</a>
             </li>
      
            </ul>
          
          </div>
        </div>
      </nav> 
  

    <!-- The grid: three columns -->
<div class="row">
  <div class="column" onclick="openTab('b1');" style="background:rgb(145, 206, 247);">Introduction</div>
  <div class="column" onclick="openTab('b2');" style="background:rgb(231, 160, 207);">Before Donating</div>
  <div class="column" onclick="openTab('b3');" style="background:rgb(158, 153, 158);">Donation</div>
</div>

<!-- The expanding grid (hidden by default) -->
<div id="b1" class="containerTab" style="display:none;background: rgb(232, 235, 236)">
  <!-- If you want the ability to close the container, add a close button -->
  <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
 <center> <h2><br>Gratitude</h2>
  <p>We appreciate for your initiative for this noble cause and we are always here to help.
     Blood Donors are real hero as they are helping to save human life.
      Donating blood is a simple thing to do, but it can make a big difference in the lives.
       Our volunteer/staff will ask you to fill a form with brief information on contact details and medical history.
  </p>
  <div class="text-center">
    <form action="form.html" method="post"> 
        <h2> Fill the form</h2>
      <button type="submit" class="btn btn-success">Register</button>
    </form>
    <br>
</div></center>
</div>

<div id="b2" class="containerTab" style="display:none;background:rgb(241, 233, 239)">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
  <br>
  <p> The donation process from the time you arrive until the time you leave takes about 20-25 minutes. The donation itself is only about 8-10 minutes on average.<br>
    The steps in the process are :<br>
    1. Eat something substantial before your appointment.<br>
2. Have plenty of liquid the day before donation, especially in warm weather. <br>
3. In the 3 hours before donating, have at least 3 to 4 good-sized glasses of water/juice.<br>
4. Physical Health check-up i.e you will be examined by a doctor to answer some questions about your health history.
Your blood pressure and hemoglobin level will be checked.<br>
5. Blood Donation-We will cleanse an area on your arm and insert a brand new sterile needle for the blood draw.
This feels like a quick pinch and is over in seconds.<br>
</p>
</div>

<div id="b3" class="containerTab" style="display:none;background:rgb(252, 243, 248);">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
  <br>
  <p>-> The actual donation takes about 8-10 minutes, during which you will be seated comfortably.<br>
   -> When a unit of blood (350 – 450 ml) has been collected, the donation is complete.<br>
    -> A staff person will place a bandage on your arm
    Safety - All equipment is sterile; needles are used only once and then discarded. In the great majority of individuals, a donation of 450 ml is less than 10% of your total body volume and may be given safely every 3 months. Your body keeps on discarding and replenishing blood all the time whether you give blood or not, so this amount is quickly replenished.
    <br>
   -> After Donation Relax & refresh - You can have something to eat and drink in and relax for about 15-20 minutes before departing. Within 24-48 hours your blood volume is completely restored. Apart from enjoying our refreshments and souvenir, other things to help you recover quickly include:
    <br>
   -> Drink plenty of water, fruit juice etc. and avoid alcohol for 8 hours after you’ve given blood.<br>
    -> Avoid any strenuous activity or heavy lifting with the ‘donating arm’ for 24 hours after you’ve given blood.<br>
    -> If you become unwell in any way after giving blood, speak to the doctor in-charge straight away.<br>
    -> Whole blood donors can give blood again after 3 months.<br>
    <strong>Enjoy the feeling of knowing that you helped save precious lives!</strong></p>
</div>
<br>
<script>
  function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
</script>


<div class="container">
      <form action="" method="POST">
        <input type="text" name="id" class="btn btn success" placeholder="Id">
        <input type="submit" name="search" class="btn btn success" value="Search">
      </form>
      <center><br>
    <h4> Blood-Donors data </h4></center>
      <table>
        <tr>
          
          <th>name</th>
          <th>email</th>
          <th>address</th>
          <th>city</th>
          <th>pincode</th>
          <th>bloodgroup</th>
        </tr><br>


        <?php
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection, 'ngodb');

        if(isset($_POST['search']))
        {
            $id = $_POST['id'];

            $query = "SELECT * FROM forminfo  where id='$id' ";
            $query_run = mysqli_query($connection,$query) or die( mysqli_error($connection));

            while($row = mysqli_fetch_array($query_run))
            {
                ?>
                <tr>
                    
                    <td> <?php echo $row['name']; ?> </td>
                    <td> <?php echo $row['email']; ?> </td>
                    <td> <?php echo $row['address']; ?> </td>
                    <td> <?php echo $row['city']; ?> </td>
                    <td> <?php echo $row['pincode']; ?> </td>
                    <td> <?php echo $row['bloodgroup']; ?> </td>
                </tr>

                <?php
            }
        }
        ?>





      </table>
    </div>

<br>
    <footer>
      <p> Dharwad, India<br>
       Phone: +91 9390207076<br>
       Email: managemyngo21@gmail.com<br>
      Copyright &copy; NGOs Web 2020-2021 </p>
      </footer>
 
<style>
  
  
  .column {
  float: left;
  width: 33.33%;
  padding: 50px;
  text-align: center;
  font-size: 25px;
  cursor: pointer;
  color: black;
  font-family: Georgia, 'Times New Roman', Times, serif;
}

.containerTab {
  padding-left: 20px;
  padding-right: 20px;
  color: black;
  
  font-family: Georgia, 'Times New Roman', Times, serif;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Closable button inside the image */
.closebtn {
  float: right;
  color: white;
  font-size: 35px;
  cursor: pointer;
}

form{
        text-align: center;
        
    }
            
            table,th,td{
                border: 2px solid black;
                width: 1100px;
                text-align: center;
            
            }
            .btn{
                width: 10%;
                height: 5%;
                padding: 10px;
            }
  .row{
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 20px;
  }
p{
    padding: 10px;
   
    font-size: large;
    text-align:inherit;
    
  font-family: Georgia, 'Times New Roman', Times, serif;
}
h1 {
  
   padding-top: 10px;
   
  font-family: Georgia, 'Times New Roman', Times, serif;
}
footer{
  text-align: center;
  background-color:rgb(253, 246, 246);
  
}
</style>
</body>
<html>