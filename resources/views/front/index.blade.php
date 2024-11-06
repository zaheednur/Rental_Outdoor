<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="{{asset('output.css')}}" rel="stylesheet">
		<link href="{{asset('main.css')}}" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	</head>
	<body>
		<main class="max-w-[640px] mx-auto min-h-screen flex flex-col relative has-[#Bottom-nav]:pb-[144px]">
		<div id="Top-navbar" class="flex items-center justify-between pt-5 px-5">
			<a href="{{route('front.index')}}" class="flex shrink-0">
				<img src="assets/images/logos/logo-ARO.png" alt="logo" class="logo" />
			</a>
			<a href="#" class="w-11 h-11 flex shrink-0">
				<img src="assets/images/icons/notifications.svg" alt="icon" class="icon notification-icon" />
			</a>
		</div>
			<section id="Categories" class="flex flex-col gap-[10px] mt-[30px] px-5">
				<h2 class="font-semibold text-lg leading-[27px]">Kategori</h2>
				<div class="grid grid-cols-3 gap-4">

                    @forelse($categories as $category)
					<a href="{{route('front.category', $category->slug)}}" class="card">
                    <div class="rounded-2xl ring-1 ring-[#EDEEF0] p-4 flex flex-col items-center gap-3 text-center transition-all duration-300 hover:ring-2 hover:ring-[#FCCF2F]">
                        <div class="w-[70px] h-[70px] flex shrink-0"> <!-- Meningkatkan ukuran kontainer -->
                            <img src="{{ Storage::url($category->icon) }}" alt="icon" class="w-full h-full object-contain" /> <!-- Mengatur gambar agar sesuai ukuran kontainer -->
                        </div>
                        <p class="font-semibold">{{ $category->name }}</p>
                    </div>
					</a>
                    @empty
                    <p>belum ada data kategori terbaru</p>
                    @endforelse

				</div>
			</section>
			<a id="promo" href="#" class="px-5 mt-[30px]">
				<div class="w-full aspect-[353/100] flex shrink-0 overflow-hidden rounded-2xl">
					<img src="assets/images/backgrounds/promo2.png" class="w-full h-full object-cover" alt="promo" />
				</div>
			</a>

			<section id="New" class="flex flex-col gap-[10px] mt-[30px]">
				<h2 class="font-semibold text-lg leading-[27px] px-5" style="margin-bottom: 10px;">Brand Terbaru</h2> <!-- Ganti ke inline style untuk prioritas -->
				<div class="swiper w-full h-fit" style="padding-top: 10px;"> <!-- Tambahkan padding pada swiper jika diperlukan -->
					<div class="swiper-wrapper">

					@forelse($latest_products as $item_latest_product)
						<a href="{{route('front.details', $item_latest_product->slug)}}" class="swiper-slide max-w-[150px] first-of-type:ml-5 last-of-type:mr-5">
							<div class="flex flex-col gap-3 bg-white rounded-2xl"> <!-- Menghapus shadow dari seluruh kontainer -->
								<div class="flex items-center justify-center rounded-2xl ring-1 ring-[#EDEEF0] transition-all duration-300 hover:ring-2 hover:ring-[#FCCF2F]">
									<div class="w-[300px] h-[300px] flex items-center justify-center shadow-lg transition-all duration-300 hover:shadow-xl rounded-2xl"> <!-- Menambahkan shadow pada gambar -->
										<img src="{{ Storage::url($item_latest_product->thumbnail) }}" class="w-full h-full object-cover rounded-2xl" alt="thumbnail" />
									</div>
								</div>
								<div class="flex flex-col gap-1 p-2"> <!-- Konten tanpa shadow -->
									<p class="font-semibold break-words">{{$item_latest_product->name}}</p>
									<div class="flex items-center justify-between">
										<p class="text-sm leading-[21px] text-[#6E6E70]">{{$item_latest_product->category->name}}</p>
										<div class="flex items-center gap-[2px]">
										</div>
									</div>
								</div>
							</div>
						</a>
					@empty
						<p>belum ada data produk terbaru</p>
					@endforelse



					</div>
				</div>
			</section>

			<section id="Recommendation" class="flex flex-col gap-[10px] mt-[30px] px-5">
				<h2 class="font-semibold text-lg leading-[27px]">Mungkin Anda Suka</h2>
				<div class="flex flex-col gap-5">

				@forelse($random_products as $irp)
					<a href="{{route('front.details', $irp->slug)}}" class="card">
						<div class="flex items-center gap-3 border border-[#D2B48C] rounded-2xl p-2"> <!-- Tambahkan border coklat terang (#D2B48C) -->
							<div class="w-20 h-20 flex shrink-0 rounded-2xl overflow-hidden bg-[#F6F6F6] items-center">
								<div class="w-full h-full flex shrink-0 justify-center"> <!-- Ubah height dari h-[50px] menjadi h-full agar gambar mengisi box -->
									<img src="{{Storage::url($irp->thumbnail)}}" class="h-full w-full object-cover" alt="thumbnail" /> <!-- Ganti object-contain menjadi object-cover -->
								</div>
							</div>
							<div class="w-full flex flex-col gap-1">
								<p class="font-semibold">{{$irp->name}}</p>
								<div class="flex items-center justify-between">
									<p class="text-sm leading-[21px] text-[#6E6E70]">Rp {{number_format($irp->price, 0, ',','.')}}/day</p>
									<div class="flex items-center w-fit gap-[2px]" style="position: relative; top: -12px; right: 8px;"> <!-- Adjusted to raise position -->
										<!-- Star rating and purchase count with dynamic values -->
										<div class="w-3 h-3 flex shrink-0">
											<img src="{{asset('assets/images/icons/Star 1.svg')}}" alt="star" />
										</div>
										<p class="font-semibold text-xs leading-[18px]">
											{{ number_format(mt_rand(49, 50) / 10, 1) }} ({{ mt_rand(50, 100) }}+)
										</p> <!-- Random rating between 4.9 and 5, and purchases between 50+ and 100+ -->
									</div>
								</div>
							</div>
						</div>
					</a>
				@empty
					<p>belum ada produk terbaru</p>
				@endforelse
				</div>
			</section>
			<div id="Bottom-nav" class="fixed bottom-0 max-w-[640px] w-full mx-auto border-t border-[#F1F1F1] overflow-hidden z-10">
				<div class="bg-white/50 backdrop-blur-sm absolute w-full h-full"></div>
				<ul class="flex items-center gap-3 justify-evenly p-5 relative z-10">
					<li>
						<a href="{{route('front.index')}}">
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
								<p class="font-semibold text-sm leading-[21px] text-[]">Beranda</p>
							</div>
						</a>
					</li>
					<li>
						<a href="{{route('front.spots')}}">
							<div class="group flex flex-col items-center text-center gap-2 transition-all duration-300 hover:text-black text-[#9D9DAD]">
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
								<p class="font-semibold text-sm leading-[21px] text-[]">Destinasi</p>
							</div>
						</a>
					</li>
					<li>
						<a href="{{route('front.contacts')}}">
							<div class="group flex flex-col items-center text-center gap-2 transition-all duration-300 hover:text-black text-[#9D9DAD]">
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
								<p class="font-semibold text-sm leading-[21px] text-[]">kontak</p>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</main>

		<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
		<script src="{{asset('customjs/browse.js')}}"></script>
	</body>
</html>