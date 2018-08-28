    <ul class="social-networks">
	</ul>
    
    <footer id="footer">
		<div class="copyrights">
			<div class="container">

				<div class="row">
					<div class="col6">
						<p> © Copyrights 2015 EMEDS . All Rights Reserved. </p>
					</div>
					<div class="col6">
						<ul class="social-links">
                        <?php 
						if(isset($_REQUEST['username']))
						{
						?>
                        <?php
                        $result = mysql_query("SELECT * FROM emeds_cus_pages INNER JOIN emeds_pages_default
                        ON emeds_pages_default.def_page_id=emeds_cus_pages.def_page_id WHERE emeds_cus_pages.site_id = '".$site_id."'");
                        $i=0;
                        while ($row = mysql_fetch_array($result)) 
                        {
                        ?>
                            <li><a href="<?php echo $row['page_short_code']; ?>?username=<?php echo $_REQUEST['username']; ?>&page_id=<?php echo $row['id']; ?>"><?php echo $row['page_name']; ?></a></li>
                        <?php
                        }
                        ?>
                        <?php
						}
						else
						{
						?>
                        
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="service.php">Services</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="practice.php">Our practice</a></li>
                            <li><a href="contact.php">Contact</a></li>
						<?php
						}
						?>
                        </ul>
					</div>
				</div>
				
			</div>
		</div>
		
	</footer>