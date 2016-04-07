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
        alert("Edit IT")
    }

</script>
