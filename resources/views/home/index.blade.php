@extends('layouts.master')

@section('content')
		<div class="pb-12 bg-dark-purple" style="max-height: 700px; background-image: url('/images/bg2.jpeg'); background-blend-mode: color-burn; background-position: center; background-repeat: no-repeat; background-size: cover;">
      <div class="bgpl-6 lg:flex items-center py-8">
        <div class="container mx-auto">
          <div class="lg:flex lg:pt-16">
            <div class="lg:mt-16 lg:w-1/2 md:mr-16">
              <h1 class="lg:mb-4 md:mb-2 sm:mb-4  px-8 md:px-0 lg:text-5xl text-3xl text-white">
              Welcome to <span class="text-brand">Nelsoft</span>, Your Home of Objects!
              </h1>
              <p class="md:block mb-3 lg:hidden w-3/4 leading-normal text-justify px-8 md:px-0 text-sm lg:text-base text-white">
                To transform from an ordinary Information and Communication Technology organisation to become an indispendable cog of the global ICT ecosystem through research and development in artificial intelligence systems
              </p>
              <p class="hidden lg:block w-full text-justify px-6 md:px-0 md:text-lg text-sm lg:text-base text-white leading-normal lg:leading-loose">
                To transform from an ordinary Information and Communication Technology organisation to become an indispendable cog of the global ICT ecosystem through research and development in artificial intelligence systems and how they are applied in everyday life in the global village.
              </p>
            </div>
            <div class="lg:w-1/2  sm:ml-8 md:ml-0 lg:ml-16">
              <div id="quote" class="max-w-sm bg-red py-8 text-white rounded-lg shadow-lg">
                <div class="px-8 mt-2">
                  <h4 class="text-center mb-4">Get Quote Now</h4>
                  <p class="mb-6 text-justify text-white text-center opacity-75 leading-normal">
                    Leave a message below including your requested product or service specifications
                    and we will get back to you as soon as possible
                  </p>
                  <form class="text-center" action="https://formspree.io/faithtandi@hotmail.com" method="POST">
                    <div class="mb-6">
                      <input type="text" class="py-5 w-3/4 px-12 rounded-full border border-white text-grey-light hover:border-white bg-red" name="name" placeholder="Your name?">
                      <input type="hidden" name="_subject" value="Request quote to Nelsoft private limited!" />
                    </div>
                    <div class="mb-6">
                      <input autocomplete="off" type="text" class="py-5 w-3/4 px-12 rounded-full border border-white text-grey-light hover:border-white bg-red"  name="_replyto" placeholder="Your Email address?">
                    </div>
                    <div class="mb-6">
                      <textarea  cols="30" class="py-5 w-3/4 px-12 rounded-full border border-white text-grey-light hover:border-white bg-red" name="message" placeholder="Your Message!!"></textarea>
                    </div>
                    <button class="text-white rounded-lg w-3/5 px-4 py-4" style="background: rgb(1, 118, 255);">
                    Submit
                    </button>
                  </form>
                </div>
                
              </div>
            </div>
            
          </div>
        </div>
      </div>
      
    </div>
    @include('partials/carousel')
		@include('partials/about')
		@include('partials/product')
		
		@include('partials/gallery')
		<div class="app">
			<question></question>
		</div>
		@include('partials/team')
		
		@include('partials/footer')
@endsection
		
