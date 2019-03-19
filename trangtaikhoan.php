<?php $page = 'account-page'; include "./config/include.php"; ?>

<!-- *** stylesheet *** -->
<?php include "./templates/common_css.php"; ?>

<!-- *** javascript *** -->
<?php include "./templates/common_js.php"; ?>
</head>

<body id="<?php echo $page; ?>">
    <?php include "./templates/header_account.php"; ?>
    <div id="contents">
		<div class="container">
			<div class="topicpath topicpath-border">
				<ul>
					<li><a href="#">Trang chủ</a></li>
					<li>Trang quản lý tin đăng</li>
				</ul>
			</div><!--/.topicpath-->

			<div class="bn-fixed box-banner-left"><a href="#"><img src="images/banner_1.png" alt=""></a></div>
			<div class="bn-fixed  box-banner-right"><a href="#"><img src="images/banner_1.png" alt=""></a></div>
		</div>

    </div><!-- /#contents -->
    <?php include "./templates/footer.php"; ?>
</body>
</html>