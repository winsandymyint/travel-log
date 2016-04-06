  <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?id=insert">Insert</a></li>
                <li><a href="index.php?id=newsletter">NewsLetter</a></li>
                <li><a href="index.php?id=edit">Edit Visit</a></li>
                 <li><a href="index.php?id=delete">Delete Visit</a></li>
                  <?php
                  if(isset($_SESSION["uid"]))
				  {
					  echo '<li><a href="logout.php">Logout</a></li>';
				  }
				  ?>
            </ul> 