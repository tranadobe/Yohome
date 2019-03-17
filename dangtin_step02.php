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
					<div class="box-step-register">
						<ul>
							<li class="success">
								<span class="number"><em>1</em><i class="fa fa-check-circle"></i></span>
								<span class="txt-step">Dự án</span>
							</li>
							<li class="active">
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
								  <label class="col-md-2 control-label" for="radios">Loại đăng tin</label>
								  <div class="col-md-10"> 
								    <label class="radio-inline" for="radios-0">
								      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
								      Bán
								    </label> 
								    <label class="radio-inline" for="radios-1">
								      <input type="radio" name="radios" id="radios-1" value="2">
								      Cho Thuê
								    </label>
								  </div>
								</div>								
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
								<div class="form-group">
								    <label for="loaicanho">Loại căn hộ</label>
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
								    <label for="toa">Số phòng ngủ <span class="text-danger">*</span></label>
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
								    <label for="tang">Số phòng tắm <span class="text-danger">*</span></label>
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
								    <label for="socanho">Hướng ban công</label>
									<select id="socanho" class="form-control">
										<option value="1">Vui lòng chọn</option>
										<option value="2">1</option>
										<option value="3">2</option>
										<option value="">3</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="form-group">
								    <label for="tenduan">Diện tích <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="tenduan" placeholder="Nhập diện tích">
								</div>
							</div>
						</div>						
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h4>Bảng so sánh giá</h4>
								<div class="table-responsive">
                                    <table class="table tbl-compare table-bordered">
                                        <tr>
                                            <td>
                                                <p><img src="images/img_compare.png" alt=""></p>
                                                <p class="title-house">Căn hộ Diamond Island 3PN...</p>
                                            </td>
                                           <td>
                                                <p><img src="images/img_compare.png" alt=""></p>
                                                <p class="title-house">Căn hộ Diamond Island 3PN...</p>
                                            </td>
                                            <td>
                                                <p><img src="images/img_compare.png" alt=""></p>
                                                <p class="title-house">Căn hộ Diamond Island 3PN...</p>
                                            </td>
                                            <td>
                                                <p><img src="images/img_compare.png" alt=""></p>
                                                <p class="title-house">Căn hộ Diamond Island 3PN...</p>
                                            </td>
                                            <td>
                                                <p><img src="images/img_compare.png" alt=""></p>
                                                <p class="title-house">Căn hộ Diamond Island 3PN...</p>
                                            </td>
                                            <td>
                                                <p><img src="images/img_compare.png" alt=""></p>
                                                <p class="title-house">Căn hộ Diamond Island 3PN...</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Toà</strong></td>
                                            <td><span class="text-primary">Đã bán</span></td>
                                            <td><span class="text-primary">Đã bán</span></td>
                                            <td><span class="text-primary">Đã bán</span></td>
                                            <td><span class="text-primary">Đã bán</span></td>
                                            <td><span class="text-primary">Đã bán</span></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Mã căn</strong></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Tầng</strong></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Giá căn hộ</strong></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="block-readmore"><a href="#" class="text-primary">Xem đầy đủ <i class="fa fa-angle-down"></i></a></div>								
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
								    <label for="loaicanho">Loại căn hộ</label>
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
								    <label for="toa">Đơn vị tiền <span class="text-danger">*</span></label>
									<select id="toa" class="form-control">
										<option value="1">Select</option>
										<option value="2">VND</option>
										<option value="3">USD</option>
									</select>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
								<div class="form-group">
									<label class="help-block"><p>&nbsp;</p></label>
								    <label class="checkbox-inline" for="checkboxes-0">
      									<input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">Giá thỏa thuận
      								</label>
								</div>
							</div>
						</div>						
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="form-group">
									<label for="giaytophaply">Ghi chú thêm </label>
									<textarea class="form-control" id="textarea" name="textarea" rows="10"></textarea>
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="form-group">
									<label for="giaytophaply">Lên lịch xem nhà</label>
									<span class="date-picker"><input type="text" class="form-control col-lg-1" id="tenduan" placeholder="Chọn ngày/giờ"><i class="fa fa-calendar"></i></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="form-group">
									<label for="giaytophaply">Hình ảnh  <span class="text-danger">*</span>  <em>Hình ảnh đính kèm tăng hiệu quả bán hàng</em></label>
									<div class="box-file">
										<div class="box-title-click">
											<img src="images/ic_dangtin/photo.png" alt="">
											<p>Click chọn hoặc kéo thả ảnh<br>Kích thước ảnh không quá 4M</p>
										</div>
									</div>
									<p class="text-danger"><i>Vui lòng tải tối thiểu 5 ảnh, tối đa 12 ảnh </i></p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="box-banner"><a href="#"><img src="images/banner_4.png" alt=""></a></div>
							</div>
						</div>	
						<div class="row box-uliti-choose">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="form-group">
								  <label class="col-md-2 control-label" for="radios">Nội Thất</label>
								  <div class="col-md-10"> 
								    <label class="radio-inline" for="radios01">
								    	<input type="radio" name="radios" id="radios01" value="1" checked>Chưa có
								    </label> 
								    <label class="radio-inline" for="radios02">
								    	<input type="radio" name="radios" id="radios02" value="2">Cơ bản
								    </label>
								    <label class="radio-inline" for="radios03">
								      <input type="radio" name="radios" id="radios03" value="3">Đầy đủ
								    </label>
								  </div>
								</div>	
								<div class="box-ulti-inner">
									<ul>
										<?php for ($i=1; $i <21 ; $i++) { ?>
											<li>
												<label for="id_dangtin<?php echo $i; ?>">
													<input type="checkbox" id="id_dangtin<?php echo $i; ?>" value=""> 
													<img src="images/ic_dangtin/ic_dangtin<?php echo $i; ?>.png" alt="">
													Vòi hoa sen
												</label>
											</li>
										<?php }?>
									</ul>
								</div>							
							</div>
						</div>		
						<div class="row box-uliti-choose">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="form-group">
								  <label class="col-md-2 control-label" for="radios1">Tiện nghi</label>
								  <div class="col-md-10"> 
								    <label class="radio-inline" for="radios04">
								    	<input type="radio" name="radios1" id="radios04" value="1" checked>Chưa có
								    </label> 
								    <label class="radio-inline" for="radios05">
								    	<input type="radio" name="radios1" id="radios05" value="2">Cơ bản
								    </label>
								    <label class="radio-inline" for="radios06">
								      <input type="radio" name="radios1" id="radios06" value="3">Đầy đủ
								    </label>
								  </div>
								</div>	
								<div class="box-ulti-inner">
									<ul>
										<?php for ($i=1; $i <11 ; $i++) { ?>
											<li>
												<label for="id_dangtin0<?php echo $i; ?>">
													<input type="checkbox" id="id_dangtin0<?php echo $i; ?>" value=""> 
													<img src="images/ic_dangtin/ic_dangtin<?php echo $i; ?>.png" alt="">
													Vòi hoa sen
												</label>
											</li>
										<?php }?>
									</ul>
								</div>							
							</div>
						</div>																
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
								<button type="button" class="btn btn-default pull-left btn-lg">Quay lại</button>
								<button type="button" class="btn btn-primary pull-right btn-lg">Lưu & Tiếp tục</button>
							</div>
						</div>			
					</div>

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