@if(is_admin())
	<img class="img-preview" src="{{ get_template_directory_uri() }}/Blocks/PAListDownloads/preview.png" alt="{{ __('Illustrative image of the front end of the block.', 'iasd') }}"/>
@else 
	<div class="pa-widget pa-w-list-downloads col col-md-4 mb-5">
		@notempty($title)
			<h2>{!! $title !!}</h2>
		@endnotempty

		@notempty($items)
			<div class="mt-4">
				@foreach($items as $item)
					<div class="card mb-2 mb-xl-4 border-0">
						<a 
							href="{{ is_array($item['link']) ? $item['link']['url'] : $item['link'] }}" 
							target="{{ is_array($item['link']) && !empty($item['link']['target']) ? $item['link']['target'] : '_self' }}"
						>
							<div class="row">
								<div class="col-4">
									<div class="ratio ratio-16x9">	
										<figure class="figure m-xl-0 bg-light rounded overflow-hidden">
											@notempty($item['featured_media_url'])
												<img 
													class="figure-img img-fluid m-0"	
													src="{{ $item['featured_media_url']['pa_block_render'] }}"  
													alt="{{ $item['title']['rendered'] }}" 
												/>
											@endnotempty
										</figure>	
									</div>
								</div>
								<div class="col-8">
									<div class="card-body p-0">
										@notempty($item['file_format'])
											<span class="pa-tag text-uppercase me-1 rounded">{{ $item['file_format'] }}</span>
										@endnotempty

										@notempty($item['file_size'])
											<span class="pa-tag text-uppercase rounded">{{ $item['file_size'] }}</span>
										@endnotempty

										@notempty($item['title'])
											<h3 class="card-title h6 m-0 pa-truncate-3">{!! $item['title']['rendered'] !!}</h3>
										@endnotempty
									</div>
								</div>
							</div>
						</a>
					</div>
				@endforeach
			</div>
		@endnotempty

		@notempty($enable_link)
			<a 
				href="{{ $link['url'] ?? '#' }}" 
				target="{{ $link['target'] ?? '_self' }}"
				class="pa-all-content"
			>
				{!! $link['title'] !!}
			</a>
		@endnotempty
	</div>
@endif
