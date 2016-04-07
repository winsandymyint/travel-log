<?php
    if(isset($_GET["id"]))
    {
        $vid= $_GET["id"];
        include("../db.php");
        $str="delete from visit where Visitid=$vid";
        $res=mysql_query($str,$con);
        if(res){
            header("Location:index.php?id=view-all");
        }else{
            header("Location:index.php?id=view-all");
            // header("Location:allInsert.php?errorno=3");
        }
    }else{
        echo "not set";
    }
 ?>


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