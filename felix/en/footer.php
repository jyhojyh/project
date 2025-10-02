<?php if($cate_name == "product") { ?>
<section class="prd-footer bg-common pt160 pb160">
	<div class="container" data-aos="fade">
		<img src="../images/product/logo.png" alt="" class="img-responsive" />
		<div class="mt20 f0">
			<h3 class="inline-block f54 fw7 white line0 mr20 xs-mr10 xs-f20">Excel Heating System</h3>			
		</div>
		<ul class="btn-box mt40 f0">
			<li class="inline-block mr60 f0 pointer xs-col-1 xs-mr0">
				<span class="inline-block mr20 f20 white line2 align-middle">SHOP</span>
				<svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
					<g data-name="그룹 11987" transform="translate(-711 -1882)">
							<circle data-name="타원 55" cx="18" cy="18" r="18" transform="translate(711 1882)" style="fill:#aa2d29"/>
							<g data-name="그룹 1963">
									<path data-name="패스 7751" d="m693.471-3090.41 5.96 5.96-5.96 5.959" transform="translate(36.773 4984.451)" style="fill:none;stroke:#fff"/>
									<path data-name="패스 7752" d="M699.431-3084.451h-14.407" transform="translate(36.773 4984.451)" style="fill:none;stroke:#fff"/>
							</g>
					</g>
				</svg>
			</li>
			<li class="inline-block f0 pointer xs-col-1 xs-mt10" onclick="location.href='contact.php'">
				<span class="inline-block mr20 f20 white line2 align-middle">Inquiry</span>
				<svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
					<g data-name="그룹 11987" transform="translate(-711 -1882)">
							<circle data-name="타원 55" cx="18" cy="18" r="18" transform="translate(711 1882)" style="fill:#aa2d29"/>
							<g data-name="그룹 1963">
									<path data-name="패스 7751" d="m693.471-3090.41 5.96 5.96-5.96 5.959" transform="translate(36.773 4984.451)" style="fill:none;stroke:#fff"/>
									<path data-name="패스 7752" d="M699.431-3084.451h-14.407" transform="translate(36.773 4984.451)" style="fill:none;stroke:#fff"/>
							</g>
					</g>
				</svg>
			</li>
		</ul>
	</div>	
</section>
<?php } ?>

<div class="footer pt40 pb60 sm-pt40 sm-pb60 xs-pt40 xs-pb60">
	<div class="container">
		<div class="flex flex-wrap items-end justify-between">
			<div class="left">
				<img src="../images/footer/logo.png" alt="" class="img-responsive" />
			</div>
			<div class="right">
				<ul class="flex">
					<li class="mr50 xs-mr20"><a class="fw5 white" href="company01.php">Felix Heating System</a></li>
					<li class="mr50 xs-mr0"><a class="fw5 white" href="product01.php">Products</a></li>
					<li class="mr50 xs-mr20 xs-mt15"><a class="fw5 white" href="system01.php">System</a></li>
					<li class="mr50 xs-mr0 xs-mt15"><a class="fw5 white" href="certi01.php">Certificate</a></li>
					<li class="mr50 xs-mr20 xs-mt15"><a class="fw5 white" href="customer01.php">Customer</a></li>
					<li class="xs-mt15"><a class="fw5 white" href="gallery01.php">Project References</a></li>
				</ul>
			</div>
		</div>
		<address class="mt20 xs-f14">
			경기도 양주시 남면 삼일로 861-4<br />
			회사명 : 펠릭스코리아  |  통신판매 신고번호 : 2007-04937  |  사업자등록번호 : 217-03-44908<br />
			TEL : 031.866.5688  |  FAX : 02.6008.8790  |  E-mail : felixkorea@nate.com
		</address>
		<p class="mt30 xs-f14">COPYRIGHT © 펠릭스코리아. ALL RIGHTS RESERVED.</p>
	</div>
</div>
<script type="text/javascript" src="https://cdn.indeep.co.kr/js/jquery-3.4.1.min.js"></script>           
<script type="text/javascript" src="https://cdn.indeep.co.kr/js/swiper-bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.indeep.co.kr/js/aos.js"></script>
<script type="text/javascript" src="https://cdn.indeep.co.kr/js/gsap.min.js"></script> 
<script type="text/javascript" src="https://cdn.indeep.co.kr/js/gsap_ScrollTrigger.min.js"></script>
<script type="text/javascript" src="../js/script.js?ver=<?php echo time(); ?>"></script> 

<script type="text/javascript">
$(document).ready(function() {
	// 프론트 로드 지연 방지
	$(window).on("load", function () {
		setTimeout(function(){
			$(".landing").addClass("landing-on");
		}, 100);
	});
	AOS.init({
		once:true,
		duration: 1000
	});
});
</script>