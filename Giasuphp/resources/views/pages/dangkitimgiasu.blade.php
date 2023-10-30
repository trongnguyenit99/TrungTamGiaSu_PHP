@extends('layout')
@section('content')
<div class="col_c">
    <h2 class="sh_b3">ĐĂNG KÝ TÌM GIA SƯ</h2>
    <div class="formOut clearfix">
        <form method="POST" action="https://giasudatviet.com/dang-ky-tim-gia-su.html" id="form__dk_tim_giasu" class="fm NiceIt" onsubmit="return false">                        	
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Họ tên (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="text" id="fullname" name="fullname" value="" class="in_405">
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Địa chỉ</p>
                <div class="formOut_field">
                    <input type="text" id="address" name="address" value="" class="in_405">
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Điện thoại (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="text" id="phone" name="phone" value="" class="in_405">
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Email</p>
                <div class="formOut_field">
                    <input type="text" id="email" name="email" value="" class="in_405">
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Lớp</p>
                <div class="formOut_field clearfix">
                    <span class="w160">
                    <select name="id_lop" id="id_lop">
                        <option value="">Chọn lớp</option>
                                                    <option value="1">Lớp Lá</option>
                                                    <option value="2">Lớp 1</option>
                                                    <option value="3">Lớp 2</option>
                                                    <option value="4">Lớp 3</option>
                                                    <option value="5">Lớp 4</option>
                                                    <option value="6">Lớp 5</option>
                                                    <option value="7">Lớp 6</option>
                                                    <option value="8">Lớp 7</option>
                                                    <option value="9">Lớp 8</option>
                                                    <option value="10">Lớp 9</option>
                                                    <option value="11">Lớp 10</option>
                                                    <option value="12">Lớp 11</option>
                                                    <option value="13">Lớp 12</option>
                                                    <option value="14">Ôn Thi Đại Học</option>
                                                    <option value="15">Dạy Song Ngữ</option>
                                                    <option value="16">Dạy Bằng Tiếng Anh</option>
                                                    <option value="17">Ôn Trần Đại Nghĩa</option>
                                                    <option value="18">Ôn Thi Trường Chuyên</option>
                                                    <option value="19">Dạy Trẻ Tự Kỷ</option>
                                                    <option value="20">Các Lớp Khác</option>
                                            </select>
                    </span>
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Môn học</p>
                <div class="formOut_field">
                    <input type="text" id="mon_hoc" name="mon_hoc" value="" placeholder="Ví dụ: Toán, lý, hóa,..." class="in_405">
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Số lượng học sinh</p>
                <div class="formOut_field">
                    <input type="text" id="so_hoc_sinh" name="so_hoc_sinh" value="" class="in_405" placeholder="Ví dụ: 1 học sinh">
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Học lực hiện tại</p>
                <div class="formOut_field">
                    <input type="text" id="hoc_luc" name="hoc_luc" value="" class="in_405" placeholder="Ví dụ: trung bình">
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Số buổi</p>
                <div class="formOut_field clearfix">                                	
                    <span class="w160">
                    <select name="so_buoi" id="so_buoi">
                    <option value="">-Chọn số buổi-</option>
                        <option value="1">1 buổi</option>
                        <option value="2">2 buổi</option>
                        <option value="3">3 buổi</option>
                        <option value="4">4 buổi</option>
                        <option value="5">5 buổi</option>
                        <option value="6">6 buổi</option>
                        <option value="7">7 buổi</option>
                        <option value="8">8 buổi</option>
                        <option value="9">9 buổi</option>
                        <option value="10">10 buổi</option>
                    </select>
                    </span>
                    <span class="money">/ <em>tuần</em></span>
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Thời gian học</p>
                <div class="formOut_field">
                    <input type="text" id="thoi_gian" name="thoi_gian" placeholder="Ví dụ: Thứ 2 - thứ 4; 17h - 19h" value="" class="in_405">
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Yêu cầu</p>
                <div class="formOut_field clearfix">
                    <span class="w160">
                    <select name="id_level" id="id_level">
                        <option value="">Chọn yêu cầu</option>
                                                    <option value="1">Giáo viên</option>
                                                    <option value="2">Sinh Viên</option>
                                                    <option value="9">Sinh Viên Sư Phạm</option>
                                                    <option value="3">Cử Nhân</option>
                                                    <option value="4">Kỹ Sư</option>
                                                    <option value="5">Thạc Sỹ</option>
                                                    <option value="6">Tiến Sỹ</option>
                                                    <option value="7">Giảng Viên</option>
                                                    <option value="8">Bằng Cấp Khác</option>
                                            </select>
                    </span>
                </div>                            
            </div>
            
            <div class="formOut_line clearfix" style="display: none">
                <p class="formOut_lab">MS gia sư đã chọn (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="text" id="" name="" placeholder="Ví dụ: Mã số 2280, 3150,..." value="" class="in_405">
                    <p class="bg_txt bg_txt3">Chọn gia sư tại đây <a href="#">Chọn gia sư</a></p>
                </div>                            
            </div>
            
            <div class="formOut_line clearfix" >
                <p class="formOut_lab"></p>
                <div class="formOut_field">
                    <p class="bg_txt bg_txt3">Chọn gia sư tại đây <a target="_blank" id="select__giasu" title="Chọn gia sư" href="https://giasudatviet.com/gia-su-tieu-bieu.html">Chọn gia sư</a></p>
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Yêu câu khác</p>
                <div class="formOut_field">
                    <textarea id="yeu_cau" name="yeu_cau" rows="" cols="" class="area_100"></textarea>
                </div>                            
            </div>
                        <p class="dangky_btn clearfix">                            
                <input type="submit" id="" name="" value="ĐĂNG KÝ" class="btn_s3">  
            </p>   
            <input type="hidden" name="select__giasu" id="select__giasu__input" value="0">       
        </form>
    </div>
</div>
@endsection