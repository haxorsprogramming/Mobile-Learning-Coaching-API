<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui">
	<title>Aplikasi Monitoring Ibadah</title>
	<link rel="stylesheet" href="{{ asset('ladun/mobiokit') }}/vendor/swiper/swiper.min.css">
	<link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/izitoast/css/iziToast.min.css">
	<link rel="stylesheet" href="{{ asset('ladun/mobiokit') }}/css/style.css">

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
</head>

<body>

	<div class="page">
		<div class="page--login" data-page="login" id="app">

			<!-- HEADER -->
			<div class="login">
				<div class="login__content" style="margin-top: -42px;">
					<div style="text-align: center;">
						<img src="{{ asset('ladun/base/logo.png') }}" style="width: 120px;">
					</div>
          			<h3 class="login__title">Aplikasi Mobile Learning Tahsin</h3>
					<h4 class="login__title" style="font-size: 21px;">Rumah Tahfidz Hidayatul Qur’an</h4>
					<p class="login__text">Silahkan login ke akun anda</p>
					<div class="login-form" style="margin-top: -32px;">
						<div id="divFormLogin">
							<div class="login-form__row">
								<label class="login-form__label">Username</label>
								<input type="text" id="txtUsername" maxlength="50" class="login-form__input required" />
							</div>
							<div class="login-form__row">
								<label class="login-form__label">Password</label>
								<input type="password" id="txtPassword" class="login-form__input required" />
							</div>
							<div style="text-align: center;display: none;" id="divStatusLogin"><label class="login-form__row" style="color: aliceblue;">Mengautentikasi ...</label></div>
							<div class="login-form__row">
								<a class="login-form__submit button button--main button--full" @click="loginProsesAtc()">Masuk</a>
							</div>
						</div>

						<!-- <div class="login-form__forgot-pass" id="divCapForgotPassword"><a href="#!" target="new">Lupa password?</a></div>
						<div class="login-form__bottom" id="divBtnDaftar">
							<p>Belum punya akun?</p>
							<a href="javascript:void(0)" class="button button--secondary button--full"@click="daftarAtc">Daftar</a>
						</div> -->
						<div style="text-align: center;color: aliceblue;margin-top:20px;color:black;">
							<span>Develop By : Wahidatunnisa</span><br/>
							Program Studi Teknik Informatika, Fakultas Teknik<br/>
							Universitas Malikussaleh Lhokseumawe
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- PAGE END -->

	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
	<script src="{{ asset('ladun/mobiokit') }}/vendor/jquery/jquery.validate.min.js"></script>
	<script src="{{ asset('ladun/mobiokit') }}/vendor/swiper/swiper.min.js"></script>
	<script src="{{ asset('ladun/mobiokit') }}/js/jquery.custom.js"></script>
	<script>
		const server = "{{ url('') }}/";
	</script>
	<script src="{{ asset('ladun/base') }}/js/app/login.js"></script>
</body>

</html>