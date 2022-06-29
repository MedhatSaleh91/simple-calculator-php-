<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>
    </head>
    <body>
    Calculator :


         <form method="post" >
            <input type="number" name="numb1" >
            <input type="number" name="numb2" >
            <select name="operator" id="">
               <option>None</option>
               <option>Add</option>
               <option>Subtract</option>
               <option>Multiply</option>
               <option>Divide</option>
               <option>Square</option>
            </select>
            <button type="submit" name="submit" value="submit" >Calculate</button>
         </form>
         
               <br>
   

    </body>
   
    result :

<?php
if (isset($_POST['submit'])){
$result1 = isset($_POST["numb1"]);
$result2 = isset($_POST["numb2"]);
}
 if (empty ($_POST["numb1"])) {  
                $errMsg = "Error! select 1st num ";  
                         echo $errMsg; 
                    }
                     
             else {  
                $result1 = $_POST["numb1"];  
            }  

            if (empty ($_POST["numb2"]))  {  
                
                    $errMsg = "Error! select second num" ;

                             echo $errMsg;  
                } 
                else {  
                    $result2 = $_POST["numb2"];  
                }  
                
    if (isset($_POST['submit']) && ($_POST["numb1"]) != null && ($_POST["numb2"]) != null) {
        $operator = $_POST['operator'];


        switch ($operator) {
            case 'None':
                echo "You need to select any operator";
                break;
            case 'Add' :
                echo (int)$result1 + (int)$result2;
                break;
            case 'Subtract':
                echo (int)$result1 - (int)$result2;
                break;
            case 'Multiply':
                echo (int)$result1 * (int)$result2;
                break;
            case 'Divide':
                if ($result1 == 0){
                    echo "cant divde by zero";
                }
                elseif ($result2 ==0){
                    echo "cant divde by zero";
                }
                else
                echo (int)$result1 / (int)$result2;
                break;
            case 'Square':
                echo (int)$result1 ** (int)$result2;
                break;
        }
    }
 ?>