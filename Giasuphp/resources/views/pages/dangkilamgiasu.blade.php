@extends('layout')
@section('content')
<div class="col_c">
    <h2 class="sh_b3">ĐĂNG KÝ LÀM GIA SƯ</h2>
	<div class="ldcgs_dk clearfix">
            <p>Quý gia sư bấm vào "XEM VIDEO HD" để được hướng dẫn cách đăng ký làm gia sư, và xem <strong><span style="color:#B22222;">quy trình</span></strong> giao và nhận lớp của trung tâm, trước khi nhận lớp dạy để <strong>tránh</strong> những sự cố đáng tiếc xảy ra sau này.</p>
            <p class="more_y3">
                <a target="_blank" href="https://giasudatviet.com/huong-dan-nhan-lop.html">XEM VIDEO HD</a>
            </p>
    </div>
    <div class="formOut clearfix">
        <form method="post" id="form__dk_lam_giasu" class="fm NiceIt" onsubmit="return false">
        	<div class="formOut_line clearfix">
            	<p class="formOut_lab">Tỉnh/Thành dạy (<span>*</span>)</p>
                <div class="formOut_field w100">
                	<select name="province_id" id="province_id">
                        <!-- <option value="">Tỉnh/ thành</option> -->
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
                </div>                            
            </div>

            <div class="formOut_line clearfix">
            	<p class="formOut_lab">Họ tên (<span>*</span>)</p>
                <div class="formOut_field">
                	<input type="text" id="fullname" name="fullname" value="" placeholder="ví dụ: Nguyễn Văn Thành" class="in_405">
                </div>                            
            </div>

            <div class="formOut_line clearfix">
            	<p class="formOut_lab">Ngày sinh (<span>*</span>)</p>
                <div class="formOut_field clearfix">
                	<span class="w120">
                    	<select name="dob_ngay" id="dob_ngay">
                            <option value="">Ngày</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                    </select>
                    </span>
                    <span class="w120">
                    	<select name="dob_thang" id="dob_thang">
                            <option value="">Tháng</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                    </select>
                    </span>
                    <span class="w120">
                    	<select name="dob_nam" id="dob_nam">
                            <option value="">Năm</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1960">1960</option>
                                                            <option value="1959">1959</option>
                                                            <option value="1958">1958</option>
                                                            <option value="1957">1957</option>
                                                            <option value="1956">1956</option>
                                                            <option value="1955">1955</option>
                                                            <option value="1954">1954</option>
                                                            <option value="1953">1953</option>
                                                            <option value="1952">1952</option>
                                                            <option value="1951">1951</option>
                                                            <option value="1950">1950</option>
                                                    </select>
                    </span>

                    <span class="w160" style="padding-left: 30px;">
                        <select name="gender" id="gender">
                            <option value="">Giới tính</option>
                            <option value="0">Nam</option>
                            <option value="1">Nữ</option>
                        </select>
                    </span>
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
            	<p class="formOut_lab">Nguyên quán (<span>*</span>)</p>
                <div class="formOut_field w100">
                    <select name="nguyenquan" id="nguyenquan" style="margin-right:10px;">
                        <option value="">Tỉnh/thành trên CMND</option>
                                                    <option value="701">Hồ Chí Minh</option>
                                                    <option value="101">Hà Nội</option>
                                                    <option value="711">Bình Dương</option>
                                                    <option value="713">Đồng Nai</option>
                                                    <option value="501">Đà Nẵng</option>
                                                    <option value="511">Khánh Hòa</option>
                                                    <option value="801">Long An</option>
                                                    <option value="805">An Giang</option>
                                                    <option value="717">Bà Rịa - Vũng Tàu</option>
                                                    <option value="207">Bắc Cạn</option>
                                                    <option value="221">Bắc Giang</option>
                                                    <option value="821">Bạc Liêu</option>
                                                    <option value="223">Bắc Ninh</option>
                                                    <option value="811">Bến Tre</option>
                                                    <option value="507">Bình Định</option>
                                                    <option value="707">Bình Phước</option>
                                                    <option value="715">Bình Thuận</option>
                                                    <option value="823">Cà Mau</option>
                                                    <option value="815">Cần Thơ</option>
                                                    <option value="203">Cao Bằng</option>
                                                    <option value="605">Đắc Lắk</option>
                                                    <option value="606">Đắk Nông</option>
                                                    <option value="301">Điện Biên</option>
                                                    <option value="803">Đồng Tháp</option>
                                                    <option value="603">Gia Lai</option>
                                                    <option value="201">Hà Giang</option>
                                                    <option value="111">Hà Nam</option>
                                                    <option value="405">Hà Tĩnh</option>
                                                    <option value="107">Hải Dương</option>
                                                    <option value="103">Hải Phòng</option>
                                                    <option value="816">Hậu Giang</option>
                                                    <option value="305">Hòa Bình</option>
                                                    <option value="109">Hưng Yên</option>
                                                    <option value="813">Kiên Giang</option>
                                                    <option value="601">Kon Tum</option>
                                                    <option value="302">Lai Châu</option>
                                                    <option value="703">Lâm Đồng</option>
                                                    <option value="209">Lạng Sơn</option>
                                                    <option value="205">Lào Cai</option>
                                                    <option value="113">Nam Định</option>
                                                    <option value="403">Nghệ An</option>
                                                    <option value="117">Ninh Bình</option>
                                                    <option value="705">Ninh Thuận</option>
                                                    <option value="217">Phú Thọ</option>
                                                    <option value="509">Phú Yên</option>
                                                    <option value="407">Quảng Bình</option>
                                                    <option value="503">Quảng Nam</option>
                                                    <option value="505">Quảng Ngãi</option>
                                                    <option value="225">Quảng Ninh</option>
                                                    <option value="409">Quảng Trị</option>
                                                    <option value="819">Sóc Trăng</option>
                                                    <option value="303">Sơn La</option>
                                                    <option value="709">Tây Ninh</option>
                                                    <option value="115">Thái Bình</option>
                                                    <option value="215">Thái Nguyên</option>
                                                    <option value="401">Thanh Hóa</option>
                                                    <option value="411">Thừa Thiên - Huế</option>
                                                    <option value="807">Tiền Giang</option>
                                                    <option value="817">Trà Vinh</option>
                                                    <option value="211">Tuyên Quang</option>
                                                    <option value="809">Vĩnh Long</option>
                                                    <option value="219">Vĩnh Phúc</option>
                                                    <option value="213">Yên Bái</option>
                                            </select>
                    <span class="w120">
                        <select name="giongnoi" id="giongnoi">
                            <option value="">--Chọn giọng nói--</option>
                            <option value="1">Miền Nam</option>
                            <option value="2">Miền Trung</option>
                            <option value="3">Miền Bắc</option>
                        </select>
                    </span><br>
                </div>
            </div>
            
            <div class="formOut_line clearfix">
            	<p class="formOut_lab">Địa chỉ hiện tại (<span>*</span>)</p>
                <div class="formOut_field">
                	<input type="text" id="address" name="address" value="" class="in_405">
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Số CMND/CCCD (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="text" id="cmnd" name="cmnd" value="" class="in_405">
                </div>                            
            </div>

            <div class="formOut_line clearfix">
                <p class="formOut_lab">Email (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="text" id="email" name="email" value="" class="in_405">
                </div>                            
            </div>

            <div class="formOut_line clearfix">
                <p class="formOut_lab">Điện thoại (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="text" id="phone" name="phone" value="" placeholder="ví dụ: 0932609268" class="in_405">
                </div>                            
            </div>

            <div class="formOut_line clearfix">
                <p class="formOut_lab">Đăng ký mật khẩu (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="password" id="password" name="password" value="" class="in_405">
                </div>                            
            </div>
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Xác nhận lại mật khẩu (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="password" id="password_confirm" name="password_confirm" value="" class="in_405">
                    <p><i style="font-size: 12px;">Gia sư tự đăng ký mật khẩu và nhớ <b>lưu lại</b> để sau này sử dụng</i></p>
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Ảnh thẻ</p>
                <div class="formOut_field">
                    <!-- <input type="file" name="attachment" title="..." id="attachment" /> -->
                    <div class="uploader-wrap">
                        <div id="uploader_avatar_inputs"></div>
                        <div id="uploader_avatar"><div class="ajax-file-upload" style="position: relative; overflow: hidden; cursor: default;">Upload<form method="POST" action="https://giasudatviet.com/home/uploadUserFile" enctype="multipart/form-data" style="margin: 0px; padding: 0px;"><input type="file" id="ajax-upload-id-1610008500223" name="file_avatar" accept="image/*" style="position: absolute; cursor: pointer; top: 0px; width: 100%; height: 100%; left: 0px; z-index: 100; opacity: 0;"></form></div><div></div></div><div class="ajax-file-upload-container"></div>
                    </div>
                    <p><i style="font-size: 12px;">Ảnh thẻ (ảnh đại diện) là ảnh chụp một mình và nhìn rõ khuôn mặt, tốt nhất nên chọn hình thẻ 3x4 hay 4x6. Upload tối đa <b>1 file</b></i></p>
                </div>
            </div>

            <div class="formOut_line clearfix">
            	<p class="formOut_lab">Ảnh bằng cấp</p>
                <div class="formOut_field">
                    <!-- <input type="file" name="file_bangcap" title="..." id="file_bangcap" multiple="true" /> -->
                    <div class="uploader-wrap">
                        <div id="uploader_bangcap_inputs"></div>
                        <div id="uploader_bangcap"><div class="ajax-file-upload" style="position: relative; overflow: hidden; cursor: default;">Upload<form method="POST" action="https://giasudatviet.com/home/uploadUserFile" enctype="multipart/form-data" style="margin: 0px; padding: 0px;"><input type="file" id="ajax-upload-id-1610008500225" name="file_bangcap[]" accept="image/*" multiple="" style="position: absolute; cursor: pointer; top: 0px; width: 100%; height: 100%; left: 0px; z-index: 100; opacity: 0;"></form></div><div></div></div><div class="ajax-file-upload-container"></div>
                    </div>
                    <p><i style="font-size: 12px;">Ảnh bằng cấp là ảnh chụp thẻ sinh viên hoặc Bằng cấp chuyên môn CAO NHẤT của bạn, Ví dụ: Bằng cao đẳng, đại học, thạc sỹ... Các chứng chỉ giấy khen khác (nếu có). Upload tối đa <b>4 file</b></i></p>
                </div>
            </div>

            <div class="formOut_line clearfix">
                <p class="formOut_lab">Ảnh CMND/CCCD</p>
                <div class="formOut_field">
                    <div class="uploader-wrap">
                        <div id="uploader_cmnd_inputs"></div>
                        <div id="uploader_cmnd"><div class="ajax-file-upload" style="position: relative; overflow: hidden; cursor: default;">Upload<form method="POST" action="https://giasudatviet.com/home/uploadUserFile" enctype="multipart/form-data" style="margin: 0px; padding: 0px;"><input type="file" id="ajax-upload-id-1610008500226" name="file_cmnd[]" accept="image/*" multiple="" style="position: absolute; cursor: pointer; top: 0px; width: 100%; height: 100%; left: 0px; z-index: 100; opacity: 0;"></form></div><div></div></div><div class="ajax-file-upload-container"></div>
                    </div>
                    <p><i style="font-size: 12px;">Ảnh CMND là ảnh chụp Mặt trước và Mặt sau Chứng minh thư hoặc thẻ căn cước, ảnh chụp rõ nét không bị mờ chữ. Upload tối đa <b>2 file</b></i></p><br>
                    <p><i style="font-size: 12px;"><b>Lưu ý</b>: Trung tâm chỉ giao lớp khi Gia Sư cập nhật hình ảnh <strong>Đầy Đủ</strong> vào hồ sơ.</i></p>
                </div>
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Trường đào tạo (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="text" id="truonghoc" name="truonghoc" value="" placeholder="ví dụ: Đại Học Sư Phạm" class="in_405 ui-autocomplete-input" autocomplete="off">
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Ngành học (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="text" id="chuyennganh" name="chuyennganh" value="" placeholder="ví dụ: Sư Phạm Vật Lý" class="in_405 ui-autocomplete-input" autocomplete="off">
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
            	<p class="formOut_lab">Niên khóa (<span>*</span>)</p>
                <div class="formOut_field clearfix">
                    <span class="w120">
                        <select name="nam_nhaphoc" id="nam_nhaphoc">
                            <option value="">-Năm nhập học-</option>
                                                            <option value="2031">2031</option>
                                                            <option value="2030">2030</option>
                                                            <option value="2029">2029</option>
                                                            <option value="2028">2028</option>
                                                            <option value="2027">2027</option>
                                                            <option value="2026">2026</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1960">1960</option>
                                                    </select>
                    </span>
                    <span class="w120">
                        <select name="nam_totnghiep" id="nam_totnghiep">
                            <option value="">--Năm tốt nghiệp--</option>
                                                            <option value="2037">2037</option>
                                                            <option value="2036">2036</option>
                                                            <option value="2035">2035</option>
                                                            <option value="2034">2034</option>
                                                            <option value="2033">2033</option>
                                                            <option value="2032">2032</option>
                                                            <option value="2031">2031</option>
                                                            <option value="2030">2030</option>
                                                            <option value="2029">2029</option>
                                                            <option value="2028">2028</option>
                                                            <option value="2027">2027</option>
                                                            <option value="2026">2026</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1960">1960</option>
                                                    </select>
                    </span><br><br>                              
                    <p><i>Ví dụ: Niên khóa ĐH/CĐ của bạn là 2015 - 2019, Vậy năm nhập học 2015, năm tốt nghiệp 2019</i></p>
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
            	<p class="formOut_lab">Hiện là (<span>*</span>)</p>
                <div class="formOut_field clearfix">
                	<span class="w160">
                    	<select name="trinhdo" id="trinhdo">
                            <option value="">Trình độ</option>
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
                    
                    <span class="w160">
                        <select name="loai_gv" id="loai_gv" style="display: none">
                            <option value="">Chọn loại giáo viên</option>
                                                            <option value="1">GV dạy tự do</option>
                                                            <option value="2">GV dạy tại trường</option>
                                                            <option value="3">GV dạy trung tâm</option>
                                                    </select>
                    </span>
                    <div class="hidden-note" style="display: none">
                        <br>
                        <br>
                        <p><i style="font-size: 12px;">Lưu ý: <b>Chọn loại giáo viên</b> chỉ dành riêng cho giáo viên, nếu không phải giáo viên thì không cần chọn phần này</i></p>
                    </div>
                </div>
            </div>

            <div class="formOut_line clearfix" id="donvi_congtac" style="display: none">
                <p class="formOut_lab">Đơn vị công tác</p>
                <div class="formOut_field">
                    <input type="text" id="noicongtac" name="noicongtac" value="" placeholder="Dành cho giáo viên, ví dụ: trường tiểu học Đinh Tiên Hoàng" class="in_405">
                </div>                      
            </div>

            <div class="formOut_line clearfix">
            	<p class="formOut_lab">Ưu điểm</p>
                <div class="formOut_field">
                	<textarea id="uudiem" name="uudiem" rows="" cols="" placeholder="Nơi để bạn ghi thêm thông tin chi tiết về bản thân. Kinh nghiệm và thành tích bạn đạt được trong quá trình học tập và dạy kèm." class="area_100"></textarea>
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
            	<p class="formOut_lab">Môn dạy (<span>*</span>)</p>
                <div class="formOut_field">
                	<ul class="check_l1 clearfix">
                                                    <li>
                                <input type="checkbox" name="monday[]" value="1" id="md_1">
                                <label for="md_1">Toán</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="2" id="md_2">
                                <label for="md_2">Lý</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="3" id="md_3">
                                <label for="md_3">Hóa</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="4" id="md_4">
                                <label for="md_4">Văn</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="5" id="md_5">
                                <label for="md_5">Tiếng Việt</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="6" id="md_6">
                                <label for="md_6">Anh Văn</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="7" id="md_7">
                                <label for="md_7">Báo Bài</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="8" id="md_8">
                                <label for="md_8">Sinh</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="9" id="md_9">
                                <label for="md_9">Sử</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="10" id="md_10">
                                <label for="md_10">Địa</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="11" id="md_11">
                                <label for="md_11">Tin Học</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="12" id="md_12">
                                <label for="md_12">Vẽ</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="13" id="md_13">
                                <label for="md_13">Rèn Chữ</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="14" id="md_14">
                                <label for="md_14">Anh Văn Giao Tiếp</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="15" id="md_15">
                                <label for="md_15">TOEIC</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="16" id="md_16">
                                <label for="md_16">IELTS</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="17" id="md_17">
                                <label for="md_17">TOEFL</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="18" id="md_18">
                                <label for="md_18">Tiếng Pháp</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="19" id="md_19">
                                <label for="md_19">Tiếng Hàn</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="20" id="md_20">
                                <label for="md_20">Tiếng Hoa</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="21" id="md_21">
                                <label for="md_21">Tiếng Nhật</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="22" id="md_22">
                                <label for="md_22">Đàn Piano</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="23" id="md_23">
                                <label for="md_23">Đàn Organ</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="24" id="md_24">
                                <label for="md_24">Đàn Guitar</label>
                            </li>
                                                    <li>
                                <input type="checkbox" name="monday[]" value="25" id="md_25">
                                <label for="md_25">Tiếng Việt Cho Người Nước Ngoài</label>
                            </li>
                                            </ul>
                </div>                            
            </div>

            <hr>
            
            <div class="formOut_line clearfix">
            	<p class="formOut_lab">Lớp dạy (<span>*</span>)</p>
                <div class="formOut_field">
                	<ul class="check_l2 clearfix">
                                                    <li>
                                <input type="checkbox" id="ld_1" name="lopday[]" value="1">
                                <label for="ld_1">Lớp Lá</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="ld_2" name="lopday[]" value="2">
                                <label for="ld_2">Lớp 1</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="ld_3" name="lopday[]" value="3">
                                <label for="ld_3">Lớp 2</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="ld_4" name="lopday[]" value="4">
                                <label for="ld_4">Lớp 3</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="ld_5" name="lopday[]" value="5">
                                <label for="ld_5">Lớp 4</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="ld_6" name="lopday[]" value="6">
                                <label for="ld_6">Lớp 5</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="ld_7" name="lopday[]" value="7">
                                <label for="ld_7">Lớp 6</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="ld_8" name="lopday[]" value="8">
                                <label for="ld_8">Lớp 7</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="ld_9" name="lopday[]" value="9">
                                <label for="ld_9">Lớp 8</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="ld_10" name="lopday[]" value="10">
                                <label for="ld_10">Lớp 9</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="ld_11" name="lopday[]" value="11">
                                <label for="ld_11">Lớp 10</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="ld_12" name="lopday[]" value="12">
                                <label for="ld_12">Lớp 11</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="ld_13" name="lopday[]" value="13">
                                <label for="ld_13">Lớp 12</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="ld_14" name="lopday[]" value="14">
                                <label for="ld_14">Ôn Thi Đại Học</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="ld_15" name="lopday[]" value="15">
                                <label for="ld_15">Dạy Song Ngữ</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="ld_16" name="lopday[]" value="16">
                                <label for="ld_16">Dạy Bằng Tiếng Anh</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="ld_17" name="lopday[]" value="17">
                                <label for="ld_17">Ôn Trần Đại Nghĩa</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="ld_18" name="lopday[]" value="18">
                                <label for="ld_18">Ôn Thi Trường Chuyên</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="ld_19" name="lopday[]" value="19">
                                <label for="ld_19">Dạy Trẻ Tự Kỷ</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="ld_20" name="lopday[]" value="20">
                                <label for="ld_20">Các Lớp Khác</label>
                            </li>
                                            </ul>
                </div>                            
            </div>
            <hr>
            
            <div class="formOut_line clearfix">
            	<p class="formOut_lab">Khu vực dạy (<span>*</span>)</p>
                <div class="formOut_field">
                	<ul class="check_l3 clearfix" id="khuvuc_wrap">
                                                    <li>
                                <input type="checkbox" id="kvd_70101" name="khuvuc[]" value="70101">
                                <label for="kvd_70101">Quận 1</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70103" name="khuvuc[]" value="70103">
                                <label for="kvd_70103">Quận 2</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70105" name="khuvuc[]" value="70105">
                                <label for="kvd_70105">Quận 3</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70107" name="khuvuc[]" value="70107">
                                <label for="kvd_70107">Quận 4</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70109" name="khuvuc[]" value="70109">
                                <label for="kvd_70109">Quận 5</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70111" name="khuvuc[]" value="70111">
                                <label for="kvd_70111">Quận 6</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70113" name="khuvuc[]" value="70113">
                                <label for="kvd_70113">Quận 7</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70115" name="khuvuc[]" value="70115">
                                <label for="kvd_70115">Quận 8</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70117" name="khuvuc[]" value="70117">
                                <label for="kvd_70117">Quận 9</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70119" name="khuvuc[]" value="70119">
                                <label for="kvd_70119">Quận 10</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70121" name="khuvuc[]" value="70121">
                                <label for="kvd_70121">Quận 11</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70123" name="khuvuc[]" value="70123">
                                <label for="kvd_70123">Quận 12</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70134" name="khuvuc[]" value="70134">
                                <label for="kvd_70134">Bình Tân</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70129" name="khuvuc[]" value="70129">
                                <label for="kvd_70129">Bình Thạnh</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70125" name="khuvuc[]" value="70125">
                                <label for="kvd_70125">Gò Vấp</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70131" name="khuvuc[]" value="70131">
                                <label for="kvd_70131">Phú Nhuận</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70127" name="khuvuc[]" value="70127">
                                <label for="kvd_70127">Tân Bình</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70128" name="khuvuc[]" value="70128">
                                <label for="kvd_70128">Tân phú</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70133" name="khuvuc[]" value="70133">
                                <label for="kvd_70133">Thủ Đức</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70139" name="khuvuc[]" value="70139">
                                <label for="kvd_70139">Bình Chánh</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70143" name="khuvuc[]" value="70143">
                                <label for="kvd_70143">Cần Giờ</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70135" name="khuvuc[]" value="70135">
                                <label for="kvd_70135">Củ Chi</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70137" name="khuvuc[]" value="70137">
                                <label for="kvd_70137">Hóc Môn</label>
                            </li>
                                                    <li>
                                <input type="checkbox" id="kvd_70141" name="khuvuc[]" value="70141">
                                <label for="kvd_70141">Nhà Bè</label>
                            </li>
                                            </ul>
                </div>                            
            </div>
            <hr>

            <div  class="formOut_line clearfix">
                <p class="formOut_lab">Thời gian dạy (<span>*</span>)</p>
                <div class="formOut_field">
                    <ul class="check_l1 clearfix">
                                                    <div class="col-checkbox">                            <li>
                                <input type="checkbox" id="tgd_1" name="thoigian_day[]" value="1">
                                <label for="tgd_1">Sáng Thứ 2</label>
                            </li>
                                                                                                            <li>
                                <input type="checkbox" id="tgd_2" name="thoigian_day[]" value="2">
                                <label for="tgd_2">Sáng Thứ 3</label>
                            </li>
                                                                                                            <li>
                                <input type="checkbox" id="tgd_3" name="thoigian_day[]" value="3">
                                <label for="tgd_3">Sáng Thứ 4</label>
                            </li>
                                                                                                            <li>
                                <input type="checkbox" id="tgd_4" name="thoigian_day[]" value="4">
                                <label for="tgd_4">Sáng Thứ 5</label>
                            </li>
                                                                                                            <li>
                                <input type="checkbox" id="tgd_5" name="thoigian_day[]" value="5">
                                <label for="tgd_5">Sáng Thứ 6</label>
                            </li>
                                                                                                            <li>
                                <input type="checkbox" id="tgd_6" name="thoigian_day[]" value="6">
                                <label for="tgd_6">Sáng Thứ 7</label>
                            </li>
                                                                                                            <li>
                                <input type="checkbox" id="tgd_7" name="thoigian_day[]" value="7">
                                <label for="tgd_7">Sáng CN</label>
                            </li>
                            </div>                                                    <div class="col-checkbox">                            <li>
                                <input type="checkbox" id="tgd_8" name="thoigian_day[]" value="8">
                                <label for="tgd_8">Chiều Thứ 2</label>
                            </li>
                                                                                                            <li>
                                <input type="checkbox" id="tgd_9" name="thoigian_day[]" value="9">
                                <label for="tgd_9">Chiều Thứ 3</label>
                            </li>
                                                                                                            <li>
                                <input type="checkbox" id="tgd_10" name="thoigian_day[]" value="10">
                                <label for="tgd_10">Chiều Thứ 4</label>
                            </li>
                                                                                                            <li>
                                <input type="checkbox" id="tgd_11" name="thoigian_day[]" value="11">
                                <label for="tgd_11">Chiều Thứ 5</label>
                            </li>
                                                                                                            <li>
                                <input type="checkbox" id="tgd_12" name="thoigian_day[]" value="12">
                                <label for="tgd_12">Chiều Thứ 6</label>
                            </li>
                                                                                                            <li>
                                <input type="checkbox" id="tgd_13" name="thoigian_day[]" value="13">
                                <label for="tgd_13">Chiều Thứ 7</label>
                            </li>
                                                                                                            <li>
                                <input type="checkbox" id="tgd_14" name="thoigian_day[]" value="14">
                                <label for="tgd_14">Chiều CN</label>
                            </li>
                            </div>                                                    <div class="col-checkbox">                            <li>
                                <input type="checkbox" id="tgd_15" name="thoigian_day[]" value="15">
                                <label for="tgd_15">Tối Thứ 2</label>
                            </li>
                                                                                                            <li>
                                <input type="checkbox" id="tgd_16" name="thoigian_day[]" value="16">
                                <label for="tgd_16">Tối Thứ 3</label>
                            </li>
                                                                                                            <li>
                                <input type="checkbox" id="tgd_17" name="thoigian_day[]" value="17">
                                <label for="tgd_17">Tối Thứ 4</label>
                            </li>
                                                                                                            <li>
                                <input type="checkbox" id="tgd_18" name="thoigian_day[]" value="18">
                                <label for="tgd_18">Tối Thứ 5</label>
                            </li>
                                                                                                            <li>
                                <input type="checkbox" id="tgd_19" name="thoigian_day[]" value="19">
                                <label for="tgd_19">Tối Thứ 6</label>
                            </li>
                                                                                                            <li>
                                <input type="checkbox" id="tgd_20" name="thoigian_day[]" value="20">
                                <label for="tgd_20">Tối Thứ 7</label>
                            </li>
                                                                                                            <li>
                                <input type="checkbox" id="tgd_21" name="thoigian_day[]" value="21">
                                <label for="tgd_21">Tối CN</label>
                            </li>
                            </div>                                            </ul>
                </div>
            </div>
            
            <div class="formOut_line clearfix" style="display: none">
            	<p class="formOut_lab">Lương tối thiểu (<span>*</span>)</p>
                <div class="formOut_field clearfix">                                    
                    <span class="w250">
                    <input type="text" id="luong" name="luong" class="in_200" placeholder="Khoảng từ 80.000 -> 500.000">
                    </span>
                    <span class="money"> vnđ/ <em>1 buổi</em></span>
                    <p class="money_note">Lưu ý: 1 buổi của giáo viên là 90 phút<br>1 buổi của sinh viên là 120 phút</p>
                </div>                           
            </div>

            
            <hr>

            <p class="dangky_btn clearfix">                            
                <input type="submit" name="" value="ĐĂNG KÝ" class="btn_s3">  
            </p>
        </form>
    </div>                    
</div>
@endsection