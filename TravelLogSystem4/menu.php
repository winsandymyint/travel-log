  <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="search.php">Search</a></li>
              
                <?php
              		if(isset($_SESSION["userid"]))
					{
						echo '<li><a href="logout.php">Logout</a></li>';
					}
				?>
            </ul> 