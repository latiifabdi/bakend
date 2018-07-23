<template>
	<div id="Faq" class="pt-4 bg-fq-area text-grey-darkest" style="min-height: 500px;">
		<div class="container mx-auto">
			<div class="text-center">
				<h1 class="text-dark mb-4 mt-32 text-5xl mb-3">
					Frequently Asked <span class="text-brand">Questions</span>
				</h1>
				<p class="text-grey mb-8">
					Before contacting us, please check our Frequently asked Questions below .
				</p>
			</div>
			
			<div class="md:py-12 lg:px-16">
				<div class="mb-12">
					<div v-for="question in questions" class="question mb-4">
						<div class="bg-white mb-4 py-4 pl-8 pr-4 mx-2 sm:w-full text-center rounded-lg sm:mx-0 sm:rounded-full">
							<div class="flex justify-between">
								<p class="text-grey leading-normal">{{question.question}}</p>
								<div class="button">
									<a  @click.prevent="show(question)" class="pointer py-2 px-4 rounded-full bg-brand text-white no-underline">
										Show
									</a>
								</div>
							</div>
						</div>
						<div class="answer pl-4 pr-4" v-show="question.active">
							<p class="w-3/4 mb-6 leading-loose">
								{{question.answer}}
							</p>
						</div>
					</div>
				</div>
				
				<div class="flex justify-end">
					<a href="#quote" class="no-underline shadow-lg text-white rounded-lg w-2/4 px-4 py-4" style="background: rgb(1, 118, 255);">
						Get Quote now
					</a>
				</div>
			</div>

		</div>

	</div>
</template>

<script>
	export default {
		name: 'Question',

		data() {
			return {
				questions: [],
			}
		},

		created() {
			this.questions = [
				{
					active: false,
					question: 'Which services does your company currently provide?',
					answer: 'We provide sourcing for tech related equipment and gadgets in large and small quantities. We communicate with different manufacturers and compare prices and negotiate the best prices for our customers. We are fluent in both English and Mandarin hence solving all your communication problems when dealing with Chinese suppliers. You can find the rest of our services in the Products& Services section.',
				}, 
				{
					active: false,
					question: 'Can you help source customizable equipment?',
					answer: 'Yes we can but there is a Minimum Order Quantity different according to the manufacturer.',
				},
				{

active: false,
					question: 'What is the payment process for all services involved?',
					answer: 'After receiving a quote , you are required to pay 3/4 of the total value, and the rest upon collection of goods.',
				},
				{
					active: false,
					question: 'How long does it take to process the goods and deliver?',
					answer: 'Processing time is 2 weeks on average depending on the quantity and specifications required. Delivery is 10 days after shipping.',
				},
				{
					active: false,
					question: 'Are all of the manufacturing companies based in china?',
					answer: 'Yes all of our products are manufactured in China where we currently located.',
				},
				{
					active: false,
					question: 'Is quality inspection included in your service fee and how much do you charge?',
					answer: 'Our charges are as follows: Service fee 5% of total value of goods.  Service fee+ quality inspection 8% of total value of goods.',
				},
				{
					active: false,
					question: 'If I request a quote, how long does it take to get a response?',
					answer: 'Currently it will take about 3 working days to receive the best quote from us but we are working on minimizing the time.'
				},
				{
					active: false,
					question: 'Can you also source non tech related equipment and products?',
					answer: 'Yes we can but it will take longer to get your quote whilst we search for a trusted supplier.',
				},
				{
					active: true,
					question: 'Are the goods returnable after delivery?',
					answer: 'No they are not. You are required to collect your goods within 24 hrs after delivery and finish payment.'
				}

			];
		},

		methods: {
			show(question) {
				question.active = !question.active;
			}	
		}
	};

</script>