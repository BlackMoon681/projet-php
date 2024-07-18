<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `commande` WHERE CONCAT * LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `commande`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "traveleer");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>


<!DOCTYPE html>
<html>
    <head>
        
 <title >Traveler</title>
   
   <link rel="icon" href="../Traveler/imageshead_logo-removebg-preview.png">

    <link rel="stylesheet" href="../css/table.css">

    </head>
    <body>
    <div class="table-wrapper">
        <form action="php_html_table_data_filter.php" method="post">
      
            
            <table class="fl-table">
                <tr >
                <th >ID</th>
                    <th>EMAIL</th> 
                     <th>SERVICE</th>
                    <th>QUANTITE</th>
                    <th>TOTAL</th>
                   
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr class="table-row">
                    <td class="col col-1"><?php echo $row['id'];?></td>
                    <td class="col col-1"><?php echo $row['email'];?></td>
                    <td class="col col-1"><?php echo $row['service'];?></td>
                    <td class="col col-1"><?php echo $row['qte'];?></td>
                    <td class="col col-1"><?php echo $row['total'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
                </div>
    </body>
</html>
