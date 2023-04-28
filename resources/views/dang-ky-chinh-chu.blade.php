@extends('layouts.layout')

@section('content')
<section class="page-wrapper register-wrapper">
			<div class="container">
				<h1 class="page-title">Đăng ký chính chủ</h1>
				<div class="desc">
					<p>Chỉ một vài thao tác giúp bạn đăng ký chính chủ nhanh chóng, thuận tiện</p>
				</div>
				<div class="link-wrapper">
					<a href="javascript:;" class="tutorial-link" data-bs-toggle="modal" data-bs-target="#tutorialModal">Xem hướng dẫn</a>
				</div>

				<div class="kyc-form-wrapper">
					<form action="" class="kyc-form">
						<div class="row">
							<div class="col-lg-6 file-upload">
								<label>
									<input type="file" accept="image/*" id="id-front">
									<img src="#" alt="" class="preview">
									<h3 class="upload-title">Thêm CMND/CCCD mặt trước</h3>
									<p class="upload-desc">Định dạng: jpg, png.</p>
								</label>
							</div>
							<div class="col-lg-6 file-upload">
								<label>
									<input type="file" accept="image/*" id="id-back">
									<img src="#" alt="" class="preview">
									<h3 class="upload-title">Thêm CMND/CCCD mặt sau</h3>
									<p class="upload-desc">Định dạng: jpg, png.</p>
								</label>
							</div>
							<div class="col-lg-6 file-upload">
								<label>
									<input type="file" accept="image/*" id="portrait">
									<img src="#" alt="" class="preview">
									<h3 class="upload-title">Thêm ảnh chân dung</h3>
									<p class="upload-desc">Định dạng: jpg, png.</p>
								</label>
							</div>
							<div class="col-lg-6 file-upload">
								<label>
									<input type="file" accept="image/*" id="short-clip">
									<img src="#" alt="" class="preview">
									<h3 class="upload-title">Thêm clip ngắn (10s)</h3>
									<p class="upload-desc">Định dạng: .mp4</p>
								</label>
							</div>
						</div>
						<div class="buttons-wrapper">
							<a href="" class="checkout-return">Trở về</a>
							<a href="" class="checkout-button">Đăng ký</a>
						</div>
					</form>
				</div>
			</div>
		</section>
@endsection
