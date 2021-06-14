<?php
session_start();
$id  = $_SESSION['Sys_id'];
$server = "localhost";
$username = "root";
$password = "";
$database = "feedback";

$connection = mysqli_connect($server, $username, $password, $database);
if (!$connection){

    die("Error". mysqli_connect_error());
}
if(isset($_POST['submit'])){
    $subject = "Business Communication Skills-Basic";
    $feedback1 = $_POST['feedback1'];
    $feedback2 = $_POST['feedback2'];
    $feedback3 = $_POST['feedback3'];
    $feedback4 = $_POST['feedback4'];
    $feedback5 = $_POST['feedback5'];
    $feedback6 = $_POST['feedback6'];
    $feedback7 = $_POST['feedback7'];
    $feedback8 = $_POST['feedback8'];
    $feedback9 = $_POST['feedback9'];
    $sql = "INSERT INTO `$id` (`subject`, `feedback1`, `feedback2`, `feedback3`, `feedback4`, `feedback5`, `feedback6`, `feedback7`, `feedback8`, `feedback9`) VALUES ('$subject', '$feedback1', '$feedback2', '$feedback3', '$feedback4', '$feedback5', '$feedback6', '$feedback7', '$feedback8', '$feedback9');";
    $result = mysqli_query($connection , $sql);

    if($result)
    {
        header("Location: Home.php");
        exit;
    }
    else
    {
        echo '<script type="text/javascript"> alert("feedback unsucessful")</script>' . mysqli_error($connection);
    }
}
elseif(isset($_POST['cancel']))
{
    header("Location: Home.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Business Communication Skills-Basic</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section id="Form">
        <div class="container">
            <div class="header">
                <div class="feedback-form">
                    <table class="title">
                        <tr>
                            <td>Student Name:</td>
                            <td><?php echo $_SESSION['Username']?></td>
                            <td>Term:</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>System ID: </td>
                            <td><?php echo $_SESSION['Sys_id']?></td>
                            <td>Subject Name:</td>
                            <td>Business Communication Skills-Basic</td>
                        </tr>
                        <tr>
                            <td>Faculty Name:</td>
                            <td>Amrita Bagchi</td>
                            <td>Subject Code:</td>
                            <td>ARP203</td>
                        </tr>
                    </table>
                </div>
                <form class="form-check form-check-inline container" method="POST">
                    <table class="radio">
                        <tr class="top-row">
                            <td colspan="3">Question</td>
                            <td>Excellent&nbsp;</td>
                            <td>very good&nbsp;</td>
                            <td>good&nbsp;</td>
                            <td>fair&nbsp;</td>
                            <td>poor&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="3">Quality of Lectures and Content</td>
                            <td><input class="input200" type="radio" value="Excellent" name="feedback1"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="very_good" name="feedback1"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="good" name="feedback1"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="fair" name="feedback1"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="poor" name="feedaback1"> &nbsp; </td>


                        </tr>
                        <tr>
                            <td colspan="3">Ability to answer questions clearly and effectively</td>
                            <td><input class="input200" type="radio" value="Excellent" name="feedback2"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="very_good" name="feedback2"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="good" name="feedback2"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="fair" name="feedback2"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="poor" name="feedback2"> &nbsp; </td>


                        </tr>
                        <tr>
                            <td colspan="3">Efforts to make the course interesting</td>
                            <td><input class="input200" type="radio" value="Excellent" name="feedback3"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="very_good" name="feedback3"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="good" name="feedback3"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="fair" name="feedback3"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="poor" name="feedback3"> &nbsp; </td>

                        </tr>
                        <tr>
                            <td colspan="3">Discussions in tutorials/ case studies/ problem solving/ small group
                                teaching</td>
                            <td><input class="input200" type="radio" value="Excellent" name="feedback4"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="very_good" name="feedback4"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="good" name="feedback4"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="fair" name="feedback4"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="poor" name="feedback4"> &nbsp; </td>

                        </tr>
                        <tr>
                            <td colspan="3">Pace of syllabus coverage</td>
                            <td><input class="input200" type="radio" value="Excellent" name="feedback5"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="very_good" name="feedback5"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="good" name="feedback5"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="fair" name="feedback5"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="poor" name="feedback5"> &nbsp; </td>


                        </tr>
                        <tr>
                            <td colspan="3">Willingness for discussion and consultation outsvalue the classroom</td>
                            <td><input class="input200" type="radio" value="Excellent" name="feedback6"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="very_good" name="feedback6"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="good" name="feedback6"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="fair" name="feedback6"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="poor" name="feedback6"> &nbsp; </td>


                        </tr>
                        <tr>
                            <td colspan="3">Ability to explain the topic/subject</td>
                            <td><input class="input200" type="radio" value="Excellent" name="feedback7"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="very_good" name="feedback7"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="good" name="feedback7"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="fair" name="feedback7"> &nbsp; </td>
                            <td><input class="input200" type="radio" value="poor" name="feedback7"> &nbsp; </td>


                        </tr>
                        <tr>
                            <td colspan="3">Remarks and suggestions to improve the teaching learning process</td>
                            <td colspan="5"><textarea class="input100" name="feedback8"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="3">Is the Course relevant to Knowledge, Skill, or Attitude</td>
                            <td colspan="5"><textarea class="input300" name="feedback9"></textarea></td>
                        </tr>
                    </table>
                    <div class="container-form-btn">
                        <input type="submit" class="form-btn" name="submit" value="Submit">
                        <input type="submit" class="form-btn" name="cancel" value="Cancel">
                    </div>

                </form>
            </div>
        </div>
    </section>

</body>

</html>