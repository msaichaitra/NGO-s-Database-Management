
   <!DOCTYPE html>
   <html>
   <head> 
       <title></title>
       <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   </head>
   <style>
    .w3-bar-block .w3-bar-item {padding:20px}
    </style>
   <body>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
           <div class="container-fluid">
             <a class="navbar-brand" href="index.html">MANAGEMENT OF NGOs</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto mb- mb-lg-0">
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
                  <a class="nav-link" href="donation.html">Donate Blood</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="searchinfo.php">Info</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="faq.html">FAQ</a>
                </li>
         
               </ul>
             </div>
           </div>
         </nav>
<html>
    <head>
       
</head>
<body>
    <div class="container">
      <form action="" method="POST">
        <input type="text" name="id" class="btn btn success" placeholder="Id">
        <input type="submit" name="search" class="btn btn success" value="Search">
      </form>
      <center>
    <h4> Managers data </h4></center>
      <table>
        <tr>
          <th>manager_id</th>
          <th>name</th>
          <th>contact</th>
          <th>mail</th>
        </tr><br>


        <?php
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection, 'ngodb');

        if(isset($_POST['search']))
        {
            $id = $_POST['id'];

            $query = "SELECT * FROM manager where id='$id' ";
            $query_run = mysqli_query($connection,$query) or die( mysqli_error($connection));

            while($row = mysqli_fetch_array($query_run))
            {
                ?>
                <tr>
                    <td> <?php echo $row['manager_id']; ?> </td>
                    <td> <?php echo $row['name']; ?> </td>
                    <td> <?php echo $row['contact']; ?> </td>
                    <td> <?php echo $row['mail']; ?> </td>
                </tr>

                <?php
            }
        }
        ?>





      </table>
    </div>

<br>
    <center>
    <h4> Volunteers data </h4></center>
    <div class="container">
     
      <table>
        <tr>
          <th>vol_id</th>
          <th>vol_head_name</th>
          <th>contact</th>
          
        </tr><br>


        <?php
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection, 'ngodb');

        if(isset($_POST['search']))
        {
            $id = $_POST['id'];

            $query = "SELECT * FROM volunteerhead where id='$id' ";
            $query_run = mysqli_query($connection,$query) or die( mysqli_error($connection));

            while($row = mysqli_fetch_array($query_run))
            {
                ?>
                <tr>
                    <td> <?php echo $row['vol_id']; ?> </td>
                    <td> <?php echo $row['vol_head_name']; ?> </td>
                    <td> <?php echo $row['contact']; ?> </td>
                    
                </tr>

                <?php
            }
        }
        ?>

      </table>
    </div>

    <br>
    <center>
    <h4> NGO data </h4></center>
    <div class="container">
     
      <table>
        <tr>
         
          <th>name</th>
          <th>foundation</th>
          <th>cause</th>
          <th>headquarter</th>
          
        </tr><br>


        <?php
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection, 'ngodb');

        if(isset($_POST['search']))
        {
            $id = $_POST['id'];

            $query = "SELECT * FROM ngoinfo where id='$id' ";
            $query_run = mysqli_query($connection,$query) or die( mysqli_error($connection));

            while($row = mysqli_fetch_array($query_run))
            {
                ?>
                <tr>
                    
                    <td> <?php echo $row['name']; ?> </td>
                    <td> <?php echo $row['foundation']; ?> </td>
                    <td> <?php echo $row['cause']; ?> </td>
                    <td> <?php echo $row['headquarter']; ?> </td>
                    
                </tr>

                <?php
            }
        }
        ?>





      </table>
    </div>

    
    <br>
    <center>
    <h4> Program data </h4></center>
    <div class="container">
     
      <table>
        <tr>
         
          <th>activity_id</th>
          <th>program_name</th>
          <th>vol_head_name</th>
          <th>budget</th>
          
        </tr><br>


        <?php
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection, 'ngodb');

        if(isset($_POST['search']))
        {
            $id = $_POST['id'];

            $query = "SELECT * FROM activity where id='$id' ";
            $query_run = mysqli_query($connection,$query) or die( mysqli_error($connection));

            while($row = mysqli_fetch_array($query_run))
            {
                ?>
                <tr>
                    
                    <td> <?php echo $row['activity_id']; ?> </td>
                    <td> <?php echo $row['program_name']; ?> </td>
                    <td> <?php echo $row['vol_head_name']; ?> </td>
                    <td> <?php echo $row['budget']; ?> </td>
                    
                </tr>

                <?php
            }
        }
        ?>





      </table>
    </div>
    <br>

</body>
</html>
<style>
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
            h3{
                
            }
            </style>