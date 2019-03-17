<?php $page = 'dang-tin-bds'; include "./config/include.php"; ?>

<!-- *** stylesheet *** -->
<?php include "./templates/common_css.php"; ?>

<!-- *** javascript *** -->
<?php include "./templates/common_js.php"; ?>
</head>

<body id="<?php echo $page; ?>">
    <?php include "./templates/header_no_search.php"; ?>
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
					<div class="bg-white">
						<div class="box-step-register">
							<ul>
								<li class="success">
									<span class="number"><em>1</em><i class="fa fa-check-circle"></i></span>
									<span class="txt-step">Dự án</span>
								</li>
								<li class="success">
									<span class="number"><em>2</em><i class="fa fa-check-circle"></i></span>
									<span class="txt-step">THÔNG TIN CƠ BẢN</span>
								</li>
								<li class="active">
									<span class="number"><em>3</em><i class="fa fa-check-circle"></i></span>
									<span class="txt-step">CHỌN GÓI TIN</span>
								</li>
							</ul>
						</div>
						<div class="register-form-content">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
									<div class="form-group">
									    <label for="loaicanho">Gói đăng tin</label>
										<select id="loaicanho" class="form-control">
											<option value="1">Vui lòng chọn</option>
											<option value="2">1</option>
											<option value="3">2</option>
											<option value="">3</option>
										</select>
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
									<div class="form-group">
										<label for="giaytophaply">Ngày đăng tin</label>
										<span class="date-picker"><input type="text" class="form-control col-lg-1" id="tenduan" placeholder="Chọn ngày/giờ"><i class="fa fa-calendar"></i></span>
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 pull-right">
									<div class="form-group">
										<label for="giaytophaply">Ngày hết hạn</label>
										<span class="date-picker"><input type="text" class="form-control col-lg-1" id="tenduan" placeholder="Chọn ngày/giờ"><i class="fa fa-calendar"></i></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
									<table class="table table-bordered">
										<tr>
											<td>Nội dung</td>
											<td>Miễn phí</td>
											<td>Hạng vàng hoàn tiền</td>
										</tr>
										<tr>
											<td>Bảo mật thông tin khách hàng</td>
											<td></td>
											<td class="text-center"><img src="images/ic_dangtin/ic_check.png" alt=""></td>
										</tr>
										<tr>
											<td>Kết nối được người mua phù hợp</td>
											<td></td>
											<td class="text-center"><img src="images/ic_dangtin/ic_check.png" alt=""></td>
										</tr>
										<tr>
											<td>Tiếp cận khách hàng mua có nhu cầu</td>
											<td></td>
											<td class="text-center"><img src="images/ic_dangtin/ic_check.png" alt=""></td>
										</tr>
										<tr>
											<td>Thông báo về khách hàng đang <br>quan tâm ngay lập tức</td>
											<td></td>
											<td class="text-center"><img src="images/ic_dangtin/ic_check.png" alt=""></td>
										</tr>
										<tr>
											<td>Báo cáo hàng ngày về lượng khách hàng quan tâm</td>
											<td></td>
											<td class="text-center"><img src="images/ic_dangtin/ic_check.png" alt=""></td>
										</tr>
										<tr>
											<td>Cung cấp dữ liệu tham khảo để định giá bán hiệu quả </td>
											<td></td>
											<td class="text-center"><img src="images/ic_dangtin/ic_check.png" alt=""></td>
										</tr>
										<tr>
											<td>Chụp ảnh căn hộ bởi thợ ảnh chuyên nghiệp</td>
											<td></td>
											<td class="text-center"><img src="images/ic_dangtin/ic_check.png" alt=""></td>
										</tr>
										<tr>
											<td>Dựng hình ảnh nhà thực tế với thiết bị VR 360</td>
											<td></td>
											<td class="text-center"><img src="images/ic_dangtin/ic_check.png" alt=""></td>
										</tr>
										<tr>
											<td>Kết nối tư vấn pháp lý chuyên sâu</td>
											<td></td>
											<td class="text-center"><img src="images/ic_dangtin/ic_check.png" alt=""></td>
										</tr>
										<tr>
											<td>Hỗ trợ văn bản soạn thảo chuyển nhượng</td>
											<td></td>
											<td class="text-center"><img src="images/ic_dangtin/ic_check.png" alt=""></td>
										</tr>
										<tr>
											<td>Hỗ trợ văn bản soạn thảo chuyển nhượng</td>
											<td></td>
											<td class="text-center"><img src="images/ic_dangtin/ic_check.png" alt=""></td>
										</tr>
										<tr>
											<td>Bảo lãnh khoản tiền cọc của bên mua</td>
											<td></td>
											<td class="text-center"><img src="images/ic_dangtin/ic_check.png" alt=""></td>
										</tr>
										<tr>
											<td>Ưu đãi các dịch vụ gia tăng (chuyển nhà, trang trí nội thất,...</td>
											<td></td>
											<td class="text-center"><img src="images/ic_dangtin/ic_check.png" alt=""></td>
										</tr>
										<tr>
											<td>Quảng bá trên website của YouHomes</td>
											<td></td>
											<td class="text-center"><img src="images/ic_dangtin/ic_check.png" alt=""></td>
										</tr>
										<tr>
											<td>Quảng bá trên các trang mạng xã hội</td>
											<td></td>
											<td class="text-center"><img src="images/ic_dangtin/ic_check.png" alt=""></td>
										</tr>
										<tr>
											<td>Nhân viên thực địa đại diện khách hàng giao dịch, thủ tục</td>
											<td></td>
											<td class="text-center"><img src="images/ic_dangtin/ic_check.png" alt=""></td>
										</tr>
										<tr>
											<td>Nhân viên chăm sóc khách hàng riêng</td>
											<td></td>
											<td class="text-center"><img src="images/ic_dangtin/ic_check.png" alt=""></td>
										</tr>
									</table>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
									<div class="box-money-total">
										<h3>Giá trị gói tin</h3>
										<div class="txt-money">4,0000,000 VNĐ</div>
									</div>
									<div class="form-horizontal">
										<div class="form-group mb15">
											<label class="col-sm-12">Xin vui lòng cung cấp thông tin sau:</label>
										</div>
									  <div class="form-group">
									    <label for="sodienthoai" class="col-sm-5 control-label">Số điện thoại <span class="text-danger">*</span></label>
									    <div class="col-sm-7">
									    	<div class="input-group">
											  <input type="text" class="form-control sm" id="sodienthoai">
											  <span class="input-group-addon " id="basic-addon2">Nhập OTP</span>
											</div>

									      
									    </div>
									  </div>
									  <div class="form-group">
									    <label for="maotp" class="col-sm-5 control-label">Mã OTP <span class="text-danger">*</span></label>
									    <div class="col-sm-7">
									      <input type="password" class="form-control" id="maotp">
									    </div>
									  </div>
									  <div class="form-group">
									    <div class="col-md-12">
									      <div class="checkbox">
									        <label>
									          <input type="checkbox"> Tôi hoàn toàn tự nguyện đọc và đồng ý với các điều khoản của YouHomes
									        </label>
									      </div>
									    </div>
									  </div>
									  <div class="form-group">
									    <div class="col-md-12 text-center">
									      <button type="submit" class="btn btn-primary btn-lg">Đăng tin</button>
									    </div>
									  </div>
									  <div class="box-banner mt20"><a href="#"><img src="./images/ic_dangtin/img_advs.png" alt=""></a></div>
									</div>								
								</div>
							</div>																				
						</div>
					</div>
					<div class="row mb30">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
							<button type="button" class="btn btn-default pull-left">Quay lại</button>
							<button type="button" class="btn btn-default pull-right">Lưu bản nháp</button>
							<button type="button" class="btn btn-default pull-right">Xem trước tin đăng</button>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="box-banner mb0"><a href="#"><img src="images/banner06.png" alt=""></a></div>					
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