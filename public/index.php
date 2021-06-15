<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vadim Golban CV</title>

    <link rel="stylesheet" href="assets/style.css">

</head>
    <body>
        <header>
            <h1>Vadim Golban CV</h1>    
            <nav id="navigation">
                <ul>
                    <li><a href="#about_me">About me</a></li>
					<li><a href="#skills">Skills</a></li>
                    <li><a href="#expirience">Expirience</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>  
        </header>    

	<section id="main">
			<section id="about_me">
				<p>
					Hello My Name is Vadim, I'm working as QA Engineer, and I'm curious about IT and Web Developing. 
				</p>
				<img id="avatar_img"src="assets/images/my_avatar_image.jpg" alt="Vadim_Golban_avatar_image" width="250px" height="250px">
			</section>

			<section id="skills">
				<h2>My Skills</h3>
				<ul>
					<li>Html and CSS</li>
					<li>Manual Testing</li>
					<li>Automation Testing</li>
					<li>Performance Testing</li>
					<li>PHP</li>
					<li>MySql</li>
					<li>Laravel</li>
				</ul>
			</section>	
			
			<section id="expirience">
				<h2>My expirience</h3>
				<p>10/2019 - now, QA Engineer at Picanova Group</p>
                <p>10/2018 - 04.2019, Endava Testing Course</p>
				<p>02/2016 - 07/2016, Internship at Optimum Web</p>
			</section>		

           <section id="contact">
		         <h2>Contact</h2>
				    <ul>
                        <li>Tel:<a href="tel:+1234567890">+12345690</a></li>
                        <li>Email: vadimgolban3000@gmail.com</li>
                        <li>Address: city Chisinau Drumul Viilor str.</li>
                        <li>Linkedin profile link: https://www.linkedin.com/in/vadim-golban-27a61b156/</li>
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
                <?php echo "Today is " . date("Y/m/d H:i:s"); ?>
			</section>
	</footer>
    </body>
</html>

