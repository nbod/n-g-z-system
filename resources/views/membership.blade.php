
@include('layouts.navbar')

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <center><h2>Become a  Member </h2>   </center>

                              <figure>
                                   <span><i class="fa fa-users"></i></span>
                                   <figcaption>
                                        <h3>Professional Trainers</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                                   </figcaption>
                              </figure>

                              <figure>
                                   <span><i class="fa fa-certificate"></i></span>
                                   <figcaption>
                                        <h3>International Certifications</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                                   </figcaption>
                              </figure>

                              <figure>
                                   <span><i class="fa fa-bar-chart-o"></i></span>
                                   <figcaption>
                                        <h3>Free for 3 months</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

                    <div class="col-md-offset-1 col-md-4 col-sm-12">
                         <div class="entry-form">
                            <form method="POST" action="{{ route('create-membership') }}">
                                @csrf
                                   <h2>Subscribe</h2>
                                   <input type="text" name="name"  id="name" class="form-control" placeholder="Full name" required="">
                                   <input type="email" name="email"   id="email" class="form-control" placeholder="Your email address" required="">
                                   <input type="text" name="phone"   id="phone" class="form-control" placeholder="Phone  Number" required="">
                                   <button class="submit-btn form-control" id="form-submit">Subscribe </button>
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </section>

</body>
</html>
