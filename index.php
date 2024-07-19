<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCC Cadets</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <div class="logo">NCC Cadets</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#activities">Activities</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#join">Join Us</a></li>
                <li><a href="#contact">Contact Us</a></li>
        
                <?php
                if (isset($_COOKIE['user_id'])) {
                    $user_email = $_COOKIE['user_email'];
                    echo '
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link">Profile</a>
                            <div class="dropdown-content">
                                <p class="dropdown-email">' . $user_email . '</p>
                                <a href="#">Cart</a>
                                <a href="login/logout.php">Logout</a>
                            </div>
                        </li>
                    ';
                } else {
                    echo '<li><a href="login/index.php">Login</a></li>';
                }
                ?>
            </ul>
        </nav>
        <div class="hero">
            <h1>Join the Pride of Nation – NCC Cadets</h1>
            <p>Empowering Youth, Building Leaders</p>
        </div>
    </header>
    
    
    

    <section id="about" class="about">
        <div class="container">
            <h2>About Us</h2>
            <p>
                The National Cadet Corps (NCC) is a youth development movement. It has enormous potential for nation-building. The NCC provides opportunities to the youth of the country for their all-round development with a sense of Duty, Commitment, Dedication, Discipline, and Moral Values so that they become able leaders and useful citizens.
            </p>
            <h3>Our Mission</h3>
            <p>
                To develop character, comradeship, discipline, leadership, secular outlook, spirit of adventure, and ideals of selfless service amongst young citizens.
            </p>
            <h3>Benefits</h3>
            <ul>
                <li>Leadership Skills</li>
                <li>Discipline</li>
                <li>Patriotism</li>
                <li>Community Service</li>
                <li>Adventure and Sports</li>
            </ul>
        </div>
    </section>
    <section id="activities" class="activities">
        <div class="container">
            <h2>Our Activities</h2>
            <div class="activity-grid">
                <div class="activity-item">
                    <img src="drill.jpg" alt="Drill">
                    <h3>Drill Practice</h3>
                    <p>Regular drill practice sessions to instill discipline and coordination among cadets.</p>
                </div>
                <div class="activity-item">
                    <img src="camp.jpg" alt="Camp">
                    <h3>Camps</h3>
                    <p>Annual camps to provide cadets with experiences in camping, trekking, and other outdoor activities.</p>
                </div>
                <div class="activity-item">
                    <img src="service.jpg" alt="Community Service">
                    <h3>Community Service</h3>
                    <p>Engaging in community service projects to give back to society and develop a sense of responsibility.</p>
                </div>
                <div class="activity-item">
                    <img src="sports.jpg" alt="Sports">
                    <h3>Sports</h3>
                    <p>Participation in various sports to promote physical fitness and teamwork among cadets.</p>
                </div>
            </div>
            <a href="#more-activities" class="btn">Explore More Activities</a>
        </div>
    </section>
    <section id="gallery" class="gallery">
        <div class="container">
            <h2>Gallery</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="image1.jpg" alt="Cadets in Action">
                </div>
                <div class="gallery-item">
                    <img src="image2.jpg" alt="Parade">
                </div>
                <div class="gallery-item">
                    <img src="image3.jpg" alt="Camp Activity">
                </div>
                <div class="gallery-item">
                    <img src="image4.jpg" alt="Community Service">
                </div>
                <div class="gallery-item">
                    <img src="image5.jpg" alt="Sports Event">
                </div>
                <div class="gallery-item">
                    <img src="image6.jpg" alt="Trekking">
                </div>
            </div>
        </div>
    </section>
    <section id="join" class="join-us">
        <div class="container">
            <h2>Join Us</h2>
            <p>Become a part of the NCC Cadets and contribute to the nation's development while enhancing your skills and leadership qualities.</p>
            <form class="join-form">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </section>
    <section id="testimonials" class="testimonials">
        <div class="container">
            <h2>Testimonials</h2>
            <div class="testimonial-grid">
                <div class="testimonial-item">
                    <p class="quote">"Joining the NCC was one of the best decisions of my life. The experiences and skills I've gained are invaluable."</p>
                    <p class="author">- Cadet A</p>
                </div>
                <div class="testimonial-item">
                    <p class="quote">"The NCC has taught me discipline, leadership, and the importance of serving my country. I highly recommend it to anyone."</p>
                    <p class="author">- Cadet B</p>
                </div>
                <div class="testimonial-item">
                    <p class="quote">"Through NCC, I have made lifelong friends and developed skills that will benefit me in all areas of life."</p>
                    <p class="author">- Cadet C</p>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-left">
                    <h3>Contact Information</h3>
                    <p>Address: 123 NCC Street, City, State, ZIP</p>
                    <p>Phone: (123) 456-7890</p>
                    <p>Email: <a href="mailto:info@ncccadets.com">info@ncccadets.com</a></p>
                    <div class="social-media">
                        <a href="#" class="social-icon">Facebook</a>
                        <a href="#" class="social-icon">Twitter</a>
                        <a href="#" class="social-icon">Instagram</a>
                        <a href="#" class="social-icon">LinkedIn</a>
                    </div>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243647.027787582!2d77.04949093183594!3d28.52728027305461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce2803c019ebd%3A0x9e0b1d9ae7b5c3b3!2sPunjab%20Engineering%20College!5e0!3m2!1sen!2sin!4v1651419151042!5m2!1sen!2sin" width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="footer-right">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#activities">Activities</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#join">Join Us</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    <section class="footer-bottom">
        <div class="container">
            <p>© 2024 NCC Cadets. All rights reserved.</p>
        </div>
    </section>
    
</body>
</html>
