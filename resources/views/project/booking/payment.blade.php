@extends('Project.master')

@section('title',"Health Land | Payment")

@section('content')
<div
    style="background-image: url('{{asset('project/img/bg.png')}}'); background-repeat: no-repeat; background-size: cover;">

    <div class="container col-sm-6 col-sm-offset-1 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-4 form-box mx-auto "
        style="padding-top: 8rem; padding-bottom:139px;">


        @if(Session::has('flash_message_success'))
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="alert alert-success">
                    {{ Session::get('flash_message_success') }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="offset-4 col-8">
                    <a href="{{url('/booking/details/')}}" class="btn btn-md btn-success">รายละเอียดการจอง</a>
                </div>
            </div>
        </div>
        @else

        <h3>วิธีชำระเงิน / Payment Method</h3>
        <h6>โอนเงินผ่านบัญชีธนาคาร</h6>
        <p class="mt-5">
            <img class="ml-1 " src="{{asset('project/backend/img/Bank_icon/52px/KTB.png')}}"
                style="height: 52px; width: 52px;">
            <span class="Color pl-2">ธนาคารกรุงไทย เลขที่บัญชี : 020212570319</span>
        </p>
        <p class="mt-5">
            <img class="ml-1 " src="{{asset('project/backend/img/Bank_icon/52px/BBL.png')}}"
                style="height: 52px; width: 52px;">
            <span class="Color pl-2">ธนาคารกรุงเทพ เลขที่บัญชี : 153164892319</span>
        </p>
        <p class="mt-5">
            <img class="ml-1 " src="{{asset('project/backend/img/Bank_icon/52px/KBANK.png')}}"
                style="height: 52px; width: 52px;">
            <span class="Color pl-2">ธนาคารกสิกรไทย เลขที่บัญชี : 346254861234</span>
        </p>

        <div class="pt-2 pb-2 Center wow fadeIn Slow">
            <img width="80" height="13" src="{{asset('project/img/divider-1.png')}}" id="divider1" />
        </div>





        <form enctype="multipart/form-data" class="form-horizontal pb-5 pt-3" method="post"
            action="{{ url('/booking/payment/{id}/') }}" name="editprofile" id="editprofile">{{ csrf_field() }}
            @foreach ($payBookings as $payment)

            <p>รวมเงินที่ต้องชำระ : {{$payment->treat_cost+$payment->pack_cost}} บาท</p>
            <p>เวลาทั้งหมดที่ใช้บริการ : {{$payment->treat_time+$payment->pack_time}} นาที</p>

            <input type="hidden" name="payment_total" value="{{$payment->treat_cost+$payment->pack_cost}}"
                class="f1-first-name form-control" id="payment_total">
            @endforeach

            <input type="hidden" name="booking_id" value="{{$booking_id}}" class="f1-first-name form-control"
                id="booking_id">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">ชื่อ</label>
                <div class="col-sm-6">
                    <input type="text" name="payment_name" class="form-control" id="payment_name"
                        value="{{$userDetails->ac_fname}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">อีเมล</label>
                <div class="col-sm-6">
                    <input type="email" name="payment_email" class="form-control" id="payment_email"
                        value="{{$userDetails->ac_email}}">
                </div>
            </div>
            <input type="hidden" name="status" value="no check" class="f1-first-name form-control" id="status">

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">ธนาคาร</label>
                <div class="col-sm-6">
                    <select class="form-control" name="payment_bank" id="payment_bank">
                        <option required>เลือกธนาคาร</option>
                        <option value="KTB">ธนาคารกรุงไทย</option>
                        <option value="BBL">ธนาคารกรุงเทพ</option>
                        <option value="KBANK">ธนาคารกสิกรไทย</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">หลักฐานการโอนเงิน</label>
                <div class="col-sm-6">
                    <input type="file" name="payment_slip" class="form-control-file" id="payment_slip">
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-8">
                    <button type="submit" class="btn btn-success">ชำระค่าบริการ</button>
                </div>

            </div>
        </form>
        @endif

    </div>


</div>
@endsection
