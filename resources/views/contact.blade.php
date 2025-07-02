@extends('layouts.app')
@section('title', 'Contact Me')
@section('content')

    <!-- Contact Section -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="display-5 mb-4">Get In Touch</h2>
                    <p class="lead mb-4">Have a project in mind or want to discuss potential collaboration? Feel free to reach out!</p>
                    
                    <div class="mb-4">
                        <h5 class="mb-3">Contact Information</h5>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                <span>Mirpur-12, Dhaka</span>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-envelope text-primary me-2"></i>
                                <a href="mailto:saminy@example.com">saminy@example.com</a>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-phone text-primary me-2"></i>
                                <a href="tel:+1234567890">(123) 456-7890</a>
                            </li>
                        </ul>
                    </div>
                    
                    <div>
                        <h5 class="mb-3">Follow Me</h5>
                        <div class="social-links">
                            <a href="#" class="text-decoration-none me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                            <a href="#" class="text-decoration-none me-3"><i class="fab fa-twitter fa-lg"></i></a>
                            <a href="#" class="text-decoration-none me-3"><i class="fab fa-linkedin-in fa-lg"></i></a>
                            <a href="#" class="text-decoration-none me-3"><i class="fab fa-instagram fa-lg"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fab fa-github fa-lg"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <h5 class="card-title mb-4">Send Me a Message</h5>
                            <form id="contactForm">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="subject" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    
    </section>
@endsection