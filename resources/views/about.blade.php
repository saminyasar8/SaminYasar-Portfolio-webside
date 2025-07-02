    @extends('layouts.app')
    @section('title', 'About Me')

    @section('content')

        <!-- About Section -->
        <section class="py-5 mt-5">
            <div class="container">
                <div class="row align-items-center">
                    <?php
                    foreach($aboutItem as $aboutItem) {
                    ?>
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <img src="{{ $aboutItem->image }}" alt="About Me" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-lg-7">

                        <h2 class="display-5 mb-4">About Me</h2>

                        <p class="lead">I'm a passionate web developer with over 5 years of experience creating beautiful
                            and functional websites.</p>
                        <p>My journey in web development began when I was studying computer science at university. Since
                            then, I've worked with numerous clients from various industries, helping them establish their
                            online presence.</p>
                        <p>I specialize in front-end development using modern technologies like HTML5, CSS3, JavaScript,php
                            and frameworks like Bootstrap and laravel. I also have experience with back-end technologies
                            including Node.js and PHP.</p>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><strong>Name:</strong> {{ $aboutItem->name }}</li>
                                    <li class="mb-2"><strong>Email:</strong> {{ $aboutItem->email }}</li>
                                    <li class="mb-2"><strong>Phone:</strong> {{ $aboutItem->phone }}</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><strong>Experience:</strong> {{ $aboutItem->experience }}</li>
                                    <li class="mb-2"><strong>Location:</strong> {{ $aboutItem->location }}</li>
                                    <li class="mb-2"><strong>Freelance:</strong> {{ $aboutItem->freelance }}</li>
                                </ul>
                            </div>
                        </div>
                        <a href="contact.html" class="btn btn-primary mt-3">Contact Me</a>
                    </div>
                </div>
                <?php
                    }
                    ?>
            </div>
        </section>

        <!-- Skills Section -->
        <section class="py-5 bg-light">

            <div class="container">

                <h2 class="text-center mb-5">My Skills</h2>

                
                <div class="row">
                    <?php
            foreach($skillsItem as $skillsItem) {
            ?>

                    <div class="col-md-4 mb-4">
                        <h5>{{ $skillsItem['name'] }}</h5>
                        <div class="progress">
                            <div class="progress-bar bg-{{ $skillsItem['color'] }}"
                                style="width: {{ $skillsItem['percentage'] }}%">{{ $skillsItem['percentage'] }}%</div>
                        </div>
                    </div>

                <?php
            }
            ?>
                </div>
            </div>
        </section>
    @endsection
