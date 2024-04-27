<html>
    <head>
        <title> view </title>
   </head>
   <body>
    <table>
        <thead>
            <tr>
                <td> NAME </td>
                <td> GENDER </td>
                <td> CONTECT </td>
                <td> ADDRESS </td>
            </tr>
        </thead>
        <?php 
        include "conect.php" ;
        $selectquery = "select * from students ";
        $query = mysqli_query ($con, $selectquery);
        while ( $result = mysqli_fetch_assoc($query))
        {?>
        <tbody>
            <tr>
                <td> <?php echo $result['NAME'];?> </td>
                <td> <?php echo $result['GENDER'];?> </td>
                <td> <?php echo $result['CONTECT'];?> </td>
                <td> <?php echo $result ['ADDRESS'];?> </td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
        </body>              

        
                     