<?php
    date_default_timezone_set('Asia/Jakarta');
    include 'dbh.inc.php';
    include 'comments.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OktoPus Okto & Puspa Wedding</title>
    <link rel="stylesheet" href="1style.css">
</head>
<body>

<section id="rsvp" class="rsvp">
        <div class="container">
            <div class="row justify-content-center">
            </form>
            <div class="row justify-content-center mt-5">
                <div class="col-md-10 text-center">
                    <?php
                    $cid = $_POST['cid'];
                    $uid = $_POST['uid'];
                    $date = $_POST['date'];
                    $message = $_POST['message'];

                    echo "<form method='POST' action='".editComments($conn)."'>
                    <input type='hidden' name='cid' value='".$cid."'>
                    <input type='hidden' name='uid' value='".$uid."'>
                    <input type='hidden' name='date' value='".$date."'>
                    <textarea name='message'>".$message."</textarea><br>
                    <button type='submit' name='commentSubmit'>Edit</button>
                    </form>";
                    ?>
                </div>
            </div>
        </div>

    </section>
    
</body>
</html>