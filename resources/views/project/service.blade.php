@extends('Project.master')

@section('title',"Health Land | บริการ")
@section('nav-service','active')

<!--Carousel Wrapper-->
<div id="carouselExampleIndicators" class="carousel slide carousel-fade d-none d-md-block" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-none d-sm-block w-100 " src="project/img/slide-8.jpg" alt="First slide">
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
      <img class="d-none d-sm-block w-100" src="project/img/slide-9.jpg" alt="Second slide">
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
      <img class="d-none d-sm-block w-100" src="project/img/slide-10.jpg" alt="Third slide">
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

<div style="background-image: url('project/img/bg.png'); background-repeat: no-repeat; background-size: cover;">
  <main>
    <div class="PaddingTop Center wow fadeIn Slow">
      <img width="80" height="13" src="project/img/divider-1.png"  id="divider1"/>
    </div>

    <div class="container mt-5 pb-5">

      <!--Section: Service-->
      <section class=" wow fadeInLeft Slower">
          <div class="containe col-xs-12">
              <ul class="nav nav-pills mb-3 mx-auto pill_width" id="pills-tab" role="tablist" >
                  <li class="nav-item">
                      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">ทรีทเมนต์</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">แพ็คเกจ</a>
                    </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">

              {{-- content Teatment --}}
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-5">
                          <img class="img-service rounded" src="project/img/Treatment/backMassage.jpg" />
                      </div>
                      <div class="col-md-6 col-sm-12 col-xs-12 pt-5">
                          <div class="Text-Shadow Color">
                              <h5>นวดหลัง</h5>
                            </div>
                          ขอแนะนำทรีทเมนท์ ทีช่วยบำบัดผ่อนคลายหลังการทำงานอย่างยาวนานตลอดวัน
                          รวมถึงผู้ที่มีอาการเจ็ทแล็ก ปวดเมื่อย โดย Health Land มีเก้าอี้นวดที่ถูกออกแบบพิเศษเพื่อรองรับการนวดหลังโดยเฉพาะ
                          เมื่อคุณนั่งบนเก้าอี้นวดชนิดพิเศษนี้ และได้รับการนวดที่สร้างสรรค์ขึ้น โดยการใช้ปลายนิ้วมือนวดควบคู่ไปกับมือและข้อศอกบนบริเวณของหลังและไหล่ที่ปวด
                          จะช่วยบำบัดและผ่อนคลาย ปรับสมดุลการไหลเวียนของโลหิตอย่างได้ผล
                          <div class="SelectBox">
                              <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                              <select class="custom-select mr-sm-2 " >
                                <option selected> 60  นาที : 400 บาท</option>
                                <option value="1"> 120  นาที : 700 บาท</option>
                              </select>
                              <a href="#" class="btn btn-md rounded">จองทันที</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-5">
                            <img class="img-service rounded" src="project/img/Treatment/bodyScrub.jpg" />
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 pt-5">
                            <div class="Text-Shadow Color">
                                <h5>ขัดผิว</h5>
                              </div>
                              เลือกสครับที่เหมาะกับผิวคุณ Health Land  มีสครับแบบต่างๆให้เลือกกว่า 6 ชนิด
                              ช่วยขจัดเซลล์ผิวหนังที่ตายแล้ว พร้อมการใช้เกลือขัดผิว
                              น้ำมันหอมระเหย น้ำ แปรงขัดผิว หรือใยบวบ ช่วยบำรุงผิว กระตุ้นการไหลเวียนของโลหิต
                              ทำให้ผิวเนียนใส ได้ผลดีแม้ในผู้ที่มีผิวแพ้ง่าย
                            <div class="SelectBox">
                                <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                                <select class="custom-select mr-sm-2 " >
                                  <option selected> 60  นาที : 1000 บาท</option>
                                  <option value="1"> 90  นาที : 1300 บาท</option>
                                </select>
                                <a href="#" class="btn btn-md rounded">จองทันที</a>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-5">
                              <img class="img-service rounded" src="project/img/Treatment/bodyWrap.jpg" />
                          </div>
                          <div class="col-md-6 col-sm-12 col-xs-12 pt-5">
                              <div class="Text-Shadow Color">
                                  <h5>พอกผิว</h5>
                                </div>
                                พอกผิวเพื่อเติมความชุ่มชื่นสู่ผิว ด้วยการนำสมุนไพรมาพอกทั่วร่างกาย
                                แล้วพันด้วยแผ่นพลาสติค และห่มด้วยผ้าห่มอุ่นประมาณ 20 นาที
                                เพื่อให้ผิวได้รับการผ่อนคลายและเติมความชุ่มชื่น
                                เป็นทรีทเมนท์แนะนำสำหรับผู้ที่ผิวผ่านการโดนแดดมาทั้งวัน
                                การพอกผิวนี้จะช่วยให้ผิวได้รับความชุ่มชื่นมากยิ่งขึ้น
                              <div class="SelectBox">
                                  <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                                  <select class="custom-select mr-sm-2 " >
                                    <option selected> 30  นาที : 400 บาท</option>
                                    <option value="1"> 60  นาที : 800 บาท</option>
                                  </select>
                                  <a href="#" class="btn btn-md rounded">จองทันที</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-5">
                                <img class="img-service rounded" src="project/img/Treatment/faceMassage.jpg" />
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 pt-5">
                                <div class="Text-Shadow Color">
                                    <h5>นวดหน้า</h5>
                                  </div>
                                  หากต้องการผิวหน้ากระจ่างใสและมีสุขภาพดีขอแนะนำทรีทเม้นท์นวดหน้า
                                  ที่จะช่วยทำความสะอาดและปรับสภาพผิวหน้าของคุณให้เนียนใสยิ่งขึ้น
                                  ทรีทเมนท์นี้ช่วยผลัดผิวอย่างอ่อนโยนผ่านการมาส์คหน้า
                                  พร้อมเพิ่มความชุ่มชื่นให้ผิวอีกด้วย
                                <div class="SelectBox">
                                    <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                                    <select class="custom-select mr-sm-2 " >
                                      <option selected> 60  นาที : 1000 บาท</option>
                                      <option value="1"> 90  นาที : 1300 บาท</option>
                                    </select>
                                    <a href="#" class="btn btn-md rounded">จองทันที</a>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-5">
                                  <img class="img-service rounded" src="project/img/Treatment/footMassage.jpg" />
                              </div>
                              <div class="col-md-6 col-sm-12 col-xs-12 pt-5">
                                  <div class="Text-Shadow Color">
                                      <h5>นวดฝ่าเท้า</h5>
                                    </div>
                                    ประโยชน์ของการนวดกดจุดฝ่าเท้า Health Land จะเน้นการนวดตามจุดสะท้อนต่างๆของร่างกายที่อยู่ใต้ฝ่าเท้า
                                    ซึ่งไม่เพียงช่วยในการบรรเทาความปวดเมื่อยในส่วนล่างของขา แต่ยังช่วยขับของเสียออกจากร่างกาย
                                    ปรับสมดุลการไหลเวียนของโลหิต ช่วยบรรเทาการเจ็บป่วยต่างๆ ที่เกิดจากการป่วยทั้งแบบเรื้อรังและเฉียบพลันได้อีกด้วย
                                  <div class="SelectBox">
                                      <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                                      <select class="custom-select mr-sm-2 " >
                                        <option selected> 45  นาที : 400 บาท</option>
                                        <option value="1"> 60  นาที : 600 บาท</option>
                                      </select>
                                      <a href="#" class="btn btn-md rounded">จองทันที</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-5">
                                    <img class="img-service rounded" src="project/img/Treatment/handMassage.jpg" />
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 pt-5">
                                    <div class="Text-Shadow Color">
                                        <h5>นวดฝ่ามือ</h5>
                                      </div>
                                      หากคุณไม่มีเวลาเพียงพอสำหรับการนวดสปาแบบเต็มคอร์ส
                                      หรือนักท่องเที่ยวที่อยากสัมผัสประสบการณ์การนวดระยะเวลาสั้นๆก่อนเดินทางกลับ
                                      ขอแนะนำการนวดกดจุุดฝ่ามือ ซึ่งจะคล้ายกับการนวดกดจุดฝ่าเท้า ซึ่งเป็นการนวดที่ได้รับการสืบทอดมาแต่โบราณ
                                      โดยจะนวดกดจุดสะท้อนบนมือที่เป็นจุดรวมชีพจรต่างๆของร่างกาย เพื่อช่วยขับของเสียออกจากร่างกาย
                                      ปรับสมดุลการไหลเวียนของโลหิต ช่วยบรรเทาการเจ็บป่วยต่างๆ ที่เกิดจากการป่วยทั้งแบบเรื้อรังและเฉียบพลันได้อีกด้วย
                                    <div class="SelectBox">
                                        <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                                        <select class="custom-select mr-sm-2 " >
                                          <option selected> 15  นาที : 100 บาท</option>
                                          <option value="1"> 30  นาที : 200 บาท</option>
                                          <option value="2"> 45  นาที : 300 บาท</option>
                                        </select>
                                        <a href="#" class="btn btn-md rounded">จองทันที</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-5">
                                      <img class="img-service rounded" src="project/img/Treatment/hotstoneMassage.jpg" />
                                  </div>
                                  <div class="col-md-6 col-sm-12 col-xs-12 pt-5">
                                      <div class="Text-Shadow Color">
                                          <h5>นวดหินร้อน</h5>
                                        </div>
                                        การนวดตัวด้วยหินร้อนลาวาภูเขาไฟ เป็นหนึ่งในประสบการณ์สปาที่คุณไม่ควรพลาด
                                        สัมผัสความผ่อนคลายด้วยการใช้หินร้อนวางตามส่วนต่างๆของร่างกาย ผสานกับการนวดกดจุดจากเทอราพิส
                                        ช่วยให้กล้ามเนื้อได้รับความผ่อนคลาย กระตุ้นการไหลเวียนของโลหิตและระบบน้ำเหลือง
                                        ทำให้ร่างกายสดชื่น มีชีวิตชีวายิ่งกว่า
                                      <div class="SelectBox">
                                          <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                                          <select class="custom-select mr-sm-2 " >
                                            <option selected> 60  นาที : 1200 บาท</option>
                                            <option value="1"> 120  นาที : 2000 บาท</option>
                                          </select>
                                          <a href="#" class="btn btn-md rounded">จองทันที</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-5">
                                        <img class="img-service rounded" src="project/img/Treatment/oliMassage.jpg" />
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12 pt-5">
                                        <div class="Text-Shadow Color">
                                            <h5>นวดน้ำมัน</h5>
                                          </div>
                                          ให้รางวัลแก่ตนเองหลังวันทำงานที่เหนื่อยล้าหรือการเดินทางอันยาวนาน
                                          ด้วยทรีทเม้นท์นวดบรรเทาแบบสวีดิช น้ำมันหอมระเหยสกัดจากพืช
                                          สมุนไพร และดอกไม้ จะช่วยกระตุ้นการไหลเวียนของโลหิตและน้ำเหลืองอย่างได้ผล
                                        <div class="SelectBox">
                                            <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                                            <select class="custom-select mr-sm-2 " >
                                              <option selected> 60  นาที : 800 บาท</option>
                                              <option value="1"> 90  นาที : 1000 บาท</option>
                                              <option value="2"> 120  นาที : 1200 บาท</option>
                                            </select>
                                            <a href="#" class="btn btn-md rounded">จองทันที</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-5">
                                          <img class="img-service rounded" src="project/img/Treatment/thaiMassage.jpg" />
                                      </div>
                                      <div class="col-md-6 col-sm-12 col-xs-12 pt-5">
                                          <div class="Text-Shadow Color">
                                              <h5>นวดแผนไทย</h5>
                                            </div>
                                            การนวดแผนไทยอันเลื่องชื่อ ที่ไม่ว่าใครก็ควรต้องลองสัมผัสสักครั้ง
                                            การนวดแผนไทยนี้ได้รับอิทธิพลมาจากศาสตร์การรักษาของจีนและอินเดีย
                                            รวมถึงการผสมผสานเทคนิคการยืดเหยียดกล้ามเนื้อและการกดจุด โดยจะทำการนวดบนฟูก
                                            และมีชุดนวดที่สวมสบายให้สวมใส่ ทรีทเมนท์การนวดแผนไทยที่ Health Land นี้
                                            จะไม่ใช้น้ำมันในการนวด แต่จะเป็นการทา cooling oil เพื่อให้รู้สึกสดชื่นตลอดวัน
                                          <div class="SelectBox">
                                              <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                                              <select class="custom-select mr-sm-2 " >
                                                <option selected> 60  นาที : 600 บาท</option>
                                                <option value="1"> 120  นาที : 1000 บาท</option>
                                              </select>
                                              <a href="#" class="btn btn-md rounded">จองทันที</a>
                                            </div>
                                        </div>
                                    </div>
                  </div>
                </div>

                {{-- content Package --}}
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-5">
                              <img class="img-service rounded" src="project/img/Package/bloomPackage.jpg" />
                          </div>
                          <div class="col-md-6 col-sm-12 col-xs-12 pt-5">
                              <div class="Text-Shadow Color">
                                  <h5>บลูมไลฟ์แพ็คเกจ</h5>
                                </div>
                                แพ็คเกจ บลูม ไลฟ์ เหมาะสำหรับลูกค้าที่ต้องการผ่อนคลายและฟื้นฟูสภาพผิวด้วยการพอกผิวและขัดผิว ตามด้วยการนวดน้ำมันและนวดหน้า เพื่อช่วยเสริมสร้างการผลัดเซลล์ผิวใหม่อย่างอ่อนโยนให้กับผิวหน้าและผิวกาย <br>
                                ภายในแพ็คเกจประกอบไปด้วย <br>
                                  – พอกผิวหรือขัดผิว 60 นาที <br>
                                  – นวดน้ำมันอโรม่า 60 นาที <br>
                                  – นวดหน้า 60 นาที
                              <div class="SelectBox">
                                  <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                                  <select class="custom-select mr-sm-2 " >
                                    <option selected> 180  นาที : 3000 บาท</option>

                                  </select>
                                  <a href="#" class="btn btn-md rounded">จองทันที</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-5">
                                <img class="img-service rounded" src="project/img/Package/daydream.jpg" />
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 pt-5">
                                <div class="Text-Shadow Color">
                                    <h5>เดย์ดรีมแพ็คเกจ</h5>
                                  </div>
                                  ใช้ช่วงเวลาดีดีด้วยแพ็คเกจ เดย์ดรีม อีกหนึ่งประสบการณ์ประทับใจสำหรับคุณ
                                  ไม่เพียงความผ่อนคลายและปลดปล่อยความตึงเครียดบนความหรูหราแล้ว
                                  ยังเป็นช่วงเวลาที่สวยงามในความสัมพันธ์ระหว่างคุณและคนสำคัญ เป็นประสบการณ์สุดประทับใจที่ยากจะลืม
                                  แพ็คเกจ เดย์ดรีม สำหรับหนึ่งท่านประกอบด้วยทรีทเม้นต์เหล่านี้ <br>
                                  – แช่น้ำมันหอมระเหยและกลีบดอกไม้ในอ่าง floral bath 30 นาที <br>
                                  – พอกตัว หรือ ขัดผิว 60 นาที <br>
                                  – นวดน้ำมันอโรมา 60 นาที <br>
                                  – นวดหน้า 60 นาที
                                <div class="SelectBox">
                                    <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                                    <select class="custom-select mr-sm-2 " >
                                      <option selected> 210  นาที : 5000 บาท</option>

                                    </select>
                                    <a href="#" class="btn btn-md rounded">จองทันที</a>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-5">
                                  <img class="img-service rounded" src="project/img/Package/dreamPackage.jpg" />
                              </div>
                              <div class="col-md-6 col-sm-12 col-xs-12 pt-5">
                                  <div class="Text-Shadow Color">
                                      <h5>ดรีมแพ็คเกจ</h5>
                                    </div>
                                    แพ็คเกจสำหรับลูกค้าที่ต้องการสัมผัสประสบการณ์แห่งศาสตร์และศิลป์ของการนวดกดจุด
                                    และกระตุ้นจุดต่างๆในเวลาอันจำกัด
                                    ทรีทเมนท์ในแพ็คเกจนี้จะช่วยดูแลระบบหมุนเวียนต่างๆในร่างกาย
                                    ผ่อนคลายความตึงเครียด และคลายเส้น ภายในแพ็คเกจประกอบไปด้วย <br>
                                    – นวดกดจุดฝ่าเท้า 45 นาที <br>
                                    – นวดกดจุดฝ่ามือ 15 นาที <br>
                                    – นวดคอบ่าไหล่ 30 นาที
                                  <div class="SelectBox">
                                      <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                                      <select class="custom-select mr-sm-2 " >
                                        <option selected> 90  นาที : 800 บาท</option>

                                      </select>
                                      <a href="#" class="btn btn-md rounded">จองทันที</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-5">
                                    <img class="img-service rounded" src="project/img/Package/fullcousePackage.jpg" />
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 pt-5">
                                    <div class="Text-Shadow Color">
                                        <h5>ฟูลคอสแพ็คเกจ</h5>
                                      </div>
                                      แพ็คเกจฟูลคอส ที่รวมศาสตร์การนวดไว้อย่างครบคัน โดยจะเริ่มจากการฟิ้นฟูผิวด้วยการพอกผิวหรือขัดผิว ตามด้วยการนวดน้ำมัน แล้วเพิ่มการนวดกดจุดฝ่าเท้าเข้ามาในแพ็คเกจ เพื่อให้ลูกค้าได้บำรุงผิวกายและผ่อนคลายจิตใจ พร้อมกับการนวดคลายเส้นในเวลาเดียวกัน <br>
                                      ภายในแพ็คเกจประกอบไปด้วย <br>
                                      – พอกผิว หรือ ขัดผิว 60 นาที <br>
                                      – นวดน้ำมันอโรม่า 60 นาที <br>
                                      – นวดกดจุดฝ่าเท้า 40 นาที
                                    <div class="SelectBox">
                                        <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                                        <select class="custom-select mr-sm-2 " >
                                          <option selected> 160  นาที : 2500 บาท</option>

                                        </select>
                                        <a href="#" class="btn btn-md rounded">จองทันที</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-5">
                                      <img class="img-service rounded" src="project/img/Package/havenPackage.jpg" />
                                  </div>
                                  <div class="col-md-6 col-sm-12 col-xs-12 pt-5">
                                      <div class="Text-Shadow Color">
                                          <h5>เฮฟวี่แพ็คเกจ</h5>
                                        </div>
                                        แพ็คเกจสุดคุ้มค่าเหมาะสำหรับลูกค้าที่ต้องการการผ่อนคลายอย่างเต็มที่หลังการทำงานหรือการเดินมาตลอดทั้งวัน เป็นแพ็คเกจที่ไม่ใช้น้ำมันหอมในการนวด แต่จะนวดช่วยในการคลายเส้น ในขณะที่การนวดคลายจุดที่ฝ่าเท้าจะช่วยกระตุ้นการทำงานของอวัยวะภายในร่างกาย เพื่อให้คุณได้ชาร์จคืนพลังความสดชื่นอย่างเต็มที่ <br> โดยในแพ็คเกจประกอบไปด้วย <br>
                                        – นวดกดจุดฝ่าเท้า 40 นาที <br>
                                        – นวดไทยและนวดประคบ 120 นาที
                                      <div class="SelectBox">
                                          <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                                          <select class="custom-select mr-sm-2 " >
                                            <option selected> 160  นาที : 1800 บาท</option>

                                          </select>
                                          <a href="#" class="btn btn-md rounded">จองทันที</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-5">
                                        <img class="img-service rounded" src="project/img/Package/simpleeThai.jpg" />
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12 pt-5">
                                        <div class="Text-Shadow Color">
                                            <h5>ซิมพลี่ไทยแพ็คเกจ</h5>
                                          </div>
                                          แพ็คเกจที่ให้คุณได้มีโอกาสสัมผัสประสบการณ์นวดสปาที่ยอดเยี่ยมแบบนี้ แพ็คเกจซิมพลี่ไทยนี้จะประกอบไปด้วย <br>
                                          – อบผิวด้วยสมุนไพรไทย 30 นาที <br>
                                          – นวดไทย 2 ชั่วโมง+นวดลูกประคบร้อน
                                        <div class="SelectBox">
                                            <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                                            <select class="custom-select mr-sm-2 " >
                                              <option selected> 150  นาที : 1700 บาท</option>

                                            </select>
                                            <a href="#" class="btn btn-md rounded">จองทันที</a>
                                          </div>
                                      </div>
                                  </div>
                  </div>
                </div>

              </div>
      </section>
    </div>

  </div>

      <!-- End Section: Service-->




