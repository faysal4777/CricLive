<?php
	session_start();
	error_reporting(0);

    //echo "300";

   // $run = $_GET['run'];
//    $player = $_GET['player'];
    //$country = $_GET['country'];
    $id = $_GET['id'];

    if( $id != ""){
        
        $conn = mysqli_connect('localhost', 'root', '', 'criclive');
        
        $playerNum1 = null;
        $playerNum2 = null;

        
        $sql2= "SELECT * from batting where id='".$id."'";
        
        $result2 = mysqli_query($conn, $sql2);
        
        while($row2 = mysqli_fetch_assoc($result2))
        {
            $playerNum1 = $row2['batsman1'];
            $playerNum2 = $row2['batsman2'];
            
        }
        
        
        $sql3= "UPDATE batting SET batsman1='".$playerNum2."',batsman2='".$playerNum1."' WHERE id='".$id."'";
        
        //echo $sql3;

        if(mysqli_query($conn, $sql3))
        {
            //echo "Inserted";
        }
        else{
            //echo "Not Registered";
            //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        
        //echo $playerName;
        
    }

    

?>
