@php $optn = QsnProcess::getMcqOptn($qsns[$i]->id); @endphp

	<div class="options" style="margin-left: 5%">
	<label class="radio">
      <input type="radio" value="{{$optn[0]}}" name="ans">{{$optn[0]}}
    </label>
    <label class="radio">
      <input type="radio" value="{{$optn[1]}}" name="ans">{{$optn[1]}}
    </label>
    @if($optn[2]&&$optn[3])
	    <label class="radio">
	      <input type="radio" value="{{$optn[2]}}" name="ans">{{$optn[2]}}
	    </label>
	    <label class="radio">
	      <input type="radio" value="{{$optn[3]}}" name="ans">{{$optn[3]}}
	    </label>
	@elseif($optn[2]&&!$optn[3])

		<label class="radio">
	      <input type="radio" value="{{$optn[2]}}" name="ans">{{$optn[2]}}
	    </label>
	@elseif(!$optn[2]&&$optn[3])

		<label class="radio">
	      <input type="radio" value="{{$optn[3]}}" name="ans">{{$optn[3]}}
	    </label>
	@endif
	</div>

