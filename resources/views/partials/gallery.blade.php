<div id="shop" class="text-dark hello" style="background: #11355f; min-height: 500px;">
	<div class="container mx-auto">
		<div class="text-center">
			<h1 class="mb-4 text-white pb-8 pt-32">Our Shop</h1>
		</div>
		<ul class="w-3/4 list-reset flex ml-16">
			<li class="-mb-px mr-1">
				<a class="no-underline mr-4 bg-white inline-block py-3 px-4 round text-blue-dark font-semibold" href="/{{ 1 }}/#shop">Customizable products</a>
			</li>
			<li class="mr-1">
				<a class="no-underline mr-4 bg-white inline-block py-3 px-4 rounded text-blue hover:text-blue-darker font-semibold" href="/{{ 2 }}/#shop">Available for purchase</a>
			</li>
			<li class="mr-1">
				<a class="no-underline mr-4 bg-white inline-block py-3 px-6 rounded text-blue hover:text-blue-darker font-semibold" href="/{{ 3 }}/#shop">Wholesale products</a>
			</li>
			
		</ul>
		
		<div>
			<example-component :products="{{ json_encode($products) }}"></example-component>
		</div>


		{{ $products->fragment('gallery')->links() }}

		
		<div class="px-16 pt-4 pb-16">
			<p class="text-white pb-4">Quick links</p>
			<div class="links w-full">
				<p class="leading-loose text-darkest w-full">
					<a  href="http://www.nelsoft.co.zw/Nelsoft%20Home%20of%20Objects%20Advert.pdf" class="mb-4 text-white underline">Nelsoft Products & Services Flyer</a>
				</p>
				<p class="">
					<a  href="http://www.nelsoft.co.zw/Nelsoft%20Home%20of%20Objects%20Advert.pdf" class="mb-4 text-white underline">Timetabling Software Pamphlet</a>
				</p>
				<a target="_blank"  href="http://www.nelsoft.co.zw/Ordinary%20Level%20Computing%20Exam%20Questions%20and%20Answers1.exe" class="text-white mb-3 underline">O Level Computing Xam E-learning</a>
				<a target="_blank" href="http://www.stevenchikosi.com/" class="text-white underline">Steven Chikosi Blog</a>
				<a target="_blank" href="http://www.nelsoft.co.zw/Nelson%20Christian%20Poems.pdf" class="text-white underline block">Nelson Inspirational Poesy</a>
			</div>
		</div>
	</div>
</div>