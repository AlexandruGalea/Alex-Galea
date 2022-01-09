<?php     
 session_start();
    include('db.php');  
    include 'Includes/templates/header.php';
    
    $admin=$_SESSION['admin'];
    if($admin == 1)
        $x= "Dan Petru";
    if($admin == 2)
        $x ="TJ Miles";
    if($admin == 3)
        $x ="Vlad Bucur"; 
   
?>  
<br>
<br>
<div class="container">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800"> <?php print $x ?> , programarile tale sunt urmatoarele</h1>
 </div>
 <br>
<br>
 <div class="card">
            	<div class="table-responsive">
                	<table class="table table-bordered tabcontent" id="Upcoming" style="display:table" width="100%" cellspacing="0">
                  		<thead>
                                <tr>
                                    <th>
                                        Inceput
                                    </th>
                                    <th>
                                        Servicii
                                    </th>
                                    <th>
                                        Sfarsit
                                    </th>
                                    <th>
                                        Client
                                    </th>
                                    
                                   
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    $stmt = $con->prepare("SELECT * 
                                                    FROM appointments a , clients c
                                                    where start_time >= ?
                                                    and a.client_id = c.client_id
                                                    and a.employee_id= $admin
                                                    and canceled = 0
                                                    order by start_time;
                                                    ");
                                    $stmt->execute(array(date('Y-m-d H:i:s')));
                                    $rows = $stmt->fetchAll();
                                    $count = $stmt->rowCount();
                                    
                                    

                                    if($count == 0)
                                    {

                                        echo "<tr>";
                                            echo "<td colspan='5' style='text-align:center;'>";
                                                echo "Viitoarele programari vor fi afisate aici";
                                            echo "</td>";
                                        echo "</tr>";
                                    }
                                    else
                                    {

                                        foreach($rows as $row)
                                        {
                                            echo "<tr>";
                                                echo "<td>";
                                                    echo $row['start_time'];
                                                echo "</td>";
                                                echo "<td>";
                                                    $stmtServices = $con->prepare("SELECT service_name
                                                            from services s, services_booked sb
                                                            where s.service_id = sb.service_id
                                                            and appointment_id = ?");
                                                    $stmtServices->execute(array($row['appointment_id']));
                                                    $rowsServices = $stmtServices->fetchAll();
                                                    foreach($rowsServices as $rowsService)
                                                    {
                                                        echo "- ".$rowsService['service_name'];
                                                        if (next($rowsServices)==true)  echo " <br> ";
                                                    }
                                                echo "</td>";
                                                echo "<td>";
                                                    echo $row['end_time_expected'];
                                            
                                                echo "</td>";
                                               
                                                echo "<td>";
                                                    $stmtEmployees = $con->prepare("SELECT first_name,last_name,phone_number
                                                            from clients c, appointments a
                                                            where c.client_id = a.client_id
                                                            and a.appointment_id = ?");
                                                    $stmtEmployees->execute(array($row['appointment_id']));
                                                    $rowsEmployees = $stmtEmployees->fetchAll();
                                                    foreach($rowsEmployees as $rowsEmployee)
                                                    {
                                                        echo $rowsEmployee['first_name']." ".$rowsEmployee['last_name']."<br>".$rowsEmployee['phone_number'];
                                                        
                                                    }
                                                echo "</td>";
                                                
                                               
                                                	
                                        }
                                    }

                                ?>

                            </tbody>
                	</table>
                </div>
     </div>