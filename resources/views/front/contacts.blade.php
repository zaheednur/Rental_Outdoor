<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{asset('output.css')}}" rel="stylesheet">
	<link href="{{asset('main.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />

	<script>
		// JavaScript function to go back to the previous page
		function goBack() {
			window.history.back();
		}
	</script>
</head>

<body>
    <!-- Navbar -->
    <body>
    <!-- Navbar -->
    <div id="Top-navbar" class="flex items-center justify-between px-5 pt-5 w-full">
        <a href="javascript:void(0);" onclick="goBack()">
            <div class="w-[44px] h-[44px] flex items-center justify-center">
                <img src="{{ asset('assets/images/icons/arrow-left.svg') }}" alt="Back icon" />
            </div>
        </a>
        <p class="text-lg font-semibold">Kunjungi Kami</p>
        <button class="w-[44px] h-[44px] flex items-center justify-center">
            <img src="{{ asset('assets/images/icons/more.svg') }}" alt="More options icon" />
        </button>
    </div>

    <div class="px-5 mt-6 space-y-6">
        <!-- Card Biodata Perusahaan dengan Ikon -->
        <div class="w-full p-4 bg-white rounded-2xl shadow-md border border-gray-300 flex flex-col items-center gap-3 mb-6">
            <!-- Logo Perusahaan -->
            <div class="w-7 h-6 flex-shrink-0">
                <img src="{{ asset('assets/images/logos/logo-ARO.png') }}" alt="Logo Perusahaan" class="w-full h-full object-contain">
            </div>
            
            <!-- Informasi Perusahaan -->
            <div class="text-center">
                <h2 class="text-center mb-4">Adam Rental Outdoor</h2>
                
                <!-- Alamat dengan Ikon -->
                <div class="flex items-center mt-4 border-b border-gray-300 pb-2 pt-2">
                    <img src="{{ asset('assets/images/icons/alamat.png') }}" alt="Alamat Icon" class="w-5 h-5" >
                    <p class="text-gray-600 text-sm text-justify" style="padding-left: 10px;">Mlipak, Wonosobo</p>
                </div>

                <!-- Telepon dengan Ikon -->
                <div class="flex items-center mt-6 border-b border-gray-300 pb-2 pt-2">
                    <img src="{{ asset('assets/images/icons/whatsapp.png') }}" alt="Telepon Icon" class="w-5 h-5">
                    <p class="text-gray-600 text-sm text-justify" style="padding-left: 10px;", >089628795545</p>
                </div>

                <!-- Instagram dengan Ikon -->
                <div class="flex items-center mt-4 pt-2">
                    <img src="{{ asset('assets/images/icons/instagram.png') }}" alt="Instagram Icon" class="w-5 h-5 mr-4">
                    <p class="text-gray-600 text-sm text-justify pl-2">
                        <a href="https://www.instagram.com/invites/contact/?i=17bfoxqfw8gr1&utm_content=2t55xvk" target="_blank" class="text-blue-600 hover:underline" style="padding-left: 10px;">
                            adamrentaloutdoor
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Tambahan untuk dua button secara vertikal -->
        <!-- Dua Tombol Vertikal -->
        <div class="mt-6 flex flex-col gap-4">
            <!-- Tombol Pertama -->
            <a href="#" class="block w-full text-center bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-600 transition">
                Button 1
            </a>
            
        </div>


        <!-- Card Lokasi dengan Google Maps dan Link ke Satelit -->
        <div class="w-full p-4 bg-white rounded-2xl shadow-md border border-gray-300 space-y-4">
            <!-- Link ke Google Maps dengan Tampilan Satelit -->
            <a href="https://maps.app.goo.gl/dzzuVfwfpSejah818" target="_blank" class="block text-center">
                <p class="text-lg font-semibold text-blue-600 hover:underline">Detail Lokasi</p>
            </a>
            
            <!-- Embedded Google Maps Iframe -->
            <div class="w-full aspect-[16/9] bg-gray-200 rounded-2xl overflow-hidden shadow-md">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.3028615448815!2d109.90548211490543!3d-7.316338674342577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e656bda2d105a7f%3A0xb7e9d9b1efb3fce2!2sGunung%20Prau!5e0!3m2!1sid!2sid!4v1634825812986!5m2!1sid!2sid"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
		<div id="Bottom-nav" class="fixed bottom-0 max-w-[640px] w-full mx-auto border-t border-[#F1F1F1] overflow-hidden z-10">
			<div class="bg-white/50 backdrop-blur-sm absolute w-full h-full"></div>
			<ul class="flex items-center gap-3 justify-evenly p-5 relative z-10">
				<li>
					<a href="{{route('front.index')}}" class="text-[#9D9DAD]">
						<div class="group flex flex-col items-center text-center gap-2 transition-all duration-300 hover:text-black">
							<div class="w-6 h-6 flex shrink-0">
								<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M17.325 18.98H7.92495C7.50495 18.98 7.03495 18.65 6.89495 18.25L2.75495 6.66999C2.16496 5.00999 2.85496 4.49999 4.27496 5.51999L8.17495 8.30999C8.82495 8.75999 9.56495 8.52999 9.84495 7.79999L11.605 3.10999C12.165 1.60999 13.095 1.60999 13.655 3.10999L15.415 7.79999C15.695 8.52999 16.435 8.75999 17.075 8.30999L20.735 5.69999C22.295 4.57999 23.045 5.14999 22.405 6.95999L18.365 18.27C18.215 18.65 17.745 18.98 17.325 18.98Z"
										stroke="currentColor"
										stroke-width="2"
										stroke-linecap="round"
										stroke-linejoin="round"
									/>
									<path d="M7.125 22H18.125" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M10.125 14H15.125" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</div>
							<p class="font-semibold text-sm leading-[21px]">Beranda</p>
						</div>
					</a>
				</li>
				<li>
					<a href="{{route('front.spots')}}" class="text-[#9D9DAD]">
						<div class="group flex flex-col items-center text-center gap-2 transition-all duration-300 hover:text-black">
							<div class="w-6 h-6 flex shrink-0">
								<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.875 2V5" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M16.875 2V5" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M7.875 13H15.875" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M7.875 17H12.875" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
									<path
										d="M16.875 3.5C20.205 3.68 21.875 4.95 21.875 9.65V15.83C21.875 19.95 20.875 22.01 15.875 22.01H9.875C4.875 22.01 3.875 19.95 3.875 15.83V9.65C3.875 4.95 5.545 3.69 8.875 3.5H16.875Z"
										stroke="currentColor"
										stroke-width="2"
										stroke-miterlimit="10"
										stroke-linecap="round"
										stroke-linejoin="round"
									/>
								</svg>
							</div>
							<p class="font-semibold text-sm leading-[21px]">Destinasi</p>
						</div>
					</a>
				</li>
				<li>
					<a href="" class="text-black">
						<div class="group flex flex-col items-center text-center gap-2 transition-all duration-300 hover:text-black">
							<div class="w-6 h-6 flex shrink-0">
								<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M18.375 18.86H17.615C16.815 18.86 16.055 19.17 15.495 19.73L13.785 21.42C13.005 22.19 11.735 22.19 10.955 21.42L9.245 19.73C8.685 19.17 7.915 18.86 7.125 18.86H6.375C4.715 18.86 3.375 17.53 3.375 15.89V4.97998C3.375 3.33998 4.715 2.01001 6.375 2.01001H18.375C20.035 2.01001 21.375 3.33998 21.375 4.97998V15.89C21.375 17.52 20.035 18.86 18.375 18.86Z"
										stroke="currentColor"
										stroke-width="2"
										stroke-miterlimit="10"
										stroke-linecap="round"
										stroke-linejoin="round"
									/>
									<path
										d="M7.375 9.16003C7.375 8.23003 8.135 7.46997 9.065 7.46997C9.995 7.46997 10.755 8.23003 10.755 9.16003C10.755 11.04 8.085 11.24 7.495 13.03C7.375 13.4 7.685 13.77 8.075 13.77H10.755"
										stroke="currentColor"
										stroke-width="2"
										stroke-linecap="round"
										stroke-linejoin="round"
									/>
									<path
										d="M16.415 13.76V8.05003C16.415 7.79003 16.245 7.55997 15.995 7.48997C15.745 7.41997 15.475 7.51997 15.335 7.73997C14.615 8.89997 13.835 10.22 13.155 11.38C13.045 11.57 13.045 11.82 13.155 12.01C13.265 12.2 13.475 12.3199 13.705 12.3199H17.375"
										stroke="currentColor"
										stroke-width="2"
										stroke-linecap="round"
										stroke-linejoin="round"
									/>
								</svg>
							</div>
							<p class="font-semibold text-sm leading-[21px]">Kontak</p>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</main>
</body>

</html>