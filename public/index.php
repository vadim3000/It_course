<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vadim Golban CV</title>

	    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
		<!-- <link rel="stylesheet" href="assets/style.css"> -->
</head>
    <body>
	<div class="container">
        <header>
			<div class="row">
				<h1>Vadim Golban CV</h1>    
				<nav id="navigation">
				<!-- <div class="container-fluid"> -->
				<ul>
						<li><a href="#about_me">About me</a></li>
						<li><a href="#education">Education</a></li>
						<li><a href="#skills">Skills</a></li>
						<li><a href="#expirience">Expirience</a></li>
						<li><a href="#my_work">My work</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</nav>
			</div> 
        </header>    

		<section id="main">
			<div class="row">
			<section id="about_me">
				<p>
					Hello My Name is Vadim, I'm working as QA Engineer, and I'm curious about IT and Web Developing. 
				</p>
			</div>	
		</section>
            
		<section id="education">
			<div class="row">
				<div class="col-sm-8">
					<h2>My Education</h2>
					<ul class="list-group-flush">
							<li class="list-group-item">State University of Moldova, Faculty of Economics, specialty  "Business & Management".</li>
							<li class="list-group-item">Master degree. Academy of Economic Studies of Moldova, specialty “Marketing Management”</li>
							<li class="list-group-item">"Endava Testing course”</li>
						</ul>
				</div>
				<div class="col-sm-4">
					<div class="card" style="width: 18rem;">
						<img src="assets/images/my_avatar_image.jpg" class="card-img-top" alt="Vadim_Golban_avatar_image"">
						<div class="card-body">
							<p class="card-text">Vadim Golban QA Engineer</p>
						</div>
					</div>
				</div>
			</div>
		</section>	


			<section id="skills">
				<h2>My Skills</h2>
				<ul class="list-group-numbered">
					<li class="list-group-item">Html and CSS</li>
					<li class="list-group-item">Manual Testing</li>
					<li class="list-group-item">Automation Testing</li>
					<li class="list-group-item">Performance Testing</li>
					<li class="list-group-item">PHP</li>
					<li class="list-group-item">MySql</li>
					<li class="list-group-item">Laravel</li>
					<li class="list-group-item">Linux/Ubuntu_OS</li>
					<li class="list-group-item">Git</li>
				</ul>
			</section>	
		
			<section id="expirience">
				<h2>My expirience</h2>
				<p>10/2019 - now, QA Engineer at Picanova Group</p>
				<p>02/2016 - 07/2016, Internship at Optimum Web</p>
			</section>		

           
			<section id="my_work">
				<h2>My work examples:</h2>
				<ul>
					<li><a href="https://bitbucket.org/VadimGolban/mein_foto_automation_test/src/master/" target="_blank">Automation Framework, on Java and selenium</a></li>
					<li><a href="https://bitbucket.org/VadimGolban/project_news" target="_blank">News site project, based on Php Symfony Framework</a></li>
				</ul>
			</section>
			
			<section id="contact">
		         <h2>Contact</h2>
				 <ul class="list-group-flush">
                        <li class="list-group-item"><span class="contact-list">Tel:</span><a href="tel:+1234567890"> +12345690</a></li>
                        <li class="list-group-item"><span class="contact-list">Email:</span> vadimgolban3000@gmail.com</li>
                        <li class="list-group-item"><span class="contact-list">Address:</span> City Chisinau Drumul Viilor 111 str, apt 88</li>
                        <li class="list-group-item"><span class="contact-list">Social network:</span><a href="https://www.linkedin.com/in/vadim-golban-27a61b156/"> Linkedin profile link<a></li>
				    </ul>
		   </section>

<!-- Section video is not working for the moment -->
     <!-- <section id="main_video">
        <video controls="controls">
            <source src="https://vimeo.com/560554785" type="video/mp4"> 
        </video>
    </section>  -->

	</section>

    <footer id="footer">
			<section id="date">
                <p>
				<?php echo "Today is " . date("Y/m/d H:i:s"); ?>
                </p>
			</section>
	</footer>
	</div>

    </body>
</html>

