<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assunnahfoundation</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('homeStyle/homeStyle.css') }}" rel="stylesheet">
    <script src="{{asset("js/style.js")}}"></script> </head>
<body>
    <header class="container">
        <section id="top-contact">
            <div id="social-link">
            <ul>
                <li><a href="https://www.facebook.com/assunnahfoundationbd"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                  </svg></a>
                </li>
                <li><a href="https://www.youtube.com/channel/UCuxth2BimHUigZ344JhcFPw"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                  </svg></a>
                </li>
                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                  </svg></a>
                </li>
                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                  </svg></a>
                </li>
            </ul>
            </div>
        </section>
        <section>
            <div class="row">
                <div class="col">
                    <div id="top-logo">
                            <img src="{{asset("img/logo-white.7ff767ec.png")}}">
                        <div id="top-button">
                            <ul>
                             <li><a href="#" class="btn btn-success">My Account</a></li>
                             <li><a href="#" class="btn btn-success">Donate</a></li>
                            </ul>
                        </div>
                     </div>
                </div>
            </div>
        </section>
    </header>
    <nav class="flex-container" id="nav">
        <section class="container" id="nav-link">
                <ul>
                    <li><a href="{{route('/home')}}" id="active">Home</a></li>
                    <li><a href="{{route('/about')}}">About</a></li>
                    <li><a href="{{route('/projects')}}">Projects</a></li>
                    <li><a href="{{route('/ongoing')}}">Ongoing projects</a></li>
                    <li><a href="#">Donor and Lifetime Member</a></li>
                    <li><a href="{{route('/garally')}}">Gallery</a></li>
                    <li><a href="{{route('/video')}}">Video</a></li>
                    <li><a href="#">Volunteer Registration</a></div></li>
                    <li><a href="{{route('/news')}}">News</a></li>
                    <li><a href="{{route('/contact')}}">Contact</a></li>
                    
                </ul>
        </section>
    </nav>

    <section class="flex-container" id="main">
    <main class="container" >
            <div class="row">
                <div class="col">
                    <div id="input-donate">

                        <form action="">
                        <input type="text" class="sty" name="email/phone" placeholder="Phone/Email">
                        <input type="number" min="10"  class="sty" name="num" placeholder="Donate Amount">
                        <button id="button" type="submit">Donate</button>

                    </form>

                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col">
                    

                       <div class="slideshow-container">

                        <div class="mySlides fade">
                          <div class="numbertext">1 / 3</div>
                          <img src="{{asset("img/img_mountains_wide.jpg")}}" style="width:100%">
                        </div>
                        
                        <div class="mySlides fade">
                          <div class="numbertext">2 / 3</div>
                          <img src="{{asset("img/img_nature_wide.jpg")}}" style="width:100%">
                        </div>
                        
                        <div class="mySlides fade">
                          <div class="numbertext">3 / 3</div>
                          <img src="{{asset("img/img_snow_wide.jpg")}}" style="width:100%">
                        </div>
                        
                        </div>
                        <br>
                        
                        <div style="text-align:center">
                          <span class="dot"></span> 
                          <span class="dot"></span> 
                          <span class="dot"></span> 
                        </div>
                            
                    </div>
                </div>
            </div>
    </main>
    </section>

