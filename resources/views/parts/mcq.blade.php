@php $optn = QsnProcess::getMcqOptn($old->id); @endphp
<form>
	<div class="options" style="margin-left: 5%">
	<label class="radio">
      <input type="radio" name="optradio">{{$optn[0]}}
    </label>
    <label class="radio">
      <input type="radio" name="optradio">{{$optn[1]}}
    </label>
    @if($optn[2]&&$optn[3])
	    <label class="radio">
	      <input type="radio" name="optradio">{{$optn[2]}}
	    </label>
	    <label class="radio">
	      <input type="radio" name="optradio">{{$optn[3]}}
	    </label>
	@elseif($optn[2]&&!$optn[3])

		<label class="radio">
	      <input type="radio" name="optradio">{{$optn[2]}}
	    </label>
	@elseif(!$optn[2]&&$optn[3])

		<label class="radio">
	      <input type="radio" name="optradio">{{$optn[3]}}
	    </label>
	@endif
	</div>

</form>