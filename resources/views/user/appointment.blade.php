<section class="appointment">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="section-title">
                     <h2>We Are Committed To Serve .<br> Book An Appointment</h2>
                     <p></p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6 col-md-12 col-12">
                  <form class="form" action="{{url('book_appointment')}}" method="POST">
                     @csrf
                     <div class="row">

                        <div class="col-lg-6 col-md-6 col-12">
                           <div class="form-group">
                              <input name="name" type="text" placeholder="Name" value="{{ Auth::check() ? Auth::user()->name : '' }}">
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                           <div class="form-group">
                              <input name="email" type="email" placeholder="Email" value="{{ Auth::check() ? Auth::user()->email : '' }}">
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                           <div class="form-group">
                              <input name="phone" type="text" placeholder="Phone" value="{{ Auth::check() ? Auth::user()->phone : '' }}">
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                           <div class="form-group">
                              <select name="department" class="form-control wide">
                                  <option value="" selected disabled>Select Department</option>
                                  <option value="dermatology">Dermatology</option>
                                  <option value="cardiac">Cardiac Clinic</option>
                                  <option value="neurology">Neurology</option>
                                  <option value="dentistry">Dentistry</option>
                                  <option value="o&g">Obs & Gynaecology</option>
                              </select>

                           </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-12">
                           <div class="form-group">
                              <input type="text" name="date" placeholder="Date" id="datepicker">
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                           <div class="form-group">
                              <textarea name="message" placeholder="Write Your Message Here....."></textarea>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-5 col-md-4 col-12">
                           <div class="form-group">
                              <div class="button">
                                 <button type="submit" class="btn btn-success" style="background-color: green;">Book An Appointment</button>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-7 col-md-8 col-12">
                           <p>( We will be confirm by email)</p>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-lg-6 col-md-12 ">
                  <div class="appointment-image">
                     <img src="img/contact-img.png" alt="#">
                  </div>
               </div>
            </div>
         </div>
      </section>