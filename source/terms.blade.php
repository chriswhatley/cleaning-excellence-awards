@extends('_layouts.master', 
	['page_title' => 'Frequently Asked Questions', 
	'meta_title' => 'Don’t miss out on this great night of entertainment and networking as we toast the best in the health, safety and fire safety sectors.', 
	'meta_description' => 'Venue, travel and dietary information and more. '])

	@section('content')

	{{-- Main Content --}}
	<main class="relative bg-white w-full z-10">

		@include('_components.title-component', ['title' => 'Terms & Conditions', 'background_image' => 'header-d'])

		<section class="container mx-auto px-6 py-6 md:py-10 smallprint">  
			<ul class="list-disc">
				<li>Accounts are payable in full, monthly. If an account is overdue the publisher reserves the right to suspend future insertions</li>
				<li>A voucher copy will be sent directly upon publication.</li>
				<li>All copy is subject to the approval of the publishers.</li>
				<li>No responsibility will be accepted by the publishers for either omissions or errors of any advertisement or editorial matter whatsoever.</li>
				<li>The publishers reserve the right to refuse cancellations unless they are received not less than 6 weeks before publication.</li>
				<li>Any charge for extra production work will be made to advertisers or their Agents.</li>
				<li>The publishers shall not be liable for any loss or damage to artwork, films or any other material supplied and the owner should insure against risk herewith.</li>
				<li>No terms and conditions expect the above shall apply to this contract. Unless we have agreed in writing special terms and conditions this order is placed only on the basis of the above Terms & Conditions.</li>
				<li>Under the Data Protection Act 1998, we are obliged to notify any customer who is a .Sole Trader. that data concerning certain details such as invoices, sales ledger information, will be passed to our financiers for the purpose of our obtaining sales ledger finance.</li>
				<li>Any material published on behalf of the client or agent is on the understanding that the client or agent has the right to use the material for both printed and electronic media.</li>
			</ul>	
		</section>	

		@include('_partials.collage')
	</main>

@endsection