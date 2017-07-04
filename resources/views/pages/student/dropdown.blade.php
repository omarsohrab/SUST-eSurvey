<!-- To show the dropdown list to the question create view -->

@php $optn = QsnProcess::getDropdownOptn($qsns[$i]->id); @endphp
<div class="options" style="margin-left: 3%;width: 60%">
<select class="form-control" id="commity_id" name="ans">
    <option>{{$optn[0]}}</option>
    <option>{{$optn[1]}}</option>
 
    
	@if($optn[2]&&$optn[3]&&$optn[4])

		<option>{{$optn[2]}}</option>
    	<option>{{$optn[3]}}</option>
    	<option>{{$optn[4]}}</option>
    
	@elseif($optn[2]&&$optn[3]&&!$optn[4])

		<option>{{$optn[2]}}</option>
   	    <option>{{$optn[3]}}</option>
   
	@elseif($optn[2]&&!$optn[3]&&$optn[4])
		<option>{{$optn[2]}}</option>
   	    <option>{{$optn[4]}}</option>
   	@elseif(!$optn[2]&&$optn[3]&&$optn[4])
		<option>{{$optn[3]}}</option>
   	    <option>{{$optn[4]}}</option>
   	@elseif($optn[2]&&!$optn[3]&&!$optn[4])
		<option>{{$optn[2]}}</option>
   	@elseif(!$optn[2]&&$optn[3]&&!$optn[4])
		<option>{{$optn[3]}}</option>
   	@elseif(!$optn[2]&&!$optn[3]&&$optn[4])
   	    <option>{{$optn[4]}}</option>   
	@endif
</select>
</div>