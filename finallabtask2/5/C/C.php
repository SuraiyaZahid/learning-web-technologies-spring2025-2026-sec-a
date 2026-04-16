<?php
    $degrees = array(); 
    $message = ""; 
    
    if(isset($_POST['submit'])){
        if(isset($_REQUEST['degree'])){
            $degrees = $_REQUEST['degree']; // array
            $message = "Selected Degrees: ";
            
            for($i = 0; $i < count($degrees); $i++){
                $message .= $degrees[$i];
                if($i < count($degrees) - 1){
                    $message .= ", ";
                }
            }
        }else{
            $message = "No degree selected!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>5C</title>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>DEGREE</legend>
            <input type="checkbox" name="degree[]" value="SSC" <?php if(in_array("SSC", $degrees)){ echo "checked"; } ?>> SSC<br>
            <input type="checkbox" name="degree[]" value="HSC" <?php if(in_array("HSC", $degrees)){ echo "checked"; } ?>> HSC<br>
            <input type="checkbox" name="degree[]" value="BSc" <?php if(in_array("BSc", $degrees)){ echo "checked"; } ?>> BSc<br>
            <input type="checkbox" name="degree[]" value="MSc" <?php if(in_array("MSc", $degrees)){ echo "checked"; } ?>> MSc<br>
            <hr>
            <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>
    
    <?php echo $message; ?>
</body>
</html>