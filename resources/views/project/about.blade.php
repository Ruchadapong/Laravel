@extends('Project.master')

@section('title',"Health Land | เกี่ยวกับเรา")
@section('nav-about','active')

<div id="carouselExampleIndicators" class="carousel slide carousel-fade d-none d-md-block" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-none d-sm-block w-100 " src="project/img/hotstone-massage.jpg" alt="First slide">
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
      <img class="d-none d-sm-block w-100" src="project/img/face-massage.jpg" alt="Second slide">
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
      <img class="d-none d-sm-block w-100" src="project/img/footsecond-massage.jpg" alt="Third slide">
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
      <h2>เกี่ยวกับเรา</h2>
    </div>
    <div class="py-1 px-5 Center wow fadeIn Slower">
      <img width="600" height="20" src="project/img/divider-3.png"  id="divider3"/>



    </div>
    <div class="container mt-5">

      <!--Section: เกี่ยวกับเรา-->
      <section class=" wow fadeInLeft Slower">
        <div class="container rounded-about" style="background-color: rgba(0, 0, 0, 0.59); ">
          <p>&nbsp;</p>
          <img src="project/img/about-page.png" style="height: 50%; width: 45%; display: block;
    margin-left: auto;
    margin-right: auto;">
          <p>&nbsp;</p>
          <p class="Center Color">บริการการนวดและสปาที่หรูหรามีการให้บริการหลากหลายรูปแบบในทำเลที่สะดวกสบายอยู่ ณ ใจกลางเมือง พร้อมสถานที่จอดรถ</p>
          <p class="Center Color">เรามีความมุ่งมั่นที่จะมอบประสบการณ์สปาที่เป็นมืออาชีพและน่าจดจำด้วยการนวดที่ดีที่สุดของเราโดยทีมงานที่มีคุณวุฒิและได้รับการคัดสรรเป็นอย่างดี<br>เพื่อสร้างความสมดุลระหว่างร่างกายและจิตใจเพื่อความผ่อนคลายพร้อมกับความรู้สึกผ่อนคลายที่หรูหรา</p>
          <p class="Center Color">ประสบการณ์การนวดและสปาที่ดี ไม่เพียงแต่จะช่วยให้กล้ามเนื้อของคุณผ่อนคลาย แต่ยังช่วยให้ผ่อนคลายจากความตึงเครียดและผ่อนคลายจิตใจของคุณ <br>ช่วยเพิ่มระบบภูมิคุ้มกัน ลดผลกระทบจากความชราและทำให้ผิวของคุณอ่อนเยาว์และอ่อนเยาว์ </p>
          <p class="Center Color">ที่ Health Land ของเรามีผู้เชี่ยวชาญที่ดีที่สุดในการมอบประสบการณ์สปาที่เยี่ยมยอดและน่าจดจำด้วยการนวดที่ดีที่สุดเพื่อความผ่อนคลายของจิตใจและร่างกาย <br>เรามีบริการนวดบำบัดหลากหลายรูปแบบ ได้แก่ นวดไทยแผนโบราณ การนวดเท้าเพื่อบำบัดด้วยสมุนไพร <br>และการนวดใบหน้าโดยใช้ผลิตภัณฑ์บำรุงผิวจากธรรมชาติ</p>
          <p class="Center Color">การนวดแผนไทยเกิดขึ้นจากการเน้นที่จะผ่อนคลายกล้ามเนื้อในร่างกายและผ่อนคลายจากความเครียด ที่เกิดจากการออกกำลังการ การทำงาน หรือแม้กระทั้งใช้ชีวิตประจำวัน <br>ดังนั้นการนวดแผนไทยใน Health Land เป็นสิ่งที่ดีที่สุดที่คุณจะสามารถให้ร่างกายของคุณได้และคุณจะรู้สึกขอบคุณตัวเองต่อไปอีกหลายสัปดาห์</p>
          <p>&nbsp;</p>
        </div>
      </section>
      <!-- End Section: เกี่ยวกับเรา-->
      <div class="pt-5  Center wow fadeIn Slow">
        <img width="600" height="20" src="project/img/divider-2.png"  id="dividerBottom1"/>
      </div>
      <div class="pt-5 pr-1 pb-5 Center wow fadeIn Slow">
        <img width="80" height="13" src="project/img/divider-1.png"  id="dividerBottom2"/>
      </div>
    </div>
  </main>
</div>
