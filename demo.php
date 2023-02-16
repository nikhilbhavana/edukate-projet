<?php
                $query = "SELECT  * FROM instructors";
                $result = mysqli_query($conn,$query);
                while ($row = mysqli_fetch_row($result)){

                    $name=$row[1];
                    
                    echo '  <li class="list-group-item"><a class="dropdown-toggle"  href="http://localhost/bootstrap/coursedet.php?id='.$row[0].'">'.$row[1].'
                    <span class="caret"></span>
                    </a>
                </li>
               
                
                ';
                }

                ?>

