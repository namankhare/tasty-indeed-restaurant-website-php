
<?php include('session.php');

if(!$is_admin)
{
    header('Location: index.php');
    exit; 
}
?>

<?php
   
   $sql = "select id,name,seatingcapacity,specialoccasion,additionalnotes, created_at from tablebook ORDER BY created_at DESC";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $count = 1; 
    mysqli_free_result($result);
    mysqli_close($conn);
    // print_r($rows);
   include("includes/components/header.php");
   ?>



<section>
<div class="wrapper contact">
    <h2 class="title">Table Boking List</h2>
<table class="contact-table" border="1" style="margin-left: auto; 
  margin-right: auto;">
            <thead>
                <tr>
                    <th rowspan="2">Table No.</th>
                    <th rowspan="2">Name</th>
                    <th rowspan="2">Seating Preference</td>
                    <th rowspan="2">Special Occasion</td>
                    <th rowspan="2">Notes</th>
                    <th rowspan="2">Time</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($rows as $row){ ?>
                   <?php 
                   echo "<tr><td>". $count++ . "</td>";
                   echo "<td>". $row['name'] . "</td>";
                    echo "<td>". $row['seatingcapacity'] . "</td>";
                    echo "<td>". $row['specialoccasion'] . "</td>";
                    echo "<td>". $row['additionalnotes'] . "</td>";
                    echo "<td>". $row['created_at'] . "</td></tr>";
                    ?>
                <?php } ?>
      
                
            </tbody>
        </table>
</div>
</section>



<?php include("includes/components/footer.php");?>