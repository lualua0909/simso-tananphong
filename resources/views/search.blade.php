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
						<div class="desc-wrapper">
							<ul>
								<li>Với khách hàng sử dụng các dòng điện thoại có hỗ trợ Esim, shop sẽ gửi mã Esim (QR code) để kích hoạt không cần chờ sim gốc</li>
								<li>Đăng ký chính chủ và giao sim toàn quốc.</li>
								<li>Khách mua từ 2 sim trở lên sẽ miễn ship</li>
								<li>Do kho sim toàn quốc, nên một số trường hợp số khách hàng đã lựa chọn đăng ký trước đó, mong quý khách vui lòng chọn lại số khác.</li>
							</ul>
						</div>

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

						<div class="sims-table-wrapper">
							<div class="sims-table-header">
								<div class="header-col header-col-1">Số sim</div>
								<div class="header-col header-col-2">Giá</div>
								<div class="header-col header-col-3">Dạng sim</div>
								<div class="header-col header-col-4"></div>
								<div class="header-col header-col-1 header-col-1-2">Số sim</div>
								<div class="header-col header-col-2 header-col-2-2">Giá</div>
								<div class="header-col header-col-3 header-col-3-2">Dạng sim</div>
								<div class="header-col header-col-4 header-col-4-2"></div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
									</div>
								</div>
							</div>
							<div class="sim-table-item-wrapper">
								<div class="sim-table-item">
									<div class="item-col item-col-1">
										<h4 class="phone-number">0931.43.63.73</h4>
										<p>Sim trả sau</p>
									</div>
									<div class="item-col item-col-2">
										<p>45,500,000 </p>
									</div>
									<div class="item-col item-col-3">
										<p>Tiến 3 số cuối</p>
									</div>
									<div class="item-col item-col-4">
										<a href="" class="buy">Đặt mua</a>
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
