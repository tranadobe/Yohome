<?php $page = 'chitiet-duan'; include "./config/include.php"; ?>

<!-- *** stylesheet *** -->
<?php include "./templates/common_css.php"; ?>

<!-- *** javascript *** -->
<?php include "./templates/common_js.php"; ?>
<script>
  $( function() {
    $( "#houseValue-slider" ).slider({
        range: "min",
        value: 150,
        min: 1,
        max: 700,
        slide: function( event, ui ) {
            $( "#houseValue" ).val(ui.value );
        }
    });
    $( "#loanValue-slider" ).slider({
        range: "min",
        value: 200,
        min: 1,
        max: 700,
        slide: function( event, ui ) {
            $( "#loanValue" ).val(ui.value );
        }
    });
    $( "#timeBorrowed-slider" ).slider({
        range: "min",
        value: 3,
        min: 1,
        max: 20,
        slide: function( event, ui ) {
            $( "#timeBorrowed" ).val(ui.value );
        }
    });
    $( "#interestRate-slider" ).slider({
        range: "min",
        value: 3,
        min: 1,
        max: 20,
        slide: function( event, ui ) {
            $( "#interestRate" ).val(ui.value );
        }
    });            
    $( "#houseValue" ).val( $("#houseValue-slider" ).slider( "value" ) );
    $( "#loanValue" ).val( $("#loanValue-slider" ).slider( "value" ) );
    $( "#timeBorrowed" ).val( $("#timeBorrowed-slider" ).slider( "value" ) );
    $( "#interestRate" ).val( $("#interestRate-slider" ).slider( "value" ) );

  });
</script>  
</head>

