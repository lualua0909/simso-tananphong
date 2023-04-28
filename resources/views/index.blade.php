@extends('layouts.layout')

@section('content')
<section class="banner-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="banner">
							<div class="img-wrapper">
								<img src="assets/images/banner-1.png" alt="">
								<a href="" class="banner-button">Xem chi tiết</a>
							</div>
							<h3 class="banner-title">Nạp tiền chiết khấu</h3>
						</div>
					</div>
					<div class="col-md-6">
						<div class="banner">
							<div class="img-wrapper">
								<img src="assets/images/banner-2.png" alt="">
								<a href="" class="banner-button">Xem chi tiết</a>
							</div>
							<h3 class="banner-title">Đăng ký 4G</h3>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="sim-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="sim-search-form-wrapper mobile">
							<form action="" class="sim-search-form">
								<div class="row">
									<div class="col-lg-8 col-md-9 col-7 keyword">
										<input type="text" class="form-control" aria-describedby="" placeholder="Nhập số cần tìm">
									</div>
									<div class="col-lg-4 col-md-3 col-5">
										<button type="submit" class="btn btn-primary">Tìm kiếm</button>
									</div>
								</div>
							</form>
						</div>

						<aside class="primary-sidebar">
							<div class="card">
								<div class="card-body">
									<form class="sim-filter-form">
										<div class="row">
											<div class="col-6">
												<select class="form-select" aria-label="">
													<option selected>- Chọn đầu số -</option>
													<option value="1">One</option>
													<option value="2">Two</option>
													<option value="3">Three</option>
												</select>
											</div>
											<div class="col-6">
												<select class="form-select" aria-label="">
													<option selected>- Chọn loại sim -</option>
													<option value="1">One</option>
													<option value="2">Two</option>
													<option value="3">Three</option>
												</select>
											</div>
											<div class="col-6">
												<select class="form-select" aria-label="">
													<option selected>- Chọn giá -</option>
													<option value="1">One</option>
													<option value="2">Two</option>
													<option value="3">Three</option>
												</select>
											</div>
											<div class="col-6">
												<select class="form-select" aria-label="">
													<option selected>- Chọn tổng nút -</option>
													<option value="1">One</option>
													<option value="2">Two</option>
													<option value="3">Three</option>
												</select>
											</div>
											<div class="col-12">
												<select class="form-select" aria-label="">
													<option selected>- Chọn mức cam kết -</option>
													<option value="1">One</option>
													<option value="2">Two</option>
													<option value="3">Three</option>
												</select>
											</div>
											<div class="col-12">
												<h4 class="form-title">Không gồm số</h4>
											</div>
											<div class="col-lg-12 form-check-wrapper">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">0</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">1</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">2</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">3</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">4</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">5</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">6</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">7</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">8</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">9</label>
												</div>
											</div>
											<div class="col-12">
												<h4 class="form-title">Tìm theo dạng</h4>
											</div>
											<div class="col-lg-12 form-check-2-wrapper">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">Sim thần tài</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">Sim đầu số cổ</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">Sim ông địa</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">Tam hoa giữa</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">Đầu số 07, 08</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">Tiến 3 số cuối</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">Tam hoa cuối</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">Dạng 79</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">Tiến 3 giữa</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">Sim lộc phát</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">Dạng 68</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">Sim cặp</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">AxA.AyA</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">AxA.AyA</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">AxA.AyA</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">AxA.AyA</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">AxA.AyA</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">AxA.AyA</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">AxA.AyA</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">AxA.AyA</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">AxA.AyA</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">AxA.AyA</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">AxA.AyA</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">AxA.AyA</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">AxA.AyA</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">AxA.AyA</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">AxA.AyA</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">AxA.AyA</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">AxA.AyA</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">AxA.AyA</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">AxA.AyA</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" value="">
													<label class="form-check-label">AxA.AyA</label>
												</div>
											</div>
										</div>
									</form>

									<div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
										<blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
									</div>
								</div>
							</div>
						</aside>
					</div>
					<div class="col-lg-8">
						<div class="sim-search-form-wrapper">
							<form action="" class="sim-search-form">
								<div class="row">
									<div class="col-lg-8 col-md-9 col-7 keyword">
										<input type="text" class="form-control" aria-describedby="" placeholder="Nhập số cần tìm">
									</div>
									<div class="col-lg-4 col-md-3 col-5">
										<button type="submit" class="btn btn-primary">Tìm kiếm</button>
									</div>
								</div>
							</form>
						</div>
						<div class="section-title-wrapper">
							<h3 class="section-title">Sim trả sau đẹp hot</h3>
						</div>
						<div class="sims-wrapper">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.<span>355</span></h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.<span>355</span></h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="more-link-wrapper">
										<a href="" class="more-link">Xem thêm</a>
									</div>
								</div>
							</div>
						</div>
						<div class="section-title-wrapper">
							<h3 class="section-title">Sim trả trước</h3>
						</div>
						<div class="sims-wrapper">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="more-link-wrapper">
										<a href="" class="more-link">Xem thêm</a>
									</div>
								</div>
							</div>
						</div>
						<div class="section-title-wrapper">
							<h3 class="section-title">Sim thần tài</h3>
						</div>
						<div class="sims-wrapper">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="more-link-wrapper">
										<a href="" class="more-link">Xem thêm</a>
									</div>
								</div>
							</div>
						</div>
						<div class="section-title-wrapper">
							<h3 class="section-title">Sim lộc phát</h3>
						</div>
						<div class="sims-wrapper">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="more-link-wrapper">
										<a href="" class="more-link">Xem thêm</a>
									</div>
								</div>
							</div>
						</div>
						<div class="section-title-wrapper">
							<h3 class="section-title">Sim tam hoa</h3>
						</div>
						<div class="sims-wrapper">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="sim-item">
										<div class="sim-img">
											<img src="assets/images/mobi.png" alt="">
										</div>
										<div class="sim-detail">
											<h4 class="phone-number">0978.145.355</h4>
											<p class="price">200.000 đ</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-6">
									<div class="more-link-wrapper">
										<a href="" class="more-link">Xem thêm</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="5"></div>
			</div>
		</section>

@endsection
