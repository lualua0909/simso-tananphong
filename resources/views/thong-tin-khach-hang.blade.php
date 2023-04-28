@extends('layouts.layout')

@section('content')
<section class="checkout-wrapper">
			<div class="checkout-progress-bar-wrapper">
				<div class="checkout-progress-bar step-2">
					<div class="progress-bar"></div>
					<div class="step step-1">
						<span>Chọn gói cước</span>
					</div>
					<div class="step step-2">
						<span>Thông tin KH</span>
					</div>
					<div class="step step-3">
						<span>Hoàn tất</span>
					</div>
				</div>
			</div>
			<div class="desc">
				<p>Mọi thông tin của bạn phục vụ cho mục đích hòa mạng sim, cam kết bảo mật</p>
			</div>
			<div class="shipping-form-wrapper">
				<form action="" class="shipping-form">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-field">
									<label class="form-label">Họ tên của bạn</label>
									<input type="text" class="form-control">
								</div>
								<div class="form-field">
									<label class="form-label">Số điện thoại</label>
									<input type="text" class="form-control">
								</div>
								<div class="form-field">
									<h3 class="field-title">Hình thức nhận hàng</h3>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="delivery-method" id="delivery-method-1" value="delivery-method-1" checked>
										<label class="form-check-label" for="delivery-method-1">Nhận tại cửa hàng</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="delivery-method" id="delivery-method-2" value="delivery-method-2">
										<label class="form-check-label" for="delivery-method-2">Nhận hàng tại nhà</label>
									</div>
								</div>
								<div class="branch-select">
									<label>
										<input type="radio" name="branch">
										<div class="branch-content">
											<h3 class="branch-name">Chi nhánh 1</h3>
											<p class="branch-address">09 Lê Cơ, Phường 1, Quận Bình Tân, TP.HCM</p>
										</div>
									</label>
									<label>
										<input type="radio" name="branch">
										<div class="branch-content">
											<h3 class="branch-name">Chi nhánh 2</h3>
											<p class="branch-address">09 Lê Cơ, Phường 1, Quận Bình Tân, TP.HCM</p>
										</div>
									</label>
									<label>
										<input type="radio" name="branch">
										<div class="branch-content">
											<h3 class="branch-name">Chi nhánh 3</h3>
											<p class="branch-address">09 Lê Cơ, Phường 1, Quận Bình Tân, TP.HCM</p>
										</div>
									</label>
									<label>
										<input type="radio" name="branch">
										<div class="branch-content">
											<h3 class="branch-name">Chi nhánh 4</h3>
											<p class="branch-address">09 Lê Cơ, Phường 1, Quận Bình Tân, TP.HCM</p>
										</div>
									</label>
								</div>
								<div class="address-input">
									<div class="form-field">
										<label class="form-label">Tỉnh/Thành Phố</label>
										<select class="form-select" aria-label="">
											<option selected>Vui lòng chọn</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
									<div class="form-field">
										<label class="form-label">Quận huyện</label>
										<select class="form-select" aria-label="">
											<option selected>Vui lòng chọn</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
									<div class="form-field">
										<label class="form-label">Số nhà, tên đường</label>
										<input type="text" class="form-control" placeholder="Vui lòng nhập">
									</div>
								</div>
								<div class="form-field">
									<label class="form-label">Ghi chú</label>
									<input type="text" class="form-control">
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										Tôi muốn đăng ký chính chủ
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="maps-wrapper">
									<div id="shipping-map"></div>
									<input type="hidden" id="lat" name="lat" value="0" hidden>
									<input type="hidden" id="lng" name="lng" value="0" hidden>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="buttons-wrapper">
									<a href="" class="checkout-return">Quay lại</a>
									<a href="" class="checkout-button">Đặt hàng</a>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</section>
@endsection
