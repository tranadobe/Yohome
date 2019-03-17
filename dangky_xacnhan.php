<?php $page = 'project-page'; include "./config/include.php"; ?>

<!-- *** stylesheet *** -->
<?php include "./templates/common_css.php"; ?>

<!-- *** javascript *** -->
<?php include "./templates/common_js.php"; ?>
</head>

<body id="<?php echo $page; ?>">
    <?php include "./templates/header_no_search.php"; ?>
    <div id="contents">
		<div class="container project-page">
			<div class="topicpath view_pc-tab">
				<ul>
					<li><a href="#">Trang chủ</a></li>
					<li>Đăng ký</li>
				</ul>
			</div><!--/.topicpath-->
			<div class="register-form">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 block-register-info">
						<h3>Có <strong>2,345</strong> người đăng kí thành viên</h3>
						<h4>Lợi ích khi đăng ký thành viên</h4>
						<ul class="list-loiich">
							<li><img src="images/ic_check_reg.png" alt=""> Đọc tin bất động sản miễn phí</li>
							<li><img src="images/ic_check_reg.png" alt=""> Tư vấn bất động sản miễn phí</li>
							<li><img src="images/ic_check_reg.png" alt=""> Quà tặng tri ân thành viên</li>
							<li><img src="images/ic_check_reg.png" alt=""> Bảng tin bất động sản mới nhất</li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 pull-right block-xacnhan">
						<div class="form-register">
							<h3>Xác nhận</h3>
							<div class="form-input-register">
								<form action="" method="POST" role="form">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Nhập mã xác nhận">
										<span id="helpBlock" class="help-block">Bạn chưa nhận được mã xác nhận gửi lại mã</span>
									</div>
									<button type="submit" class="btn btn-register btn-block btn-lg">Xác nhận</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="bn-fixed box-banner-left"><a href="#"><img src="images/banner_1.png" alt=""></a></div>
			<div class="bn-fixed  box-banner-right"><a href="#"><img src="images/banner_1.png" alt=""></a></div>
		</div>
    </div><!-- /#contents -->
    <?php include "./templates/footer.php"; ?>
</body>
</html>