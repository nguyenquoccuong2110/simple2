@extends('master')
@section('content')
    	<div class="bannermain">
			<a href="#" title="#" class="boxlazy">
				<img data-src="source/img/banner-lovisong.jpg" src="source/img/loader.gif" class="lazyload" alt="banner lò vi sóng">
			</a>
		</div>
		<ul class="list_product">
			<li>
				<div class="itemproduct">
					<div class="proimg">
						<a href="#" title="#" class="boxlazy">
							<img data-src="source/img/lovisong-1.jpg" src="source/img/loader.gif" alt="#" class="lazyload">
						</a>
					</div>
					<a href="{{route('chitietlovisong')}}" title="#" class="boxname">
						<h3 class="nameproduct"> Lò vi sóng Kitchenlux 20MG65-L/800W </h3>
						<span>Size: 277*107-96*74cm</span><b>/</b><span>Color: nâu</span>
					</a>
					<div class="boxprice">
						<p class="priceline">
							2.190.000 Đ
						</p>
						<p class="pricesale">
							1.590.000 Đ
						</p>
					</div>
					<div class="box_compare">
						 <label>So sánh
					    	<input type="checkbox" id="compare" name="compare">
					    	<span class="check"></span>
					    </label>
					</div>
				</div>
			</li>
			<li>
				<div class="itemproduct">
					<div class="proimg">
						<a href="#" title="#" class="boxlazy">
							<img data-src="source/img/lo-vi-song-2.jpg" src="source/img/loader.gif" alt="#" class="lazyload">
						</a>
					</div>
					<a href="{{route('chitietlovisong1')}}" title="#" class="boxname">
						<h3 class="nameproduct">Lò vi sóng Simplehome20MX63-L/700W</h3>
					</a>
					<div class="boxprice">
						<p class="priceline">
							1.690.000 Đ
						</p>
						<p class="pricesale">
							1.290.000 Đ
						</p>
						<i class="iconsprites_outstock"></i>
					</div>
					<div class="box_compare"> 
						 <label>So sánh
					    	<input type="checkbox" id="compare" name="compare">
					    	<span class="check"></span>
					    </label>
					</div>
				</div>
			</li>
			<li>
				<div class="itemproduct">
					<div class="proimg">
						<a href="#" title="#" class="boxlazy">
							<img data-src="source/img/lo-vi-song-2.jpg" src="source/img/loader.gif" alt="#" class="lazyload">
						</a>
					</div>
					<a href="{{route('chitietlovisong2')}}" title="#" class="boxname">
						<h3 class="nameproduct"> Lò vi sóng Simplehome 20MG63-L/800W </h3>
					</a>
					<div class="boxprice">
						<p class="priceline">
							1.890.000 Đ
						</p>
						<p class="pricesale">
							1.490.000 Đ
						</p>
					</div>
					<div class="box_compare"> 
						 <label>So sánh
					    	<input type="checkbox" id="compare" name="compare">
					    	<span class="check"></span>
					    </label>
					</div>
				</div>
			</li>
			<li>
				<div class="itemproduct">
					<div class="proimg">
						<a href="#" title="#" class="boxlazy">
							<img data-src="source/img/lo-vi-song-3.jpg" src="source/img/loader.gif" alt="#" class="lazyload">
						</a>
					</div>
					<a href="{{route('chitietlovisong3')}}" title="#" class="boxname">
						<h3 class="nameproduct"> Lò vi sóng Kitchenlux 23UG94/1000W </h3>
					</a>
					<div class="boxprice">
						<p class="priceline">
							2.290.000 Đ
						</p>
						<p class="pricesale">
							1.790.000 Đ
						</p>
					</div>
					<div class="box_compare"> 
						 <label>So sánh
					    	<input type="checkbox" id="compare" name="compare">
					    	<span class="check"></span>
					    </label>
					</div>
				</div>
			</li>
			<li>
				<div class="itemproduct">
					<div class="proimg">
						<a href="#" title="#" class="boxlazy">
							<img data-src="source/img/lo-vi-song-4.jpg" src="source/img/loader.gif" alt="#" class="lazyload">
						</a>
					</div>
					<a href="{{route('chitietlovisong4')}}" title="#" class="boxname">
						<h3 class="nameproduct"> Lò Nướng Kitchenlux KWS1538Q-H7/1500W </h3>
						<span>Size: 277*107-96*74cm</span><b>/</b><span>Color: nâu</span>
					</a>
					<div class="boxprice">
						<p class="priceline">
							1.890.000 Đ
						</p>
						<p class="pricesale">
							1.490.000 Đ
						</p>
					</div>
					<div class="box_compare"> 
						 <label>So sánh
					    	<input type="checkbox" id="compare" name="compare">
					    	<span class="check"></span>
					    </label>
					</div>
				</div>
			</li>
			<li>
				<div class="itemproduct">
					<div class="proimg">
						<a href="#" title="#" class="boxlazy">
							<img data-src="source/img/vi-nuong.jpg" src="source/img/loader.gif" alt="#" class="lazyload">
						</a>
					</div>
					<a href="{{route('chitietlovisong5')}}" title="#" class="boxname">
						<h3 class="nameproduct"> Vỉ nướng điện Simplehome DF-608A/1600W </h3>
					</a>
					<div class="boxprice">
						<p class="priceline">
							990.000 Đ
						</p>
						<p class="pricesale">
							799.000 Đ
						</p>
					</div>
					<div class="box_compare"> 
						 <label>So sánh
					    	<input type="checkbox" id="compare" name="compare">
					    	<span class="check"></span>
					    </label>
					</div>
				</div>
			</li>
		</ul>
@endsection