{{-- As-Sunnah Foundation --}}

    <section class="flex-container" id="fundation">
        <div class="container" id="gold-section">
            <div class="row">
                <div class="col-6">
                    <div id="img-gold">
                        <img src="{{asset("img/golden-gate.jpg")}}">
                    </div>
                </div>
                <div class="col-6">
                    <div id="gold-font">
                        <h3>As-Sunnah Foundation</h3>
                        <hr />
                        <p>As-Sunnah Foundation is a non-profit, non-political, and entirely charitable organization dedicated to human welfare. Following the ideals and footsteps of the teacher of humanity, liberator of mankind, and role model of generosity Prophet Muhammad (Saw), this organization is engaged in social reform, inculcation of great morality, establishing employment, poverty alleviation, low cost or free health care, expansion of Islamic teachings and culture, conducting multidisciplinary education projects, continuous program in building a clean mindset, above all using oral, written and modern media to make people obey Allah and abide by His Messenger (Saw).
                        </p>

                        <div id="short-item">
                            <ul >
                                <li class="short-list">
                                    <div class="circle"></div>
                                    <a class="color-link" href="">Eduation</a>
                                </li>
                                <li>
                                    <div class="circle"></div>
                                    <a class="color-link" href="">Charity</a>
                                </li>
                                <li>
                                    <div class="circle"></div>
                                    <a class="color-link" href="">Dawah</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Together Let’s make a change --}}

    <section class="togather-change text-bg-light p-3 ">
        <h3 class="text-success text-center my-3">Together Let’s make a change  </h3>
        <div class="container">

            <div class="row">
                <div class="col-4">
                    <div class="card mt-3 demo-card mb-3" style="width: 25rem;">
                        <a href="#">
                        <img class="card-img-top" src="{{asset("img/winter.jpg")}}" alt="Card image cap">
                        <div class="card-body">
                          <h3 class="card-title text-success text-center">Winter Appeal</h3>
                          <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-success more-link mt-3 card-link mb-2">Donate</a>
                        </div>
                        </a>
                      </div>
                 </div>
                <div class="col-4">
                    <div class="card mt-3 demo-card mb-3"  style="width: 25rem;">
                        <a href="#">
                        <img class="card-img-top" src="{{asset("img/winter.jpg")}}" alt="Card image cap">
                        <div class="card-body">
                          <h3 class="card-title text-success text-center">As-Sunnah Foundation </h3>
                          <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-success more-link mt-3 card-link mb-2">Donate</a>
                        </div>
                        </a>
                      </div>
                 </div>
                <div class="col-4">
                    <div class="card mt-3 demo-card mb-3" style="width: 25rem;">
                        <a href="#">
                        <img class="card-img-top" src="{{asset("img/winter.jpg")}}" alt="Card image cap">
                        <div class="card-body">
                          <h3 class="card-title text-success text-center">General Fund</h3>
                          <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-success more-link mt-3 card-link mb-2">Donate</a>
                        </div>
                        </a>
                      </div>
                 </div>    

                <div class="col-4">
                  
                 </div>  
                <div class="col-4">
                    <div class="card mt-3 demo-card mb-3" style="width: 25rem;">
                        <a href="#">
                        <img class="card-img-top" src="{{asset("img/winter.jpg")}}" alt="Card image cap">
                        <div class="card-body">
                          <h3 class="card-title text-success text-center">General Fund</h3>
                          <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-success more-link mt-3 card-link mb-2">Donate</a>
                        </div>
                        </a>
                      </div>
                 </div>  
                <div class="col-4">
                    
                 </div>  

            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="#" class="btn btn-success more-link mt-4 mb-3 ">More</a>
          </div>
    </section>


    {{-- Ongoing projects --}}

    <section class="togather-change-color text-bg-light p-3 ">
        <h3 class="text-success text-center my-3">Ongoing projects </h3>
        <div class="container">

            <div class="row">
                <div class="col-4">
                    <div class="card mt-3 demo-card mb-4" style="width: 25rem;">
                        <a href="#">
                        <img class="card-img-top" src="{{asset("img/winter.jpg")}}" alt="Card image cap">
                        <div class="card-body">
                          <h3 class="card-title text-success text-center">Post Graduate Diploma </h3>
                          <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                        </div>
                        </a>
                      </div>
                 </div>
                <div class="col-4">
                    <div class="card mt-3 demo-card mb-4"  style="width: 25rem;">
                        <a href="#">
                        <img class="card-img-top" src="{{asset("img/winter.jpg")}}" alt="Card image cap">
                        <div class="card-body">
                          <h3 class="card-title text-success text-center">Quran Year</h3>
                          <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                         
                        </div>
                        </a>
                      </div>
                 </div>
                <div class="col-4">
                    <div class="card mt-3 demo-card mb-4" style="width: 25rem;">
                        <a href="#">
                        <img class="card-img-top" src="{{asset("img/winter.jpg")}}" alt="Card image cap">
                        <div class="card-body">
                          <h3 class="card-title text-success text-center">Smart Tailoring and Fashion </h3>
                          <p class="card-text text-center ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        </a>
                      </div>
                 </div>   

                <div class="col-4">
                  
                 </div> 
                <div class="col-4">
                    <div class="card mt-3 demo-card mb-4 " style="width: 25rem;">
                        <a href="#">
                        <img class="card-img-top" src="{{asset("img/winter.jpg")}}" alt="Card image cap">
                        <div class="card-body">
                          <h3 class="card-title text-success text-center">Smart Tailoring and Fashion </h3>
                          <p class="card-text text-center ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        </a>
                      </div>
                 </div> 
                <div class="col-4">
                   
                 </div> 

            </div>
        </div>
       
    </section>

    {{-- Latest News  --}}

    <section class="togather-change text-bg-light p-3 ">
        <h3 class="text-success text-center my-3">Latest News  </h3>
        <div class="container">

            <div class="row">
                <div class="col-4">
                    <div class="card mt-3 demo-card mb-3" style="width: 25rem;">
                        <a href="#">
                        <img class="card-img-top" src="{{asset("img/winter.jpg")}}" alt="Card image cap">
                        <h6>10/30/2024, 11:33:36 AM</h6>

                        <div class="card-body">
                          <p class="card-text text-center" id="lates-p-tag">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                        </div>
                        </a>
                      </div>
                 </div>           
                <div class="col-4">
                    <div class="card mt-3 demo-card mb-3" style="width: 25rem;">
                        <a href="#">
                        <img class="card-img-top" src="{{asset("img/winter.jpg")}}" alt="Card image cap">
                        <h6>10/30/2024, 11:33:36 AM</h6>

                        <div class="card-body">
                          <p class="card-text text-center" id="lates-p-tag">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                        </div>
                        </a>
                      </div>
                 </div>           
                <div class="col-4">
                    <div class="card mt-3 demo-card mb-3" style="width: 25rem;">
                        <a href="#">
                        <img class="card-img-top" src="{{asset("img/winter.jpg")}}" alt="Card image cap">
                        <h6>10/30/2024, 11:33:36 AM</h6>

                        <div class="card-body">
                          <p class="card-text text-center" id="lates-p-tag">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                        </div>
                        </a>
                      </div>
                 </div>           
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="#" class="btn btn-success more-link mt-4 mb-3 ">More</a>
          </div>
    </section>

    {{-- projects --}}

    <section class="togather-change-color text-bg-light p-3 ">
        <h3 class="text-black text-center my-3"> projects </h3>
        <div class="container">

            <div class="row">
                <div class="col-4">
                    <div class="project">
                    <a href="#">
                    <div class="card text-center bg-light" style="width: 25rem;">
                        <div class="card-body">
                          <h1 class="card-title text-white">Self-reliance Project with Zakat Funds</h1>
                          <p class="card-text">If you feel the need for mass education and Morning Maktab in any part of Bangladesh, let us know and bring us into contact with the locals.</p>
                          <a href="#" class="btn btn-success">Read More</a>
                        </div>
                      </div>
                    </a>
                    </div>
                 </div>                      
                <div class="col-4">
                    <div class="project">
                    <a href="#">
                    <div class="card text-center bg-light" style="width: 25rem;">
                        <div class="card-body">
                          <h1 class="card-title text-white">Iftar and Ramadan food distribution</h1>
                          <p class="card-text">If you feel the need for mass education and Morning Maktab in any part of Bangladesh, let us know and bring us into contact with the locals.</p>
                          <a href="#" class="btn btn-success">Read More</a>
                        </div>
                      </div>
                    </a>
                    </div>
                 </div>                      
                <div class="col-4">
                    <div class="project">
                    <a href="#">
                    <div class="card text-center bg-light" style="width: 25rem;">
                        <div class="card-body">
                          <h1 class="card-title text-white">Self-reliance Project with Zakat Funds</h1>
                          <p class="card-text">If you feel the need for mass education and Morning Maktab in any part of Bangladesh, let us know and bring us into contact with the locals.</p>
                          <a href="#" class="btn btn-success">Read More</a>
                        </div>
                      </div>
                    </a>
                    </div>
                 </div>                      
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="#" class="btn btn-success more-link mt-4 mb-3 ">More</a>
          </div>
    </section>


    {{-- video --}}

    <section class="togather-change text-bg-light p-3 ">
        <h3 class="text-black text-center my-3"> Videos </h3>
        <div class="container">

            <div class="row">
                <div class="col-4">
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe width="400" height="315" src="https://www.youtube.com/embed/l1EssrLxt7E?si=KUoknUm5o_8TRbOa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                      </div>
                 </div>                                        
                <div class="col-4">
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe width="400" height="315" src="https://www.youtube.com/embed/l1EssrLxt7E?si=KUoknUm5o_8TRbOa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                      </div>
                 </div>                                        
                <div class="col-4">
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe width="400" height="315" src="https://www.youtube.com/embed/l1EssrLxt7E?si=KUoknUm5o_8TRbOa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                      </div>
                 </div>                                        
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="#" class="btn btn-success more-link mt-4 mb-3 ">More</a>
          </div>
    </section>

    {{-- Gallery --}}

    <section class="togather-change-color text-bg-light p-3 ">
        <h3 class="text-black text-center my-3"> Gallery </h3>
        <div class="container">

            <div class="row">
                <div class="col-3">
                    <div class="gallery mt-3 mb-3">
                        <a  href="img/golden-gate.jpg">
                          <img src="{{asset("img/golden-gate.jpg")}}" alt="Cinque Terre" width="280" height="250">
                          
                        </a>
                      </div>
                 </div>   

                <div class="col-3">
                    <div class="gallery mt-3 mb-3">
                        <a  href="img/golden-gate.jpg">
                          <img src="{{asset("img/img_snow_wide.jpg")}}" alt="Cinque Terre" width="280" height="250">
                        </a>
                      </div>
                 </div> 
                <div class="col-3">
                    <div class="gallery mt-3 mb-3">
                        <a  href="img/golden-gate.jpg">
                          <img src="{{asset("img/img_nature_wide.jpg")}}" alt="Cinque Terre" width="280" height="250">
                        </a>
                      </div>
                 </div> 
                <div class="col-3">
                    <div class="gallery mt-3 mb-3">
                        <a  href="img/golden-gate.jpg">
                          <img src="{{asset("img/img_mountains_wide.jpg")}}" alt="Cinque Terre" width="280" height="250">
                        </a>
                      </div>
                 </div> 

            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="#" class="btn btn-success more-link mt-4 mb-3 ">More</a>
          </div>
    </section>
<hr>

<footer>
  <div class="text-center mt-4 mb-4">
    <p class="">Copyright © 2025 <span class="text-success"> As-Sunnah Foundation </span>- all rights reserved. Technical support by <span class="text-success"> Quantic Dynamics.</span><br> <span class="text-success">Terms and conditions | Privacy Policy </span></p>
  </div>
</footer>
    <script>
        let slideIndex = 0;
        showSlides();
        
        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>
</body>
</html>
