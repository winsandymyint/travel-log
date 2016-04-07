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
                                                echo  "<td><a href='allInsert.php?insert_id=visit&id=$vid' class='btn btn-sm btn-color' role='button'>Edit</a>&nbsp;<a href='delete.php?type=delete&id=$vid' class='btn btn-sm btn-color' role='button'>Delete</a></td>";
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