@extends('layouts.layout')

@section('content')
<section class="checkout-wrapper">
			<div class="checkout-progress-bar-wrapper">
				<div class="checkout-progress-bar step-3">
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
			<div class="congratulations-wrapper">
				<div class="congratulations-img">
					<img src="assets/images/congra.png" alt="">
				</div>
				<h2 class="congratulations-title">Thành công</h2>
				<div class="congratulations-content">
					<p>Cảm ơn! Đơn hàng đã được ghi nhận</p>
					<p>Nhân viên sẽ sớm liên hệ với bạn</p>
				</div>
				<h3 class="congratulations-subtitle">Mua thêm 1 sim để được free ship</h3>
			</div>
		</section>
@endsection
