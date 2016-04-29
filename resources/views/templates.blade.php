@include('partials.header')

@if(isset($pageName))
	@include('template.'.$pageName)
@endif

@include('partials.footer')