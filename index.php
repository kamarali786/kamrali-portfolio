<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .hero {
            background: #007bff;
            color: white;
            padding: 50px 0;
        }

        .project-card {
            transition: transform 0.3s;
        }

        .project-card:hover {
            transform: scale(1.05);
        }

        .card {
            margin-bottom: 20px;
        }

        .container {
            max-width: 1140px;
        }

        footer {
            background-color: #333;
            color: white;
        }

        .navbar-nav .nav-link {
            padding: 10px;
        }

        .form-label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
    
    <header class="hero text-center">
        <div class="container">
            <h1>Welcome to My Portfolio</h1>
            <p>Web Developer | PHP | JavaScript | AJAX</p>
        </div>
    </header>
    
    <section id="about" class="container my-5">
        <h2>About Me</h2>
        <p>I am a passionate web developer skilled in PHP, JavaScript, and AJAX. I love building dynamic websites and solving complex problems.</p>
    </section>
    
    <section id="projects" class="container my-5">
        <h2>Projects</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card project-card">
                    <div class="card-body">
                        <h5 class="card-title">Project 1</h5>
                        <p class="card-text">A dynamic website built using PHP and AJAX. Click below to view the project.</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card project-card">
                    <div class="card-body">
                        <h5 class="card-title">Project 2</h5>
                        <p class="card-text">Interactive dashboard for user management with real-time data.</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="contact" class="container my-5">
        <h2>Contact Me</h2>
        <form id="contactForm">
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
    
    <footer class="text-center py-4 bg-dark text-light">
        <p>&copy; 2025 My Portfolio</p>
    </footer>
    
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
                    url: 'contact_form_handler.php',  // Adjust the PHP script path
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
