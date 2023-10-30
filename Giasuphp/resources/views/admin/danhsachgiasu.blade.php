
@extends('admin')
@section('content')
<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Danh Sách Gia Sư </h5>
              <h5><button class="custom-btn btn-6"><span>Thêm Gia Sư</span></button></h5>
              
			  <div class="table-responsive">
               <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Họ Và Tên</th>
                      <th scope="col">Hình Ảnh</th>
                      <th scope="col">Giới TÍnh</th>
                      <th scope="col">Cấp Bậc</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td><button class="custom-btn btn-6"><span>Sửa</span></button></td>
                    </tr>
                  </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>
        </div>
      </div>
@endsection