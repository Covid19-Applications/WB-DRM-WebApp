<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 

?>


  <div class="card-body">

 <div class="table-responsive">
    <?php
        $query = "SELECT * FROM employer WHERE state = 'west bengal' ";
        $query_run = mysqli_query($connection, $query);
    ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Field Of Employee</th>
              <th>Company Name</th>
              <th>Company Address</th>
              
              <th>EDIT</th>
              <th>DELETE</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($query_run) > 0)        
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
               ?>
          <tr>  

            <td><?php  echo $row['fullname']; ?></td>
            <td><?php  echo $row['email']; ?></td>
            <td><?php  echo $row['phone']; ?></td>
            <td><?php  echo $row['field']; ?></td>
            <td><?php  echo $row['companyname']; ?></td>
            <td><?php  echo $row['companyadd']; ?></td>

            <td>
                <form action="#" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">


                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="#" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          </tr>
          <?php
            } 
        }
        else {
            echo "No Record Found";
        }
        ?>
        </tbody>
      </table>
    </div>


</div>

</div>





<?php
include('includes/scripts.php');
include('includes/footer.php');
?>



