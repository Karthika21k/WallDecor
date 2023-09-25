<?php
if(isset($_post['submit'])){
    $mailowner:"karthikakamatchi051@gmail.com";
    $name=$_POST['name'];
    $number = $_post['number'];
    $email=$_post['email'];
    $date = $_post['date'];
    $subject=$_POST['subject'];
    $subject2="Submitted successfully!";
    $message="Your name: ".$name.",Wrote the following Message"."/n/n".$_POST['message'];
    $message2="Dear ".$name."/n/n"."Your appoinment fixed successfully";
    $headers="From: " .$email;
    $header2="FROM: ".$mailowner;
    $result= mail($mailowner,$subject, $message,$headers);
    $result2= mail($email,$subject2, $message2,$headers2);

}
$conn=mysqli_connect('localhost','root','',contact_db') or die('connection failed');

if(isset($_post['submit'])){
      $name=mysqli_real_escape_string($conn,$_post['name']);
      $number = $_post['number'];
      $email=mysqli_real_escape_string($conn,$_post['email']);
      $date = $_post['date']

      $insert=mysqli_query($conn,"INSERT INTO 'form'(name,email,number,date) VALUES('$name','$name','$number','$date')") or die('query failed');
      if($insert){
         $message[]= 'Appoinment fixed successfully!'
      }(else){
        $message[] ='Failed try again'
      }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
    <title> WALL DECOR </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="hos.css">
</head>
<body>
    <header class="header">
    <a href="#" class="logo"> <i class="fas"></i><strong>Wall</strong>Decor</a>
    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#services">Services</a>
        <a href="#designers">Popular designers</a>
        <a href="#appoinment">Appoinment</a>
        <a href="#review">Client reviews</a>
    </nav>
    <div id="menu-btn" class="fa-bars"></div>
    </header>
    <section class="home" id="home">
        <div class="image">
            <img src="dc2.jpg">
        </div>
        <div class="content">
            <h3>Take world's best design for your house</h3>
            <p> We have world's good designers for your home decors.We provide very low budget</p>
            </div>
        </section>
        <section class="services" id="services">
            <h1 class="heading">Our<span>Services</span></h1>
            <div class="box-container">
                <div class="box">
                    <i class="amp"></i>
                    <h3> sample designs</h3>
                    <p> We have experinced desingners. </p>
                    <a href="#" class="btn">See more<span class="right"></span></a>
                    </div>
                    <div class="box">
                        <i class="amb"></i>
                        <h3>50% Off</h3>
                        <p> We have provide 50% offer for your first order.</p>
                        <a href="#" class="btn">See more<span class="right"></span></a>
                        </div>
                        <div class="box">
                            <i class="amb"></i>
                            <h3>Exciting designs</h3>
                            <p> We have lot of designs.</p>
                            <a href="#" class="btn">See more<span class="right"></span></a>
                            </div>
            </div>
        </section>
<section class="designers" id="designers">
    <h1 class="heading">Our<span>Desingers</span></h1>
    <div class="box-container">

        <div class="box">
            <img src="des1.jpg" alt="">
            <h3>Mr.Harve</h3>
            <span>Expert</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            </div>

            <div class="box">
                <img src="des2.jpg" alt="">
                <h3>Mr.Eak</h3>
                <span>Expert</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                </div>
                <div class="box">
                    <img src="des3.jpg" alt="">
                    <h3>Mr.Mike</h3>
                    <span>Expert</span>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                    </div>
                    <div class="box">
                        <img src="des4.jpg" alt="">
                        <h3>Mr.John</h3>
                        <span>Expert</span>
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                        </div>
                        </div>
    </div>
</section>

<section class="appoinment" id="appoinment">
    <h1 class="heading"> <span>Appoinment</span>now</h1>

    <div class="row">
        <div class="image">
            </div>

            <form action="<?php echo $_SERVER['PHP_SELF];?>" method="post">

                <?php
                if(isset($message)){
                   foreach($message as $message){
                       echo '<p classs="message">'.$message.'</p>';
                   }
                }
           ?>
                <h3>For Appinment</h3>
                <input type="text" name="name" placeholder="your name" class="box">
                <input type="number" name="number" placeholder="your number" class="box">
                <input type="email" name="email" placeholder="your email" class="box">
                <input type="date" name="date" min="2023-09-01" max="2023-09-28" class="box">
                <input type="submit" name="submit" value="appoinment now" class="box">
                </form>
        </div>
    </section>
<section class="review" id="review">
    <h1 class="heading">Client's<span>reeview</span></h1>
    <div class="box-container">
        <div class="box">
            <img src="rew1.jpg">
            <h3> Wall Deocor</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Very good services from wall decor.</p>
            </div>
            <div class="box">
                <img src="rew2.jpg">
                <h3> Wall Deocor</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p> My home look very  beautiful thank you so much</p>
            </div>
            <div class="box">
                <img src="rev3.jpg">
                <h3> Wall Deocor</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p> Good work.</p>
            </div>
        </div>
</section>
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3> Our site</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i>home</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>about</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>service</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>review</a>
            </div>
            <div class="box">
                <h3> Our service</h3>
                <a href="#"> <i class="fas fa-chevron-right"></i>Wall desing</a>
                <a href="#"> <i class="fas fa-chevron-right"></i>Popular desingners</a>
                <a href="#"> <i class="fas fa-chevron-right"></i>Types of desings</a>
                <a href="#"> <i class="fas fa-chevron-right"></i>Price details</a>
                </div>
                <div class="box">
                    <h3> Our branches</h3>
                    <a href="#"> <i class="fas fa-chevron-right"></i>Chennai</a>
                    <a href="#"> <i class="fas fa-chevron-right"></i>Pune</a>
                    <a href="#"> <i class="fas fa-chevron-right"></i>Bengaluru</a>
                    <a href="#"> <i class="fas fa-chevron-right"></i>Punjab</a>
                    </div>
                    <div class="box">
                        <h3> Contact us</h3>
                        <a href="#"> <i class="fab fa-twitter"></i>Twitter</a>
                        <a href="#"> <i class="fab fa-instagram"></i>Instagram</a>
                        <a href="#"> <i class="fab fa-linkedin"></i>LinkedIn</a>
                        <a href="#"> <i class="fas fa-phone"></i>+91 809756454</a>
                        <a href="#"> <i class="fas fa-phone"></i>+91 9934267192</a>

                        </div>
                    </div>
</section>
<script src="hos.js"></script>
</body>
</html>