@extends('Project.master')


@section('title',"Health Land | จองเวลา")

<div style="background-image: url('project/img/bg.png'); background-repeat: no-repeat; background-size: cover;">

   <!-- Top content -->
   <div class="top-content mt-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-3 col-lg-8 col-lg-offset-3 form-box mx-auto">
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
                        <form role="form" action="{{ url('booking/') }}" name="booking" method="post" class="f1" style="text-align: center;">
                            {{ csrf_field() }}
                                <div class="f1-steps">
                                    <div class="f1-progress">
                                        <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                                    </div>
                                    <div class="f1-step active">
                                        <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                                        <p style="margin-top:5px;">ชื่อผู้จอง</p>
                                    </div>
                                    <div class="f1-step">
                                        <div class="f1-step-icon"><i class="fa fa-list-ul"></i></div>
                                        <p style="margin-top:5px;">เลือกบริการ</p>
                                    </div>
                                    <div class="f1-step">
                                        <div class="f1-step-icon"><i class="fa fa-address-book"></i></div>
                                        <p style="margin-top:5px;">เลือกพนักงาน</p>
                                    </div>
                                </div>
                                <input type="hidden" name="user_id" value="{{$userDetails->id}}" class="f1-first-name form-control" id="user_id">
                                <input type="hidden" name="status" value="รอหลักฐานการโอน" class="f1-first-name form-control" id="status">
                                <fieldset>
                                    <div class="form-group mt-2">
                                        <label for="f1-first-name">Email &nbsp;&nbsp; <small>อีเมลที่จะใช้ยืนยันการจอง</small></label>
                                        <input type="email" name="booking_email" value="{{$userDetails->ac_email}}" class="f1-first-name form-control" id="booking_email" style="width: 60%;">
                                    </div>
                                    <div class="form-group">
                                        <label for="f1-last-name">Name</label>
                                        <input type="text" name="booking_name" value="{{$userDetails->ac_fname}}" class="f1-last-name form-control" id="booking_name" style="width: 60%;">
                                    </div>
                                    <div class="form-group">
                                        <label for="f1-last-name">Tel.</label>
                                        <input type="text" name="booking_tel" value="{{$userDetails->ac_tel}}" class="f1-last-name form-control" id="booking_tel" style="width: 60%;">
                                    <div class="f1-buttons">
                                        <button type="button" class="btn btn-next btn-success btn-sm">ถัดไป</button>
                                    </div>
                                </fieldset>
                                <fieldset>
                                        <div class="form-group">
                                            <label  for="f1-email">เวลา</label>
                                            <select name="booking_time" class="f1-email form-control" id="booking_time" style="width: 70%;">
                                                <option value="9.00" selected>9.00</option>
                                                <option value="10.00">10.00</option>
                                                <option value="11.00">11.00</option>
                                                <option value="12.00">12.00</option>
                                                <option value="13.00">13.00</option>
                                                <option value="14.00">14.00</option>
                                                <option value="15.00">15.00</option>
                                                <option value="16.00">16.00</option>
                                            </select>
                                        </div>
                                    <div class="form-group">
                                        <label  for="f1-email">ห้อง</label>
                                        <select name="room_id" class="f1-email form-control" id="room_id"  style="width: 70%;">
                                                <option value="-" selected>เลือกห้อง</option>
                                                @foreach ($roomDetails as $room)
                                                @if($room->status == 0)
                                                    @continue
                                                @endif
                                                <option value="{{$room->id}}">ห้องที่ {{$room->id}}</option>
                                                @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                            <label  for="f1-email">ทรีทเมนต์</label>
                                            <select name="treat_id" class="f1-email form-control" id="treat_id"  style="width: 70%;">
                                                    <option  value="11" selected>เลือกทรีทเมนต์</option>
                                                    @foreach ($treatDetails as $treat)

                                                    @if($treat->id == 11)
                                                                @continue
                                                            @endif
                                            <option value="{{$treat->id}}">{{$treat->treat_name}}/ราคา {{ $treat->treat_cost }} บาท/เวลา {{ $treat->treat_time }} นาที</option>
                                                    @endforeach
                                            </select>
                                    </div>
                                        <div class="form-group">
                                                <label  for="f1-email">แพ็คเกจ</label>
                                                <select name="package_id" class="f1-email form-control" id="package_id"  style="width: 70%;">
                                                        <option value="7" selected>เลือกแพ็คเกจ</option>
                                                        @foreach ($packageDetails as $package)
                                                            @if($package->id == 7)
                                                                @continue
                                                            @endif
                                                                <option value="{{$package->id}}">{{$package->pack_name}}/ราคา {{ $package->pack_cost }} บาท/เวลา {{ $package->pack_time }} นาที</option>

                                                         @endforeach
                                                </select>
                                        </div>
                                    <div class="f1-buttons">
                                        <button type="button" class="btn btn-previous btn-danger btn-sm">ย้อนกลับ</button>
                                        <button type="button" class="btn btn-next btn-success btn-sm">ถัดไป</button>
                                    </div>
                                </fieldset>
                                <fieldset>
                                        <div class="mt-2">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        @foreach ($empDetails as $emp)

                                                        @if ($emp->id < 5 )
                                                            <td >

                                                                    <center><h6>{{ $emp->emp_name}}</h6> </center>
                                                                    <div class="form-check form-check-inline">
                                                                        <input type="radio" name="emp_id" value="{{ $emp->id}}" class="f1-password form-check-input" id="emp_id" style="margin-right:5px;" @if($emp->emp_status == 0) disabled @else required @endif>
                                                                        <img src="{{ asset('project/backend/img/Employee/medium/'.$emp->emp_image) }}" style="width:100%;">
                                                                    </div>

                                                            </td>
                                                        @endif
                                                        {{-- @if ($emp->id >= 5 )
                                                            @break
                                                        @endif --}}
                                                        @endforeach
                                                    </tr>
                                                  <tr>
                                                        @foreach ($empDetails as $emp)

                                                        @if ($emp->id > 4)
                                                            <td>

                                                                    <center><h6>{{ $emp->emp_name}}</h6> </center>
                                                                    <div class="form-check form-check-inline">
                                                                        <input type="radio" name="emp_id" value="{{ $emp->id}}" class="f1-password form-check-input" id="emp_id" style="margin-right:5px;" @if($emp->emp_status == 0) disabled @else required @endif>
                                                                        <img src="{{ asset('project/backend/img/Employee/medium/'.$emp->emp_image) }}" style="width:100%;">
                                                                    </div>

                                                            </td>
                                                        @endif
                                                        @if ($emp->id == 8)
                                                            @break
                                                        @endif
                                                        @endforeach
                                                    </tr>
                                                    {{-- <tr>
                                                            @foreach ($empDetails as $emp)
                                                            @if($emp->emp_status == 0)
                                                                @continue
                                                            @endif
                                                            @if ($emp->id > 6)
                                                                <td  style="width: 28%;">

                                                                        <center><h6>{{ $emp->emp_name}}</h6></center>
                                                                        <div class="form-check form-check-inline">
                                                                            <input type="radio" name="booking_emp" value="{{ $emp->id}}" class="f1-password form-check-input" id="booking_emp" style="margin-right:5px;">
                                                                            <img src="{{ asset('project/backend/img/Employee/medium/'.$emp->emp_image) }}" style="width:100%;">
                                                                        </div>

                                                                </td>
                                                            @endif
                                                            @if ($emp->id == 8)
                                                            @break
                                                        @endif
                                                            @endforeach
                                                        </tr> --}}
                                                </tbody>
                                            </table>
                                        </div>
                                    <div class="f1-buttons">
                                        <button type="button" class="btn btn-previous btn-danger btn-sm">ย้อนกลับ</button>
                                        <button type="submit" class="btn btn-submit btn-success btn-sm">ยืนยัน</button>
                                    </div>
                                </fieldset>

                            </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
