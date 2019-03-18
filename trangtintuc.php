<?php $page = 'project-page'; include "./config/include.php"; ?>

<!-- *** stylesheet *** -->
<?php include "./templates/common_css.php"; ?>

<!-- *** javascript *** -->
<?php include "./templates/common_js.php"; ?>
</head>

<body id="<?php echo $page; ?>">
    <?php include "./templates/header_has_title.php"; ?>
    <div id="contents">
		<div class="container">
			<div class="topicpath topicpath-border">
				<ul>
					<li><a href="#">Trang chủ</a></li>
					<li>Tin tức</li>
				</ul>
			</div><!--/.topicpath-->
			
			<div class="box-main-archive">
				<div class="box-list-archive">
					<ul class="list-blogs">
						<?php for ($i=1; $i <10 ; $i++) { ?>
							<li>
								<div class="img"><a href="#"><img src="images/news/img_news01.png" alt=""></a></div>
								<div class="box-caption">
									<h4><a href="#">5 xu hướng định hình bất động sản Việt Nam 2019</a></h4>
									<div class="box-meta">
										<a href="#">Thị trường</a>
										<span>18/2/2019</span>
										<span>Hoài Thương</span>
									</div>
									<div class="text-desc">Đây là những dự án căn hộ chung cư có chất lượng sống cao, không gian xanh mát, tiện ích phong phú, vị trí thuận lợi... của CapitalLand tại Việt Nam.</div>
								</div>
							</li>
						<?php
						if ($i == 5) {
							echo "<div class='box-banner'><a href='#'><img src='images/banner_5.png'></a></div>";
						}
						}?>
					</ul>
					<div class="clearfix">
						<ul class="pagination pull-left">
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><span>..</span></li>
							<li><a href="#">Cuối</a></li>
						</ul>
					</div>					
				</div>
				<div class="box-sidebar-archive">
					<div class="box-menu-cate">
						<h3>Danh mục</h3>
						<ul>
							<li class="active"><a href="#">Thị trường</a></li>
							<li><a href="#">Dự án</a></li>
							<li><a href="#">Xu hướng</a></li>
							<li><a href="#">Mua bán</a></li>
							<li><a href="#">Bán nhà</a></li>
							<li><a href="#">Đầu tư</a></li>
						</ul>
					</div>
					<div class="box-mailbox">
						<div class="img"><img src="images/news/ic_mail.png" alt=""></div>
						<h4>Đừng bỏ lỡ thông tin!</h4>
						<div class="text">Cùng 50,000 nhà đầu tư bất động sản, nhận những thông tin mới nhất của thị trường được gửi qua email hàng tuần.</div>
						<div class="box-input">
							<input type="email" class="form-control" placeholder="Email">
							<i class="fa fa-envelope-o"></i>
						</div>
						<button type="button" class="btn btn-primary btn-block">Đăng ký</button>
					</div>
					<div class="box-banner"><a href="#"><img src="images/news/banner.png" alt=""></a></div>
					<div class="box-baivietnoibat">
						<h3>Bài viết nổi bật</h3>
						<ul class="list-baivietnoibat">
							<?php for ($i=1; $i <6 ; $i++) { ?>
							<li>
								<div class="box-img"><a href="#"><img src="images/news/img_small.png" alt=""></a></div>
								<div class="box-caption">
									<h4><a href="#">Thị trường BĐS Phú Quốc: Bãi Kem hút vốn đầu tư</a></h4>
									<div class="date">18/2/2019</div>
								</div>
							</li>
							<?php
							}?>
						</ul>
					</div>
				</div> 
			</div>


			<div class="bn-fixed box-banner-left"><a href="#"><img src="images/banner_1.png" alt=""></a></div>
			<div class="bn-fixed  box-banner-right"><a href="#"><img src="images/banner_1.png" alt=""></a></div>
		</div>

    </div><!-- /#contents -->
    <?php include "./templates/nhanmail.php"; ?>
    <?php include "./templates/footer.php"; ?>
</body>
</html>