<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$first_name = $middle_name=$last_name=$user_name=$f_pass=$c_pass=$e_mail=$phone= "";
// $name_err = $address_err = $salary_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
   //  $input_name = trim($_POST["name"]);
   //  if(empty($input_name)){
   //      $name_err = "Please enter a name.";
   //  } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
   //      $name_err = "Please enter a valid name.";
   //  } else{
   //      $name = $input_name;
   //  }
    
    // Validate address
   //  $input_address = trim($_POST["address"]);
   //  if(empty($input_address)){
   //      $address_err = "Please enter an address.";     
   //  } else{
   //      $address = $input_address;
   //  }
    
    // Validate salary
   //  $input_salary = trim($_POST["salary"]);
   //  if(empty($input_salary)){
   //      $salary_err = "Please enter the salary amount.";     
   //  } elseif(!ctype_digit($input_salary)){
   //      $salary_err = "Please enter a positive integer value.";
   //  } else{
   //      $salary = $input_salary;
   //  }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO user (s_name,name,f_name,u_name,mail,phone,gender,password) VALUES (?, ?, ?,?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssi", $param_name, $param_address, $param_salary);
            
            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_salary = $salary;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
    <style>
        *{
            box-sizing:border-box ;
        }
        form{
           margin: 200px 350px;
           border: 5px solid gray;
           font-size: 25px;
        }
        div{
           margin: 44px 65px;
        }
        .first{
           height: 35px;
           width: 180px;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autofill="off">
         <div>
            <label>Name :- </label>
            <input type="text" class="first" name="first_name" placeholder="Enter Surname Name">
            <input type="text" class="first" name="middle_name" placeholder="Enter Candidate Name">
            <input type="text" class="first" name="last_name" placeholder="Enter Father Name">
         </div>
         <div>
            <label>User Name :- </label>
            <input type="text" class="first" name="user_name" placeholder="Enter User Name">
         </div>
         <div>
            <label>Password :- </label>
            <input type="password" class="first" name="f_pass" placeholder="Enter Password">
         </div>
         <div>
            <label>Conform Password :- </label>
            <input type="password" class="first" name="c_pass" placeholder="Re-Enter Password">
         </div>
         <div>
            <label>Email  :- </label>
            <input type="email" class="first" name="e_mail" placeholder="Enter Email Address">
         </div>
         <div>
            <label>Phone Number :- </label>
            <input type="text" class="first" name="phone" placeholder="Enter Phone Number">
         </div>
         <div>Gender :- </div>
         <div>
            <input type="radio" name="gender" value="0" >
            <label>Male</label>
            <input type="radio" name="gender" value="1" >
            <label>Female</label>
         </div>
         <div>
            <input type="submit" class="first" value="Sign in">
            <input type="reset" class="first" value="Reset">
         </div>
    </form>
</body>
</html>