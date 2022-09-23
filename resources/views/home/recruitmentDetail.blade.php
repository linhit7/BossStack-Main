@extends('home.index')

@section('content')
  @include('home.banner.default')

  <div class="main-recruitmentDetail">
    <div class="section section-recruitmentDetail">
      <div class="container">
        <div class="wrap">
          <h3>Frontend Developer</h3>
          <div class="col-12 col-lg-6 work-content">
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
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#applyModal">
              Ứng tuyển ngay
            </button>
          </div>
          <div class="col-12 col-lg-6 job-requirements">
            
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="applyModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="staticBackdropLabel">Modal title</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident et sunt doloribus iusto explicabo maiores similique animi inventore laboriosam quaerat nihil iste accusamus tenetur, repellendus modi! Delectus laudantium nostrum quod!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>
@endsection