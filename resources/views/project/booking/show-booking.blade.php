@extends('Project.master')

@section('title',"Health Land | Booking Details")

@section('content')
<div style="background-image: url('{{asset('project/img/bg.png')}}'); background-repeat: no-repeat; background-size: cover;">


    <div class="container col-sm-6 col-sm-offset-1 col-md-10 col-md-offset-3 col-lg-8 col-lg-offset-3 form-box mx-auto " style="padding-top: 8rem;">

        <h2 style="margin-bottom: 3rem;">รายละเอียดการจอง</h2>
        @foreach ($bookingDetails->booking as $Detail)

        <div class="card" style="background: #ADA996;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #EAEAEA, #DBDBDB, #F2F2F2, #ADA996);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #EAEAEA, #DBDBDB, #F2F2F2, #ADA996); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */">
            <div class="card-body ">
                  <div class="row">
                    <div class="col-md-6 col-lg-6 pl-5">
                        <div class="booking-details">
                            <h5 class="card-title"> รหัสจอง : {{$Detail->id}}</h5>
                            <h6>อีเมล : {{$Detail->booking_email}}</h6>
                            <h6>ชื่อผู้จอง : {{$Detail->booking_name}}</h6>
                            <h6>เบอร์ติดต่อ : {{$Detail->booking_tel}}</h6>
                            <h6>เวลาที่จอง : {{$Detail->booking_time}}.00 น.</h6>
                            <h6>ห้อง : {{$Detail->room_id}}</h6>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6" style="padding-top:2rem;">
                        @if($Detail->id == 1)
                            @foreach ($Details_1 as $item)
                                @if($item->treat_id == 11)
                                    <h6 hidden>ทรีทเมนต์ชื่อ : {{$item->treat_name}}</h6>
                                    <h6 hidden>ทรีทเมนต์ราคา : {{$item->treat_cost}}</h6>
                                @else
                                    <h6>ทรีทเมนต์ชื่อ : {{$item->treat_name}}</h6>
                                    <h6>ทรีทเมนต์ราคา : {{$item->treat_cost}}</h6>
                                @endif
                                @if($item->package_id == 7)
                                    <h6 hidden>แพ็คเกจชื่อ : {{$item->pack_name}}</h6>
                                    <h6 hidden>แพ็คเกจราคา : {{$item->pack_cost}}</h6>
                                @else
                                    <h6>แพ็คเกจชื่อ : {{$item->pack_name}}</h6>
                                    <h6>แพ็คเกจราคา : {{$item->pack_cost}}</h6>
                                @endif
                                <h6>พนักงาน : {{$item->emp_name}}</h6>
                                <h6 >จองเมื่อเวลา : {{$item->created_at}}</h6>

                            @endforeach
                        @elseif($Detail->id == 2)
                             @foreach ($Details_2 as $item)
                                @if($item->treat_id == 11)
                                    <h6 hidden>ทรีทเมนต์ชื่อ : {{$item->treat_name}}</h6>
                                    <h6 hidden>ทรีทเมนต์ราคา : {{$item->treat_cost}}</h6>
                                @else
                                    <h6>ทรีทเมนต์ชื่อ : {{$item->treat_name}}</h6>
                                    <h6>ทรีทเมนต์ราคา : {{$item->treat_cost}}</h6>
                                @endif
                                @if($item->package_id == 7)
                                    <h6 hidden>แพ็คเกจชื่อ : {{$item->pack_name}}</h6>
                                    <h6 hidden>แพ็คเกจราคา : {{$item->pack_cost}}</h6>
                                @else
                                    <h6>แพ็คเกจชื่อ : {{$item->pack_name}}</h6>
                                    <h6>แพ็คเกจราคา : {{$item->pack_cost}}</h6>
                                @endif
                                <h6>พนักงาน : {{$item->emp_name}}</h6>
                                <h6 >จองเมื่อเวลา : {{$item->created_at}}</h6>

                            @endforeach
                            @elseif($Detail->id == 3)
                             @foreach ($Details_3 as $item)
                                @if($item->treat_id == 11)
                                    <h6 hidden>ทรีทเมนต์ชื่อ : {{$item->treat_name}}</h6>
                                    <h6 hidden>ทรีทเมนต์ราคา : {{$item->treat_cost}}</h6>
                                @else
                                    <h6>ทรีทเมนต์ชื่อ : {{$item->treat_name}}</h6>
                                    <h6>ทรีทเมนต์ราคา : {{$item->treat_cost}}</h6>
                                @endif
                                @if($item->package_id == 7)
                                    <h6 hidden>แพ็คเกจชื่อ : {{$item->pack_name}}</h6>
                                    <h6 hidden>แพ็คเกจราคา : {{$item->pack_cost}}</h6>
                                @else
                                    <h6>แพ็คเกจชื่อ : {{$item->pack_name}}</h6>
                                    <h6>แพ็คเกจราคา : {{$item->pack_cost}}</h6>
                                @endif
                                <h6>พนักงาน : {{$item->emp_name}}</h6>
                                <h6 >จองเมื่อเวลา : {{$item->created_at}}</h6>

                            @endforeach
                            @elseif($Detail->id == 4)
                             @foreach ($Details_4 as $item)
                                @if($item->treat_id == 11)
                                    <h6 hidden>ทรีทเมนต์ชื่อ : {{$item->treat_name}}</h6>
                                    <h6 hidden>ทรีทเมนต์ราคา : {{$item->treat_cost}}</h6>
                                @else
                                    <h6>ทรีทเมนต์ชื่อ : {{$item->treat_name}}</h6>
                                    <h6>ทรีทเมนต์ราคา : {{$item->treat_cost}}</h6>
                                @endif
                                @if($item->package_id == 7)
                                    <h6 hidden>แพ็คเกจชื่อ : {{$item->pack_name}}</h6>
                                    <h6 hidden>แพ็คเกจราคา : {{$item->pack_cost}}</h6>
                                @else
                                    <h6>แพ็คเกจชื่อ : {{$item->pack_name}}</h6>
                                    <h6>แพ็คเกจราคา : {{$item->pack_cost}}</h6>
                                @endif
                                <h6>พนักงาน : {{$item->emp_name}}</h6>
                                <h6 >จองเมื่อเวลา : {{$item->created_at}}</h6>

                            @endforeach
                            @elseif($Detail->id == 5)
                             @foreach ($Details_5 as $item)
                                @if($item->treat_id == 11)
                                    <h6 hidden>ทรีทเมนต์ชื่อ : {{$item->treat_name}}</h6>
                                    <h6 hidden>ทรีทเมนต์ราคา : {{$item->treat_cost}}</h6>
                                @else
                                    <h6>ทรีทเมนต์ชื่อ : {{$item->treat_name}}</h6>
                                    <h6>ทรีทเมนต์ราคา : {{$item->treat_cost}}</h6>
                                @endif
                                @if($item->package_id == 7)
                                    <h6 hidden>แพ็คเกจชื่อ : {{$item->pack_name}}</h6>
                                    <h6 hidden>แพ็คเกจราคา : {{$item->pack_cost}}</h6>
                                @else
                                    <h6>แพ็คเกจชื่อ : {{$item->pack_name}}</h6>
                                    <h6>แพ็คเกจราคา : {{$item->pack_cost}}</h6>
                                @endif
                                <h6>พนักงาน : {{$item->emp_name}}</h6>
                                <h6 >จองเมื่อเวลา : {{$item->created_at}}</h6>
                            @endforeach
                            @elseif($Detail->id == 6)
                             @foreach ($Details_6 as $item)
                                @if($item->treat_id == 11)
                                    <h6 hidden>ทรีทเมนต์ชื่อ : {{$item->treat_name}}</h6>
                                    <h6 hidden>ทรีทเมนต์ราคา : {{$item->treat_cost}}</h6>
                                @else
                                    <h6>ทรีทเมนต์ชื่อ : {{$item->treat_name}}</h6>
                                    <h6>ทรีทเมนต์ราคา : {{$item->treat_cost}}</h6>
                                @endif
                                @if($item->package_id == 7)
                                    <h6 hidden>แพ็คเกจชื่อ : {{$item->pack_name}}</h6>
                                    <h6 hidden>แพ็คเกจราคา : {{$item->pack_cost}}</h6>
                                @else
                                    <h6>แพ็คเกจชื่อ : {{$item->pack_name}}</h6>
                                    <h6>แพ็คเกจราคา : {{$item->pack_cost}}</h6>
                                @endif
                                <h6>พนักงาน : {{$item->emp_name}}</h6>
                                <h6 >จองเมื่อเวลา : {{$item->created_at}}</h6>
                            @endforeach
                            @elseif($Detail->id == 7)
                             @foreach ($Details_7 as $item)
                                @if($item->treat_id == 11)
                                    <h6 hidden>ทรีทเมนต์ชื่อ : {{$item->treat_name}}</h6>
                                    <h6 hidden>ทรีทเมนต์ราคา : {{$item->treat_cost}}</h6>
                                @else
                                    <h6>ทรีทเมนต์ชื่อ : {{$item->treat_name}}</h6>
                                    <h6>ทรีทเมนต์ราคา : {{$item->treat_cost}}</h6>
                                @endif
                                @if($item->package_id == 7)
                                    <h6 hidden>แพ็คเกจชื่อ : {{$item->pack_name}}</h6>
                                    <h6 hidden>แพ็คเกจราคา : {{$item->pack_cost}}</h6>
                                @else
                                    <h6>แพ็คเกจชื่อ : {{$item->pack_name}}</h6>
                                    <h6>แพ็คเกจราคา : {{$item->pack_cost}}</h6>
                                @endif
                                <h6>พนักงาน : {{$item->emp_name}}</h6>
                                <h6 >จองเมื่อเวลา : {{$item->created_at}}</h6>
                            @endforeach
                            @elseif($Detail->id == 8)
                             @foreach ($Details_8 as $item)
                                @if($item->treat_id == 11)
                                    <h6 hidden>ทรีทเมนต์ชื่อ : {{$item->treat_name}}</h6>
                                    <h6 hidden>ทรีทเมนต์ราคา : {{$item->treat_cost}}</h6>
                                @else
                                    <h6>ทรีทเมนต์ชื่อ : {{$item->treat_name}}</h6>
                                    <h6>ทรีทเมนต์ราคา : {{$item->treat_cost}}</h6>
                                @endif
                                @if($item->package_id == 7)
                                    <h6 hidden>แพ็คเกจชื่อ : {{$item->pack_name}}</h6>
                                    <h6 hidden>แพ็คเกจราคา : {{$item->pack_cost}}</h6>
                                @else
                                    <h6>แพ็คเกจชื่อ : {{$item->pack_name}}</h6>
                                    <h6>แพ็คเกจราคา : {{$item->pack_cost}}</h6>
                                @endif
                                <h6>พนักงาน : {{$item->emp_name}}</h6>
                                <h6 >จองเมื่อเวลา : {{$item->created_at}}</h6>
                            @endforeach

                    @endif



                            <h6 >สถานะการชำระเงิน : {{$Detail->status}}</h6>

                    </div>

                </div>
                <div class="row pb-2">
                    <div class="offset-4 col-8 mt-2">
                        <a href="{{url('/booking/payment/'.$Detail->id)}}" class="btn btn-sm">ชำระบริการ</a>
                    </div>
                </div>


            </div>
        </div>
        <div class="pt-5 pb-5 Center wow zoomIn Slow">
            <img width="100" height="40" src="{{asset('project/img/divider-5.png')}}"  id="dividerCenter2"/>
        </div>
        @endforeach
    </div>


</div>
@endsection



