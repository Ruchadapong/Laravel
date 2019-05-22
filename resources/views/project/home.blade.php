@extends('Project.master')

@section('title',  "Health Land | หน้าแรก")
@section('nav-home',  'active')
@section('content')
<!--Carousel Wrapper-->
<div id="carouselExampleIndicators" class="carousel slide carousel-fade d-none d-md-block" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-none d-sm-block w-100 " src="project/img/slide-2.jpg" alt="First slide">
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
      <img class="d-none d-sm-block w-100" src="project/img/slide-3.jpg" alt="Second slide">
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
      <img class="d-none d-sm-block w-100" src="project/img/slide-4.jpg" alt="Third slide">
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
      <h2>บริการแนะนำ</h2>
    </div>
    <div class="py-1 px-5 Center wow fadeIn Slower">
      <img width="600" height="20" src="project/img/divider-3.png"  id="divider3"/>



    </div>
    <div class="container">

      <!--Section: ทรีทเมนต์-->
      <section class=" wow fadeInLeft Slow">

        <!--Grid row-->
        <div class="row pt-2">

          <!--Grid column-->
          <div class="col-md-6 col-sm-12 MarginAccordion col-xs-12 thai-massage rounded" id="Show-img-first">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mt-5">

            <!-- Main heading -->

            <!-- Accordion -->
            <div class="Text-Shadow Center Color">
              <h3>ทรีทเมนต์</h3>
            </div>
            <div id="accordion" class="accordion">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <button class="btn btn-link Text-Shadow" id="btn-link1" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <span class="FontSize">นวดแผนไทย</span>
                    </button>
                  <i class="fa fa-angle-down fa-2x" id="arrow1"></i>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    การนวดแผนไทยอันเลื่องชื่อ ที่ไม่ว่าใครก็ควรต้องลองสัมผัสสักครั้ง
                    การนวดแผนไทยนี้ได้รับอิทธิพลมาจากศาสตร์การรักษาของจีนและอินเดีย
                    รวมถึงการผสมผสานเทคนิคการยืดเหยียดกล้ามเนื้อและการกดจุด โดยจะทำการนวดบนฟูก
                    และมีชุดนวดที่สวมสบายให้สวมใส่ ทรีทเมนท์การนวดแผนไทยที่ Health Land นี้
                    จะไม่ใช้น้ำมันในการนวด แต่จะเป็นการทา cooling oil เพื่อให้รู้สึกสดชื่นตลอดวัน
                    <div class="SelectBox">
                      <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                      <select class="custom-select mr-sm-2 " >
                        <option selected> 60  นาที : 600 บาท</option>
                      </select>
                      <a href="#" class="btn btn-sm rounded">จองทันที</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">

                  <button class="btn btn-link Text-Shadow collapsed" id="btn-link2" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span class="FontSize">นวดน้ำมัน</span>
                    </button>
                  <i class="fa fa-angle-down fa-2x" id="arrow2"></i>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    ให้รางวัลแก่ตนเองหลังวันทำงานที่เหนื่อยล้าหรือการเดินทางอันยาวนาน ด้วยทรีทเม้นท์นวดบรรเทาแบบสวีดิช น้ำมันหอมระเหยสกัดจากพืช สมุนไพร และดอกไม้ จะช่วยกระตุ้นการไหลเวียนของโลหิตและน้ำเหลืองอย่างได้ผล
                    <div class="SelectBox">
                      <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                      <select class="custom-select mr-sm-2" >
                        <option selected> 60  นาที : 800 บาท</option>
                      </select>
                      <a href="#" class="btn btn-sm rounded">จองทันที</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">

                  <button class="btn btn-link Text-Shadow collapsed" id="btn-link3" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span class="FontSize">นวดหน้า</span>
                    </button>
                  <i class="fa fa-angle-down fa-2x" id="arrow3"></i>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    หากต้องการผิวหน้ากระจ่างใสและมีสุขภาพดีขอแนะนำทรีทเม้นท์นวดหน้า ที่จะช่วยทำความสะอาดและปรับสภาพผิวหน้าของคุณให้เนียนใสยิ่งขึ้น ทรีทเมนท์นี้ช่วยผลัดผิวอย่างอ่อนโยนผ่านการมาส์คหน้า พร้อมเพิ่มความชุ่มชื่นให้ผิวอีกด้วย
                    <div class="SelectBox">
                      <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                      <select class="custom-select mr-sm-2" >
                        <option selected> 60  นาที : 1000 บาท</option>
                      </select>
                      <a href="#" class="btn btn-sm rounded">จองทันที</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingFour">

                  <button class="btn btn-link Text-Shadow collapsed" id="btn-link4" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <span class="FontSize">นวดฝ่าเท้า</span>
                    </button>
                  <i class="fa fa-angle-down fa-2x" id="arrow4"></i>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                  <div class="card-body">
                    ประโยชน์ของการนวดกดจุดฝ่าเท้า Health Land  จะเน้นการนวดตามจุดสะท้อนต่างๆของร่างกายที่อยู่ใต้ฝ่าเท้า ซึ่งไม่เพียงช่วยในการบรรเทาความปวดเมื่อยในส่วนล่างของขา แต่ยังช่วยขับของเสียออกจากร่างกาย ปรับสมดุลการไหลเวียนของโลหิต ช่วยบรรเทาการเจ็บป่วยต่างๆ ที่เกิดจากการป่วยทั้งแบบเรื้อรังและเฉียบพลันได้อีกด้วย
                    <div class="SelectBox">
                      <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                      <select class="custom-select mr-sm-2" >
                        <option selected> 45  นาที : 400 บาท</option>
                      </select>
                      <a href="#" class="btn btn-sm rounded">จองทันที</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Accordion -->

          </div>
          <!--Grid column-->
          <div class="mx-auto mt-5">
            <a href="#" class="btn btn-sm rounded">ดูทรีทเมนต์ทั้งหมด</a>
          </div>
        </div>
        <!--Grid row-->

      </section>
      <!-- End Section: ทรีทเมนต์-->

      <div class="pt-5  Center wow fadeIn Slow">
        <img width="600" height="20" src="project/img/divider-2.png"  id="dividerCenter1"/>
      </div>
      <div class="pt-5  Center wow zoomIn Slow">
        <img width="100" height="40" src="project/img/divider-5.png"  id="dividerCenter2"/>
      </div>
      <div class="pt-5 pr-2 Center wow fadeIn Slower">
        <img width="600" height="20" src="project/img/divider-3.png"  id="dividerCenter3"/>
      </div>

      <!--Section: Main แพ็คเกจ-->
      <section class="mt-5">
        <!--Grid row-->
        <div class="row wow fadeInRight Slow">

          <!--Grid column-->
          <div class="col-lg-6 col-md-6 px-4 pt-5">
            <!-- Accordion Package -->
            <div class="Text-Shadow Center Color">
              <h3>แพ็คเกจ</h3>
            </div>
            <div id="accordion-p" class="accordion">
              <div class="card">
                <div class="card-header" id="headingFive">
                  <button class="btn btn-link Text-Shadow" id="btn-link5" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                      <span class="FontSize">ดรีมแพ็คเกจ</span>
                    </button>
                  <i class="fa fa-angle-down fa-2x" id="arrow5"></i>
                </div>

                <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordion-p">
                  <div class="card-body">
                    แพ็คเกจสำหรับลูกค้าที่ต้องการสัมผัสประสบการณ์แห่งศาสตร์และศิลป์ของการนวดกดจุด และกระตุ้นจุดต่างๆในเวลาอันจำกัด ทรีทเมนท์ในแพ็คเกจนี้จะช่วยดูแลระบบหมุนเวียนต่างๆในร่างกาย ผ่อนคลายความตึงเครียด และคลายเส้น
                    ภายในแพ็คเกจประกอบไปด้วย<br>
                    – นวดกดจุดฝ่าเท้า 45 นาที <br>
                    – นวดกดจุดฝ่ามือ 15 นาที <br>
                    – นวดคอบ่าไหล่ 30 นาที
                    <div class="SelectBox">
                      <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                      <select class="custom-select mr-sm-2" >
                        <option selected> 90  นาที : 800 บาท</option>
                      </select>
                      <a href="#" class="btn btn-sm rounded">จองทันที</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingSix">

                  <button class="btn btn-link Text-Shadow collapsed" id="btn-link6" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <span class="FontSize">บลูมไลฟ์แพ็คเกจ</span>
                    </button>
                  <i class="fa fa-angle-down fa-2x" id="arrow6"></i>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion-p">
                  <div class="card-body">
                    แพ็คเกจ บลูม ไลฟ์ เหมาะสำหรับลูกค้าที่ต้องการผ่อนคลายและฟื้นฟูสภาพผิวด้วยการพอกผิวและขัดผิว ตามด้วยการนวดน้ำมันและนวดหน้า เพื่อช่วยเสริมสร้างการผลัดเซลล์ผิวใหม่อย่างอ่อนโยนให้กับผิวหน้าและผิวกาย <br>
                    ภายในแพ็คเกจประกอบไปด้วย <br>
                      – พอกผิวหรือขัดผิว 60 นาที <br>
                      – นวดน้ำมันอโรม่า 60 นาที <br>
                      – นวดหน้า 60 นาที
                    <div class="SelectBox">
                      <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                      <select class="custom-select mr-sm-2" >
                        <option selected> 180  นาที : 3000 บาท</option>
                      </select>
                      <a href="#" class="btn btn-sm rounded">จองทันที</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingSeven">

                  <button class="btn btn-link Text-Shadow collapsed" id="btn-link7" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        <span class="FontSize">เฮฟวี่แพ็คเกจ</span>
                    </button>
                  <i class="fa fa-angle-down fa-2x" id="arrow7"></i>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion-p">
                  <div class="card-body">
                    แพ็คเกจสุดคุ้มค่าเหมาะสำหรับลูกค้าที่ต้องการการผ่อนคลายอย่างเต็มที่หลังการทำงานหรือการเดินมาตลอดทั้งวัน เป็นแพ็คเกจที่ไม่ใช้น้ำมันหอมในการนวด แต่จะนวดช่วยในการคลายเส้น ในขณะที่การนวดคลายจุดที่ฝ่าเท้าจะช่วยกระตุ้นการทำงานของอวัยวะภายในร่างกาย เพื่อให้คุณได้ชาร์จคืนพลังความสดชื่นอย่างเต็มที่ <br> โดยในแพ็คเกจประกอบไปด้วย <br>
                    – นวดกดจุดฝ่าเท้า 40 นาที <br>
                    – นวดไทยและนวดประคบ 120 นาที
                    <div class="SelectBox">
                      <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                      <select class="custom-select mr-sm-2" >
                        <option selected> 160  นาที : 1800 บาท</option>
                      </select>
                      <a href="#" class="btn btn-sm rounded">จองทันที</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingEight">

                  <button class="btn btn-link Text-Shadow collapsed" id="btn-link8" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        <span class="FontSize">ฟูลคอสแพ็คเกจ</span>
                    </button>
                  <i class="fa fa-angle-down fa-2x" id="arrow8"></i>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion-p">
                  <div class="card-body">
                    แพ็คเกจฟูลคอส ที่รวมศาสตร์การนวดไว้อย่างครบคัน โดยจะเริ่มจากการฟิ้นฟูผิวด้วยการพอกผิวหรือขัดผิว ตามด้วยการนวดน้ำมัน แล้วเพิ่มการนวดกดจุดฝ่าเท้าเข้ามาในแพ็คเกจ เพื่อให้ลูกค้าได้บำรุงผิวกายและผ่อนคลายจิตใจ พร้อมกับการนวดคลายเส้นในเวลาเดียวกัน <br>
                    ภายในแพ็คเกจประกอบไปด้วย <br>
                    – พอกผิว หรือ ขัดผิว 60 นาที <br>
                    – นวดน้ำมันอโรม่า 60 นาที <br>
                    – นวดกดจุดฝ่าเท้า 40 นาที
                    <div class="SelectBox">
                      <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                      <select class="custom-select mr-sm-2" >
                        <option selected> 160  นาที : 2500 บาท</option>
                      </select>
                      <a href="#" class="btn btn-sm rounded">จองทันที</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Accordion Package -->


          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-md-6 col-sm-12 MarginAccordion col-xs-12 DreamPackage rounded" id="Show-img-second">

          </div>
          <!--/Grid column-->
          <div class="mx-auto mt-5">
            <a href="#" class="btn btn-sm rounded">ดูแพ็คเกจทั้งหมด</a>
          </div>
        </div>
        <!--/Grid row-->

      </section>
      <!-- End Section: แพ็คเกจ-->

      <div class="pt-5  Center wow fadeIn Slow">
        <img width="600" height="20" src="project/img/divider-2.png"  id="dividerBottom1"/>
      </div>
      <div class="pt-5 pr-1 Center wow fadeIn Slow">
        <img width="80" height="13" src="project/img/divider-1.png"  id="dividerBottom2"/>
      </div>
      <div class="Text-Shadow Color Center mx-auto pt-4 wow jackInTheBox Slower">
        <h2>โปรโมชั่น</h2>
      </div>
      <!--Section: โปรโมชั่น -->
      <section>
        <!--First row-->
        <div class="row mt-5 wow fadeIn">

          <!--First column-->
          <div class="col-md-12 col-sm-12 col-xl-12 mt-5 zoomIn Slower ">
            <div class="container">
              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="project/img/Discount.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="project/img/MemberShip.jpg" alt="Second slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
          <!--/First column-->
        </div>
        <!--/First row-->

      </section>
      <!-- End Section: โปรโมชั่น -->
    </div>
  </main>
</div>
<!--Main layout-->
@endsection
