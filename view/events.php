<html>

<head>
	<title> Events | Leaf </title>
    <link rel="stylesheet" href="expert style.css">
</head>

<body>
	<table border="1" width="100%">
        <form method="post" action="../controller/eventCheck.php">
		<tr>
			<td>
				<img src="Companylogo.png" alt="logo" width="100px" height="50px">
			</td>
			
			<td align="right">
				<a href="login.php"> Logout</a>
			</td>
		</tr>
		
		<tr style="height:150px;">
			<td>
				<h4>Account</h4><br>
                <div id="box1">
                <ul>
                    <li>
                        <a href="home.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="viewProfile.php">View Profile</a>
                    </li>
                    <li>
                        <a href="EditProfile.php">Edit Profile</a>
                    </li>
                    <li>
                        <a href="article.php">Articles</a>
                    </li>
                    <li>
                        <a href="events.php">Events</a>
                    </li>
                    <li>
                        <a href="news.php">News</a>
                    </li>
                    <li>
                        <a href="optionGallary.php">Gallary</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>
                    <li>
                        <a href="expertList.php">Expert List</a>
                    </li>
                    <li>
                        <a href="community.php">Our Community</a>
                    </li>
                    <li>
                        <a href="qna.php">QnA</a>
                    </li>
                    <li>
                        <a href="message.php">Messages</a>
                    </li>
                    <li>
                        <a href="courses.php">Courses</a>
                    </li>
                    <li>
                        <a href="research.php">Research</a>
                    </li>
                    <li>
                        <a href="weather.php">Weather Update</a>
                    </li>
                    <li>
                        <a href="donate.php">Donate</a>
                    </li>
                    <li>
                        <a href="Help.php">Help & Suggestion</a>
                    </li>
                    <li>
                        <a href="sponsorList.php">Sponsor list</a>
                    </li>
                    <li>
                        <a href="attendence.php">Attendence</a>
                    </li>
                    <li>
                        <a href="notification.php">Notificaton</a>
                    </li>
                    <li>
                        <a href="accVerification.php">Account Verification</a>
                    </li>
                    <li>
                        <a href="login.php">Logout</a>
                    </li>
                </ul>
            </div>
			</td>
            <td> 
                <div id="box1">
                <label>Date: <br><input type="date" name="date"><br></label>
                <label>Event  : <br><textarea cols="70" rows="10" name="eventname"></textarea><br></label>
                <input type="submit" name="submit" value="Submit">
                <br>
                <br>
            </div>
             <div id="box1">   <a href="../controller/eventCheck.php">View your events</a> </div>
            </td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				18-39032-3@student.aiub.edu
			</td>
		</tr>
      </form>  			
	</table>
</body>
</html>