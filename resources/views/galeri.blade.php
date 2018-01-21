@extends('templates.master')
@section('konten')
<center> <font face="lucida calligraphy"><h2>Welcome To Pramuka Pictures</h2></center>
<div class="carousel slide" id="carousel-644516">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-644516">
					</li>
					<li data-slide-to="1" data-target="#carousel-644516">
					</li>
					<li data-slide-to="2" data-target="#carousel-644516">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="Carousel Bootstrap First" src="{{('img/pramuka1.png')}}" />
						<div class="carousel-caption">
							<h4>
								Tunas Kelapa
							</h4>
							<p>
								Lambang Gerakan Pramuka adalah tanda pengenal organisasi Gerakan Pramuka yang bersifat tetap. Lambang ini diciptakan oleh Soenardjo Atmodipurwo.Lambang ini dipergunakan pertama kali sejak tanggal 14 Agustus 1961. ketika Presiden Republik Indonesia.
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Second" src="{{('img/pramuka2.png')}}" />
						<div class="carousel-caption">
							<h4>
								Lambang Gerakan Pramuka
							</h4>
							<p>
								Soekarno menganugrahkan Panji Gerakan Pendidikan Kepanduan Nasional Indonesia kepada organisasi Gerakan Pramuka melalui Keputusan Presiden Republik Indonesia Nomor 448 tahun 1961.
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Third" src="{{('img/pramuka3.png')}}" />
						<div class="carousel-caption">
							<h4>
								World Organization Scout Movement
							</h4>
							<p>

								Sekarang kita mengarah pada Lambang Kepanduan sedunia, yaitu WOSM : World Organization Scout's Of Movement, WOSM adalah organisasi kepanduan dunia yang diluar pemerintahan yang menaungi Organisasi Kepramukaan di Seluruh Dunia, WOSM didirikan pada tahun 1920 yang berpusat di Genewa, Swiss. 
							</p>
						</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-644516" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-644516" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>

		<div>
			<img src="{{('img/pramuka4.gif')}}">
			<img src="{{('img/pramuka5.png')}}">
			<img src="{{('img/pramuka6.jpg')}}">
			<img src="{{('img/pramuka7.jpg')}}">
		</div>
	
@endsection