<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP voting system </title>
    <link rel="stylesheet" href="./style1.css">
    

</head>
<body class="texttt">
    <h1 class= "clh1">ONLINE VOTING SYSTEM</h1>
    <div class="login1">
        <h2>LOGIN PAGE</h2>
        <div class="form1"> 
            <form action="./events/login.php" method="POST">
                <div class="inpt">
                    <input type="text" class="details" name="username" placeholder="Enter your usermame"
                    required="required">
                </div>
                <div class="inpt">
                    <input type="password" class="details" name="password" placeholder="Enter your password"
                    required="required">
                </div>
                <div class="inpt">
                    <select name="std" class="details">
                        <option value="Candidate">Candidate</option>
                        <option value="Voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="submitbutton">Login</button>
                <p>Don't have an account? <a href="./forms/registration.php" class="rggb"> Register here</a></p>
            </form>
        </div>
    </div>
</body>
</html>