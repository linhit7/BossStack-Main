@extends('home.index')

@section('content')
  @include('home.banner.default')

  <div class="main-recruitmentDetail">
    <div class="section section-recruitmentDetail">
      <div class="container">
        <div class="wrap">
          <h3>Frontend Developer</h3>
          <div class="row">
            <div class="col-12 col-lg-7 work-content">
              <div class="job-description item">
                <h4>Mô tả công việc:</h4>
                <ul>
                  <li>Tham gia phát triển các hệ thống website của công ty.</li>
                  <li>Tham gia phân tích, thiết kế, và cải tiến chức năng cho các sản phẩm, dịch vụ của công ty và khách hàng.</li>
                  <li>Phối hợp làm việc với team để nâng cao chất lượng công việc.</li>
                  <li>Tối ưu code để tăng tốc xử lý và mở rộng.</li>
                  <li>Tìm hiểu công nghệ theo yêu cầu của cấp trên.</li>
                  <li>Các nhiệm vụ khác theo yêu cầu của BGĐ công ty.</li>
                </ul>
              </div>
              <div class="advanced-skill item">
                <h4>Kỹ năng & Chuyên môn:</h4>
                <ul>
                  <li>Có kinh nghiệm lập trình Web (HTML, CSS, Javascript).</li>
                  <li>Thích thú với việc nghiên cứu, tìm tòi và áp dụng kỹ thuật mới.</li>
                  <li>Chăm chỉ, chịu khó, có tinh thần chủ động học hỏi, tìm hiểu.</li>
                  <li>Tìm hiểu các công nghệ mới, tham gia các buổi seminar của công ty.</li>
                </ul>
              </div>
              <div class="benefit item">
                <h4>Quyền lợi:</h4>
                <ul>
                  <li>Lương thỏa thuận theo năng lực ứng viên.</li>
                  <li>Được hưởng các chế độ theo quy định của Luật Lao động hiện hành.</li>
                  <li>Được công ty trang bị máy tính và các thiết bị phục vụ cho công việc.</li>
                  <li>Trở thành nhân viên chính thức sau 02 tháng thử việc, có cơ hội thăng tiến trong công việc.</li>
                </ul>
              </div>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#applyModal">
                Ứng tuyển ngay
              </button>
            </div>

            <div class="col-12 col-lg-5 job-requirements">
              <div class="work-location item">
                <h4>Địa điểm</h4>
                <ul>
                  <li>48 Tố Hữu, Phường Trung Văn, Quận Nam Từ Liêm, Thành phố Hà Nội</li>
                </ul>
              </div>
              <div class="experience item">
                <h4>Số năm kinh nghiệm</h4>
                <ul>
                  <li>1 năm, 06 tháng</li>
                </ul>
              </div>
              <div class="rank item">
                <h4>Cấp bậc</h4>
                <ul>
                  <li>Nhân viên</li>
                </ul>
              </div>
              <div class="type item">
                <h4>Loại hình</h4>
                <ul>
                  <li>Full time</li>
                </ul>
              </div>
              <div class="skill item">
                <h4>Kỹ năng</h4>
                <ul>
                  <li>CSS, JavaScript, HTML, Jquery</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="applyModal" data-bs-backdrop="apply" data-bs-keyboard="false" tabindex="-1" aria-labelledby="applyBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="">
          <div class="modal-body">
            <h4>Bạn đang ứng tuyển vị trí Frontend Developer tại BossStack</h4>
            <div class="form-apply">
              <div class="form-item form-info">
                <input type="text" id="fullName" class="form-control" required>
                <label for="fullName" class="form-label">Tên của bạn <span>&#42;</span></label>
              </div>
              
              <div class="form-group">
                <div class="form-item form-info">
                  <input type="email" id="email" class="form-control" required>
                  <label for="email" class="form-label">Email <span>&#42;</span></label>
                </div>

                <div class="form-item form-info">
                  <input type="text" id="phone" class="form-control" required>
                  <label for="phone" class="form-label">Số điện thoại <span>&#42;</span></label>
                </div>
              </div>

              <div class="form-item form-info">
                <input type="text" id="address" class="form-control">
                <label for="address" class="form-label">Địa chỉ của bạn</label>
              </div>

              <div class="form-item">
                <div class="cv-group">
                  <span class="title">Tải CV lên</span>
                  <span class="cv-file"></span>
                  <label for="cv" class="form-label label-icon">
                    <img class="img-fluid" src="{{ asset('image/icon-upload.svg') }}" alt="">
                  </label>
                </div>
                <input type="file" id="cv" class="form-control">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-exit" data-bs-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-primary btn-apply">Nộp CV</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    let filePath = document.querySelector("#cv");
    let selectLabelUpload = document.querySelector(".label-icon");
    let selectCvFile = document.querySelector(".cv-file");
    selectCvFile.style.display = "none";
    filePath.addEventListener("change", function demo() {
      let nameFile = filePath.value.slice(12);
      console.log("demo ~ nameFile", nameFile);
      if (nameFile) {
        selectCvFile.style.display = "block";
        selectCvFile.innerHTML = nameFile;
      }
    });
  </script>
@endsection