
<div class="side-nav">
	<a href='profile.php?userid=<?php echo $_SESSION['userid'];?>'><p class="topbarprofiletext" title="Profile"><?php echo $_SESSION['name'];?></p></a>
            <ul >
                 
                 <li>   <a href='logout.php'><img
			src="images/icons/logout1.png" class='topbaricon'
			onmouseover="this.src='images/icons/logout3.png';"
			onmouseout="this.src='images/icons/logout1.png';"
			title='Logout' style="width:85%;height:8%"></a></li>   
				  <li> <a href='changePassword.php'><img
			src="images/icons/settings1.png" class='topbaricon'
			onmouseover="this.src='images/icons/settings3.png';"
			onmouseout="this.src='images/icons/settings1.png';"
			title='Settings' style="width:85%;height:8%"></a></li>
	<li>  <a href='profile.php?userid=<?php echo $_SESSION['userid'];?>'><img
			src="images/icons/profile1.png" class='topbaricon'
			onmouseover="this.src='images/icons/profile3.png';"
			onmouseout="this.src='images/icons/profile1.png';"
			title='Profile' style="width:85%;height:8%"></a> 
		  </li> 

		 <li>  <a href='inbox.php'><img
			src="images/icons/messages1.png" class='topbaricon'
			onmouseover="this.src='images/icons/messages3.png';"
			onmouseout="this.src='images/icons/messages1.png';"
			title='Messages' style="width:85%;height:8%"></a> </li>  

		 <li>  <a href='home.php'><img
			src="images/icons/home1.png" class='topbaricon'
			onmouseover="this.src='images/icons/home3.png';"
			onmouseout="this.src='images/icons/home1.png';"
			title='Home' style="width:85%;height:8%"></a> </li>  
                  </ul>
         

          
        </div>
  

		