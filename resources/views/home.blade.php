
@extends('layouts.homeLayout')

@section('title', 'Home')  

@section('content')
    <div id='content'>
        <!-- Hero Section -->
        <section id="home" class="hero">
            <div class="container">
                <h2>Hello, I'm <span>NISHOK KUMAR S</span></h2>
                <p>Full-Stack Developer & Web Pentester</p>
            </div>
        </section>

        <!-- About Me Section -->
        <section id="about" class="about">
            <div class="container">
                <h2>About Me</h2>
                <div class="about-content">
                    <div class="about-text">
                        <h3>Hello! I'm Nishok Kumar S</h3>
                        <p>I'm a Full-Stack Developer and Web Pentester with a passion for building secure and innovative web applications. With years of experience in both frontend and backend development, I aim to create functional and user-friendly digital experiences. I specialize in JavaScript, React, PHP, and MySQL, and am always exploring new technologies to expand my skill set.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="skills">
            <div class="container">
                <h2>Skills</h2>
                <div class="skills-content">
                    <div class="skill">
                        <h3>Frontend Development</h3>
                        <p>HTML, CSS, JavaScript, React, Bootstrap</p>
                    </div>
                    <div class="skill">
                        <h3>Backend Development</h3>
                        <p>Laravel, MySQL</p>
                    </div>
                    <div class="skill">
                        <h3>Programming Language</h3>
                        <p>C++, Python, PHP</p>
                    </div>
                    <div class="skill">
                        <h3>Web Security</h3>
                        <p>Web Pentesting, Vulnerability Assessment, Secure Coding Practices</p>
                    </div>
                    <div class="skill">
                        <h3>Web Security Tools</h3>
                        <p>Burp Suite, Nmap, Wireshark, SQLMap, Hydra, ffuf</p>
                    </div>
                    <div class="skill">
                        <h3>Other</h3>
                        <p>Git, Linux Administration</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact">
            <div class="container">
                <h2>Contact Me</h2>
                <p>If you have any questions or just want to say hello, feel free to reach out!</p>
                
                <div class="contact-content">
                    <!-- Contact Information -->
                    <div class="contact-info">
                        <h3>Contact Information</h3>
                        <p><strong>Email:</strong> nishokkumar96@gmail.com</p>
                        <p><strong>Phone:</strong> +91 6382422061</p>
                        <p><strong>Address:</strong> Chennai, India</p>
                    </div>

                    <!-- Contact Form -->
                    <div class="contact-form">
                        <form action="submit_form.php" method="post">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" required>

                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>

                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject">

                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" required></textarea>

                            <button type="submit" class="btn-submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
