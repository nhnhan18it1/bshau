
@extends('master')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('public/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Contact Us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
          <div class="container">
              <div class="row d-flex align-items-stretch no-gutters">
                  <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                      <form action="#">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
                  </div>
                  <div class="col-md-6 d-flex align-items-stretch">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.746664184903!2d106.32877085074537!3d20.922509596703986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31359b244fb701ad%3A0xe722bff67b8370f7!2zMTQgTMOqIFF1w70gxJDDtG4sIFAuIEjhuqNpIFTDom4sIFRow6BuaCBwaOG7kSBI4bqjaSBExrDGoW5nLCBI4bqjaSBExrDGoW5nLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1600350999427!5m2!1svi!2s"
                       width="600" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                  </div>
              </div>
          </div>
      </section>

      <section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
          <h2 class="h4">Contact Information</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-3 d-flex">
            <div class="bg-light d-flex align-self-stretch box p-4">
              <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="bg-light d-flex align-self-stretch box p-4">
              <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="bg-light d-flex align-self-stretch box p-4">
              <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="bg-light d-flex align-self-stretch box p-4">
              <p><span>Website</span> <a href="#">yoursite.com</a></p>
            </div>
        </div>
      </div>
    </div>
  </section>
@endsection


