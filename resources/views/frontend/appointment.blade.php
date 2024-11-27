@extends('frontend.layouts.app')

@section('content')
<section class="rr-contact-area p-relative black-bg fix">
         <div class="rr-contact-shap">
            <img src="assets/img/contact/shap01.png" alt="img">
         </div>
         <div class="rr-contact-img">
            <img src="assets/img/contact/contact-img.jpg" alt="img">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-3 col-md-1"></div>
               <div class="col-xl-4 col-lg-9 col-md-10">
                  <div class="rr-form-box text-center">
                     <b>OUR Booking Now</b>
                     <h4 class="rr-section-title pb-60">Appoinment</h4>
                     <form method="post" action="{{route()}}">
                        <div class="row">
                           <div class="col-xl-6 col-lg-6 col-md-6 mb-20">
                              <div class="rr-form-input-box rr-form-input-main">
                                 <input type="text" placeholder="Name">
                              </div>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 mb-20">
                              <div class="rr-form-input-box rr-form-input-main">
                                 <input type="email" placeholder="Email">
                              </div>
                           </div>

                           <div class="col-xl-12 col-lg-12 col-md-12 mb-20">
                              <div class="rr-form-input-box rr-form-input-main">
                                 <input type="text" placeholder="Address">
                              </div>
                           </div>
                           <div class=" col-md-12 col-12">
                              <div class="rr-form-input-box pb-30">
                                 <select style="display: none;">
                                    <option>Choose Service</option>
                                    <option>Medicine &amp; Health</option>

                                 </select>
                                 <div class="nice-select" tabindex="0"><span class="current">Choose Service</span>
                                    <ul class="list">
                                       <li data-value="Your Inquiry about" class="option selected focus">Choose
                                          Service
                                       </li>
                                       <li data-value="01 Year" class="option">Medicine &amp; Health</li>
                                       <li data-value="02 Year" class="option">Economical Choice</li>
                                       <li data-value="03 Year" class="option">Team Of Support</li>
                                       <li data-value="04 Year" class="option">Test Laboratory</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 mb-20">
                              <div class="rr-form-textarea-box">
                                 <textarea placeholder="Your meassage"></textarea>
                              </div>
                           </div>

                        </div>
                     </form>
                     <button class="rr-btn-1 rr-form-theme-bg" type="submit"><span>Make an appoinment</span></button>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-10 col-md-1"></div>
            </div>
         </div>

      </section>
@endsection
