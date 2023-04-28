@extends('layouts.layout')

@section('content')
<section class="checkout-wrapper">
			<div class="checkout-progress-bar-wrapper">
				<div class="checkout-progress-bar step-1">
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
			<div class="checkout-form-wrapper">
				<form action="" class="checkout-form">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<div class="package">
									<table>
										<tbody>
										<tr>
											<td class="package-name">Tên gói</td>
											<td class="package-code">12C120</td>
											<td rowspan="3" class="package-select">
												<label class="radio-button">
													<input type="radio" class="radio-button-input" id="" name="package">
													<span class="radio-button-control"></span>
												</label>
											</td>
										</tr>
										<tr>
											<td>Giá gói</td>
											<td>120,000đ/30 ngày</td>
										</tr>
										<tr>
											<td class="endow">Ưu đãi</td>
											<td>
												<ul>
													<li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
													<li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong 90 ngày</li>
													<li>Tặng 50 phút gọi liên mạng/30 ngày</li>
												</ul>
											</td>
										</tr>
										</tbody>
									</table>
								</div>
								<div class="package">
									<table>
										<tbody>
										<tr>
											<td class="package-name">Tên gói</td>
											<td class="package-code">12C120</td>
											<td rowspan="3" class="package-select">
												<label class="radio-button">
													<input type="radio" class="radio-button-input" id="" name="package">
													<span class="radio-button-control"></span>
												</label>
											</td>
										</tr>
										<tr>
											<td>Giá gói</td>
											<td>120,000đ/30 ngày</td>
										</tr>
										<tr>
											<td class="endow">Ưu đãi</td>
											<td>
												<ul>
													<li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
													<li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong 90 ngày</li>
													<li>Tặng 50 phút gọi liên mạng/30 ngày</li>
												</ul>
											</td>
										</tr>
										</tbody>
									</table>
								</div>
								<div class="package">
									<table>
										<tbody>
										<tr>
											<td class="package-name">Tên gói</td>
											<td class="package-code">12C120</td>
											<td rowspan="3" class="package-select">
												<label class="radio-button">
													<input type="radio" class="radio-button-input" id="" name="package">
													<span class="radio-button-control"></span>
												</label>
											</td>
										</tr>
										<tr>
											<td>Giá gói</td>
											<td>120,000đ/30 ngày</td>
										</tr>
										<tr>
											<td class="endow">Ưu đãi</td>
											<td>
												<ul>
													<li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
													<li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong 90 ngày</li>
													<li>Tặng 50 phút gọi liên mạng/30 ngày</li>
												</ul>
											</td>
										</tr>
										</tbody>
									</table>
								</div>
								<div class="package">
									<table>
										<tbody>
										<tr>
											<td class="package-name">Tên gói</td>
											<td class="package-code">12C120</td>
											<td rowspan="3" class="package-select">
												<label class="radio-button">
													<input type="radio" class="radio-button-input" id="" name="package">
													<span class="radio-button-control"></span>
												</label>
											</td>
										</tr>
										<tr>
											<td>Giá gói</td>
											<td>120,000đ/30 ngày</td>
										</tr>
										<tr>
											<td class="endow">Ưu đãi</td>
											<td>
												<ul>
													<li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
													<li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong 90 ngày</li>
													<li>Tặng 50 phút gọi liên mạng/30 ngày</li>
												</ul>
											</td>
										</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="col-lg-4">
								<aside class="checkout-sidebar">
									<div class="sim-card-wrapper">
										<div class="sim-card">
											<img src="assets/images/mobi-sim.png" alt="">
										</div>
										<div class="sim-info">
											<h5 class="phone-number">0978.56.45.56</h5>
											<p class="sim-type">Sim trả sau</p>
										</div>
									</div>
									<table>
										<tbody>
										<tr>
											<td>Số thuê bao</td>
											<td class="phone-number">0978.56.45.56</td>
										</tr>
										<tr>
											<td>Loại thuê bao</td>
											<td>Sim trả sau</td>
										</tr>
										<tr>
											<td>Cước tháng cam kết (vnđ/tháng)</td>
											<td>Không cam kết</td>
										</tr>
										<tr>
											<td>Phí giữ số</td>
											<td>Miễn phí</td>
										</tr>
										<tr>
											<td>Phí hòa mạng</td>
											<td>299,000 vnđ</td>
										</tr>
										<tr>
											<td>Giá gói cước, dịch vụ</td>
											<td>20,000 vnđ</td>
										</tr>
										<tr class="coupon">
											<td colspan="2">
												<label for="coupon">Mã khuyến mãi</label>
												<input type="text" id="coupon">
											</td>
										</tr>
										<tr class="shipping">
											<td>Phí vận chuyển <br> <span>(Miễn phí khi mua 2 sim)</span></td>
											<td>30,000 vnđ</td>
										</tr>
										<tr class="subtotal">
											<td>Tổng cộng</td>
											<td>349,000 vnđ</td>
										</tr>
										<tr class="discount">
											<td>Tổng thanh toán</td>
											<td>-60,000 vnđ</td>
										</tr>
										<tr class="total">
											<td>Tổng thanh toán</td>
											<td>289,000 vnđ</td>
										</tr>
										</tbody>
									</table>
								</aside>

								<a href="" class="checkout-button">Đặt giữ số</a>
								<a href="" class="checkout-return">Quay lại</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</section>
@endsection
