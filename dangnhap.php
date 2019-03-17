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
					<li>Đăng nhập</li>
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
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 pull-right">
						<div class="form-register">
							<h3>Đăng nhập</h3>
							<button type="button" class="btn btn-primary btn-block btn-lg"><i class="fa fa-facebook"></i> Đăng ký bằng Facebook</button>
							<button type="button" class="btn btn-danger btn-block btn-lg"><i class="fa fa-google"></i> Đăng ký bằng Google</button>
							<div class="line"><span>Hoặc</span></div>
							<div class="form-input-register">
								<form action="" method="POST" role="form">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email / Số điện thoại">
									</div>
									<div class="form-group">
										<input type="password" class="form-control" placeholder="Mật khẩu">
									</div>
									<div class="form-group">
									  <div class="checkbox pull-left">
									    <label>
									      <input type="checkbox">Lưu mật khẩu</label>
									  </div>
									  <div class="checkbox pull-right">
									  	<a href="#">Quên mật khẩu</a>
									  </div>
									</div>
									<button type="submit" class="btn btn-register btn-block btn-lg">ĐĂNG KÝ</button>
									<div class="form-group">
									  <div class="checkbox">
									    <label>
									      <input type="checkbox"> Tôi hoàn toàn tự nguyện đọc và đồng ý với các điều khoản của YouHomes
									    </label>
									  </div>
									</div>									
								</form>
								<div class="line"><span>Bạn đã có tài khoản YouHomes</span></div>
								<button type="button" class="btn btn-default btn-block btn-lg">ĐĂNG NHẬP</button>
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