<?php 
class QsnProcess{

	public static function getMcqOptn($i){
		$optn = DB::table('options')->where('qsn_id', '=', $i)->first();

		$result = array($optn->opt1,$optn->opt2);
		if ($optn->opt3&&$optn->opt4) {
			$result[2]=$optn->opt3;
			$result[3]=$optn->opt4;
		}elseif ($optn->opt3&&!$optn->opt4) {
			$result[2]=$optn->opt3;
			$result[3]=null;
		}elseif (!$optn->opt3&&$optn->opt4) {
			$result[2]=null;
			$result[3]=$optn->opt4;
		}elseif (!$optn->opt3&&$optn->opt4) {
			$result[2]=null;
			$result[3]=null;
		}
		

		
		return $result;
	}

	public static function getDropdownOptn($i){
		$optn = DB::table('options')->where('qsn_id', '=', $i)->first();

		$result = array($optn->opt1,$optn->opt2);
		if ($optn->opt3&&$optn->opt4&&$optn->opt5) {
			$result[2]=$optn->opt3;
			$result[3]=$optn->opt4;
			$result[4]=$optn->opt5;

		}elseif ($optn->opt3&&$optn->opt4&&!$optn->opt5) {
			$result[2]=$optn->opt3;
			$result[3]=$optn->opt4;
			$result[4]=null;

		}elseif ($optn->opt3&&!$optn->opt4&&$optn->opt5) {
			$result[2]=$optn->opt3;
			$result[3]=null;
			$result[4]=$optn->opt5;
		}elseif (!$optn->opt3&&$optn->opt4&&$optn->opt5) {
			$result[2]=null;
			$result[3]=$optn->opt4;
			$result[4]=$optn->opt5;
		}elseif ($optn->opt3&&!$optn->opt4&&!$optn->opt5) {
			$result[2]=$optn->opt3;
			$result[3]=null;
			$result[4]=null;
		}elseif (!$optn->opt3&&$optn->opt4&&!$optn->opt5) {
			$result[2]=null;
			$result[3]=$optn->opt4;
			$result[4]=null;
		}elseif (!$optn->opt3&&!$optn->opt4&&$optn->opt5) {
			$result[2]=null;
			$result[3]=null;
			$result[4]=$optn->opt5;
		}
		

		
		return $result;
	}

	public static function getUserName($id){
		$user = Sentinel::findById($id);
		$name = $user['first_name'].' '.$user['last_name'];
		return $name;
	}
	public static function is_olready_enrolled($id,$cid){
		$enrl = DB::table('enrolled')->where('course_id', '=', $cid)
		->where('user_id', '=', $id)
		->get();

		if($enrl->count()>0){
			return true;
		}else
			return false;
	}
	//to check an student perticipated in a survey or not
	public static function is_pert($survey_id){
		 $id = Sentinel::getUser()->id;
		 $enrl = DB::table('perticipation')
		 ->where('survey_id', '=', $survey_id)
		 ->where('user_id', '=', $id)
		 ->get();
		 if($enrl->count()>0){
			return true;
		}else
			return false;
	}

	public static function get_percentage($id){
		$rspn = DB::table('responses')->where('question_id', '=', $id)
		->get();
		$optn = DB::table('options')->where('qsn_id', '=', $id)
		->first();
		$op1=0; $op2=0; $op3=0; $op4=0;
		$total = count($rspn);
		foreach ($rspn as $rs) {
			if($rs->res1==$optn->opt1){
				$op1++;
			}elseif($rs->res1==$optn->opt2){
				$op2++;
			}elseif($rs->res1==$optn->opt3){
				$op3++;
			}elseif($rs->res1==$optn->opt4){
				$op4++;
			}

		}
		if($op1!=0){
			$rtn[0]=round($op1/$total*100);
		}else
			$rtn[0]=0;
			//
		if($op2!=0){
			$rtn[1]=round($op2/$total*100);
		}else
			$rtn[1]=0;
			//
		if($op3!=0){
			$rtn[2]=round($op3/$total*100);

		}else
			$rtn[2]=0;
			//
		if($op4!=0){
			$rtn[3]=round($op4/$total*100);

		}else
			$rtn[3]=0;
		
		
		
		
		

		if($op1){
			$rtn[4]=$optn->opt1;
		}else
			$rtn[4]=null;
			//
		if($op2){
			$rtn[5]=$optn->opt2;
		}else
			$rtn[5]=null;
			//
		if($op3){
			$rtn[6]=$optn->opt3;
		}else
			$rtn[6]=null;
			//
		if($op4){
			$rtn[7]=$optn->opt4;

		}else
			$rtn[7]=null;
		return $rtn; 
	}

	public static function get_percentage_drop($id){
		$rspn = DB::table('responses')->where('question_id', '=', $id)
		->get();
		$optn = DB::table('options')->where('qsn_id', '=', $id)
		->first();
		$op1=0; $op2=0; $op3=0; $op4=0; $op5=0;
		$total = count($rspn);
		foreach ($rspn as $rs) {
			if($rs->res1==$optn->opt1){
				$op1++;
			}elseif($rs->res1==$optn->opt2){
				$op2++;
			}elseif($rs->res1==$optn->opt3){
				$op3++;
			}elseif($rs->res1==$optn->opt4){
				$op4++;
			}elseif($rs->res1==$optn->opt4){
				$op5++;
			}

		}
		if($op1!=0){
			$rtn[0]=round($op1/$total*100);
		}else
			$rtn[0]=0;
			//
		if($op2!=0){
			$rtn[1]=round($op2/$total*100);
		}else
			$rtn[1]=0;
			//
		if($op3!=0){
			$rtn[2]=round($op3/$total*100);

		}else
			$rtn[2]=0;
			//
		if($op4!=0){
			$rtn[3]=round($op4/$total*100);

		}else
			$rtn[3]=0;
		if($op5!=0){
			$rtn[9]=round($op5/$total*100);

		}else
			$rtn[9]=0;
		
		
		
		
		

		if($op1){
			$rtn[4]=$optn->opt1;
		}else
			$rtn[4]=null;
			//
		if($op2){
			$rtn[5]=$optn->opt2;
		}else
			$rtn[5]=null;
			//
		if($op3){
			$rtn[6]=$optn->opt3;
		}else
			$rtn[6]=null;
			//
		if($op4){
			$rtn[7]=$optn->opt4;

		}else
			$rtn[7]=null;
			//
		if($op4){
			$rtn[8]=$optn->opt5;

		}else
			$rtn[8]=null;
		return $rtn; 
	}

	public static function is_anonim($id,$uid){
		

		$ano = DB::table('perticipation')
		 ->where('survey_id', '=', $id)
		 ->where('user_id', '=', $uid)->get();
		foreach($ano as $anom){
			if($anom->anonim=='yes'){
				return 'yes';
			}elseif($anom->anonim=='no'){
				return 'no';
			}
			else
				return 'yes';
			
		}	
	
		
		

	}

}