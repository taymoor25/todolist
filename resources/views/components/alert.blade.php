<div>
	@if(session()->has('msg'))
	{{$slot}}

  <div class="py-2 px-2 bg-green-200 text-center">{{session()->get('msg')}}</div>

    @endif

    </div>