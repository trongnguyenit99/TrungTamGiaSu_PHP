@extends('layout')
@section('content')
<div class="col_c">
        <div class="newClass">
            <!--NOI DUNG  -->
            <h2 class="sh_b sh_b2">LỚP CẦN GIA SƯ</h2>
            <h1 align="center"><strong>Trung Tâm Gia Sư Đất Việt</strong></h1>
            <p class="class_ttl2"><span>Lớp mới cập nhật ngày 07-01-2021</span></p>
                    <ul class="lgs_btn clearfix">
                <li class="lgs_btn1"><a target="_blank" href="https://giasudatviet.com/dang-ky-lam-gia-su.html">Đăng Ký Làm Gia Sư</a></li>
                
            </ul>
            <div class="search clearfix">
                <form method="get" action="https://giasudatviet.com/lop-day-can-gia-su.html" class="fm NiceIt">
                    <input type="hidden" value="tim" name="page">
                    <input type="text" id="" name="keyword" value="" placeholder="Nhập mã lớp" class="in_search">
                    <div>
                        <select name="tinhthanh" id="tinhthanh" class="clsip slinput" style="margin-right:4px;">
                            <option value="0">Tỉnh/ thành</option>
                                                        <option value="701">Hồ Chí Minh</option>
                                                        <option value="101">Hà Nội</option>
                                                        <option value="711">Bình Dương</option>
                                                        <option value="713">Đồng Nai</option>
                                                        <option value="501">Đà Nẵng</option>
                                                        <option value="511">Khánh Hòa</option>
                                                        <option value="801">Long An</option>
                                                        <option value="717">Bà Rịa - Vũng Tàu</option>
                                                        <option value="103">Hải Phòng</option>
                                                        <option value="403">Nghệ An</option>
                                                        <option value="411">Thừa Thiên - Huế</option>
                                                </select>
                        <select name="quanhuyen" id="quanhuyen" style="margin-right:4px;" data-current="">
                            <option value="0">Quận/ huyện</option>
                        </select>
                        <select style="width:100%" name="trinhdo" id="trinhdo" class="clsip slinput">
                            <option value="0">Trình độ</option>
                            <option value="1">Giáo viên</option>
                            <option value="2">Sinh viên</option>
                        </select>
                        <select style="width:113px !important; margin-right: 0" name="gioitinh" id="gioitinh" class="clsip slinput">
                            <option value="">Giới tính</option>
                            <option value="0">Nam gia sư</option>
                            <option value="1">Nữ gia sư</option>
                            <!-- <option value="2">Nam/Nữ gia sư</option> -->
                        </select>
                        
                        <div class="clearfix"></div>
                    </div>
                    <div style="margin-top: 6px">
                        <select  name="caphoc" id="caphoc" class="clsip slinput">
                            <option value="0">Cấp học</option>
                                                        <option value="1">Gia sư cấp 1</option>
                                                        <option value="2">Gia sư cấp 2</option>
                                                        <option value="3">Gia sư cấp 3</option>
                                                        <option value="4">Gia sư ngoại ngữ</option>
                                                        <option value="5">Gia sư tin học</option>
                                                        <option value="6">Gia sư năng khiếu</option>
                                                        <option value="7">Gia sư luyện thi ĐH</option>
                                                        <option value="8">Gia sư dạy môn khác</option>
                                                </select>
                        <select style="width:100%" name="monhoc" id="monhoc" class="clsip slinput">
                            <option value="0">Môn học</option>
                                                        <option value="1">Toán</option>
                                                        <option value="2">Lý</option>
                                                        <option value="3">Hóa</option>
                                                        <option value="4">Văn</option>
                                                        <option value="5">Tiếng Việt</option>
                                                        <option value="6">Anh Văn</option>
                                                        <option value="7">Báo Bài</option>
                                                        <option value="8">Sinh</option>
                                                        <option value="9">Sử</option>
                                                        <option value="10">Địa</option>
                                                        <option value="11">Tin Học</option>
                                                        <option value="12">Vẽ</option>
                                                        <option value="13">Rèn Chữ</option>
                                                        <option value="14">Anh Văn Giao Tiếp</option>
                                                        <option value="15">TOEIC</option>
                                                        <option value="16">IELTS</option>
                                                        <option value="17">TOEFL</option>
                                                        <option value="18">Tiếng Pháp</option>
                                                        <option value="19">Tiếng Hàn</option>
                                                        <option value="20">Tiếng Hoa</option>
                                                        <option value="21">Tiếng Nhật</option>
                                                        <option value="22">Đàn Piano</option>
                                                        <option value="23">Đàn Organ</option>
                                                        <option value="24">Đàn Guitar</option>
                                                        <option value="25">Tiếng Việt Cho Người Nước Ngoài</option>
                                                </select>
                        <select style="width:100%" name="lophoc" id="lophoc" class="clsip slinput">
                            <option value="0">Lớp học</option>
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
                        
                        <input type="submit" id="" name="" value="Tìm kiếm" class="btn_s2">
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
            <script language="javascript">
                var is_execute_mem = false;
                
            </script>
            <div class="newClass">
                <div class="class_list clearfix">
                                        <div class="item_c">
                            <div class="c_ttl">
                                LỚP CHƯA GIAO                            <p class="percent">40%</p>
                                <p class="c_ms">MS<br>27854</p>
                            </div>
                            <div class="c_content chuagiao">
                                Môn dạy: <span class="c1">Anh Văn, Báo Bài, </span><br>
                                Lớp dạy: <span class="c1">Lớp 3, </span><br>
                                Địa chỉ: <span class="c2"> đường 12, phường an phú đông (gần trường tiểu học võ thị thừa), Quận 12</span><br>
                                Mức lương: <span class="c3">1.400.000<sup>đ</sup>/tháng</span><br>
                                Số buổi: <span class="c2">3 buổi /tuần – Dạy 120phút/buổi</span><br>
                                Thời gian: <span class="c2">Sắp xếp với phụ huynh</span><br>
                                Thông tin: <span class="c2">học sinh nam trường Võ Thị Thừa</span><br>
                                Yêu cầu: <span class="c2">Sinh Viên Nam/Nữ, qua tết âm mới học</span><br>
                                Liên hệ: <span class="c2">0373.580.580 - 0932.609.268</span>
                            </div>
                            <div class="social clearfix">
                                                                <ul>
                                        <div class="addthis_inline_share_toolbox_ogy4" data-url="https://giasudatviet.com/nhan-lop/gia-su-anh-van-bao-bai-lop-3-quan-12-ho-chi-minh-27854.html" data-title="Gia sư Anh Văn Báo Bài Lớp 3 Quận 12 Hồ Chí Minh"></div>
                                    </ul>
                                    <p class="more_y3"><a href="https://giasudatviet.com/nhan-lop/gia-su-anh-van-bao-bai-lop-3-quan-12-ho-chi-minh-27854.html">ĐĂNG KÝ DẠY</a></p>
                                                        </div>
                        </div>
                                        <div class="item_c">
                            
                           </div>
                                </div>
                                <div class="lgs_page clearfix">
                        <p class="bg_txt2">Xem thêm lớp</p>
                        <ul class="pgae_l pagination clearfix"><li><a class="page-nav-act active">1</a></li><li><a href="https://giasudatviet.com/lop-day-can-gia-su.html?p=2">2</a></li><li><a href="https://giasudatviet.com/lop-day-can-gia-su.html?p=3">3</a></li><li><a href="https://giasudatviet.com/lop-day-can-gia-su.html?p=4">4</a></li><li><a href="https://giasudatviet.com/lop-day-can-gia-su.html?p=5">5</a></li><li><a href="https://giasudatviet.com/lop-day-can-gia-su.html?p=6">6</a></li><li><a href="https://giasudatviet.com/lop-day-can-gia-su.html?p=2" class="next">&gt;</a></li></ul>                </div>
                        </div>
            <!--///////////////////KET THUC-->
        </div>
    </div>
@endsection