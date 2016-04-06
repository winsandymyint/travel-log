<?php
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $con = mysql_connect($host,$user,$pass);
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
   if (mysql_query("CREATE DATABASE travellogsystemdb",$con))
           {  
            echo "Database has been created!<br /><br/>";  
           }
    else
    {
     echo "Error creating database: " . mysql_error();
     }
   
   
    mysql_select_db("travellogsystemdb", $con);
    $query = "CREATE TABLE Usertb (
                  Userid INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
				  Username VARCHAR (50) NOT NULL,
				  Password VARCHAR (50) NOT NULL,
                  Fullname VARCHAR (50) NOT NULL,             
                  Gender VARCHAR (50) NOT NULL,
                  Email VARCHAR (50) NOT NULL ,
				  Country VARCHAR (50) NOT NULL ,
				  DateofBirth DATE NOT NULL,
                  IsNewsLetter BOOLEAN NOT NULL
            )";
        $result = mysql_query($query, $con);
		
		
		//to create Visit
		
		$query = "CREATE TABLE Visit (
                  Visitid INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  Countryid INT(10) NOT NULL,
				  Regionid INT(10) NOT NULL,
				  Cityid INT(10) NOT NULL,
				  VisitDate DATE NOT NULL,
				  GeoInfo VARCHAR (100) NOT NULL,
				  Comment VARCHAR (100) NOT NULL,
				  Hotelimg VARCHAR (30) NOT NULL,
				  Restaurantimg VARCHAR (30) NOT NULL
				  
				  )";
        $result = mysql_query($query, $con);
		
		
		//to create Citytb
		
$query = "CREATE TABLE Citytb (
                  Cityid INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  City VARCHAR (50) NOT NULL,
				  Countryid INT(10) NOT NULL ,
				  Regionid INT(10) NOT NULL ,
				  Cityimg1 VARCHAR (20) NOT NULL,
				  Cityimg2 VARCHAR (20) NOT NULL,
				  Cityimg3 VARCHAR (20) NOT NULL
				  )";
        $result = mysql_query($query, $con);
		
		
		//to create Regiontb
	
$query = "CREATE TABLE Regiontb (
                  Regionid INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  Region VARCHAR (30) NOT NULL,
				  Countryid INT(10) NOT NULL,
				  Regionimg1 VARCHAR (30) NOT NULL,
				  Regionimg2 VARCHAR (30) NOT NULL,
				  Regionimg3 VARCHAR (30) NOT NULL
				  
				  )";
        $result = mysql_query($query, $con);
		
//to create Countrytb

$query = "CREATE TABLE Countrytb (
                  Countryid INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  Country VARCHAR (40) NOT NULL,
				  Countryimg1 VARCHAR (40) NOT NULL
				 
				  )";
		 $result = mysql_query($query, $con);		  
				  
				  //Usertb 
                 $str="INSERT 
				  		   INTO
						   Usertb(Username,Password,Fullname,Gender,Email,Country,DateofBirth,IsNewsLetter) 
						   VALUES( 'john', 'john', 'John', 'Male', 'john@gmail.com', 'Myanmar', '2016-03-14', 1),
									  ( 'smith', 'smith123', 'Smith', 'Male', 'smith@gmail.com', 'Myanmar', '2016-03-16', 0)";
									  
									
$result=mysql_query($str,$con);
   $str="INSERT 
			INTO 
			countrytb(Country,Countryimg1) 
			VALUES ('China', 'image/chana1.jpg'),
						('India', 'image/india1.jpg'),
						('Brazil', 'image/brazil.jpg'),
						('Germany', 'image/gernamy1.jpg'),
						('the United States of America(U.S.A)', 'image/usa1.jpg')";
				  
        $result = mysql_query($str, $con);
		
		
		
		//regiontb

		$str="INSERT 
			INTO 
			regiontb(Region,Countryid,Regionimg1,Regionimg2,Regionimg3) 
			VALUES ('Uttar Tradesh', 2, 'image/agra1.jpg', 'image/agra2.jpg', 'image/agra3.jpg'),
						('Bihar', 2, 'image/bihar1.jpg', 'image/bihar2.jpg', 'image/bihar3.jpg')
						";
				  
        $result = mysql_query($str, $con);
		
//citytb

$str="INSERT 
			INTO 
			citytb(City,Countryid, Regionid, Cityimg1, Cityimg2, Cityimg3) 
			VALUES ('Agra', 2, 1, 'image/agra4.jpg', 'image/agra5.jpg', 'image/agra6.jpg')";
				  
        $result = mysql_query($str, $con);
		
		
	//visit
$str="INSERT 
			INTO 
			visit(Countryid,Regionid,Cityid, VisitDate,GeoInfo,Comment,Hotelimg,Restaurantimg) 
			VALUES (2, 1, 1, '2016-03-01', 'Taj Mahal(Taj Road, Agra, Uttar Pradesh - 282001, India)
', 'Nice Place!', 'image/indiahotel1.jpg', 'image/indiares1.jpg'),
			(2, 1, 1, '2016-03-02', 'Bodhgaya(Bihar State)', 'Nice Place!', 'image/indiahotel3.jpg', 'image/indiares2.jpg')
			";
				  
        $result = mysql_query($str, $con);
        if(!$result) 
                echo mysql_error() . "<br />";
        else 
                echo "All table created!<br /><br/>";     
        
                                                     
    mysql_close($con);  

?>
