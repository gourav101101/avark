    @extends('layouts.app')

    @section('title', 'Web Development')
    @section('meta_description', 'Web Development Services')
    @section('meta_keywords', 'home, Web Development')

    @section('content')

    <!-- breadcrumb-section -->
            <section class="breadcrumb-section__area ">
            <div class=" container rr-container-1900">
                <div class="breadcrumb-section__wrapper" data-background="assets/imgs/home-1/hero/breadcrumb-bg-thumb.png">
                <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                    <h3 class="breadcrumb-section__title">Service</h3>
                    <ul class="breadcrumb-section__page">
                    <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
                    <li> Service <i class="fa-regular fa-angle-right"></i></li>
                    <li> Web Development </li>
                    </ul>
                </div>
                </div>
                <div class="breadcrumb-section__border"></div>
            </div>
            </section>


            <section class="service-details section-spacing">
            <div class="container rr-container-1350">
                <div class="service-details__top">
                <div class="media" data-aos="zoom-in" data-aos-duration="900">
                    <img src="assets/imgs/inner/service-detils/Solution-PNG.png" alt="img" class="img-fluid" style="max-height: 400px; width: auto; display: block; margin: 0 auto;">
                </div>
                </div>
                <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="service-details-sidebar" data-aos="fade-up" data-aos-duration="900">
                    <h4 class="title">Service Categories</h4>
                    <div class="service-details-sidebar-categories">
                        <ul>
                        <li><a href="{{ route('erp-system') }}">ERP System Development</a><span><i class="fa-solid fa-angles-right"></i></span></li>
                        <li><a href="{{ route('crm-solutions') }}">CRM Solutions</a><span><i class="fa-solid fa-angles-right"></i></span></li>
                        <li><a href="{{ route('custom-software-development') }}">Custom Software Development</a><span><i class="fa-solid fa-angles-right"></i></span></li>
                        <li><a href="{{ route('web-application-development') }}">Web Development</a><span><i class="fa-solid fa-angles-right"></i></span></li>
                        <li><a href="{{ route('mobile-app-development') }}">Mobile App Development</a><span><i class="fa-solid fa-angles-right"></i></span></li>
                        <li><a href="{{ route('cloud-and-data-migration') }}">Cloud & Data Migration</a><span><i class="fa-solid fa-angles-right"></i></span></li>
                        <li><a href="{{ route('enterprise-integration-services') }}">Enterprise Integration Services </a><span><i class="fa-solid fa-angles-right"></i></span></li>
                        </ul>
                    </div>
                    </div>
                    <div class="media" data-aos="fade-up" data-aos-duration="900">
                        <img src="assets/imgs/inner/service-detils/KPWeb-app-development-022.jpg" alt="img">
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="service-details__content">
                        <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Web Development</h2>

                        <h2 class="title rr-title-anim-1 mt-4" data-aos="fade-up" data-aos-duration="900">Why Choose Our Web Development Services?</h2>
                        
                        <div class="features mt-4" data-aos="fade-up" data-aos-duration="900">
                            <h4 class="title mb-2">⚡ Fast Services</h4>
                            <p class="desc">We deliver high-quality websites and web applications within committed timelines while ensuring performance, reliability, and scalability.</p>

                            <h4 class="title mt-4 mb-2">🔍 Transparency</h4>
                            <p class="desc">Our development process is completely transparent, keeping clients informed throughout every stage—from planning and design to deployment and support.</p>

                            <h4 class="title mt-4 mb-2">🤝 Trustable</h4>
                            <p class="desc">Trusted by businesses across industries, we build secure, scalable, and future-ready web solutions tailored to your business needs.</p>
                        </div>

                        <p class="desc mt-5" data-aos="fade-up" data-aos-duration="900">Web development is the process of building and maintaining websites and web applications that are accessible through the internet.</p>
                        <p class="desc mt-3" data-aos="fade-up" data-aos-duration="900">It involves various activities, from designing the user interface (UI) and user experience (UX) to coding functionalities and implementing server-side operations. Web development encompasses both front-end development, which focuses on the client-side (the user's browser), and back-end development, which handles server-side logic, databases, and application functionality.</p>
                        <p class="desc mt-3" data-aos="fade-up" data-aos-duration="900">Our web development solutions are designed to create engaging, responsive, and high-performing digital experiences that help organizations grow and succeed online.</p>

                        <h2 class="title rr-title-anim-1 mt-5" data-aos="fade-up" data-aos-duration="900">Key Aspects of Web Development</h2>
                        <div class="features mt-4" data-aos="fade-up" data-aos-duration="900">
                            <h4 class="title mb-2">UX & UI Design</h4>
                            <p class="desc">User Experience (UX) and User Interface (UI) design focus on creating intuitive, visually appealing, and user-friendly digital experiences that maximize customer engagement and satisfaction.</p>

                            <h4 class="title mt-4 mb-2">Responsive Design</h4>
                            <p class="desc">We ensure that websites and web applications adapt seamlessly to different screen sizes and devices, providing an optimal user experience across desktops, tablets, and smartphones.</p>

                            <h4 class="title mt-4 mb-2">Deployment & Hosting</h4>
                            <p class="desc">Our team deploys applications securely and efficiently using modern hosting environments, including cloud platforms such as AWS, Microsoft Azure, and other reliable hosting providers.</p>

                            <h4 class="title mt-4 mb-2">Web Applications</h4>
                            <p class="desc">We develop dynamic and interactive web applications that provide advanced functionalities and support complex business processes.</p>

                            <h4 class="title mt-4 mb-2">Content Management Systems (CMS)</h4>
                            <p class="desc">We build and integrate CMS platforms such as WordPress, Joomla, and Drupal, enabling organizations to manage website content easily without technical expertise.</p>

                            <h4 class="title mt-4 mb-2">Web Security</h4>
                            <p class="desc">Security is integrated into every stage of development. We implement industry-standard security practices to protect websites and applications against common vulnerabilities and cyber threats.</p>
                        </div>

                        <h2 class="title rr-title-anim-1 mt-5" data-aos="fade-up" data-aos-duration="900">Web Development Features</h2>

                        <h3 class="title mt-4" data-aos="fade-up" data-aos-duration="900">Front-End Development</h3>
                        <ul data-aos="fade-up" data-aos-duration="900" class="mt-3">
                            <li><i class="fa-solid fa-angles-right"></i><strong>HTML (HyperText Markup Language):</strong> The foundation of web pages, used to structure and organize website content.</li>
                            <li><i class="fa-solid fa-angles-right"></i><strong>CSS (Cascading Style Sheets):</strong> Defines the presentation, styling, and layout of web pages, creating visually appealing user interfaces.</li>
                            <li><i class="fa-solid fa-angles-right"></i><strong>JavaScript:</strong> A powerful scripting language used to add interactivity, animations, and dynamic functionality to websites.</li>
                            <li><i class="fa-solid fa-angles-right"></i><strong>Responsive Design:</strong> Ensures websites provide a consistent experience across various devices and screen sizes.</li>
                            <li><i class="fa-solid fa-angles-right"></i><strong>Web Accessibility:</strong> Implements accessibility standards to ensure websites are usable by all users, including individuals with disabilities.</li>
                            <li><i class="fa-solid fa-angles-right"></i><strong>Cross-Browser Compatibility:</strong> Ensures websites function correctly and maintain a consistent appearance across major web browsers.</li>
                            <li><i class="fa-solid fa-angles-right"></i><strong>Animation & Interactivity:</strong> Interactive elements, transitions, and animations enhance user engagement and improve overall user experience.</li>
                        </ul>

                        <h4 class="title mt-4" data-aos="fade-up" data-aos-duration="900">Front-End Frameworks & Libraries</h4>
                        <p class="desc mt-2" data-aos="fade-up" data-aos-duration="900">We utilize modern technologies such as:</p>
                        <div class="features mt-3" data-aos="fade-up" data-aos-duration="900">
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>React.js</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Angular</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Vue.js</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Bootstrap</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Material UI</span></li>
                            </ul>
                        </div>
                        <p class="desc mt-2" data-aos="fade-up" data-aos-duration="900">These frameworks accelerate development and ensure consistent user experiences.</p>

                        <h3 class="title rr-title-anim-1 mt-5" data-aos="fade-up" data-aos-duration="900">Back-End Development Features</h3>
                        
                        <h4 class="title mt-4" data-aos="fade-up" data-aos-duration="900">Server-Side Programming Languages</h4>
                        <p class="desc mt-2" data-aos="fade-up" data-aos-duration="900">Our developers utilize modern server-side technologies, including:</p>
                        <div class="features mt-3" data-aos="fade-up" data-aos-duration="900">
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>PHP</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Python</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Node.js</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Java</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Ruby</span></li>
                            </ul>
                        </div>
                        <p class="desc mt-2" data-aos="fade-up" data-aos-duration="900">to build robust, scalable, and secure applications.</p>

                        <h4 class="title mt-4" data-aos="fade-up" data-aos-duration="900">Database Management</h4>
                        <p class="desc mt-2" data-aos="fade-up" data-aos-duration="900">Efficient data storage and management using:</p>
                        <div class="features mt-3" data-aos="fade-up" data-aos-duration="900">
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>MySQL</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>PostgreSQL</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>MongoDB</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Microsoft SQL Server</span></li>
                            </ul>
                        </div>

                        <ul data-aos="fade-up" data-aos-duration="900" class="mt-4">
                            <li><i class="fa-solid fa-angles-right"></i><strong>API Integration:</strong> Seamlessly integrate third-party APIs and external services to extend application functionality.</li>
                            <li><i class="fa-solid fa-angles-right"></i><strong>User Authentication & Authorization:</strong> Implement secure login systems, role-based access control, and user permissions to safeguard application resources.</li>
                            <li><i class="fa-solid fa-angles-right"></i><strong>Server Management & Deployment:</strong> Configure, maintain, and deploy applications using reliable hosting and cloud infrastructures.</li>
                            <li><i class="fa-solid fa-angles-right"></i><strong>Security Measures:</strong> Data Encryption, SSL Security, Secure Authentication, Vulnerability Protection, Regular Security Updates.</li>
                            <li><i class="fa-solid fa-angles-right"></i><strong>Caching & Performance Optimization:</strong> Optimize website speed and performance using advanced caching techniques and best development practices.</li>
                            <li><i class="fa-solid fa-angles-right"></i><strong>Error Handling & Logging:</strong> Implement robust error management systems to monitor, identify, and resolve issues efficiently.</li>
                        </ul>

                        <h4 class="title mt-4" data-aos="fade-up" data-aos-duration="900">CMS Integration</h4>
                        <p class="desc mt-2" data-aos="fade-up" data-aos-duration="900">Integrate popular content management platforms, including:</p>
                        <div class="features mt-3" data-aos="fade-up" data-aos-duration="900">
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>WordPress</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Joomla</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Drupal</span></li>
                            </ul>
                        </div>
                        <p class="desc mt-2" data-aos="fade-up" data-aos-duration="900">for easy website administration.</p>

                        <h2 class="title rr-title-anim-1 mt-5" data-aos="fade-up" data-aos-duration="900">Additional Web Development Features</h2>
                        <div class="features mt-4" data-aos="fade-up" data-aos-duration="900">
                            <h4 class="title mb-2">Search Engine Optimization (SEO)</h4>
                            <p class="desc">Optimize website structure, content, and performance to improve search engine rankings and online visibility.</p>

                            <h4 class="title mt-4 mb-2">Analytics Integration</h4>
                            <p class="desc">Integrate analytics platforms such as Google Analytics to monitor user behavior, traffic, and business performance.</p>

                            <h4 class="title mt-4 mb-2">Social Media Integration</h4>
                            <p class="desc">Connect websites with social media platforms to improve engagement, content sharing, and brand visibility.</p>

                            <h4 class="title mt-4 mb-2">E-Commerce Functionality</h4>
                            <p class="desc">Develop secure e-commerce platforms featuring Product Catalogs, Shopping Carts, Order Management, Secure Payment Gateways, and Inventory Management.</p>

                            <h4 class="title mt-4 mb-2">Forms & Data Collection</h4>
                            <p class="desc">Create interactive forms to collect customer inquiries, registrations, feedback, and business data.</p>

                            <h4 class="title mt-4 mb-2">Content Delivery Network (CDN) Integration</h4>
                            <p class="desc">Leverage CDN services to improve website performance, reduce latency, and ensure faster content delivery worldwide.</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </section>


            <section class="cta-section__area">
            <div class="container rr-container-1350">
                <div class="cta-section__wrapper" data-background="assets/imgs/home-3/shape/cta-3-bg.png">
                <div class="section-title-3__wrapper tx-center">
                    <h2 class="sub-title white"><img class="left-shape" src="assets/imgs/home-3/shape/shape-left-white.png"
                        alt="image">Let’s Build Your Next Digital Platform<img class="right-shape"
                        src="assets/imgs/home-3/shape/shape-right-white.png" alt="image"></h2>
                    <h2 class="title rr-title-anim-1 white">Custom Web Applications Designed for Innovation & Growth</h2>
                    <p class="cta-section__dec">Build a secure, scalable, and high-performing web solution tailored to your business goals.</p>
                </div>
                <div class="cta-section__btn">
                    <a href="{{ route('contact-us') }}" class="rr-btn">
                    <span class="btn-wrap">
                        <span class="text-one">Start Your Project Today</span>
                        <span class="text-two">Start Your Project Today</span>
                    </span>
                    </a>
                </div>
                <div class="cta-section__list">
                    <ul>
                    <li><i class="fa-regular fa-angles-right"></i> End-to-End Development Support </li>
                    <li><i class="fa-regular fa-angles-right"></i> Agile & Transparent Development Process </li>
                    </ul>
                </div>
                </div>
            </div>
            </section>
    @endsection
