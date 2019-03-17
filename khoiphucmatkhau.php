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
					<li>Quên mật khẩu</li>
				</ul>
			</div><!--/.topicpath-->
			<div class="register-form quenmatkhau">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 pull-right">
						<div class="form-register">
							<h3>Khôi phục mật khẩu</h3>
							<div class="text-center text-alert"><strong>Mã xác thực đã được gửi tới số điện thoại 09888. Vui lòng nhập<br>mã xác thực để khôi phục tài khoản</strong></div>
							<div class="form-input-register">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Nhập mã xác nhận">
									</div>
									<div class="form-group">
										<input type="password" class="form-control" placeholder="Nhập mật khẩu mới (ít nhất 8 ký tự) ">
									</div>
									<div class="form-group">
										<input type="password" class="form-control" placeholder="Nhập lại mật khẩu mới ">
									</div>
									<button class="btn btn-register btn-block btn-lg"  data-toggle="modal" data-target="#khoiphucmatkhau">ĐẶT LẠI MẬT KHẨU</button>
									<div class="form-group">
									  <div class="checkbox">
									    <label>
									      <input type="checkbox"> Tôi hoàn toàn tự nguyện đọc và đồng ý với các điều khoản của YouHomes
									    </label>
									  </div>
									</div>	
									<div class="form-group text-center">
									  	<a href="#"><strong>Quay lại đăng nhập</strong></a>
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


	<!-- Modal -->
	<div class="modal fade" id="khoiphucmatkhau" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-md" role="document">
		    <div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
		      	<div class="modal-body">
			        <div class="row">
			        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			        		<h3>KHÔI PHỤC MẬT KHẨU</h3>      
			        		<div class="text-center">Thông tin tài khoản và link khôi phục mật khẩu  đã được gửi đến emai <a href="mailto:joe@example.com?subject=feedback">hkkkkg@gmail.com</a>. Quý khách vui  lòng kiểm tra email và nhấn vào link để khôi phục mật khẩu</div> 		
			        	</div>
			        </div>
			    </div>
		    </div>
		</div>
	</div>  
  
</body>
</html>