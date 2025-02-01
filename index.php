<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f6f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .hero {
            background: linear-gradient(45deg, #007bff, #00d2ff);
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: bold;
        }

        .navbar {
            padding: 1rem;
        }

        .navbar-nav .nav-link {
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .about,
        .projects,
        .contact {
            padding: 80px 0;
        }

        .about h2,
        .projects h2,
        .contact h2 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 40px;
        }

        .about p {
            font-size: 18px;
            line-height: 1.6;
        }

        .project-card {
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .project-card:hover {
            transform: scale(1.05);
        }

        .project-card img {
            border-radius: 10px;
            max-width: 100%;
        }

        .contact-form .form-label {
            font-weight: 600;
        }

        .contact-form input,
        .contact-form textarea {
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
        }

        .contact-form button {
            background-color: #007bff;
            color: white;
            font-weight: 600;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .social-icons a {
            color: white;
            margin: 0 10px;
            font-size: 24px;
        }

        .social-icons a:hover {
            color: #00d2ff;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 36px;
            }

            .project-card {
                margin-bottom: 20px;
            }

            .about p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">My Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <header class="hero">
        <div class="container">
            <h1>Welcome to My Portfolio</h1>
            <p>Web Developer | PHP | JavaScript | AJAX</p>
        </div>
    </header>
    
    <!-- About Section -->
    <section id="about" class="about container">
        <h2>About Me</h2>
        <p>I am a passionate web developer skilled in PHP, JavaScript, and AJAX. I enjoy building responsive, dynamic websites and solving complex problems to create efficient solutions.</p>
    </section>
    
    <!-- Projects Section -->
    <section id="projects" class="projects container">
        <h2>My Projects</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card project-card">
                    <img src="https://via.placeholder.com/400x250" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title">Project 1</h5>
                        <p class="card-text">A dynamic website built using PHP and AJAX. Click below to view the project.</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card project-card">
                    <img src="https://via.placeholder.com/400x250" alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title">Project 2</h5>
                        <p class="card-text">An interactive dashboard for real-time data management. Click below to see it in action.</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section id="contact" class="contact container">
        <h2>Contact Me</h2>
        <form class="contact-form" id="contactForm">
            <div class="mb-3">
                <label class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Your Message</label>
                <textarea class="form-control" id="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
        <div id="responseMessage" class="mt-3"></div>
    </section>
    
    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 My Portfolio | All Rights Reserved</p>
        <div class="social-icons">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-github"></a>
        </div>
    </footer>
    
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#contactForm').submit(function(event) {
                event.preventDefault();
                
                var name = $('#name').val();
                var email = $('#email').val();
                var message = $('#message').val();

                $.ajax({
                    url: 'contact_form_handler.php', 
                    type: 'POST',
                    data: { name: name, email: email, message: message },
                    success: function(response) {
                        $('#responseMessage').html('<div class="alert alert-success">' + response + '</div>');
                        $('#contactForm')[0].reset();  // Clear the form
                    },
                    error: function() {
                        $('#responseMessage').html('<div class="alert alert-danger">There was an error sending your message. Please try again later.</div>');
                    }
                });
            });
        });
    </script>
</body>
</html>
