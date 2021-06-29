@extends('_layouts.master', 
	['page_title' => 'Award Criteria', 
	'meta_title' => 'The CLeaning Excellence Awards Nomination', 
	'meta_description' => 'Cleaning Excellence Awards : Award Nomination'])

@section('content')		

	<main class="relative bg-white w-full z-10">

		@include('_components.title-component', ['title' => 'Make a Nomination', 'background_image' => 'highlights'])

		<section class="container mx-auto max-w-5xl px-6">  	
			
            <div class="flex justify-center mt-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				 	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
				</svg>
            </div>

			<div class="mt-2 mx-auto">
				<p class="text-lg md:mx-auto md:text-xl lg:text-2xl md:text-center font-semibold leading-tight lg:leading-tight uppercase">Submit a nomination for this year's Cleaning Excellence Awards</p>
				<p class="mt-6 font-semibold">This is a static reference for layout and presentation of the nomination form. It will be refactored in to the host platform and will render award category-specific fields, as each award category has varying questions.</p>									
				<p class="mt-6 text-center font-bold text-xl">DEADLINE FOR ENTRIES: {{ $page->awardsDeadline }}</p>
			</div>
		</section>	

		<section class="container mx-auto px-6">
			
			<form class="mx-auto w-full mt-6 max-w-3xl">
				
				<section class="border-b border-gray-700 py-2 uppercase tracking-wide text-gray-700 text-lg font-bold mb-6">Your details</section>

				<div class="flex flex-wrap -mx-3">
					<div class="w-full md:w-1/2 px-3 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nominator-first-name">
							First Name
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="nominator-first-name" type="text" placeholder="Jane">
						<span class="inline-block mt-2 text-red-500 text-xs italic">Please complete this field.</span>
					</div>
					<div class="w-full md:w-1/2 px-3 mt-4 md:mt-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nominator-last-name">
							Last Name
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nominator-last-name" type="text" placeholder="Doe">
					</div>
					<div class="w-full md:w-1/2 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nominator-email">
							Email Address
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nominator-password" type="text" placeholder="youremail@address.co.uk">
					</div>
				</div>
				
				<section class="border-b border-gray-700 py-2 uppercase tracking-wide text-gray-700 text-lg font-bold my-6">Nomination</section>

				<div class="flex flex-wrap -mx-3 ">

					<div class="w-full md:w-1/2 px-3 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nominator-first-name">
							First Name
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="nominator-first-name" type="text" placeholder="Jane">						
					</div>

					<div class="w-full md:w-1/2 px-3 mt-4 md:mt-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nominator-last-name">
							Last Name
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nominator-last-name" type="text" placeholder="Doe">
					</div>
				
					<div class="w-full md:w-1/2 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-job-title">
							Job Title
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomination-job-title" type="text" placeholder="Health &amp; Safety Manager">						
					</div>

					<div class="w-full md:w-1/2 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-company">
							Company
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomination-company" type="text" placeholder="ABC Widgets Ltd.">
					</div>
				</div>

				<section class="uppercase tracking-wide text-gray-700 text-base font-bold mt-6">Address</section>

				<div class="flex flex-wrap -mx-3">
					<div class="w-full md:w-1/2 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-address-1">
							Address Line 1
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomination-address-1" type="text" placeholder="">
					</div>

					<div class="w-full md:w-1/2 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-address-2">
							Address Line 2
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomination-address-2" type="text" placeholder="">
					</div>

					<div class="w-full md:w-1/2 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-address-3">
							Address Line 3
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomination-address-3" type="text" placeholder="">
					</div>

				</div>

				<div class="flex flex-wrap -mx-3">

					<div class="w-full md:w-1/3 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-town">
							Town / City
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomination-town" type="text" placeholder="">
					</div>

					<div class="w-full md:w-1/3 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-postcode">
							Postcode
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomination-postcode" type="text" placeholder="">
					</div>

					<div class="w-full md:w-1/3 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-country">
							Country
						</label>
						<div class="relative">
							<select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomination-country">
								<option>England</option>
								<option>Wales</option>
								<option>Scotland</option>
								<option>Northern Ireland</option>
								<option>Republic Of Ireland</option>
							</select>
							<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
								<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
							</div>
						</div>
					</div>
		
					<div class="w-full md:w-1/3 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-telephone">
							Telephone No.
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomination-telephone" type="text" placeholder="">
					</div>

					<div class="w-full md:w-1/3 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-email">
							Email Address
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomination-email" type="text" placeholder="">
					</div>

					<div class="w-full md:w-1/3 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-website">
							Website
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomination-website" type="text" placeholder="">
					</div>

				</div>

				<section class="border-b border-gray-700 py-2 uppercase tracking-wide text-gray-700 text-lg font-bold my-6">Questions</section>

				<div class="flex flex-wrap -mx-3">
					<div class="w-full px-3">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-question-1">
						Question 1
						</label>
						<textarea id="nomination-question-1" name="nomination-question-1" rows="3" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder=""></textarea>
					</div>
					<div class="w-full px-3 mt-4">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-question-2">
							Question 2
						</label>
						<textarea id="nomination-question-2" name="nomination-question-2" rows="3" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder=""></textarea>
					</div>
					<div class="w-full px-3 mt-4">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-question-3">
							Question 3
						</label>
						<textarea id="nomination-question-3" name="nomination-question-3" rows="3" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder=""></textarea>
					</div>
					<div class="w-full px-3 mt-4">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-question-4">
							Question 4
						</label>
						<textarea id="nomination-question-4" name="nomination-question-4" rows="3" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder=""></textarea>
					</div>
				</div>

				<section class="border-b border-gray-700 py-2 uppercase tracking-wide text-gray-700 text-lg font-bold my-6">Supporting Material</section>

				

				<div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed hover:border-lochmara-500 rounded-md">
					<div class="space-y-1 text-center">
						<svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
							<path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
						<div class="flex text-sm text-gray-600">
							<label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
								<span>Upload a file</span>
								<input id="file-upload" name="file-upload" type="file" class="sr-only">
							</label>
							<p class="pl-1">or drag and drop</p>
						</div>
						<p class="text-xs text-gray-500">
							PDF, text &amp; Word documents accepted.
						</p>
					</div>
				</div>

				<div class="mt-6 py-3 bg-gray-50 text-center md:text-right">
		            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white font-bold uppercase bg-lochmara-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-lochmara-500">
                    	<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-locahmara-500 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						 	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
						</svg>
						<span class="inline-block ml-2">Submit your nomination</span>
		            </button>
		        </div>

			</form>

		</section>

		<section class="mt-10">
			<div class="collage"></div>
		</section>

	</main>

@endsection