<body id="<?php echo $page; ?>">
    <?php include "./templates/header_no_search.php"; ?>
    <div id="contents">
    	<div class="page-detail">
    		<div class="box-images-detail">
    			<ul class="box-lineHeight list-images-detail-bds" id="mainslider">
    				<li class="img-detail-lg">
    					<div class="box-img-iner">
                            <div class="box-icon">
                                <a href="#"><span class="bg-icon"><img src="images/ic-360.png" alt="Hình ảnh 360"></span></a>
                                <a href="#"><span class="bg-icon"><img src="images/ic_video.png" alt="Video"></span></a>
                            </div> 
    						<a href="#"><img src="images/img_bds01.png" alt=""></a>
    					</div>
    				</li>
    				<li>
    					<div class="box-img-iner">                           
    						<a href="#"><img src="images/img_bds02.png" alt=""></a>
    					</div>
    				</li>
    				<li>
    					<div class="box-img-iner">
                            <div class="box-img-more"><a href="#"><span>+5</span></a></div>
    						<a href="#"><img src="images/img_bds03.png" alt=""></a>
    					</div>
    				</li>    				    				    				    				
    			</ul>
                <div class="box-lineHeight box-infomation-bds view_pc">
                    <table class="tbl-info">
                        <tr>
                            <td><img src="images/ic_noithat03.png" alt=""> Phòng ngủ:</td>
                            <td><strong>2</strong></td>
                            <td><img src="images/ic_information06.svg" alt=""> Pháp lý:</td>
                            <td><strong>2</strong></td>
                        </tr>
                        <tr>
                            <td><img src="images/ic_information07.png" alt=""> Phòng tắm:</td>
                            <td><strong>2</strong></td>
                            <td><img src="images/ic_information01.png" alt=""> Tòa:</td>
                            <td><strong>2</strong></td>
                        </tr>  
                        <tr>
                            <td><img src="images/ic_information05.svg" alt=""> Loại căn hộ:</td>
                            <td><strong>Duplex</strong></td>
                            <td><img src="images/ic_information02.png" alt=""> Tầng:</td>
                            <td><strong>T2</strong></td>
                        </tr>    
                        <tr>
                            <td><img src="images/ic_information04.png" alt=""> Hướng ban công:</td>
                            <td><strong>Đông</strong></td>
                            <td><img src="images/ic_information03.png" alt=""> Số căn hộ::</td>
                            <td><strong>12A</strong></td>
                        </tr>       
                    </table>  
                    <div class="btn-group-info">
                        <button type="button" class="btn btn-primary"><i class="fa fa-calendar"></i> <span class="view_pc">Đặt lịch hẹn</span></button>
                        <button type="button" class="btn btn-success"><i class="fa fa-comments"></i> <span class="view_pc">Liên lạc</span></button>
                        <button type="button" class="btn btn-info"><i class="fa fa-envelope-open"></i> <span class="view_pc">Nhận thông tin</span></button>
                    </div>
                                      
                </div>
    		</div><!-- /box-images-detail -->
            <div class="box-tabs-page-detail">
                <div class="box-content-page-detail">
                    <div class="container">
                        <div class="topicpath view_pc-tab">
                            <ul>
                                <li><a href="#">Trang chủ</a></li>
                                <li><a href="#">Bất động sản</a></li>
                                <li>Căn hộ Diamond Island </li>
                            </ul>
                        </div><!--/.topicpath-->    
                        <div class="box-detail-project">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                                    <div class="box-img"><img src="images/logo-duan.png" alt="Khu đô thị Vista Land"></div>
                                    <div class="box-name-project">
                                        <h2>Khu đô thị Vista Land</h2>
                                        <div class="txt-address">Đường Tỉnh lộ 823, Xã Đức Lập Thượng, Huyện Đức Hòa, Long An</div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 box-price-favorite">
                                    <div class="box-price-project text-center">
                                        <p>Giá <strong>3.1 tỷ</strong></p>
                                        <p>Giá/m2: <strong>15.5 - 20 triệu/m2</strong></p>
                                    </div>
                                    <div class="box-favorite">
                                        <p>Yêu thích:</p>
                                        <button type="button" class="btn btn-default like"><i class="fa fa-heart-o"></i> 7</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /box-detail-project --> 
                        <div class="box-lineHeight box-infomation-bds view_sp">
                            <table class="tbl-info">
                                <tr>
                                    <td><img src="images/ic_noithat03.png" alt=""> Phòng ngủ:</td>
                                    <td><strong>2</strong></td>
                                    <td><img src="images/ic_information06.svg" alt=""> Pháp lý:</td>
                                    <td><strong>2</strong></td>
                                </tr>
                                <tr>
                                    <td><img src="images/ic_information07.png" alt=""> Phòng tắm:</td>
                                    <td><strong>2</strong></td>
                                    <td><img src="images/ic_information01.png" alt=""> Tòa:</td>
                                    <td><strong>2</strong></td>
                                </tr>  
                                <tr>
                                    <td><img src="images/ic_information05.svg" alt=""> Loại căn hộ:</td>
                                    <td><strong>Duplex</strong></td>
                                    <td><img src="images/ic_information02.png" alt=""> Tầng:</td>
                                    <td><strong>T2</strong></td>
                                </tr>    
                                <tr>
                                    <td><img src="images/ic_information04.png" alt=""> Hướng ban công:</td>
                                    <td><strong>Đông</strong></td>
                                    <td><img src="images/ic_information03.png" alt=""> Số căn hộ::</td>
                                    <td><strong>12A</strong></td>
                                </tr>       
                            </table>  
                            <div class="btn-group-info">
                                <button type="button" class="btn btn-primary"><i class="fa fa-calendar"></i> <span class="view_pc">Đặt lịch hẹn</span></button>
                                <button type="button" class="btn btn-success"><i class="fa fa-comments"></i> <span class="view_pc">Liên lạc</span></button>
                                <button type="button" class="btn btn-info"><i class="fa fa-envelope-open"></i> <span class="view_pc">Nhận thông tin</span></button>
                            </div>
                                              
                        </div>                                
                    </div>
                    <div class="box-tab-inner-link-detail view_pc-tab">
                        <div class="container">
                            <ul class="list-link">
                                <li class="active"><a href="#">GIỚI THIỆU</a></li>
                                <li><a href="#">SO SÁNH GIÁ</a></li>
                                <li><a href="#">NỘI THẤT</a></li>
                                <li><a href="#">TIỆN NGHI</a></li>
                                <li><a href="#">CHỦ ĐẦU TƯ</a></li>
                                <li><a href="#">DỰ ÁN</a></li>
                                <li><a href="#">DỰ TOÁN KHOẢN VAY</a></li>
                                <li><a href="#">VỊ TRÍ</a></li>
                            </ul>
                        </div>
                    </div><!-- /box-tab-inner-link-detail --> 
                    <div class="box-main-content-page-detail container">
                        <div class="box-content">
                            <div class="box-collapse-warrper">
                                <h3 class="widget-title">GIỚI THIỆU</h3>
                                <div class="box-collapse-inner">
                                    <div class="txt-overview">
                                        <p>Nhắc đến thương hiệu Vingroup, nhiều người sẽ nghĩ ngay đến những sản phẩm, dịch vụ cao cấp, hạng sang như các khu vui chơi Vinpearl, TTTM Vincom, hệ thống giáo dục Vinschool, bệnh viện tiêu chuẩn quốc tế Vinmec,... Tuy nhiên, năm 2017, Vingroup gây sốt thị trường bất động sản khi tham gia phân khúc nhà ở bình dân, kế hoạch xây dựng từ 200.000 – 300.000 căn hộ VinCity trong vòng 5 năm tới, hướng tới những người có thu nhập trung bình.</p>
                                    </div><!--/.txt-overview-->
                                </div>
                            </div><!--/.box-collapse-warrper-->
                            <div class="box-collapse-warrper">
                                <h3 class="widget-title">BẢNG GIÁ SO SÁNH</h3>
                                <div class="box-collapse-inner">
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
                            </div><!--/.box-collapse-warrper-->                            
                            <div class="box-collapse-warrper">
                                <h3 class="widget-title">NỘI THẤT</h3>
                                <div class="box-collapse-inner border-inner">
                                    <h5 class="title-utilities">Nội thất cơ bản </h5>
                                    <ul class="list-utilities">
                                        <li>
                                            <div class="img"><img src="images/ic_noithat01.png" alt=""></div>
                                            <span>Vòi hoa sen</span>
                                        </li>
                                        <li>
                                            <div class="img"><img src="images/ic_noithat02.png" alt=""></div>
                                            <span>Bồn rửa mặt</span>
                                        </li>
                                        <li>
                                            <div class="img"><img src="images/ic_noithat03.png" alt=""></div>
                                            <span>Giường ngủ</span>
                                        </li>
                                        <li>
                                            <div class="img"><img src="images/ic_noithat04.png" alt=""></div>
                                            <span>Tủ bếp</span>
                                        </li>
                                        <li>
                                            <div class="img"><img src="images/ic_noithat05.png" alt=""></div>
                                            <span>Sàn gỗ/đá</span>
                                        </li>
                                        <li>
                                            <div class="img"><img src="images/ic_noithat06.png" alt=""></div>
                                            <span>Bàn trà</span>
                                        </li>
                                        <li>
                                            <div class="img"><img src="images/ic_noithat07.png" alt=""></div>
                                            <span>Bàn làm việc</span>
                                        </li>
                                        <li>
                                            <div class="img"><img src="images/ic_noithat08.png" alt=""></div>
                                            <span>Sofa</span>
                                        </li>                                        
                                    </ul>
                                </div>
                            </div><!--/.box-collapse-warrper-->
                            <div class="box-collapse-warrper">
                                <h3 class="widget-title">TIỆN NGHI</h3>
                                <div class="box-collapse-inner border-inner">
                                    <ul class="list-utilities">
                                        <li>
                                            <div class="img"><img src="images/ic_noithat09.png" alt=""></div>
                                            <span>wifi</span>
                                        </li>
                                        <li>
                                            <div class="img"><img src="images/ic_noithat01.png" alt=""></div>
                                            <span>Nước nóng</span>
                                        </li>
                                        <li>
                                            <div class="img"><img src="images/ic_noithat10.png" alt=""></div>
                                            <span>Điều hòa</span>
                                        </li>
                                        <li>
                                            <div class="img"><img src="images/ic_noithat11.png" alt=""></div>
                                            <span>Truyền hình cáp</span>
                                        </li>
                                        <li>
                                            <div class="img"><img src="images/ic_noithat12.png" alt=""></div>
                                            <span>Thiết bị báo cháy</span>
                                        </li>
                                        <li>
                                            <div class="img"><img src="images/ic_noithat13.png" alt=""></div>
                                            <span>Nhà thông minh</span>
                                        </li>
                                        <li>
                                            <div class="img"><img src="images/ic_noithat14.png" alt=""></div>
                                            <span>Lò sưởi</span>
                                        </li>
                                        <li>
                                            <div class="img"><img src="images/ic_noithat15.png" alt=""></div>
                                            <span>Camera an ninh</span>
                                        </li>                                        
                                    </ul>
                                </div>
                                <div class="box-link-tags mt20">
                                    <ul>
                                        <li><a href="#">#duanmoi </a></li>
                                        <li><a href="#">#hochiminh</a></li>
                                        <li><a href="#">#batdongsan </a></li>
                                        <li><a href="#">#vinhome</a></li>
                                        <li><a href="#">#duanmoi </a></li>
                                        <li><a href="#">#hochiminh</a></li>
                                        <li><a href="#">#batdongsan </a></li>
                                        <li><a href="#">#vinhome</a></li>
                                        <li><a href="#">#duanmoi </a></li>
                                        <li><a href="#">#hochiminh</a></li>
                                        <li><a href="#">#batdongsan </a></li>
                                        <li><a href="#">#vinhome</a></li>
                                    </ul>
                                </div>
                                <div class="box-banner mb0"><a href="#"><img src="images/banner_5.png" alt=""></a></div>
                            </div><!--/.box-collapse-warrper--> 
                            <div class="box-collapse-warrper">
                                <h4 class="widget-title-group">CHỦ ĐẦU TƯ</h4>
                                <div class="box-collapse-inner border-inner">
                                    <div class="box-investor">
                                        <div class="box-img pull-left"><img src="images/logo-duan.png" alt=""></div>
                                        <div class="text-investor">
                                            <h5>Vingroup</h5>
                                            <div class="txt-desc">Nhắc đến thương hiệu Vingroup, nhiều người sẽ nghĩ ngay đến những sản phẩm, dịch vụ cao cấp, hạng sang như các khu vui chơi Vinpearl, TTTM Vincom, hệ thống giáo dục Vinschool, bệnh viện tiêu chuẩn quốc tế Vinmec,... </div>
                                            <div class="txt-readmore text-right"><a href="#" class="text-primary"><strong>Chi tiết</strong></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.box-collapse-warrper--> 
                            <div class="box-collapse-warrper">
                                <h4 class="widget-title-group">THUỘC DỰ ÁN</h4>
                                <div class="box-collapse-inner border-inner">
                                    <div class="box-investor">
                                        <div class="box-img pull-left"><img src="images/logo_partner01.png" alt=""></div>
                                        <div class="text-investor">
                                            <h5>Khu đô thị Vista Land</h5>
                                            <div class="txt-desc">Nhắc đến thương hiệu Vingroup, nhiều người sẽ nghĩ ngay đến những sản phẩm, dịch vụ cao cấp, hạng sang như các khu vui chơi Vinpearl Khu đô thị Vista land mang lại nhiều giá trị hơn dành cho cuộc sống.........</div>
                                            <div class="txt-readmore text-right"><a href="#" class="text-primary"><strong>Chi tiết</strong></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.box-collapse-warrper-->                             

                            <div class="box-collapse-warrper">
                                <h3 class="widget-title">DỰ TOÁN KHOẢN VAY</h3>
                                <div class="box-collapse-inner box-dutoan-khoanvay">
                                    <div class="box-dutoan-inner">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">Giá trị nhà đất</div>
                                            <div class="col-xs-7 col-sm-7 col-md-6 col-lg-6">
                                                <div id="houseValue-slider"></div>
                                            </div>
                                            <div class="col-xs-5 col-sm-5 col-md-3 col-lg-3 form-inline">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="houseValue">
                                                </div>
                                                Triệu
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">Số tiền vay</div>
                                            <div class="col-xs-7 col-sm-7 col-md-6 col-lg-6">
                                                <div id="loanValue-slider"></div>
                                            </div>
                                            <div class="col-xs-5 col-sm-5 col-md-3 col-lg-3 form-inline">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="loanValue">
                                                </div>
                                                10%
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">Thời gian vay</div>
                                            <div class="col-xs-7 col-sm-7 col-md-6 col-lg-6">
                                                <div id="timeBorrowed-slider"></div>
                                            </div>
                                            <div class="col-xs-5 col-sm-5 col-md-3 col-lg-3 form-inline">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="timeBorrowed">
                                                </div>
                                                Năm
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">Lãi suất</div>
                                            <div class="col-xs-7 col-sm-7 col-md-6 col-lg-6">
                                                <div id="interestRate-slider"></div>
                                            </div>
                                            <div class="col-xs-5 col-sm-5 col-md-3 col-lg-3 form-inline">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="interestRate">
                                                </div>
                                                % năm
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="box-paymentform form-inline">
                                        <div class="radio">
                                          <label><input type="radio" name="payment" checked>Số tiền trả theo dư nợ giảm dần</label>
                                        </div>    
                                        <div class="radio">
                                          <label><input type="radio" name="payment">Số tiền trả đều hàng tháng</label>
                                        </div>                                    
                                    </div>
                                    <div class="box-result">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-8 col-lg-8">
                                                <ul class="list-money-number">
                                                    <li>
                                                        <p>Cần trả trước</p>
                                                        <p class="txt-number text-primary">4,000,000 VND</p>
                                                    </li>
                                                    <li>
                                                        <p>Gốc cần trả</p>
                                                        <p class="txt-number">3,000,000 VND</p>
                                                    </li>
                                                    <li>
                                                        <p>Lãi cần trả</p>
                                                        <p class="txt-number  text-danger">100,000 VND</p>
                                                    </li>
                                                </ul>
                                                <div class="title-mount">
                                                    <p class="text">Số tiền trả tháng đầu</p>
                                                    <p class="mount-number">4,00,000 VND</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 view-result">
                                                <div class="box-result-number"><span>1 tỷ</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                  
                                </div>
                            </div><!--/.box-collapse-warrper-->    
                        </div>
                        <div class="box-sidebar view_pc-tab">
                            <h3>Đăng ký nhận tư vấn</h3>
                            <div class="form-inner">
                                <div class="form-group">
                                    <label for="fullName">Họ và tên</label>
                                    <input type="text" class="form-control" id="fullName">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email">
                                </div>      
                                <div class="form-group">
                                    <label for="phoneNumber">Số điện thoại</label>
                                    <input type="text" class="form-control" id="phoneNumber">
                                </div>
                                <div class="form-group">
                                    <label for="dateView">Ngày</label>
                                    <input type="text" class="form-control" id="dateView">
                                </div>              
                                <div class="form-group text-center">            
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Đăng ký</button>
                                </div>
                                <div class="text-center hotline">Hotline: 0912 934949</div> 
                            </div>                           
                        </div>

                        <div class="bn-fixed box-banner-left"><a href="#"><img src="images/banner_1.png" alt=""></a></div>
                        <div class="bn-fixed  box-banner-right"><a href="#"><img src="images/banner_1.png" alt=""></a></div>
                        <div class="clearfix"></div>
                        <div class="box-collapse-warrper box-map">
                            <h3 class="widget-title">Vị trí - tiện ích<br class="view_sp"> xung quanh</h3>
                            <div class="box-collapse-inner">
                                <img src="images/vitri.png" alt="">
                            </div>
                        </div><!--/.box-collapse-warrper-->                       
                    </div>
                </div>
            </div>

    

            <div class="box-project-near">
                <div class="container">
            <div class="box-project-favorite">
                <h2 class="title-page">CĂN HỘ TƯƠNG TỰ</h2>
                <div class="list-bds">
                    <?php for ($i=0; $i <2 ; $i++) { ?>
                    <div class="row bds-item">
                        <?php for ($j=0; $j <3 ; $j++) { ?>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
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
                                    <h4><a class="over" href="#">Vinhomes Graden Mỹ Đình</a></h4>
                                    <div class="pr-add">Mỹ Đình, Hà Nội</div>
                                    <ul class="list-project list-pro">
                                        <li><img src="images/ic_dientich.png" alt="45 m2"> 45 m2</li>
                                        <li><img src="images/ic_bed.png" alt="2PN"> 2PN</li>
                                        <li><img src="images/ic_bath.png" alt="1PT"> 1PT</li>
                                    </ul>
                                    <div class="box-price">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-5 col-md-6 col-lg-6 txt-comment">
                                                <i class="fa fa-calendar"></i>
                                                <i class="fa fa-comments"></i>
                                            </div>
                                            <div class="col-xs-6 col-sm-7 col-md-6 col-lg-6 text-right">
                                                Giá từ: <span>8.4 tỷ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                          
                        </div>  
                        <?php }?>                                       
                    </div>
                    <?php }?>                   
                </div>
                <div class="btn-view-more text-right"><a href="#">Xem thêm</a></div>
            </div>                   
                </div>
            </div>
    	</div>
    </div><!-- /#contents -->
    <?php include "./templates/footer.php"; ?>

</body>
</html>