@extends('layouts.facultylayout')
@section('content_header')
	<div class="jumbotron" >
        <h2>Title: {{$srvy->survey_title}}</h2>
        <div class="row">
            <p class="col-sm-4">Course Code: {{$srvy->course_code}}</p>
            <p class="col-sm-4">Course Teacher:{{QsnProcess::getUserName($srvy->creator_id)}}</p>
            <p class="col-sm-4">Responses: {{round($rs->count()/$qsns->count())}}</p>
        </div>
    </div>
@stop
@section('faculty_content')

 <div class="row">
    <div class="col-lg-10 col-lg-offset-1">
    	@if($rs)
    		@php $i =1; @endphp
    		@foreach($qsns as $qsn)
    			@if($qsn->question_type=='mcq')
					
					<h3>{{$i}}. {{$qsn->question}}</h3>
                    <P> Question Type: Dropdown MCQ</P>
                    @php 
                        $percent = QsnProcess::get_percentage($qsn->id); 
                    @endphp
                    <dl>
  
                      <dd class="percentage percentage-{{$percent[0]}}"><span class="text">{{$percent[4]}}: {{$percent[0]}}%</span></dd>
                      <dd class="percentage percentage-{{$percent[1]}}"><span class="text">{{$percent[5]}}: {{$percent[1]}}%</span></dd>
                      <dd class="percentage percentage-{{$percent[2]}}"><span class="text">{{$percent[6]}}: {{$percent[2]}}%</span></dd>
                      <dd class="percentage percentage-{{$percent[3]}}"><span class="text">{{$percent[7]}}: {{$percent[3]}}%
                      </span></dd>
                    </dl>
					
				
			    @elseif($qsn->question_type=='drp')
                     
                    <h3>{{$i}}. {{$qsn->question}}</h3>
                    <P> Question Type: Dropdown answer</P>
                    @php 
                        $percent = QsnProcess::get_percentage_drop($qsn->id); 
                    @endphp
                    <dl>
  
                      <dd class="percentage percentage-{{$percent[0]}}"><span class="text">{{$percent[4]}}: {{$percent[0]}}%</span></dd>
                      <dd class="percentage percentage-{{$percent[1]}}"><span class="text">{{$percent[5]}}: {{$percent[1]}}%</span></dd>
                      <dd class="percentage percentage-{{$percent[2]}}"><span class="text">{{$percent[6]}}: {{$percent[2]}}%</span></dd>
                      <dd class="percentage percentage-{{$percent[3]}}"><span class="text">{{$percent[7]}}: {{$percent[3]}}%
                      </span></dd>
                      <dd class="percentage percentage-{{$percent[9]}}"><span class="text">{{$percent[8]}}: {{$percent[9]}}%
                      </span></dd>
                    </dl>
                @elseif($qsn->question_type=='txt')
                    
                    <h3>{{$i}}. {{$qsn->question}}</h3>
                    <P> Question Type: short answer</P>
                    <div class="row">
                        <div class="col-md-0 col-md-offset-1 ">
                         <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Response</th>   
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($rs as $r)
                                    @if($r->question_id==$qsn->id)
                                      <tr>
                                        <td>
                                            @if(QsnProcess::is_anonim($srvy->survey_id,$r->user_id)=='yes')
                                            {{QsnProcess::getUserName($r->user_id)}}
                                            @else
                                                Anonymous
                                            @endif
                                        </td>
                                        <td>{{$r->res1}}</td>
                                        
                                      </tr>
                                    @endif
                                @endforeach
                            </tbody>
                          </table>
                          </div>
                        </div>

                @elseif($qsn->question_type=='para')
                    
                    <h3>{{$i}}. {{$qsn->question}}</h3>
                    <P> Question Type: Paragraph</P>
                    <div class="row">
                        <div class="col-md-0 col-md-offset-1 ">
                         <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Response</th>   
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($rs as $r)
                                    @if($r->question_id==$qsn->id)
                                      <tr>
                                        <td>
                                            @if(QsnProcess::is_anonim($srvy->survey_id,$r->user_id)=='yes')
                                            {{QsnProcess::getUserName($r->user_id)}}
                                            @else
                                                Anonymous
                                            @endif
                                        </td>
                                        <td>{{$r->res1}}</td>
                                        
                                      </tr>
                                    @endif
                                @endforeach
                            </tbody>
                          </table>
                          </div>
                        </div>
                @elseif($qsn->question_type=='date')
                    
                    <h3>{{$i}}. {{$qsn->question}}</h3>
                    <P> Question Type: Paragraph</P>
                    <div class="row">
                        <div class="col-md-0 col-md-offset-1 ">
                         <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Response</th>   
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($rs as $r)
                                    @if($r->question_id==$qsn->id)
                                      <tr>
                                        <td>
                                            @if(QsnProcess::is_anonim($srvy->survey_id,$r->user_id)=='yes')
                                            {{QsnProcess::getUserName($r->user_id)}}
                                            @else
                                                Anonymous
                                            @endif
                                        </td>
                                        <td>{{$r->res1}}</td>
                                        
                                      </tr>
                                    @endif
                                @endforeach
                            </tbody>
                          </table>
                          </div>
                        </div>
                @endif
                @php $i++; @endphp
    		@endforeach
    	@endif
        
  	</div>
</div>
@stop