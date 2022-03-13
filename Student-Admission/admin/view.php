<div id="padding">
<div class="section-title">
    <h3>Students list</h3>
</div>

        <?php 

        if(isset($_GET['did']))
        {
        delete();
        print '<h6 class= "successMessage">Student Deleted.</h6>';
        }
               

                /* $cn = mysqli_connect("localhost", "root", "", "db_admission");*/
				$sql = "select * from student";
				
				$table = mysqli_query($cn, $sql);
				
				
				print '<table>';
				print '<tr><th>ID</th><th>Student Name</th><th>Gurdian Name</th><th>Contact</th><th>Email</th><th>Address</th><th>Class</th><th>Shift</th><th>Gender</th><th>Blood Group</th><th>Division</th><th>Action</th></tr>';
				
				while($row = mysqli_fetch_assoc($table))
				{
					print '<tr>';
					print '<td>'.htmlentities($row["id"]).'</td>';
					print '<td>'.htmlentities($row["sname"]).'</td>';
					print '<td>'.htmlentities($row["gname"]).'</td>';
					print '<td>'.htmlentities($row["contact"]).'</td>';
					print '<td>'.htmlentities($row["email"]).'</td>';
					print '<td>'.htmlentities($row["address"]).'</td>';
					print '<td>'.htmlentities($row["class"]).'</td>';
					print '<td>'.htmlentities($row["shift"]).'</td>';
					print '<td>'.htmlentities($row["gender"]).'</td>';
					print '<td>'.htmlentities($row["blgroup"]).'</td>';
					print '<td>'.htmlentities($row["division"]).'</td>';
					print '<td> <a class= "action-e" href= "?a=edit&eid='.$row["id"].'"><i class="fa fa-wrench" title="Update"></i></a>
					<a class= "action-d" href= "?a='.$_GET['a'].'&did='.$row['id'].'"><i class="fa fa-trash" title="Delete"></i></a></td>';
					print '</tr>';
				}
	
				print '</table>';


    function delete()
        {
            global $cn;
            $sql = "delete from student where id = ".$_GET['did'];
            mysqli_query($cn, $sql);
        }
	
    ?>
     
</div>
