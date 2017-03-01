@extends('layouts.user')

@section('content')

<div class="wrapper">
    <div class="sidebar-wrapper">
        <div class="profile-container">
            <img class="profile" src="/assets/images/profile.png" alt="" />
            <h1 class="name"> {{ Auth::user()->first_name." ".Auth::user()->last_name }}</h1>
            <h3 class="tagline">Full Stack Developer</h3>
        </div><!--//profile-container-->
        
        <div class="contact-container container-block">
            <ul class="list-unstyled contact-list">
                <li class="email"><i class="fa fa-envelope"></i><a href="mailto: yourname@email.com">alan.doe@website.com</a></li>
                <li class="phone"><i class="fa fa-phone"></i><a href="tel:0123 456 789">0123 456 789</a></li>
                <li class="website"><i class="fa fa-globe"></i><a href="http://themes.3rdwavemedia.com/website-templates/free-responsive-website-template-for-developers/" target="_blank">portfoliosite.com</a></li>
                <li class="linkedin"><i class="fa fa-linkedin"></i><a href="#" target="_blank">linkedin.com/in/alandoe</a></li>
                <li class="github"><i class="fa fa-github"></i><a href="#" target="_blank">github.com/username</a></li>
                <li class="twitter"><i class="fa fa-twitter"></i><a href="https://twitter.com/3rdwave_themes" target="_blank">@twittername</a></li>
            </ul>
        </div><!--//contact-container-->

        <div class="education-container container-block">
            <h2 class="container-block-title">Education</h2>
            <div class="item">
                <h4 class="degree">MSc in Computer Science</h4>
                <h5 class="meta">University of London</h5>
                <div class="time">2011 - 2012</div>
            </div><!--//item-->
            <div class="item">
                <h4 class="degree">BSc in Applied Mathematics</h4>
                <h5 class="meta">Bristol University</h5>
                <div class="time">2007 - 2011</div>
            </div><!--//item-->
        </div><!--//education-container-->
        
        <div class="languages-container container-block">
            <h2 class="container-block-title">Languages</h2>
            <ul class="list-unstyled interests-list">
                <li>English <span class="lang-desc">(Native)</span></li>
                <li>French <span class="lang-desc">(Professional)</span></li>
                <li>Spanish <span class="lang-desc">(Professional)</span></li>
            </ul>
        </div><!--//interests-->
        
        <div class="interests-container container-block">
            <h2 class="container-block-title">Interests</h2>
            <ul class="list-unstyled interests-list">
                <li>Climbing</li>
                <li>Snowboarding</li>
                <li>Cooking</li>
            </ul>
        </div><!--//interests-->      
    </div><!--//sidebar-wrapper-->
    
    <div class="main-wrapper">
        
        <section class="section summary-section">
            <h2 class="section-title"><i class="fa fa-user"></i>Career Profile</h2>
            <div class="summary">
                <p>Summarise your career here lorem ipsum dolor sit amet, consectetuer adipiscing elit. You can <a href="http://themes.3rdwavemedia.com/website-templates/orbit-free-resume-cv-template-for-developers/" target="_blank">download this free resume/CV template here</a>. Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
            </div><!--//summary-->
        </section><!--//section-->
        
        <section class="section experiences-section">
            <h2 class="section-title"><i class="fa fa-briefcase"></i>Experiences</h2>
            
            <div class="item">
                <div class="meta">
                    <div class="upper-row">
                        <h3 class="job-title">Lead Developer</h3>
                        <div class="time">2015 - Present</div>
                    </div><!--//upper-row-->
                    <div class="company">Startup Hubs, San Francisco</div>
                </div><!--//meta-->
                <div class="details">
                    <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</p>  
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                </div><!--//details-->
            </div><!--//item-->
            
            <div class="item">
                <div class="meta">
                    <div class="upper-row">
                        <h3 class="job-title">Senior Software Engineer</h3>
                        <div class="time">2014 - 2015</div>
                    </div><!--//upper-row-->
                    <div class="company">Google, London
                    </div>
                </div><!--//meta-->
                <div class="details">
                    <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>  
                    
                </div><!--//details-->
            </div><!--//item-->
            
            <div class="item">
                <div class="meta">
                    <div class="upper-row">
                        <h3 class="job-title">UI Developer</h3>
                        <div class="time">2012 - 2014</div>
                    </div><!--//upper-row-->
                    <div class="company">Amazon, London</div>
                </div><!--//meta-->
                <div class="details">
                    <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>  
                </div><!--//details-->
            </div><!--//item-->  
        </section><!--//section-->
        
        <section class="section projects-section">
            <h2 class="section-title"><i class="fa fa-archive"></i>Projects</h2>
            <div class="intro">
                <p>You can list your side projects or open source libraries in this section. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et ligula in nunc bibendum fringilla a eu lectus.</p>
            </div><!--//intro-->
            <div class="item">
                <span class="project-title"><a href="#hook">Velocity</a></span> - <span class="project-tagline">A responsive website template designed to help startups promote, market and sell their products.</span>
                
            </div><!--//item-->
            <div class="item">
                <span class="project-title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/" target="_blank">DevStudio</a></span> - 
                <span class="project-tagline">A responsive website template designed to help web developers/designers market their services. </span>
            </div><!--//item-->
            <div class="item">
                <span class="project-title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-startups-tempo/" target="_blank">Tempo</a></span> - <span class="project-tagline">A responsive website template designed to help startups promote their products or services and to attract users &amp; investors</span>
            </div><!--//item-->
            <div class="item">
                <span class="project-title"><a href="hhttp://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank">Atom</a></span> - <span class="project-tagline">A comprehensive website template solution for startups/developers to market their mobile apps. </span>
            </div><!--//item-->
            <div class="item">
                <span class="project-title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank">Delta</a></span> - <span class="project-tagline">A responsive Bootstrap one page theme designed to help app developers promote their mobile apps</span>
            </div><!--//item-->
        </section><!--//section-->
        
        <section class="skills-section section">
            <h2 class="section-title"><i class="fa fa-rocket"></i>Skills &amp; Proficiency</h2>
            <div class="skillset">        
                <div class="item">
                    <h3 class="level-title">Python &amp; Django</h3>
                    <div class="level-bar">
                        <div class="level-bar-inner" data-level="98%">
                        </div>                                      
                    </div><!--//level-bar-->                                 
                </div><!--//item-->
                
                <div class="item">
                    <h3 class="level-title">Javascript &amp; jQuery</h3>
                    <div class="level-bar">
                        <div class="level-bar-inner" data-level="98%">
                        </div>                                      
                    </div><!--//level-bar-->                                 
                </div><!--//item-->
                
                <div class="item">
                    <h3 class="level-title">Angular</h3>
                    <div class="level-bar">
                        <div class="level-bar-inner" data-level="98%">
                        </div>                                      
                    </div><!--//level-bar-->                                 
                </div><!--//item-->
                
                <div class="item">
                    <h3 class="level-title">HTML5 &amp; CSS</h3>
                    <div class="level-bar">
                        <div class="level-bar-inner" data-level="95%">
                        </div>                                      
                    </div><!--//level-bar-->                                 
                </div><!--//item-->
                
                <div class="item">
                    <h3 class="level-title">Ruby on Rails</h3>
                    <div class="level-bar">
                        <div class="level-bar-inner" data-level="85%">
                        </div>                                      
                    </div><!--//level-bar-->                                 
                </div><!--//item-->
                
                <div class="item">
                    <h3 class="level-title">Sketch &amp; Photoshop</h3>
                    <div class="level-bar">
                        <div class="level-bar-inner" data-level="60%">
                        </div>                                      
                    </div><!--//level-bar-->                                 
                </div><!--//item-->             
            </div>  
        </section><!--//skills-section-->    
    </div><!--//main-body-->
</div>


@endsection


@section('scripts')

    <!-- Javascript -->          
    <script type="text/javascript" src="/assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <!-- custom js -->
    <script type="text/javascript" src="/assets/js/main.js"></script>      

@endsection