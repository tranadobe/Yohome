<?php $page = 'dang-tin-bds'; include "./config/include.php"; ?>

<!-- *** stylesheet *** -->
<?php include "./templates/common_css.php"; ?>

<!-- *** javascript *** -->
<?php include "./templates/common_js.php"; ?>
</head>

<body id="<?php echo $page; ?>">
    <?php include "./templates/header_login.php"; ?>
    <div id="contents">
		<div class="topicpath view_pc-tab">
			<ul class="container">
				<li><a href="#">Trang chủ</a></li>
				<li>Dự án</li>
			</ul>
		</div><!--/.topicpath-->    	
		<div class="container project-page">
			<div class="box-page-content">
				<div class="box-main-content">
					<div class="box-step-register">
						<ul>
							<li class="active">
								<span class="number"><em>1</em><i class="fa fa-check-circle"></i></span>
								<span class="txt-step">Dự án</span>
							</li>
							<li class="">
								<span class="number"><em>2</em><i class="fa fa-check-circle"></i></span>
								<span class="txt-step">THÔNG TIN CƠ BẢN</span>
							</li>
							<li>
								<span class="number"><em>3</em><i class="fa fa-check-circle"></i></span>
								<span class="txt-step">CHỌN GÓI TIN</span>
							</li>
						</ul>
					</div>
					<div class="register-form-content">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="form-group">
									<span class="help text-danger view_pc-tab">Quy định đăng tin trên YouHomes</span>
								    <label for="tenduan">Nhập tên dự án  <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="tenduan">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
								<div class="form-group">
								    <label for="toa">Tòa <span class="text-danger">*</span></label>
									<select id="toa" class="form-control">
										<option value="1">Vui lòng chọn</option>
										<option value="2">1</option>
										<option value="3">2</option>
										<option value="">3</option>
									</select>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
								<div class="form-group">
								    <label for="tang">Tầng <span class="text-danger">*</span></label>
									<select id="tang" class="form-control">
										<option value="1">Vui lòng chọn</option>
										<option value="2">1</option>
										<option value="3">2</option>
										<option value="">3</option>
									</select>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
								<div class="form-group">
								    <label for="socanho">Số căn hộ</label>
									<select id="socanho" class="form-control">
										<option value="1">Vui lòng chọn</option>
										<option value="2">1</option>
										<option value="3">2</option>
										<option value="">3</option>
									</select>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
								<div class="form-group">
								    <label for="giaytophaply">Giấy tờ pháp lý</label>
									<select id="giaytophaply" class="form-control">
										<option value="1">Vui lòng chọn</option>
										<option value="2">1</option>
										<option value="3">2</option>
										<option value="">3</option>
									</select>
								</div>
							</div>							
						</div>	
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="form-group">
								    <label for="tenduan">Địa chỉ</label>
									<input type="text" class="form-control" id="tenduan" placeholder="Hiển thị thông tin chi tiết căn hộ ">
								</div>
							</div>
						</div>						
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center box-text-neo">
								<img src="images/ic_place.png" alt="Sửa vị trí/ chọn vị trí bằng cách thả/kéo icon"> Sửa vị trí/ chọn vị trí bằng cách thả/kéo icon
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<img src="images/map_dangtin.png" alt="Sửa vị trí/ chọn vị trí bằng cách thả/kéo icon" style="width: 100%">
							</div>
						</div>	
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
								<button type="button" class="btn btn-primary">Lưu & Tiếp tục</button>
							</div>
						</div>			
					</div>

					<div class="box-banner"><a href="#"><img src="images/banner06.png" alt=""></a></div>
				</div>
				<div class="box-sidebar-content view_pc">
					<div class="box-bds-item">
						<h3>Tìm bất động sản mẫu</h3>
							<div class="product-item">
			        			<div class="product-images">
			        				<div class="img-inner"><a class="over" href="#"><img src="images/pd.png" alt="Vinhomes Graden Mỹ Đình"></a></div>
			        				<div class="box-view-control">
			        					<div class="row">
			        						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-left">
			        							<img src="images/ic-view.png" alt="45 Đang xem"> 45 Đang xem
			        						</div>
			        						<div class="col-xs-6 col-sm-7 col-md-6 col-lg-6 text-right">
			        							<a class="over" href="#"><img src="images/ic-360.png" alt="45 Đang xem"></a>
			        							<a class="over" href="#"><img src="images/ic-gallery.png" alt="Album ảnh"></a>
			        							<a class="over" href="#"><img src="images/ic-favior.png" alt="Yêu thích"></a>
			        						</div>
			        					</div>
			        				</div>
			        			</div>
			        			<div class="product-caption">
			        				<h4><a class="over" href="#">Vinhomes Graden Mỹ..</a></h4>
			        				<div class="pr-add">Mỹ Đình, Hà Nội</div>
			        				<div class="box-price">
			        					<div class="row">
			        						<div class="col-xs-6 col-sm-5 col-md-6 col-lg-6 txt-comment">
			        							<i class="fa fa-calendar"></i>
			        							<i class="fa fa-comments"></i>
			        						</div>
			        						<div class="col-xs-6 col-sm-7 col-md-6 col-lg-6 text-right">
			        							Giá: <span>8.4 tỷ</span>
			        						</div>
			        					</div>
			        				</div>
		        					<div class="row">
		        						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		        							<div class="box-item">
			        							<h4>Thông tin cơ bản</h4>
												<ul class="list-basic">
			        								<li><img src="images/ic_basic01.png" alt=""> 45m2</li>
			        								<li><img src="images/ic_basic02.png" alt=""> 2 PN</li>
			        								<li><img src="images/ic_basic03.png" alt=""> 2 PT</li>
			        								<li><img src="images/ic_basic04.png" alt=""> ĐN</li>
			        							</ul>
		        							</div>
		        							<div class="box-item">
			        							<h4>Nội thất</h4>
												<ul class="list-basic">
			        								<li><img src="images/ic_basic05.png" alt=""> Sofa</li>
			        								<li><img src="images/ic_basic06.png" alt=""> Tủ lạnh</li>
			        							</ul>
			        						</div>
		        							<div class="box-item">
			        							<h4>Tiện nghi</h4>
												<ul class="list-basic">
			        								<li><img src="images/ic_basic05.png" alt=""> Wifi</li>
			        								<li><img src="images/ic_basic06.png" alt=""> Điều hòa</li>
			        							</ul>	
			        						</div>
			        						<div class="box-item">
			        							<h4>Tiện ích nội khu</h4>
												<ul class="list-basic">
			        								<li><img src="images/ic_basic07.png" alt=""> Bãi độ xe</li>
			        								<li><img src="images/ic_basic08.png" alt=""> Thang máy</li>
			        							</ul>	
			        						</div>
			        						<div class="box-item">
			        							<h4>Vị trí - Tiện ích xung quanh</h4>
												<p><img src="images/img_map.png" alt=""></p>	
			        						</div>	        							
		        						</div>
		        					</div>
			        				
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