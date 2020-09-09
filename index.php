<?php 
	require 'controllers/index/header.php';
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel = "icon" href ="css/images/logo.png"> 
	<?php
		require 'controllers/index/title.php';
	?>
  <link rel="stylesheet" href="css/indexstyle.css">
</head>
<body>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Notification center</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="main.js" type="text/javascript"></script>
</head>
<body>
    <header>
        <div class="wrapper">
            <div class="logo">
                <img class="imagelogo" src="css/images/logo.png" alt="logo">
            </div>
            <div class="profile">
                <i class="fa fa-user-circle"></i>
            </div>
            <div class="notification">
                <i class="fa fa-bell-o"></i>
				<?php 
					require 'controllers/index/bubble_request.php';
				?>
            </div>
            <div class="inbox">
                <i class="fa fa-inbox"></i>
				<?php 
					require 'controllers/index/bubble_message.php';
				?>
            </div>

        </div>
    </header>
	
	<div class="content">
		<div class="content-col">
			<div class="right-content">
				<h1>เธ�เธฑเธ”เธ•เธฒเธฃเธฒเธ�เน€เธงเธฅเธฒเธ”เน�เธงเธขเธ•เธฑเธงเธ�เธธเธ“เน€เธญเธ� my new version</h1>
				
				<form action="index" method="post">
					<div class="btn">
						<p><button type="submit" name="start-btn" style="cursor: pointer;">เน€เธฃเธดเน�เธกเธ•เน�เธ�เน�เธ�เน�เธ�เธฒเธ�</button></p>
						<div class="clearfix"></div>
						<p><button type="submit" name="friend-btn" style="cursor: pointer;">เธ�เน�เธ�เธซเธฒเธฃเธฒเธขเธ�เธทเน�เธญเน€เธ�เธทเน�เธญเธ�</button></p>
					</div>
					<div class="clearfix"></div>
					<div class="btn-rainbow">
						<button class="btn-rainbow2" type="submit" name="history1-btn" style="cursor: pointer;">เธ�เธฃเธฐเธงเธฑเธ•เธดเธ�เธฒเธฃเธ�เธญเธ�</button>
						<button class="btn-rainbow1" type="submit" name="history2-btn" style="cursor: pointer;">เธ�เธฃเธฐเธงเธฑเธ•เธดเธ�เธฒเธฃเธ–เธนเธ�เธ�เธญเธ�</button>
					</div>
				</form>
			</div>
		</div>
		<div class="content-col">
		</div>
	</div>
	
    <header>
        <div class="wrapper">
            <div class="notification-dropdown dd">
                <div class="arrow-up"></div>
                <div class="header">
                    <div class="container">
                        <div class="text fl">เธ�เธณเธฃเน�เธญเธ�เธ�เธญ</div>
                        <div class="notify-count common-count count2 fl">
                            <div class="value"><?php echo $countRequestMyTime; ?></div>
                        </div>
                    </div>
                </div>
                <div class="items">
					<?php
						require 'controllers/index/content_request.php';
					?>
                </div>
            </div>
            <div class="profile-dropdown dd">
                <div class="arrow-up"></div>
                <div class="header">
                    <div class="container">
                        <div class="text">เธ�เน�เธญเธกเธนเธฅเธชเน�เธงเธ�เธ•เธฑเธง</div>
                    </div>
                </div>
                <div class="items">
					<div class="list-item noti">
                         <div class="text"><b class="fontS">เธ�เธทเน�เธญเธ�เธนเน�เน�เธ�เน� <?php echo $_SESSION['username']; ?></b></div>
                     </div>
					<div class="list-item noti">
						 <div class="text"><b class="fontS">เธ�เธทเน�เธญ <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></b></div>
                     </div>
					<div class="list-item noti">
                         <div class="text"><b class="fontS">เธญเธตเน€เธกเธฅ <?php echo $_SESSION['email']; ?></b></div>
                     </div>
					<div class="list-item noti">
                         <div class="text">
							<form action="index" method="post">
								<button type="submit" name="btn-profile" class="btn-manage-profile">เธ�เธฑเธ”เธ�เธฒเธฃเธ�เธฑเธ�เธ�เธต</button>
							</form>
							<form action="index" method="post">
								<button type="submit" name="logout-button" class="btn-logout">เธญเธญเธ�เธ�เธฒเธ�เธฃเธฐเธ�เธ�</button>
							</form>
						 </div>
                     </div>
					 <div class="clearfix"></div>
                </div>
            </div>

            <div class="inbox-dropdown dd">
                <div class="arrow-up"></div>
                <div class="header">
                    <div class="container">
                        <div class="text fl">เธ�เน�เธญเธ�เธงเธฒเธก</div>
                        <div class="notify-count common-count count2 fl">
                            <div class="value"><?php echo $countMsg; ?></div>
                        </div>
                    </div>
                </div>
                <div class="items">
					<?php
						require 'controllers/index/content_message.php';
					?>
                </div>
            </div>
        </div>
    </header>


</body>
</html>

<script  src="js/index.js"></script>

</body>
</html>
