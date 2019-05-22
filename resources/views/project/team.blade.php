@extends('Project.master')

@section('title',"Health Land | ทีมของเรา")
@section('nav-team','active')

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
      <img class="d-none d-sm-block w-100" src="project/img/slide-6.jpg" alt="Second slide">
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
      <img class="d-none d-sm-block w-100" src="project/img/slide-7.jpg" alt="Third slide">
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
<!--เกี่ยวกับเรา-->
<div style="background-image: url('project/img/bg.png'); background-repeat: no-repeat; background-size: cover;">
  <main>
    <div class="PaddingTop Center wow fadeIn Slow">
      <img width="80" height="13" src="project/img/divider-1.png"  id="divider1"/>
    </div>
    <div class="Text-Shadow Color Center mx-auto pt-2 wow fadeInRight Slow">
      <h2>ทีมของเรา</h2>
    </div>
    <div class="py-1 px-5 Center wow fadeIn Slower">
      <img width="600" height="20" src="project/img/divider-3.png"  id="divider3"/>
    </div>
    <div class="container mt-5">

      <!--Section: ทีมของเรา-->
      <section class=" wow fadeInLeft Slower">

        <div class="row pt-2">
          <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mt-2 Margin-Left">
            <div class="maincontainer">
              <div class="thecard">
                <div class="thefront">
                  <img src="project/img/team/team-1.jpg" style="width: 250px; height: 375px;" class="rounded">
                </div>
                <div class="theback rounded Center"><h4>ซาร่า</h4>
                  <p style="padding-left: 5px;">รายละเอียด : มีความเชี่ยวชาญการนวดหน้า และนวดหลังเป็นพิเศษ</p>
                  <p>เวลางาน : 9.00 - 12.00</p>
                  <p>ติดต่อ : <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                  <i class="fa fa-facebook mr-1 ml-1"></i>
                </a>
                  <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                  <i class="fa fa-instagram mr-1"></i>
                </a>
                <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fa fa-envelope mr-1"></i>
              </a></p>
              <p>Tel. : 0224559872</p>
              <p>&nbsp;</p>
              <a href="#" class="btn btn-md rounded">จองทันที</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mt-2 Margin-Left">
            <div class="maincontainer">
              <div class="thecard">
                <div class="thefront">
                  <img src="project/img/team/team-2.jpg" style="width: 250px; height: 375px;" class="rounded">
                </div>
                <div class="theback rounded Center"><h4>เจน</h4>
                  <p>อายุ : 30 ปี</p>
                  <p>เวลางาน : 8.00 - 12.00</p>
                  <p>ติดต่อ : <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                  <i class="fa fa-facebook mr-1 ml-1"></i>
                </a>
                  <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                  <i class="fa fa-instagram mr-1"></i>
                </a>
                <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fa fa-envelope mr-1"></i>
              </a></p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <a href="#" class="btn btn-md rounded">จองทันที</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mt-2 Margin-Left">
            <div class="maincontainer">
              <div class="thecard">
                <div class="thefront">
                  <img src="project/img/team/team-3.jpg" style="width: 250px; height: 375px;" class="rounded">
                </div>
                <div class="theback rounded Center"><h4>แคลร์</h4>
                  <p>อายุ : 28 ปี</p>
                  <p>เวลางาน : 8.00 - 16.00</p>
                  <p>ติดต่อ : <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                  <i class="fa fa-facebook mr-1 ml-1"></i>
                </a>
                  <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                  <i class="fa fa-instagram mr-1"></i>
                </a>
                <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fa fa-envelope mr-1"></i>
              </a></p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <a href="#" class="btn btn-md rounded">จองทันที</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mt-2 Margin-Left">
            <div class="maincontainer">
              <div class="thecard">
                <div class="thefront">
                  <img src="project/img/team/team-4.jpg" style="width: 250px; height: 375px;" class="rounded">
                </div>
                <div class="theback rounded Center"><h4>จูเลีย</h4>
                  <p>อายุ : 40 ปี</p>
                  <p>เวลางาน : 13.00 - 16.00</p>
                  <p>ติดต่อ : <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                  <i class="fa fa-facebook mr-1 ml-1"></i>
                </a>
                  <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                  <i class="fa fa-instagram mr-1"></i>
                </a>
                <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fa fa-envelope mr-1"></i>
              </a></p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <a href="#" class="btn btn-md rounded">จองทันที</a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </section>
      <!-- End Section: ทีมของเรา-->

      <div class="pt-5  Center wow zoomIn Slow">
        <img width="100" height="40" src="project/img/divider-5.png"  id="dividerCenter2"/ class="rounded">
      </div>

      <section class="mt-5">
        <!--Grid row-->
        <div class="row wow fadeInRight Slow">
          <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mt-2 Margin-Left">
            <div class="maincontainer">
              <div class="thecard">
                <div class="thefront">
                  <img src="project/img/team/team-5.jpg" style="width: 250px; height: 375px;" class="rounded">
                </div>
                <div class="theback rounded Center"><h4>สกาเล็ต</h4>
                  <p>อายุ : 26 ปี</p>
                  <p>เวลางาน : 9.00 - 16.00</p>
                  <p>ติดต่อ : <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                  <i class="fa fa-facebook mr-1 ml-1"></i>
                </a>
                  <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                  <i class="fa fa-instagram mr-1"></i>
                </a>
                <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fa fa-envelope mr-1"></i>
              </a></p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <a href="#" class="btn btn-md rounded">จองทันที</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mt-2 Margin-Left">
            <div class="maincontainer">
              <div class="thecard">
                <div class="thefront">
                  <img src="project/img/team/team-6.jpg" style="width: 250px; height: 375px;" class="rounded">
                </div>
                <div class="theback rounded Center"><h4>นาตาลี</h4>
                  <p>อายุ : 38 ปี</p>
                  <p>เวลางาน : 17.00 - 20.00</p>
                  <p>ติดต่อ : <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                  <i class="fa fa-facebook mr-1 ml-1"></i>
                </a>
                  <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                  <i class="fa fa-instagram mr-1"></i>
                </a>
                <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fa fa-envelope mr-1"></i>
              </a></p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <a href="#" class="btn btn-md rounded">จองทันที</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mt-2 Margin-Left">
            <div class="maincontainer">
              <div class="thecard">
                <div class="thefront">
                  <img src="project/img/team/team-7.jpg" style="width: 250px; height: 375px;" class="rounded">
                </div>
                <div class="theback rounded Center"><h4>เอ็มม่า</h4>
                  <p>อายุ : 34 ปี</p>
                  <p>เวลางาน : 13.00 - 16.00</p>
                  <p>ติดต่อ : <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                  <i class="fa fa-facebook mr-1 ml-1"></i>
                </a>
                  <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                  <i class="fa fa-instagram mr-1"></i>
                </a>
                <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fa fa-envelope mr-1"></i>
              </a></p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <a href="#" class="btn btn-md rounded">จองทันที</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mt-2 Margin-Left">
            <div class="maincontainer">
              <div class="thecard">
                <div class="thefront ">
                  <img src="project/img/team/team-8.jpg" style="width: 250px; height: 375px;" class="rounded">
                </div>
                <div class="theback rounded Center"><h4>เอมิลี่</h4>
                  <p>อายุ : 29 ปี</p>
                  <p>เวลางาน : 9.00 - 12.00</p>
                  <p>ติดต่อ : <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                  <i class="fa fa-facebook mr-1 ml-1"></i>
                </a>
                  <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                  <i class="fa fa-instagram mr-1"></i>
                </a>
                <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fa fa-envelope mr-1"></i>
              </a></p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <a href="#" class="btn btn-md rounded">จองทันที</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/Grid row-->

      </section>
      <!-- End Section: แพ็คเกจ-->
      <div class="pt-5  Center wow fadeIn Slow">
        <img width="600" height="20" src="project/img/divider-2.png"  id="dividerBottom1"/>
      </div>
      <div class="pt-5 pr-1 pb-5 Center wow fadeIn Slow">
        <img width="80" height="13" src="project/img/divider-1.png"  id="dividerBottom2"/>
      </div>
    </div>
  </main>
</div>
