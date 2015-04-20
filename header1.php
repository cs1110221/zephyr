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
		</div>