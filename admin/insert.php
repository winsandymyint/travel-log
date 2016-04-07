        <!-- banner-bottom -->
        <div class="banner-bottom">
            <!-- container -->
            <div class="container">
                <div class="faqs-top-grids">
                    <div class="book-grids">
                        <div class="col-md-12">
                            <div class="book-left-info">
                                <h3>Insert New Record</h3>
                            </div>
                            <div class="book-left-form">
                                <div class="table-responsive">
                                	<?php 
                                		if(isset($_SESSION["uid"]))
                                		{
                            				$id=$_GET["insert_id"];
                            				if($id){
                            					echo "YES";
                            				}else{
                            					echo "NO";
                            				}
                                		}
                                	?>
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
