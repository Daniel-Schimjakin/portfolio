<!doctype html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Datenbank</title>
<link href="style.css" rel="stylesheet" type="text/css">

<!--Fonts-->	
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Monoton&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

<!--CSS Swiper-->	
<link href="swiper-bundle.min.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";

		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		echo "Connected successfully";
	?>
	
	
	<!--Navigation-->
	<nav class="navigation">
		<input type="checkbox" class="menu-btn" id="menu-btn">
		<label for="menu-btn" class="menu-icon">
			<span class="nav-icon"></span>
		</label>
		
		<a href="index.html" class="logo">
			Movies<span>.hd</span>
		</a>
		
		<ul class="menu">
			<li><a href="#">Home</a></li>
			<li><a href="#">Genre</a></li>
			<li><a href="#">TV Shows</a></li>
			<li><a href="#">Movies</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
		
		<form action="" class="search-box">
			<input type="text" name="search" placeholder="Search..." class="search-input" required />
			<button type="submit">
				<i class="fas fa-search"></i>
			</button>
		</form>
	</nav>
	
	
	<section id="main-slider">
		
		<!-- Swiper -->
		
		<div class="swiper mySwiper">
			<div class="swiper-wrapper">
				
				<!--1------------------------------------>
				<div class="swiper-slide">
					<div class="main-slider-box">
						<a href="#" class="main-slider-overlay">
							<i class="fas fa-play"></i>
						</a>
						<div class="main-slider-img">
							<img src="Images/p-1.jpg" alt="Poster" />
						</div>

						<div class="main-slider-text">
							<div><span class="quality">Full HD</span></div>				

							<div class="bottom-text">
								<div class="movie-name">
									<span>2014</span>
									<strong>Paranormal Activity: The Marked Ones</strong>
								</div>

								<div class="category-rating">
									<div class="category">
										<a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
									</div>
									<div class="rating">
										5.2 <img src="Images/IMDb-icon.png" alt="imbd" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
				<!--2------------------------------------>
				<div class="swiper-slide">
					<div class="main-slider-box">
						<a href="#" class="main-slider-overlay">
							<i class="fas fa-play"></i>
						</a>
						<div class="main-slider-img">
							<img src="Images/p-2.jpg" alt="Poster" />
						</div>

						<div class="main-slider-text">
							<div><span class="quality">Full HD</span></div>				

							<div class="bottom-text">
								<div class="movie-name">
									<span>2014</span>
									<strong>Paranormal Activity: The Marked Ones</strong>
								</div>

								<div class="category-rating">
									<div class="category">
										<a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
									</div>
									<div class="rating">
										5.2 <img src="Images/IMDb-icon.png" alt="imbd" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!--3------------------------------------>
				<div class="swiper-slide">
					<div class="main-slider-box">
						<a href="#" class="main-slider-overlay">
							<i class="fas fa-play"></i>
						</a>
						<div class="main-slider-img">
							<img src="Images/p-3.jpg" alt="Poster" />
						</div>

						<div class="main-slider-text">
							<div><span class="quality">Full HD</span></div>				

							<div class="bottom-text">
								<div class="movie-name">
									<span>2014</span>
									<strong>Paranormal Activity: The Marked Ones</strong>
								</div>

								<div class="category-rating">
									<div class="category">
										<a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
									</div>
									<div class="rating">
										5.2 <img src="Images/IMDb-icon.png" alt="imbd" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!--4------------------------------------>
				<div class="swiper-slide">
					<div class="main-slider-box">
						<a href="#" class="main-slider-overlay">
							<i class="fas fa-play"></i>
						</a>
						<div class="main-slider-img">
							<img src="Images/p-4.jpg" alt="Poster" />
						</div>

						<div class="main-slider-text">
							<div><span class="quality">Full HD</span></div>				

							<div class="bottom-text">
								<div class="movie-name">
									<span>2014</span>
									<strong>Paranormal Activity: The Marked Ones</strong>
								</div>

								<div class="category-rating">
									<div class="category">
										<a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
									</div>
									<div class="rating">
										5.2 <img src="Images/IMDb-icon.png" alt="imbd" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!--5------------------------------------>
				<div class="swiper-slide">
					<div class="main-slider-box">
						<a href="#" class="main-slider-overlay">
							<i class="fas fa-play"></i>
						</a>
						<div class="main-slider-img">
							<img src="Images/p-5.jpg" alt="Poster" />
						</div>

						<div class="main-slider-text">
							<div><span class="quality">Full HD</span></div>				

							<div class="bottom-text">
								<div class="movie-name">
									<span>2014</span>
									<strong>Paranormal Activity: The Marked Ones</strong>
								</div>

								<div class="category-rating">
									<div class="category">
										<a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
									</div>
									<div class="rating">
										5.2 <img src="Images/IMDb-icon.png" alt="imbd" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!--6------------------------------------>
				<div class="swiper-slide">
					<div class="main-slider-box">
						<a href="#" class="main-slider-overlay">
							<i class="fas fa-play"></i>
						</a>
						<div class="main-slider-img">
							<img src="Images/p-6.jpg" alt="Poster" />
						</div>

						<div class="main-slider-text">
							<div><span class="quality">Full HD</span></div>				

							<div class="bottom-text">
								<div class="movie-name">
									<span>2014</span>
									<strong>Paranormal Activity: The Marked Ones</strong>
								</div>

								<div class="category-rating">
									<div class="category">
										<a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
									</div>
									<div class="rating">
										5.2 <img src="Images/IMDb-icon.png" alt="imbd" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
	</section>
	
	<!--btns------------------>
	<div class="slider-btns">
		<div class="swiper-button-prev"></div>
      	<div class="swiper-button-next"></div>
	</div>
	
	
	
	<!--Latest-Movies----------------->
	<section id="latest">
		<div class="latest-heading">
			<h1>Latest Moives</h1>
		</div>
		
		<div class="post-container">
			
			<!--post-box-1------------->
			<div class="post-box">
				<div class="post-img">
					<img src="Images/post-1.jpg" alt="poster" />
				</div>
				
				<div class="main-slider-text">
					<div><span class="quality">Full HD</span></div>				

					<div class="bottom-text">
						<div class="movie-name">
							<span>2014</span>
							<a href="#">Paranormal Activity: The Marked Ones</a>
						</div>

						<div class="category-rating">
							<div class="category">
								<a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
							</div>
							<div class="rating">
								5.2 <img src="Images/IMDb-icon.png" alt="imbd" />
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--post-box-2------------->
			<div class="post-box">
				<div class="post-img">
					<img src="Images/post-2.jpg" alt="poster" />
				</div>
				
				<div class="main-slider-text">
					<div><span class="quality">Full HD</span></div>				

					<div class="bottom-text">
						<div class="movie-name">
							<span>2014</span>
							<a href="#">Paranormal Activity: The Marked Ones</a>
						</div>

						<div class="category-rating">
							<div class="category">
								<a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
							</div>
							<div class="rating">
								5.2 <img src="Images/IMDb-icon.png" alt="imbd" />
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--post-box-3------------->
			<div class="post-box">
				<div class="post-img">
					<img src="Images/post-3.jpg" alt="poster" />
				</div>
				
				<div class="main-slider-text">
					<div><span class="quality">Full HD</span></div>				

					<div class="bottom-text">
						<div class="movie-name">
							<span>2014</span>
							<a href="#">Paranormal Activity: The Marked Ones</a>
						</div>

						<div class="category-rating">
							<div class="category">
								<a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
							</div>
							<div class="rating">
								5.2 <img src="Images/IMDb-icon.png" alt="imbd" />
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--post-box-4------------->
			<div class="post-box">
				<div class="post-img">
					<img src="Images/post-4.jpg" alt="poster" />
				</div>
				
				<div class="main-slider-text">
					<div><span class="quality">Full HD</span></div>				

					<div class="bottom-text">
						<div class="movie-name">
							<span>2014</span>
							<a href="#">Paranormal Activity: The Marked Ones</a>
						</div>

						<div class="category-rating">
							<div class="category">
								<a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
							</div>
							<div class="rating">
								5.2 <img src="Images/IMDb-icon.png" alt="imbd" />
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--post-box-5------------->
			<div class="post-box">
				<div class="post-img">
					<img src="Images/post-5.jpg" alt="poster" />
				</div>
				
				<div class="main-slider-text">
					<div><span class="quality">Full HD</span></div>				

					<div class="bottom-text">
						<div class="movie-name">
							<span>2014</span>
							<a href="#">Paranormal Activity: The Marked Ones</a>
						</div>

						<div class="category-rating">
							<div class="category">
								<a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
							</div>
							<div class="rating">
								5.2 <img src="Images/IMDb-icon.png" alt="imbd" />
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--post-box-6------------->
			<div class="post-box">
				<div class="post-img">
					<img src="Images/post-6.jpg" alt="poster" />
				</div>
				
				<div class="main-slider-text">
					<div><span class="quality">Full HD</span></div>				

					<div class="bottom-text">
						<div class="movie-name">
							<span>2014</span>
							<a href="#">Paranormal Activity: The Marked Ones</a>
						</div>

						<div class="category-rating">
							<div class="category">
								<a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
							</div>
							<div class="rating">
								5.2 <img src="Images/IMDb-icon.png" alt="imbd" />
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--post-box-7------------->
			<div class="post-box">
				<div class="post-img">
					<img src="Images/post-7.jpg" alt="poster" />
				</div>
				
				<div class="main-slider-text">
					<div><span class="quality">Full HD</span></div>				

					<div class="bottom-text">
						<div class="movie-name">
							<span>2014</span>
							<a href="#">Paranormal Activity: The Marked Ones</a>
						</div>

						<div class="category-rating">
							<div class="category">
								<a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
							</div>
							<div class="rating">
								5.2 <img src="Images/IMDb-icon.png" alt="imbd" />
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--post-box-8------------->
			<div class="post-box">
				<div class="post-img">
					<img src="Images/post-8.jpg" alt="poster" />
				</div>
				
				<div class="main-slider-text">
					<div><span class="quality">Full HD</span></div>				

					<div class="bottom-text">
						<div class="movie-name">
							<span>2014</span>
							<a href="#">Paranormal Activity: The Marked Ones</a>
						</div>

						<div class="category-rating">
							<div class="category">
								<a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
							</div>
							<div class="rating">
								5.2 <img src="Images/IMDb-icon.png" alt="imbd" />
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--post-box-9------------->
			<div class="post-box">
				<div class="post-img">
					<img src="Images/post-9.jpg" alt="poster" />
				</div>
				
				<div class="main-slider-text">
					<div><span class="quality">Full HD</span></div>				

					<div class="bottom-text">
						<div class="movie-name">
							<span>2014</span>
							<a href="#">Paranormal Activity: The Marked Ones</a>
						</div>

						<div class="category-rating">
							<div class="category">
								<a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
							</div>
							<div class="rating">
								5.2 <img src="Images/IMDb-icon.png" alt="imbd" />
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--post-box-10------------->
			<div class="post-box">
				<div class="post-img">
					<img src="Images/post-10.jpg" alt="poster" />
				</div>
				
				<div class="main-slider-text">
					<div><span class="quality">Full HD</span></div>				

					<div class="bottom-text">
						<div class="movie-name">
							<span>2014</span>
							<a href="#">Paranormal Activity: The Marked Ones</a>
						</div>

						<div class="category-rating">
							<div class="category">
								<a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
							</div>
							<div class="rating">
								5.2 <img src="Images/IMDb-icon.png" alt="imbd" />
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--post-box-11------------->
			<div class="post-box">
				<div class="post-img">
					<img src="Images/post-11.jpg" alt="poster" />
				</div>
				
				<div class="main-slider-text">
					<div><span class="quality">Full HD</span></div>				

					<div class="bottom-text">
						<div class="movie-name">
							<span>2014</span>
							<a href="#">Paranormal Activity: The Marked Ones</a>
						</div>

						<div class="category-rating">
							<div class="category">
								<a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
							</div>
							<div class="rating">
								5.2 <img src="Images/IMDb-icon.png" alt="imbd" />
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--post-box-12------------->
			<div class="post-box">
				<div class="post-img">
					<img src="Images/post-12.jpg" alt="poster" />
				</div>
				
				<div class="main-slider-text">
					<div><span class="quality">Full HD</span></div>				

					<div class="bottom-text">
						<div class="movie-name">
							<span>2014</span>
							<a href="#">Paranormal Activity: The Marked Ones</a>
						</div>

						<div class="category-rating">
							<div class="category">
								<a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
							</div>
							<div class="rating">
								5.2 <img src="Images/IMDb-icon.png" alt="imbd" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--page-number-------------------->
		<div class="page-number">
			<a href="#" class="page-active">1</a>
			<a href="#">2</a>
			<a href="#">3</a>
			...
			<a href="#">100</a>
		</div>
	</section>
	
	
	<!-- footer -->
	
	<footer>
		<a href="index.html" class="logo">
			Movies<span>hd</span>
		</a>
		
		<span class="copyright">
			Copyright 2021 - Daniel Schimjakin
		</span>
	</footer>
	
	<!-- Swiper -->
	<script src="js/swiper-bundle.min.js"></script>
	
	<!-- jQuery -->
	<script src="js/jQuery.js"></script>
	
    <script>
		
		/*-- fixed-menu-btn --*/
		$(window).scroll(function(){
			if($(document).scrollTop() > 20){
				$('.navigation').addClass('fix-icon');
			}
			else{
				$('.navigation').removeClass('fix-icon');
			}
		});
		
		/*-- Initialize Swipe --*/
		var swiper = new Swiper(".mySwiper", {
			slidesPerView: 1,
		  	spaceBetween: 10,
			
			pagination: {
				el: ".swiper-pagination",
          		clickable: true,
			},
		  	autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			navigation: {
          		nextEl: ".swiper-button-next",
          		prevEl: ".swiper-button-prev",
        	},
		  	
			breakpoints: {
          		640: {
          			slidesPerView: 2,
          			spaceBetween: 20,
        		},
			
				768: {
            		slidesPerView: 2,
            		spaceBetween: 40,
          		},
          
				1024: {
            		slidesPerView: 3,
            		spaceBetween: 50,
          		},
        	},
		});
		

    </script>
	
</body>
</html>
