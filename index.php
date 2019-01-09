  <!HOME PAGE OF PHONEBOOK>
<h1>My phone numbers</h1>
    <?php
    $count=0;
    $user='root';  
    $pass='';
    $dbname='phonebook';
    $db= new mysqli('localhost',$user,$pass,$dbname) ;
    $sql = "SELECT * FROM `details`";
    $result = $db->query($sql,MYSQLI_STORE_RESULT);

if ($result->num_rows > 0) 
    {
    // output data of each row
    echo "<table witdh='100%'><tr><th>First name</th><th>Last Name</th><th>Phone number</th><th>DELETE</th></tr>";
    while($row = $result->fetch_assoc()) 
            { 
       
                $phoneno=$row["Phonenumber"];       
                $fname=$row['Firstname']; 
                $lname=$row['Lastname'] ;
                $phonen=$row['Phonenumber'];
    if($phonen!="")
        {
        
                   echo "<tr><td>".$fname."</td><td>".$lname."</td><td>".$phonen."</td>";
                   echo "<td><a href=delete.php?phone=$phoneno>[DELETE]</a></td></tr>";
        } 
        }
            
           echo"</table>"; 
           
        }
    
    ?>
    <h1>Add entry</h1>
    <form action="add.php" method="GET">
        <table>
        <tr><td>Lastname:</td><td> <input type="text" name="Lastname"></td></tr>
        <tr><td>Firstname: </td> <td><input type="text" name="Firstname"></td></tr>
        <tr><td>Phonenumber:</td><td><input type="text" name="Phonenumber"></td></tr>
        <tr><td clospan="2"><input type="submit" value="ADD"></td></tr>
        </table> 
    </form>