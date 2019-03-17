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
					<li>Đổi mật khẩu</li>
				</ul>
			</div><!--/.topicpath-->
			<div class="register-form quenmatkhau">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 pull-right">
						<div class="form-register">
							<h3>Đổi mật khẩu</h3>
							<div class="form-input-register">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Mật khẩu hiện tại">
									</div>
									<div class="form-group">
										<input type="password" class="form-control" placeholder="Mật khẩu mới">
									</div>
									<div class="form-group">
										<input type="password" class="form-control" placeholder="Nhập lại mật khẩu mới">
									</div>
									<button class="btn btn-register btn-block btn-lg">ĐỔI MẬT KHẨU</button>
									<div class="form-group">
									  <div class="checkbox">
									    <label>
									      <input type="checkbox"> Tôi hoàn toàn tự nguyện đọc và đồng ý với các điều khoản của YouHomes
									    </label>
									  </div>
									</div>	
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 block-register-info">
						<div class="box-banner"><a href="#"><img src="images/banner_naptien.jpg" alt="" class="img-responsive"></a></div>
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