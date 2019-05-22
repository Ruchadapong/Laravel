@extends('Project.master')

@section('title',"Health Land | ติดต่อเรา")
@section('contact','active')

<!--Carousel Wrapper-->
<div id="carouselExampleIndicators" class="carousel slide carousel-fade d-none d-md-block" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-none d-sm-block w-100 " src="project/img/slide-5.jpg" alt="First slide">
        <div class="carousel-caption d-none d-sm-block">
          <h1>
                <strong class="Welcome wow fadeInUp Slower">Welcome To Health Land</strong>
              </h1>

          <p>
            <strong class="strong wow fadeInDown Slower">The Best Massage&Spa of The Year </strong>
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-none d-sm-block w-100" src="project/img/slide-8.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-sm-block">
          <h1>
                <strong class="Welcome wow fadeInUp Slower">Welcome To Health Land</strong>
              </h1>

          <p>
            <strong class="strong wow fadeInDown Slower">The Best Massage&Spa of The Year </strong>
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-none d-sm-block w-100" src="project/img/slide-3.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-sm-block">
          <h1>
                <strong class="Welcome wow fadeInUp Slower">Welcome To Health Land</strong>
              </h1>

          <p>
            <strong class="strong wow fadeInDown Slower">The Best Massage&Spa of The Year </strong>
          </p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!--/.Carousel Wrapper-->

  <!--Main layout-->
<div style="background-image: url('project/img/bg.png'); background-repeat: no-repeat; background-size: cover;">
    <main>
      <div class="PaddingTop Center wow fadeIn Slow">
        <img width="80" height="13" src="project/img/divider-1.png"  id="divider1"/>
      </div>
      <div class="Text-Shadow Color Center mx-auto pt-2 wow fadeInRight Slow">
        <h2>ติดต่อเรา</h2>
      </div>

      <div class="container">


        <section class=" wow fadeInLeft Slow">

          <!--Grid row-->
          <form class="mt-5">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">อีเมลล์</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">ชื่อ</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Name">
                  </div>
                </div>
                <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputTopic">เรื่องที่ต้องการติดต่อหรือสอบถาม</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <button class="btn btn-success float-right" type="submit">ส่ง</button>
                    </div>
            </div>
        </form>

          <div class="row pt-2 pb-5">
            <!--Grid column-->
            <div class="col-md-6 mt-5">

                    <iframe class="map_contact" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.056427785371!2d102.81419171434099!3d16.421960334251512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228a02a838d51b%3A0xbf25e8f6c8586d1b!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4Lig4Liy4LiE4LiV4Liw4Lin4Lix4LiZ4Lit4Lit4LiB4LmA4LiJ4Li14Lii4LiH4LmA4Lir4LiZ4Li34Lit!5e0!3m2!1sth!2sth!4v1550246244453"  frameborder="0" style="border:0"></iframe>

            </div>
            <div class="col-md-6 mt-5">
                <p class="mt-5">
                        <img class="ml-1 " src="project/img/facebook.png" style="height: 60px; width: 60px;" >
                        <a href="https://www.facebook.com/HzgBossKung" target="_blank" class="Color pl-2" >Ruchadapong Tutanon</a>
                </p>
                <p class="mt-5">
                        <img class="ml-1 " src="project/img/instagram.png" style="height: 60px; width: 60px;" >
                        <a href="https://www.instagram.com/muffinsruchadapong/?hl=th" target="_blank" class="Color pl-2" >Ruchadapong Tutanon</a>
                </p>
                <p class="mt-5">
                        <img class="ml-1 " src="project/img/phon.png" style="height: 60px; width: 60px;" >
                        <span class="Color pl-2" >091-808-4163</span>
                </p>
            </div>


          </div>
          <!--Grid row-->

        </section>
        <!-- End Section: ทรีทเมนต์-->


      </div>
    </main>
  </div>
  <!--Main layout-->

