<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{asset('output.css')}}" rel="stylesheet">
	<link href="{{asset('main.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
		rel="stylesheet" />

	<script>
		// JavaScript function to go back to the previous page
		function goBack() {
			window.history.back();
		}
	</script>
</head>

<body>
	<main class="max-w-[640px] mx-auto min-h-screen flex flex-col relative has-[#Bottom-nav]:pb-[144px]">
		<div id="Top-navbar" class="flex items-center justify-between px-5 pt-5 absolute top-0 z-10 w-full">
			<a href="javascript:void(0);" onclick="goBack()">
				<div class="size-[44px] flex shrink-0">
					<img src="{{asset('assets/images/icons/arrow-left.svg')}}" alt="icon" />
				</div>
			</a>
			<p class="text-lg leading-[27px] font-semibold">Details</p>
			<button class="size-[44px] flex shrink-0">
				<img src="{{asset('assets/images/icons/more.svg')}}" alt="icon" />
			</button>
		</div>
		<section id="Thumbnail" class="flex relative h-[370px] pt-[94px] pb-[66px] bg-[#F6F6F6]">
			<!-- Main Thumbnail -->
			<div class="w-full h-full flex items-center justify-center flex-shrink-0">
				<img id="mainThumbnail" src="{{ Storage::url($product->thumbnail) }}" alt="Thumbnail"
					class="max-w-full max-h-full object-contain border-4 border-[#8B4513] transition-opacity duration-500 ease-in-out" />
			</div>
			<!-- Selection Thumbnails -->
		</section>


		<section id="Details" class="flex flex-col mt-[65px] px-5 w-full gap-5">
			<div id="Heading" class="flex items-center justify-between">
				<div class="flex flex-col gap-1">
					<h1 class="text-[22px] leading-[33px] font-bold">{{$product->name}}</h1>
					<p class="text-[#6E6E70]">{{$product->category->name}}</p>
				</div>
				<div class="flex">
					<div class="size-5 flex shrink-0">
						<img src="{{asset('assets/images/icons/Star.svg')}}" alt="icon" class="size-full" />
					</div>
					<p class="font-semibold">
						{{ number_format(mt_rand(49, 50) / 10, 1) }} 
						<span class="font-normal text-[#6E6E70]">({{ mt_rand(50, 100) }}+)</span>
					</p>
				</div>
			</div>
			<div id="About" class="flex flex-col gap-1">
				<h2 class="font-semibold">About</h2>
				<p class="leading-[30px] tracking-wide" style="text-align: justify;">{{$product->about}}</p>
			</div>

			<div id="Benefits" class="flex flex-col gap-3">
				<h2 class="font-semibold">Benefits</h2>
				<div class="grid grid-cols-2 gap-4">
					<div
						class="flex p-[18px_14px] outline outline-1 outline-[#EDEEF0] rounded-2xl overflow-hidden justify-start">
						<div class="flex gap-3 items-center">
							<div class="size-6 flex shrink-0">
								<img src="{{asset('assets/images/icons/note-favorite.svg')}}" alt="icon" class="size-full" />
							</div>
							<p class="text-sm leading-[21px] font-semibold text-nowrap">Bersih & Rapi</p>
						</div>
					</div>
					<div
						class="flex p-[18px_14px] outline outline-1 outline-[#EDEEF0] rounded-2xl overflow-hidden justify-start">
						<div class="flex gap-3 items-center">
							<div class="size-6 flex shrink-0">
								<img src="{{asset('assets/images/icons/dollar-circle.svg')}}" alt="icon" class="size-full" />
							</div>
							<p class="text-sm leading-[21px] font-semibold text-nowrap">Harga Murah</p>
						</div>
					</div>
					<div
						class="flex p-[18px_14px] outline outline-1 outline-[#EDEEF0] rounded-2xl overflow-hidden justify-start">
						<div class="flex gap-3 items-center">
							<div class="size-6 flex shrink-0">
								<img src="{{asset('assets/images/icons/location.svg')}}" alt="icon" class="size-full" />
							</div>
							<p class="text-sm leading-[21px] font-semibold text-nowrap">Strategis</p>
						</div>
					</div>
					<div
						class="flex p-[18px_14px] outline outline-1 outline-[#EDEEF0] rounded-2xl overflow-hidden justify-start">
						<div class="flex gap-3 items-center">
							<div class="size-6 flex shrink-0">
								<img src="{{asset('assets/images/icons/shield-tick.svg')}}" alt="icon" class="size-full" />
							</div>
							<p class="text-sm leading-[21px] font-semibold text-nowrap">Kualitas Terbaik</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="Recommendation" class="flex flex-col gap-[10px] mt-[30px] px-5">
				<h2 class="font-semibold text-base leading-[27px]">Mungkin Anda Suka</h2>
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
		<div id="Bottom-nav"
			class="fixed bottom-0 max-w-[640px] w-full mx-auto border-t border-[#F1F1F1] overflow-hidden z-10">
			<div class="bg-white/50 backdrop-blur-sm absolute w-full h-full"></div>
			<div class="flex items-center justify-between p-5 relative z-10">
				<div class="flex flex-col gap-1 w-fit">
				<p class="font-bold text-xl leading-[30px]">
					Rp {{number_format($product->price, 0, ',', '.')}}<span class="font-normal">/Day</span>
				</p>

				</div>
				<a href="https://wa.me/6289628795545?text=Hello%20Adam%20Rental%20Outdoor" class="rounded-full p-[12px_24px] bg-[#FCCF2F] font-bold w-fit">Sewa</a>
			</div>
		</div>
	</main>

	<script src="{{asset('customjs/details.js')}}"></script>
</body>

</html>