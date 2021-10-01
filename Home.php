<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: Login.php");

    exit;
}

?>

//Home Page
<!DOCTYPE html>

<head>
    <title>Home Page</title>
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
                            <td rowspan="5" style="width:183px;height: 157px;">
                                <img src="img/avatar.png" width="127px" height="150px">
                            </td>
                        </tr>
                        <tr>
                            <td>System ID:</td>
                            <td><?php echo $_SESSION['Sys_id']?></td>
                        </tr>
                        <tr>
                            <td>School: </td>
                            <td>SUSET</td>
                        </tr>
                        <tr>
                            <td>Program:</td>
                            <td>Bachelor of Technology</td>
                        </tr>
                        <tr>
                            <td>Plan:</td>
                            <td>CS - AI& Machine Learning</td>
                        </tr>
                    </table>
                </div>
                <form class="form">
                    <table class="radio">
                        <tr class="top-row">
                            <td></td>
                            <td>Subject Name</td>
                            <td style="height:32px;width:117.33px">Subject<br>Code</td>
                            <td style="height:32px;width:109.78px">Course<br>Type</td>
                            <td style="height:32px;width:150px">Faculty Name</td>
                            <td>Feedback</td>
                        </tr>
                        <tr>
                            <td>1 </td>
                            <td>Data Structures</td>
                            <td>CSE242</td>
                            <td>Theory</td>
                            <td>Neha Tyagi</td>
                            <td>
                                <a class="form-btn-0" href="Form4.php">
                                    <span>
                                        Feedback
                                    </span>
                                </a>
                            </td>


                        </tr>
                        <tr>
                            <td>2 </td>
                            <td>Object Oriented Programming Using Java</td>
                            <td>CSE243</td>
                            <td>Theory</td>
                            <td>Sushant Jhingran</td>
                            <td>
                                <a href="Form1.php" class="form-btn-0">
                                    <span>
                                        Feedback
                                    </span>
                                </a>
                            </td>


                        </tr>
                        <tr>
                            <td>3 </td>
                            <td>Principles Of Operating System</td>
                            <td>CSE244</td>
                            <td>Theory</td>
                            <td>Gaurav Raj</td>
                            <td>
                                <a href="Form5.php" class="form-btn-0">
                                    <span>
                                        Feedback
                                    </span>
                                </a>
                            </td>

                        </tr>
                        <tr>
                            <td>4 </td>
                            <td>Discrete Structures</td>
                            <td>CSE245</td>
                            <td>Theory</td>
                            <td>Megha Chhabra</td>
                            <td>
                                <a href="Form6.php" class="form-btn-0">
                                    <span>
                                        Feedback
                                    </span>
                                </a>
                            </td>

                        </tr>
                        <tr>
                            <td>5 </td>
                            <td>Computer Organization And Architecture</td>
                            <td>CSE247</td>
                            <td>Theory</td>
                            <td>Ruqaiya Khanam</td>
                            <td>
                                <a href="Form7.php" class="form-btn-0">
                                    <span>
                                        Feedback
                                    </span>
                                </a>
                            </td>


                        </tr>
                        <tr>
                            <td>6 </td>
                            <td>Concept Of Machine Learning</td>
                            <td>CSA202</td>
                            <td>Theory</td>
                            <td>Ankur Choudhary</td>
                            <td>
                                <a href="Form3.php" class="form-btn-0">

                                    <span>
                                        Feedback
                                    </span>

                                </a>
                            </td>


                        </tr>
                        <tr>
                            <td>7 </td>
                            <td>Data Structures Lab</td>
                            <td>CSP242</td>
                            <td>Practical</td>
                            <td>Neha Tyagi</td>
                            <td>
                                <a href="Form8.php" class="form-btn-0">
                                    <span>
                                        Feedback
                                    </span>
                                </a>
                            </td>


                        </tr>
                        <tr>
                            <td>8 </td>
                            <td>Object Oriented Programming Using Java Lab</td>
                            <td>CSP243</td>
                            <td>Practical</td>
                            <td>Sushant Jhingran</td>
                            <td>
                                <a href="Form9.php" class="form-btn-0">
                                    <span>
                                        Feedback
                                    </span>
                                </a>
                            </td>


                        </tr>
                        <tr>
                            <td>9 </td>
                            <td>Principles Of Operating System Lab</td>
                            <td>CSP244</td>
                            <td>Practical</td>
                            <td>Gaurav Raj</td>
                            <td>
                                <a href="Form10.php" class="form-btn-0">
                                    <span>
                                        Feedback
                                    </span>
                                </a>
                            </td>


                        </tr>
                        <tr>
                            <td>10 </td>
                            <td>Concept of Machine Learning Lab</td>
                            <td>CAL201</td>
                            <td>Practical</td>
                            <td>Ankur Choudhary</td>
                            <td>
                                <a href="Form2.php" class="form-btn-0">
                                    <span>
                                        Feedback
                                    </span>
                                </a>
                            </td>


                        </tr>
                        <tr>
                            <td>11 </td>
                            <td>Project Based Learning (PBL) -1</td>
                            <td>CSP251</td>
                            <td>Practical</td>
                            <td>Sushant Jhingran</td>
                            <td>
                                <a href="Form11.php" class="form-btn-0">
                                    <span>
                                        Feedback
                                    </span>
                                </a>
                            </td>


                        </tr>
                        <tr>
                            <td>12 </td>
                            <td>Aptitude Reasoning-Basic</td>
                            <td>ARP203</td>
                            <td>Practical</td>
                            <td>Bhumika . .</td>
                            <td>
                                <a href="Form12.php" class="form-btn-0">
                                    <span>
                                        Feedback
                                    </span>
                                </a>
                            </td>


                        </tr>
                        <tr>
                            <td>13 </td>
                            <td>Business Communication Skills-Basic</td>
                            <td>ARP203</td>
                            <td>Practical</td>
                            <td>Amrita Bagchi</td>
                            <td>
                                <a href="Form13.php" class="form-btn-0">

                                    <span>
                                        Feedback
                                    </span>
                                </a>
                            </td>


                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </section>

</body>

</html>
