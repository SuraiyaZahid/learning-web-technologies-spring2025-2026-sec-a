<?php
    if(isset($_POST['submit'])){
        
        if(isset($_REQUEST['degree'])){
            $degrees = $_REQUEST['degree'];
            
            echo "Selected Degrees: ";
            
            for($i = 0; $i < count($degrees); $i++){
                echo $degrees[$i];
                if($i < count($degrees) - 1){
                    echo ", ";
                }
            }
            echo "<br><br>";
        }else{
            echo "No degree selected!<br><br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>5B</title>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>DEGREE</legend>
            <input type="checkbox" name="degree[]" value="SSC"> SSC<br>
            <input type="checkbox" name="degree[]" value="HSC"> HSC<br>
            <input type="checkbox" name="degree[]" value="BSc"> BSc<br>
            <input type="checkbox" name="degree[]" value="MSc"> MSc<br>
            <hr>
            <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>