@extends('layouts.app')
@section('title', 'My Services')

@section('content')
    <!-- Services Section -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5">My Services</h2>
                <p class="lead">I offer a range of professional services to help your business grow online.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-bark pacity-10 text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px; line-height: 60px;">
                                <i class="fas fa-code fa-lg"></i>
                            </div>
                            <h5 class="card-title">Web Development</h5>
                            <p class="card-text">Custom website development using the latest technologies to ensure fast, secure, and scalable solutions.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="fas fa-check text-primary me-2"></i> Responsive Design</li>
                                <li><i class="fas fa-check text-primary me-2"></i> CMS Integration</li>
                                <li><i class="fas fa-check text-primary me-2"></i> E-commerce Solutions</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-dark opacity-10 text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px; line-height: 60px;">
                                <i class="fas fa-paint-brush fa-lg"></i>
                            </div>
                            <h5 class="card-title">Web Design</h5>
                            <p class="card-text">Beautiful, user-friendly designs that reflect your brand and engage your audience effectively.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="fas fa-check text-primary me-2"></i> UI/UX Design</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Wireframing</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Prototyping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-dark opacity-10 text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px; line-height: 60px;">
                                <i class="fas fa-mobile-alt fa-lg"></i>
                            </div>
                            <h5 class="card-title">Mobile App Development</h5>
                            <p class="card-text">Cross-platform mobile applications that work seamlessly on both iOS and Android devices.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="fas fa-check text-primary me-2"></i> React Native</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Flutter</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Native Development</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-dark opacity-10 text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px; line-height: 60px;">
                                <i class="fas fa-search-dollar fa-lg"></i>
                            </div>
                            <h5 class="card-title">SEO Optimization</h5>
                            <p class="card-text">Improve your website's visibility on search engines and drive more organic traffic to your business.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="fas fa-check text-primary me-2"></i> Keyword Research</li>
                                <li><i class="fas fa-check text-primary me-2"></i> On-page SEO</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Technical SEO</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-dark opacity-10 text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px; line-height: 60px;">
                                <i class="fas fa-bullhorn fa-lg"></i>
                            </div>
                            <h5 class="card-title">Digital Marketing</h5>
                            <p class="card-text">Comprehensive digital marketing strategies to increase your online presence and customer engagement.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="fas fa-check text-primary me-2"></i> Social Media</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Content Marketing</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Email Campaigns</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-dark-opacity-10 text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px; line-height: 60px;">
                                <i class="fas fa-headset fa-lg"></i>
                            </div>
                            <h5 class="card-title">Support & Maintenance</h5>
                            <p class="card-text">Ongoing support and maintenance to keep your website running smoothly and securely.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="fas fa-check text-primary me-2"></i> Regular Updates</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Security Patches</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Performance Optimization</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Client Testimonials</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card border-0 bg-white shadow-sm">
                                    <div class="card-body p-4 text-center">
                                        <img src="https://randomuser.me/api/portraits/women/32.jpg" class="rounded-circle mb-3" width="80" alt="Client">
                                        <p class="lead mb-4">"John transformed our outdated website into a modern, user-friendly platform that has significantly increased our online sales. His attention to detail and communication throughout the project were exceptional."</p>
                                        <h5 class="mb-1">Sarah Johnson</h5>
                                        <p class="text-muted">CEO, TechSolutions Inc.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card border-0 bg-white shadow-sm">
                                    <div class="card-body p-4 text-center">
                                        <img src="https://randomuser.me/api/portraits/men/45.jpg" class="rounded-circle mb-3" width="80" alt="Client">
                                        <p class="lead mb-4">"Working with John on our mobile app was a great experience. He delivered the project on time and within budget, and the final product exceeded our expectations. We've already seen a 40% increase in user engagement."</p>
                                        <h5 class="mb-1">Michael Chen</h5>
                                        <p class="text-muted">Founder, AppVenture</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card border-0 bg-white shadow-sm">
                                    <div class="card-body p-4 text-center">
                                        <img src="https://randomuser.me/api/portraits/women/68.jpg" class="rounded-circle mb-3" width="80" alt="Client">
                                        <p class="lead mb-4">"John's SEO expertise helped our small business rank on the first page of Google for several competitive keywords. Our website traffic has tripled, and we're getting more qualified leads than ever before."</p>
                                        <h5 class="mb-1">Emily Rodriguez</h5>
                                        <p class="text-muted">Marketing Director, GreenLeaf Organics</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection