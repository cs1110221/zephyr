
<!-- The header for each page of the portal -->
<?php include_once('footer.php'); ?>
<div class='topbar'>

		<form action="search_results.php" method='post' class='form-search span7'>

			<?php

				if(isset($_SESSION['searcherror']))
				{
					echo ("

						<input type='text' class='input-large search-query span6' id='search_bar' autofocus='autofocus' placeholder='" . $_SESSION['searcherror'] ."' name='searchbar' style='height: 27px;margin-top:5px'/>

						");

					unset($_SESSION['searcherror']);
				}
				else
				{
					echo ("

						<input type='text' class='input-large search-query span6' id='search_bar' autofocus='autofocus' placeholder='Search..' name='searchbar' style='height: 27px;margin-top:5px'/>

						");
				}
			?>
			
			<button type='submit' class='btn' style="margin-top:10px; margin-left:5px">Search</button>
			<input type='hidden' value= <?php echo curPageURL(); ?> name='currurl' />
		</form>
		
		<a href='profile.php?userid=<?php echo $_SESSION['userid'];?>'><p class="topbarprofiletext" title="Profile" style="float:right;font-size:125%;font-style:italic;color:#F78181"><?php echo $_SESSION['name'];?></p></a>
		

    <nav class="menu">
        <ul class="clearfix">
           
            <li>
                <a href="#">Notifications<span class="arrow">&#9660;</span></a>
 
                <ul class="sub-menu">
				<li>
                    <div class="notificationslist">

					<?php

						$notifications = get_all_notifications($_SESSION['userid']);

						$notificationssize = sizeof($notifications);

						for($i=0;$i<$notificationssize;$i++)
						{
							echo('<a href="courses.php?courseid='.$notifications[$i]['courseid'].'"><div class="notificationitem">');
							echo('<p><b>'. get_course_pretty_id($notifications[$i]['courseid']) . ': </b>'. $notifications[$i]['notification'] . '</p>');
							echo('</div></a>');
						}
					
					?>

				</div>
				</li>
                </ul>
            </li>
            
        </ul>
    </nav>
	

</div>