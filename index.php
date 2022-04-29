<?php
$page ='home';
include '_header.php';
?>
		<!-- end:fh5co-header -->
		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
			   	<li style="background-image: url(images/project-1.jpg);">
			   	</li>
			   	<li style="background-image: url(images/autobuz.png);">
			   	</li>
			   	<li style="background-image: url(images/drumuri.png);">
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="fh5co-section">
			<div class="grid-project-section">
				<a href="cultura.php">
					<img src="images/project-1.jpg" alt="Project" class="img-responsive">
					<div class="desc text-center">
						<h2>Cultura</h2>
					</div>
				</a>
			</div>
			<div class="grid-project-section">
				<a href="geografie.php">
					<img src="images/geografie.png" alt="Project" class="img-responsive">
					<div class="desc text-center">
						<h2>Geografie</h2>
					</div>
				</a>
			</div>
			<div class="grid-project-section">
				<a href="transport.php">
					<img src="images/autobuz.png" alt="Project" class="img-responsive">
					<div class="desc text-center">
						<h2>Transport</h2>
					</div>
				</a>
			</div>
		</div>
<?php
include '_footer.php';
?>