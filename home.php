<?php
session_start();
$user_name=$_SESSION["name"];
if($user_name=="")
{
	header("location:sign_in.php");
}
?>
<html>
    <head>

        <link rel="stylesheet" href="css_style/site.css">
        <link rel="stylesheet" href="css_style/query.css">	
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="icon" href="image/alexander-putter-dQ-VS-tzRN8-unsplash.jpg" type="image/x-icon">
        <title>El Sadek Cars</title>
    </head>
    <body >
        <!--start section1-->
        <div id="section1"></div>
        <!--end section1-->


        <!--start header-->
        
        <header class="bg-one gap-h">
            <h2 class="co-one">El sadek</h2>
            <nav>
                <ul>
                    <li ><a class="co-two active" href="home.php">Home</a></li>
                    <li ><a class="co-two " href="insert.php">Insert</a></li>
                    <li ><a class="co-two" href="view.php">View</a></li>
                    <li ><a class="co-two" href="logout.php">Logout</a></li>
                    
                
                </ul>
            </nav>
        </header>
<!--end header-->

<!--start section2-->
        <div  class="section2 gap-h">
            <div class="box">
                <h2 >customer service</h2>
                <p>you can talk to any one of the customer service at the company , at any time , by the following number  <span class="co-one">454125</span> </p>
            </div>
            <div class="box">
                <h2>Maintentance</h2>
                <p>All the staff of the company on me have been ready to meet the customer`s proplem face , and we have the best engineers in Egypt , for automotive</p>
            </div>
            <div class="box">
                <h2>Drumbers Drivers</h2>
                <p>we have a lot of drivers who are able to teach you how to drive? at any circumstrance , just contant with us at the following number <span class="co-one">114455</span> , we will send you our representstive where you are </p>
            </div>
        </div>
        
<!--end section2-->
        
<!--start sectio3-->
        <div class="section3 gap-h">
            <div class="img">
                <div><img src="image/side.jpg"></div>
            </div>
            <div class="text">
                <h2 class="co-one">About Us</h2>
                <hr>
                <p>Cars is a 2006 American computer-animated road-comedy film produced by Pixar Animation Studios and released by Walt Disney Pictures. Directed and co-written by John Lasseter from a screenplay by Dan Fogelman, it was Pixar's final independently produced film before its purchase by Disney in January 2006. Set in a world populated entirely by anthropomorphic talking cars and other vehicles, the film stars the voices of Owen Wilson, Paul Newman (in his final acting role), Bonnie Hunt, Larry the Cable Guy, Tony Shalhoub, Cheech Marin, Michael Wallis, George Carlin, Paul Dooley, Jenifer Lewis, Guido Quaroni, Michael Keaton, Katherine Helmond, John Ratzenberger and Richard Petty. Race car drivers Dale Earnhardt Jr., Mario Andretti, Michael Schumacher and car enthusiast Jay Leno (as "Jay Limo") voice themselves.</p>
                <div class="icons">
                    <div class="box">
                        <h2 class="co-one fa fa-car"> Car Design</h2>
                        <p>We have many engineers who are able to design many shapes every year to compete globally, not just locally. </p>
                    </div>
                    <div class="box">
                        <h2  class="co-one fa fa-telegram"> Telegram</h2>
                        <p>You can communicate with us via telegram and through the social media sites </p>
                    </div>
                    <div class="box">
                        <h2  class="co-one fa fa-envelope-o"> Message</h2>
                        <p>You can send the message via G-mail or speak to a company representative </p>
                    </div>
                    <div class="box">
                        <h2  class="co-one fa fa-id-card-o"> Drivers Licence</h2>
                        <p>After learning to drive and be able to drive under any circumstances, we will assist you in obtaining your driving license. </p>
                    </div>
                </div>
            </div>
        </div>
        
<!--end section3-->
        
<!--start section4-->
        
        <div class="section4 gap-h">
            <div class="text" id="section44">
                <h2 class="co-one">About Us</h2>
                <hr>
                <p>Cars premiered on May 26, 2006 at Lowe's Motor Speedway in Concord, North Carolina and was theatrically released in the United States on June 9, 2006 to critical and commercial success, grossing $462 million worldwide against a budget of $120 million. It was nominated for two Academy Awards including Best Animated Feature, but lost to Happy Feet (but won both the Annie Award for Best Animated Feature and the Golden Globe Award for Best Animated Feature Film). The film was released on DVD on November 7, 2006 and on Blu-ray in 2007. The film was accompanied by the short One Man Band for its theatrical and home media releases.</p>
                <a href="#section44"><button>Contact me</button></a>
            </div>
            <div class="progress1">
                <p>high level</p>
                <div class="progress ">
                    <div class="progress-bar-danger progress-bar" style="width: 50%">
                        completed 50%
                    </div>
                </div>
                <p>mediam level</p>
                <div class="progress">
                    <div class="progress-bar-danger progress-bar" style="width: 70%">
                        completed 70%
                    </div>
                </div>
                <p>low level</p>
                <div class="progress">
                    <div class="progress-bar-danger progress-bar" style="width: 90%">
                        completed 90%
                    </div>
                </div>
                <p>Profits</p>
                <div class="progress ">
                    <div class="progress-bar-danger progress-bar" style="width: 60%">
                        completed 60%
                    </div>
                </div>
                <p>Losses</p>
                <div class="progress ">
                    <div class="progress-bar-danger progress-bar" style="width: 20%">
                        completed 20%
                    </div>
                </div> 
                </div>
            </div>
        </div>
        
<!--end section4-->
        
<!--start section5-->
        <div class="section5 gap-h" id="Resume">
            <div class="text">
                <h2 >Resume</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ,</p>
                <a href="#Resume"><button>Read moore</button></a>
            </div>
        </div>
        
<!--end section5-->
        
<!--start section6-->
        
        <div class="section6 gap-h">
            <div class="text">
                <h2 class="co-one fa fa-graduation-cap " style="font-size: 30px">My Eduction</h2>
                <hr>
                <p>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and directed research. Education frequently takes place under the guidance of educators, however learners can also educate themselves.[1] Education can take place in formal or informal settings and any experience that has a formative effect on the way one thinks, feels, or acts may be considered educational. The methodology of teaching is called pedagogy.</p>
            </div>
            <div class="text2">
                <div class="box1">
                    <h3>Design Diploma</h3>
                    <p>El Sadek Company /june 2019-precent</p>
                    <p class="p">20days</p>
                </div>
                <div class="box2">
                    <p>We have many engineers who are able to design many shapes every year to compete globally, not just locally</p>
                    <h3> Drivers Diploma</h3>
                    <p>El Sadek Company /june 2019-precent</p>
                    <p class="p">10days</p>
                </div>
                <div class="box3">
                    <p>After learning to drive and be able to drive under any circumstances, we will assist you in obtaining your driving license.</p>
                </div>
            </div>
        </div>
        
<!--end section6-->
        
<!--start section7-->
        
        <div class="section7 gap-h">
            <div class="text">
                <h2 class="co-one fa fa-briefcase" style="font-size: 30px"> Work Experience</h2>
                <hr>
                <p>Experience is the first person effects or influence of an event or subject gained through involvement in or exposure to it.[1] The term does not imply that useful or long term learning, or the acquisition of skills necessarily takes place as a consequence of the experience, though the two are often associated, and experience is often used as a proxy for competence. A large amount of learning of knowledge and skills is associated with experience, and experience is a necessary, though not always sufficient component of the learning of physical skills. Terms in philosophy such as "empirical knowledge" or "a posteriori knowledge" are used to refer to knowledge based on experience.</p>
            </div>
            <div class="text2">
                <div class="box1">
                    <h3>Enginear</h3>
                    <p>El Sadek Company /june 2016-precent</p>
                    <p class="p">15days</p>
                </div>
                <div class="box2">
                    <p>We have many engineers who are able to design many shapes every year to compete globally, not just locally</p>
                    <h3> Workers</h3>
                    <p>El Sadek Company /june 2019-precent</p>
                    <p class="p">30days</p>
                </div>
                <div class="box3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies Lorem ipsum dolor sit amet</p>
                </div>
            </div>
        </div>
        
<!--end section7-->
        
<!--start section8-->
        <div class="section8 gap-h">
            <div class="text">
                <p>Cars have controls for driving, parking, passenger comfort, and a variety of lights. Over the decades, additional features and controls have been added to vehicles, making them progressively more complex, but also more reliable and easier to operate.</p>
                <h3>El Sadek</h3>
            </div>
        </div>
        
<!--end section8-->
        
<!--start section9-->
        
        <div class="section9 gap-h">
            <div class="text">
                <h2>Portfolio</h2>
                <p>Cars have controls for driving, parking, passenger comfort, and a variety of lights. Over the decades, additional features and controls have been added to vehicles, making them progressively more complex, but also more reliable and easier to operate. </p>
            </div>
            <div class="picture">
                <div class="box">
                    <div><img src="image/BMW.jpg"></div>
                </div>
                <div class="box">
                    <div><img src="image/india.jpg" height="220 "></div>
                </div>
                <div class="box">
                    <div><img src="image/maruti.jpg"></div>
                </div>
                <div class="box">
                    <div><img src="image/kia.jpg"></div>
                </div>
                <div class="box">
                    <div><img src="image/mahindra.jpg"></div>
                </div>
                <div class="box">
                    <div><img src="image/ferrari.jpg"></div>
                </div>
               
            </div>
        </div>
        
<!--end section9-->
        
<!--start section10-->
        
        <div class="section10 gap-h">
            <div class="text">
                <h2>Contact Me</h2>
                <p>The Con Act, as amended, currently serves as the authorizing statute for USDA’s agricultural and rural development lending programs. The Act includes current authority for the following three major Farm Service Agency (FSA) farm loan programs: farm ownership loans, farm operating loans, and emergency disaster loans. </p>
                <p>122 24rd streat Est</p>
                <p>Egypt</p>
                <p>S7K 1Rg</p>
                <span><b>Email:</b>info@gmail.com</span><br>
                <span><b>Phone:</b>012346982265</span>
            </div>
            <div class="form" id="contact">
                <input class="form-control" type="text" name="name" placeholder="type your name"><br><br>
                <input class="form-control" type="text" name="email" placeholder="type your Email"><br><br>
                <textarea class="form-control" placeholder="type your massage"></textarea><br><br>
                
                <a href="#contact"><button>Contact Us</button></a>
            </div>
        </div>
        <!--start html code footer-->

        <footer>
            <p>&copy; Copyright by AHMED HASSAN</p>
            <ul>
                <a href="#"><li class="fa fa-facebook "></li></a>
                <a href="#"><li class="fa fa-twitter "></li></a>
                <a href="#"><li class="fa fa-google-plus"></li></a>
            
            </ul>
        </footer>
<!--end html code footer-->
    </body>

</html>