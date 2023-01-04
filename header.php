<?php 

session_start();
error_reporting(0);
?>

        <nav>			
			<ul>
					<a href="index.php" class="active"><li>Home</li></a>				
					<a href="fitness.php"><li>Fitness Calculator</li></a>
					<a href="trainer.php"><li>Gym&Trainers</li></a>
					<a href="dietitian.php" ><li>Dietitians</li></a>
					<a href="blog.php"><li>Blogs</li></a>
					<a href="workshop.php"><li>workshop</li></a>
					<a href="appoinment_historey.php"><li>History</li></a>
					<a href="login.php" ><li><i class="fas fa-user fa-fw" class="show_username"></i> </li> </a> 
					<a href="login.php" ><li><?php echo  $_SESSION['username']; ?></li> </a> 
							
				</ul>			
			</nav>