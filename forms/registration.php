<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONLINE VOTING SYSTEM - registration PAGE</title>
    <link rel="stylesheet" href="../style1.css">
    

</head>
<body class="texttt">
    <h1 class="c1h1">ONLINE VOTING SYSTEM</h1>
    <div class="login1">
        <h2>REGISTER ACCOUNT</h2>
        <div class="form1">
            <form action="../events/register.php" method="POST"    
            enctype="multipart/form-data">
                <div class="inpt">
                    <input type="text" class="details" placeholder="Enter your username" required="required" name="username">
                </div>
                <div class="inpt">
                    <input type="text" class="details" placeholder="Enter your mobile number" required="required" name="mobile">
                </div>
                <div class="inpt">
                    <input type="password" class="details" placeholder="Enter your password" required="required" name="password">
                </div>
                <div class="inpt">
                    <input type="password" class="details" placeholder="Confirm Password" required="required" name="cpassword">
                </div>
                <div class="inpt">
                    <input type="file" class="details" name="photo">
                </div>
                <div class="inpt">
                    <select name="std" class="details">
                        <option value="Candidate">Candidate</option>
                        <option value="Voter">Voter</option>
                    </select>
                    <button type="submit" name="Registerme" class="submitbutton">REGISTER</button>
                    <p>Already have an account? <a href="../" class="rggb">Click Here to Login</a></p>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>