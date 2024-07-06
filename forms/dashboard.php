<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location:../');
}
$data = $_SESSION['data'];
if ($_SESSION['status'] == 1) {
    $status = '<b class="status-voted">Voted</b>';
} else {
    $status = '<b class="status-not-voted">Not Voted</b>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System - Dashboard</title>
    <link rel="stylesheet" href="../styy.css">
</head>
<body class="bg-secondary-custom text-light-custom">
    <div class="container-custom my-5-custom">
        <a href="../"><button class="btn-custom">Back</button></a>
        <a href="logout.php"><button class="btn-custom">Logout</button></a>

        <h1 class="my-3-custom">Voting System</h1>
        <div class="row-custom my-5-custom">
            <div class="col-7-custom">
                <?php 
                if (isset($_SESSION['candidates'])) {
                    $candidates = $_SESSION['candidates'];
                    for ($i = 0; $i < count($candidates); $i++) {
                        ?>
                        <div class="row-custom">
                            <div class="col-4-custom">
                                <img src="../uploads/<?php echo $candidates[$i]['photo'] ?>" alt="Candidate image" class="candidate-img">
                            </div>
                            <div class="col-8-custom">
                                <strong class="text-dark-custom h5-custom">Candidate name:</strong>
                                <?php echo $candidates[$i]['username'] ?><br>
                                <strong class="text-dark-custom h5-custom">Votes:</strong>
                                <?php echo $candidates[$i]['votes'] ?><br>
                            </div>
                        </div>

                        <form action="../events/voting.php" method="post" class="vote-form">
                            <input type="hidden" name="candidatevotes" value="<?php echo $candidates[$i]['votes'] ?>">
                            <input type="hidden" name="candidateid" value="<?php echo $candidates[$i]['id'] ?>">

                            <?php 
                            if ($_SESSION['status'] == 1) {
                                ?>
                                <button class="btn-success-custom my-3-custom" disabled>Voted</button>
                                <?php 
                            } else {
                                ?>
                                <button class="btn-danger-custom my-3-custom" type="submit">Vote</button>
                                <?php 
                            }
                            ?>    
                        </form>
                        <hr>
                        <?php
                    }
                } else {
                    ?>
                    <div class="container-custom">
                        <p>No Candidates to display</p>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="col-5-custom">
                <img src="../uploads/<?php echo $data['photo']?>" alt="Voter image" class="voter-img"><br><br>
                <strong class="text-dark-custom h5-custom">Name:</strong>
                <?php echo $data['username'];?><br><br>
                <strong class="text-dark-custom h5-custom">Mobile:</strong>
                <?php echo $data['mobile'];?><br><br>
                <strong class="text-dark-custom h5-custom">Status:</strong>
                <?php echo $status;?><br><br>   
            </div>
        </div>
    </div>
</body>
</html>
