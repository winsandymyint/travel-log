        <!-- banner-bottom -->
        <div class="banner-bottom">
            <!-- container -->
            <div class="container">
                <div class="faqs-top-grids">
                    <div class="book-grids">
                        <div class="col-md-12">
                            <div class="book-left-info">
                                <h3>View All Visit</h3>
                            </div>
                            <div class="book-left-form">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th>#</th>
                                            <th>Location</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Comment</th>
                                            <th>Location Image</th>
                                            <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                if(isset($_SESSION["uid"]))
                                                {
                                                    if(isset($_GET["id"]))
                                                    {

                                                    }
                                                }
                                            ?>
                                            <?php
                                            include("../db.php");
                                            $str="SELECT * FROM visit";
                                            $res=mysql_query($str,$con);
                                            // print_r(mysql_fetch_array($res));
                                            while($row= mysql_fetch_array($res))
                                            {   $vid= $row["Visitid"];
                                                echo  "<td>".$row["Visitid"]."</td>";
                                                echo  "<td>".$row["Location"]."</td>";
                                                echo  "<td>".$row["Formalname"]."</td>";
                                                echo  "<td>".$row["Formaladdress"]."</td>";
                                                echo  "<td>".$row["Comment"]."</td>";
                                                echo  "<td><img src='../".$row["Locationimage"]."' width='100px' height='100px' /></td>";
                                                echo  "<td><a href='delete_data.php?type=edit&id=$vid' class='btn btn-sm btn-color' role='button'>Edit</a>&nbsp;<a class='btn btn-sm btn-color' role='button' onclick='deleteData($vid)'>Delete</a></td>";
                                                echo "</tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!-- //container -->
        </div>
        <!-- //banner-bottom -->

<style type="text/css">
    .border-color{
        border: 1.5px solid #CBCBCB;
    }
    .btn-color{
        background: rgb(111, 213, 8);
        border: none;
        color: #fff;
        padding: 10px;
    }

</style>
<script type="text/javascript">
    function deleteData(argument) {
        alert("DELETE IT")
    }

</script>

<form method="post" action="visitEdit.php">
    	<p>
        	<label for="visitid" class="lbl">Visit ID</label>  
            <select name="visitid" id="visitid" class="form-control" required onchange="Edit(this.value)">
            <option value="">Please Select Visit</option>
            	<?php
                include("../db.php");
				$str="SELECT Visitid FROM visit";
				$res=mysql_query($str,$con);
				while($row=mysql_fetch_array($res))
				{
					echo '<option>'.$row["Visitid"].'</option>';
				}
				?>
            </select>
          
        </p>
        <div id="view"></div>
        <p><input type="submit" value="Edit" class="btn"/></p>
    </form>