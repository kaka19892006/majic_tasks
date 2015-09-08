
<html>
<head>
	<link rel="stylesheet" href="/css/zen.css" />
	<style>
	
	.overlay {
		position:absolute; 
		left:50%; 
		top:50px; 
		margin-left:-155px
	}


#highlighter {
    -ms-transform: rotate(90deg); /* IE 9 */
    -webkit-transform: rotate(90deg); /* Chrome, Safari, Opera */
    transform: rotate(90deg);
}
	</style>

	<script src="/js/tmb.js"></script>
	<script src="/js/zen.js"></script>
	<script src="/js/json.js"></script>
	<script src="/js/keydown.js"></script>

	
<script type="text/javascript">

//retrieve get parameters
function getQueryVariable(variable) {
  var query = window.location.search.substring(1);
  var vars = query.split("&");
  for (var i=0;i<vars.length;i++) {
    var pair = vars[i].split("=");
    if (pair[0] == variable) {
      return pair[1];
    }
  } 
}

var total_transition_time0 = getQueryVariable("dur");
var num_trials0 = getQueryVariable("num_trials");

var total_transition_time = (total_transition_time0) ? total_transition_time0 : 1200;
var num_trials = (num_trials0) ? num_trials0 : 100;

practice_trials = new Array("images/scrambled.png","images/city6.png","images/city7.png","images/city8.png","images/mountain6.png","images/mountain7.png","images/mountain8.png","images/city9.png","images/mountain9.png","images/city10.png","images/mountain10.png","images/scrambled.png","images/city1.png","images/city2.png","images/city3.png","images/mountain1.png","images/mountain2.png","images/mountain3.png","images/city4.png","images/mountain4.png","images/city5.png","images/mountain5.png","images/city6.png","images/city7.png","images/city8.png","images/mountain6.png","images/mountain7.png","images/mountain8.png","images/city9.png","images/mountain9.png","images/city10.png","images/mountain10.png");
test_trials = new Array("images/scrambled.png","images/city2.png","images/city5.png","images/mountain1.png","images/city9.png","images/city3.png","images/mountain2.png","images/city1.png","images/mountain8.png","images/city1.png","images/city7.png","images/city4.png","images/city10.png","images/city6.png","images/city8.png","images/city3.png","images/mountain2.png","images/mountain5.png","images/city10.png","images/city1.png","images/city10.png","images/city1.png","images/city2.png","images/mountain9.png","images/city10.png","images/city9.png","images/city5.png","images/city6.png","images/city3.png","images/mountain7.png","images/city1.png","images/city5.png","images/mountain3.png","images/city7.png","images/city10.png","images/mountain3.png","images/city4.png","images/city5.png","images/city3.png","images/city9.png","images/city1.png","images/city6.png","images/mountain1.png","images/city7.png","images/mountain6.png","images/city10.png","images/mountain7.png","images/city6.png","images/mountain1.png","images/city9.png","images/city6.png","images/city3.png","images/city2.png","images/city10.png","images/city1.png","images/city10.png","images/city9.png","images/city3.png","images/city5.png","images/mountain9.png","images/city2.png","images/city3.png","images/city10.png","images/city8.png","images/city2.png","images/city6.png","images/city5.png","images/city6.png","images/city1.png","images/city10.png","images/city1.png","images/mountain6.png","images/city9.png","images/city10.png","images/city1.png","images/city5.png","images/city1.png","images/city7.png","images/mountain10.png","images/city8.png","images/city7.png","images/city9.png","images/city6.png","images/city4.png","images/city7.png","images/city3.png","images/mountain7.png","images/city8.png","images/mountain9.png","images/city2.png","images/city6.png","images/city4.png","images/city6.png","images/city3.png","images/city4.png","images/city8.png","images/city9.png","images/mountain9.png","images/city3.png","images/city1.png","images/city4.png","images/city8.png","images/city5.png","images/city3.png","images/mountain6.png","images/city9.png","images/city4.png","images/mountain6.png","images/city4.png","images/mountain1.png","images/city4.png","images/city3.png","images/mountain9.png","images/city8.png","images/mountain1.png","images/city3.png","images/city8.png","images/city5.png","images/city7.png","images/city10.png","images/city1.png","images/city5.png","images/city9.png","images/city2.png","images/city5.png","images/city7.png","images/city6.png","images/city5.png","images/city6.png","images/city1.png","images/city9.png","images/city8.png","images/mountain3.png","images/mountain4.png","images/city1.png","images/city10.png","images/city7.png","images/city2.png","images/city8.png","images/city5.png","images/mountain9.png","images/city10.png","images/city8.png","images/mountain5.png","images/city7.png","images/city8.png","images/city10.png","images/city1.png","images/city5.png","images/city6.png","images/city8.png","images/city4.png","images/city10.png","images/mountain7.png","images/city7.png","images/city8.png","images/city10.png","images/city9.png","images/city7.png","images/city9.png","images/city6.png","images/mountain5.png","images/city2.png","images/city8.png","images/city9.png","images/city2.png","images/city7.png","images/mountain7.png","images/city8.png","images/city10.png","images/city9.png","images/city10.png","images/city9.png","images/city6.png","images/city9.png","images/city1.png","images/city2.png","images/city4.png","images/city8.png","images/city10.png","images/city6.png","images/mountain8.png","images/city4.png","images/city9.png","images/city2.png","images/city7.png","images/city2.png","images/city5.png","images/city1.png","images/city9.png","images/city2.png","images/city7.png","images/city5.png","images/city10.png","images/city8.png","images/mountain8.png","images/city8.png","images/city1.png","images/city10.png","images/city3.png","images/city7.png","images/city6.png","images/city7.png","images/city1.png","images/city8.png","images/city4.png","images/city9.png","images/mountain2.png","images/city4.png","images/city8.png","images/city4.png","images/mountain2.png","images/city9.png","images/city10.png","images/city5.png","images/city9.png","images/city1.png","images/city4.png","images/mountain7.png","images/city6.png","images/city8.png","images/mountain7.png","images/city3.png","images/city2.png","images/city9.png","images/mountain4.png","images/city10.png","images/city3.png","images/mountain1.png","images/city2.png","images/mountain4.png","images/city7.png","images/city8.png","images/city4.png","images/city3.png","images/city6.png","images/city4.png","images/mountain5.png","images/city3.png","images/city6.png","images/city2.png","images/city6.png","images/city4.png","images/city3.png","images/mountain8.png","images/mountain9.png","images/city10.png","images/city8.png","images/city10.png","images/city9.png","images/city10.png","images/city1.png","images/city5.png","images/city1.png","images/city10.png","images/city2.png","images/city3.png","images/city4.png","images/city2.png","images/mountain10.png","images/city8.png","images/city7.png","images/city9.png","images/city5.png","images/city8.png","images/city2.png","images/city8.png","images/city3.png","images/city8.png","images/city1.png","images/city5.png","images/city3.png","images/city8.png","images/city3.png","images/city5.png","images/city1.png","images/city8.png","images/mountain8.png","images/city2.png","images/city3.png","images/city8.png","images/city1.png","images/city8.png","images/city6.png","images/city8.png","images/city9.png","images/mountain5.png","images/city7.png","images/city9.png","images/city2.png","images/city9.png","images/city4.png","images/city8.png","images/city10.png","images/city3.png","images/city9.png","images/city4.png","images/city2.png","images/city9.png","images/city10.png","images/scrambled.png");
trials = [];
trials = practice_trials.concat(test_trials);

practice_trialType = new Array(2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2);
test_trialType = new Array(2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2);
trialType = [];
trialType = practice_trialType.concat(test_trialType);

practice_correct = new Array(0,1,1,1,0,0,0,1,0,1,0,0,1,1,1,0,0,0,1,0,1,0,1,1,1,0,0,0,1,0,1,0);
test_correct = new Array(2,1,1,0,1,1,0,1,0,1,1,1,1,1,1,1,0,0,1,1,1,1,1,0,1,1,1,1,1,0,1,1,0,1,1,0,1,1,1,1,1,1,0,1,0,1,0,1,0,1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,0,1,1,1,1,1,1,1,0,1,0,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,0,1,1,0,1,0,1,1,0,1,0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,0,1,1,1,1,1,1,0,1,1,0,1,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,1,0,1,1,1,1,1,0,1,1,1,1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,1,1,1,1,1,0,1,1,1,0,1,1,1,1,1,1,0,1,1,0,1,1,1,0,1,1,0,1,0,1,1,1,1,1,1,0,1,1,1,1,1,1,0,0,1,1,1,1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,1,1,1,1,1,1,1,2);
correct = [];
correct = practice_correct.concat(test_correct);

var image1;
var image2;
var shiftImages;
var opaq2tran = 100;
var tran2opaq = 0;
var timerID;
var timerIDR;
var initChangeTime = 150;
var testChangeTime = total_transition_time/16;
var changeTime;  //in ms
var changePercent = 6.25; //of 100
var fbTime = 300;
var response_lag = 200;
var trialStart;

var pracTimingDone = false;

var trialNumber = 1;
var totalTrials = +33 + +num_trials;

var pracTerminate1 = 11;
var pracTerminate2 = 32;

var progress_init = 2;
var progress_inc = 2;
var progress = progress_init;
var progress_total = 166;
progress_img = new Image();
progress_img.src = "/images/button_gradient.png";
var lowBound = 40;
var highBound = 80;
var midBound = 60;


response = new Array();
rt = new Array();
responseAssign = new Array();
percentageImageN = new Array();
accuracy = new Array();
trialLength = new Array();
rtCall = new Array();

data = new Array();
var practice = 0; //three states: 0 if not practice; 1 for first gradonset practice; 2 for second

function initialize() {
	showSlide("inst1");
}

function trial_begin() {
	changeTime = (pracTimingDone) ? testChangeTime : initChangeTime;
	if (pracTerminate1 == trialNumber) {
		pracTimingDone = true;
		//alert("end practice");
		trialNumber++;
		showSlide("inst3");
	} else if (pracTerminate2 == trialNumber) {
		trialNumber++;
		showSlide("inst4");
	} else {
	showSlide("stim");
	image1 = trials[trialNumber - 1];
	image2 = trials[trialNumber];
	$$$('image1').src = image1;
	SetOpacity("image1",100);
	$$$('image2').src = image2;
	SetOpacity("image2",0);
	getKeyboardInput_down(
		[1,2,"space"],
		handleResponse,
		"test",
		duration = 0
		);
	trialStart = new Date();
	shift_images();
	}
}
	

function handleResponse(input, state, mode) {
	//document.onkeydown = null;
	//timerIDR = setTimeout("reactivate_response()",response_lag);
	var response = (input.response) ? input.response : input; // in case touchpad later
	if (response == 1 | response == "space") {
		var keypressTime = new Date();
		var responseTime = keypressTime - trialStart;
		//console.log(responseTime);
		var percentage = tran2opaq;
		var which_trial = assignRT(percentage,trialNumber);
		if (which_trial && trialNumber > 0) { // first trial dudn't count
 			//console.log("which:"+which_trial+" n:"+trialNumber);
			response[which_trial] = 1;
			responseAssign[which_trial] = (which_trial == trialNumber) ? 2 : 1;
			if (which_trial == trialNumber) {
				rt[which_trial] = responseTime;
			} else {
				rt[which_trial] = responseTime+changeTime*(100/changePercent);
			}
			percentageImageN[which_trial] = percentage;
			if (correct[which_trial] == 1) {
				accuracy[which_trial] = 1;
				if (!pracTimingDone) { 
					$$$("highlighter").innerHTML = ":-)";
					$$$("highlighter").style.color = "blue";
					timerID = setTimeout("remove_em()",fbTime);
				}	
			} else if (correct[which_trial] == 0) {
				if (!pracTimingDone) { 
					$$$("highlighter").innerHTML = ":-(";
					$$$("highlighter").style.color = "red";
					timerID = setTimeout("remove_em()",fbTime);
				}
				//alert("percentage");
				accuracy[which_trial] = -1;
			} 
				
			//console.log(accuracy[which_trial]);
		}
	}
	
}

/**
function reactivate_response() {
	clearTimeout(timerIDR);
	getKeyboardInput_down(
		[1,2,"space"],
		handleResponse,
		"test",
		duration = 0
		);
}
**/
	
function assignRT(percentage,n) {
	//console.log(n+" "+percentage+"%");
	if (rt[n-1] && rt[n]) {
		// rts already logged for both current and previous trials
		return 0;
	} else if (rt[n-1] && (percentage < lowBound)) {
		// rts already logged for previous trial, response is too early for current trial
		return 0;
	} else if (rt[n] && (percentage > highBound)) {
		// rts already logged for current trial, response is too late for previous trial
		return 0;
	} else if (!(rt[n-1]) && (percentage < lowBound)) {
		rtCall[n-1] = 1;
		return n-1;
	} else if (!(rt[n]) && (percentage > highBound)) {
		rtCall[n] = 2;
		return n;
	} else if (((percentage >= lowBound) && (percentage <= highBound)) && rt[n-1] && !(rt[n])) { 
		//AMBIGUOUS TRIAL: RT logged for previous but not current trial, assign to current trial
		rtCall[n] = 3;
		return n;
	} else if (((percentage >= lowBound) && (percentage <= highBound)) && rt[n] && !(rt[n-1]) && (correct[n-1] == 1)) { 
		//AMBIGUOUS TRIAL: RT logged for current but not previous trial, previous is a GO trial
		rtCall[n-1] = 4;
		return n-1;
	} else if (((percentage >= lowBound) && (percentage <= highBound)) && !(rt[n-1]) && !(rt[n]) && (correct[n] == 0) && (correct[n-1] == 1)) {
		// AMBIGUOUS TRIAL: no rt assigned to either current or previous trial, previous trial is a GO, current trial is a NOGO ==> assign rt to previous
		rtCall[n-1] = 5;
		return n-1;
	} else if (((percentage >= lowBound) && (percentage <= highBound)) && !(rt[n-1]) && !(rt[n]) && (correct[n] == 1) && (correct[n-1] == 0)) {
		// AMBIGUOUS TRIAL: no rt assigned to either current or previous trial, previous trial is a NOGO, current trial is a GO ==> assign rt to previous
		rtCall[n] = 6;
		return n;
	} else if (((percentage > midBound) && (percentage <= highBound)) && !(rt[n-1]) && !(rt[n]) && (correct[n] == correct[n-1])) {
		// AMBIGUOUS TRIAL: upper range of ambiguous, no RTs for current or previous trials, current and previous trials are same type of trial
		rtCall[n] = 7;
		return n;
	} else if (((percentage >= lowBound) && (percentage <= midBound)) && !(rt[n-1]) && !(rt[n]) && (correct[n] == correct[n-1])) {
		//AMBIGUOUS TRIAL:  lower range of ambiguous, no RTs for current or previous trials, current and previous trials are same type of trial
		rtCall[n-1] = 8;
		return n-1;
	} else {
		//should never get here
		return 0;
	}
}


function remove_em() {
	$$$("highlighter").innerHTML = "";
	clearTimeout(timerID);
}
	

function SetOpacity( imageid, opacity ) {
    var s= document.getElementById(imageid).style;
    s.opacity = ( opacity / 100 );
    s.MozOpacity = ( opacity / 100 );
    s.KhtmlOpacity = ( opacity / 100 );
    s.filter = 'alpha(opacity=' + opacity + ')';
}


function shift_images() {
SetOpacity("image1",opaq2tran);
SetOpacity("image2",tran2opaq);
shiftImages = setInterval("change_transparency()",changeTime);
}

function change_transparency() {
opaq2tran = opaq2tran - changePercent;
tran2opaq = tran2opaq + changePercent;
SetOpacity("image1",opaq2tran);
SetOpacity("image2",tran2opaq);
check_trial();
}

function check_trial() {
	if(opaq2tran == 0) {
		clearInterval(shiftImages)
		trial_log();
		trialNumber++;
		if (trialNumber >= totalTrials) {
			save_data();
		} else {
			opaq2tran = 100;
			tran2opaq = 0;
			trial_begin();
		}
	}
}

function trial_log() {
	var trialEnd = new Date();
	trialLength[trialNumber] = trialEnd - trialStart;
	if (!(rt[trialNumber])) {
		//console.log("NO RESPONSE");
		response[trialNumber] = 0;
		rt[trialNumber] = 0;
		responseAssign[trialNumber] = 0;
		percentageImageN[trialNumber] = 0;
		
		if (correct[trialNumber] == 0) {
			accuracy[trialNumber] = 1;
		} else if (correct[trialNumber] == 1) {
			accuracy[trialNumber] = 0;
		}
	} 
}


function commission_error(trial) {
	d = (trial['accuracy'] == -1 ? true : false);
	return d;
}

function istrial(trial) {
	d = (trial['type'] == 1 ? true : false);
	return d;
}

function omission_error(trial) {
	d = (trial['accuracy'] == 0 ? true : false);
	return d;
}

function save_data() {
for (var i=1;i<trials.length;i++)
{ 
	//if(i==33) { alert(accuracy[i]); }
data.push({
		trial:i,
		type:(typeof trialType[i] !== 'undefined' && trialType[i] !== null) ? trialType[i] : "NA",
		stim:(typeof trials[i] !== 'undefined' && trials[i] !== null) ? trials[i] : "NA",
		correct:(typeof correct[i] !== 'undefined' && correct[i] !== null) ? correct[i] : "NA",
		rt:(typeof rt[i] !== 'undefined' && rt[i] !== null) ? rt[i] : "NA",
		accuracy:(typeof accuracy[i] !== 'undefined' && accuracy[i] !== null) ? accuracy[i]: "NA",
		responseAssign:(typeof responseAssign[i] !== 'undefined' && responseAssign[i] !== null) ? responseAssign[i] : "NA",
		percentageImageN:(typeof percentageImageN[i] !== 'undefined' && percentageImageN[i] !== null) ? percentageImageN[i] : "NA",
		trialLength: (typeof trialLength[i] !== 'undefined' && trialLength[i] !== null) ? trialLength[i] : "NA",
		rtCall: (typeof rtCall[i] !== 'undefined' && rtCall[i] !== null)? rtCall[i] : "NA"
});
}
$$$('data').value = JSON.stringify(data);
var trials_only = data.partition(istrial);
var CE = trials_only[0].partition(commission_error);
var OE = trials_only[0].partition(omission_error);
var CEprop = Math.round(100 * CE[0].length / 32);
var OEprop = Math.round(100 * OE[0].length / 267);
$$$('score').value = 100 - CEprop;
$$$('form').submit();
}


var pracNum = 1;
var totalPrac = 10;

var pracDur1 = 3500;
var pracDur2 = 200;
 
/*****************************************************************/
/****** FUNCTION FOR INITIAL NO TRANSITION PRACTICE TRIALS *******/
/*****************************************************************/
 
pracTrials = new Array("images/scrambled.png","images/city1.png","images/city2.png","images/city3.png","images/mountain1.png","images/mountain2.png","images/mountain3.png","images/city4.png","images/mountain4.png","images/city5.png","images/mountain5.png","success.png","fail.png","stop.png");
pracCorrect = new Array(0,1,1,1,0,0,0,1,0,1,0);
pracTotalCorrects = 0;

function practice_begin1() {
	if (pracNum > totalPrac) {
		//document.onkeydown = null;
		showSlide("inst2");
	} else {
		clearTimeout(timerID);
		image2 = "images/scrambled.png";
		image1 = pracTrials[pracNum];
		$$$('image1').src = image1;
		$$$('image2').src = image2;
		showSlide("stim");
		getKeyboardInput_down(
			[1,2,"space"],
			handleResponsePrac,
			"test",
			duration = 0
			);
		timerID = setTimeout("feedback(0)",pracDur1);
	}
}
	


function handleResponsePrac(input, state, mode) {
	document.onkeydown = null;
	var response = (input.response) ? input.response : input; // in case touchpad later
	if (response == 1 | response == "space") {
		feedback(1);
	}
}

function feedback(val) {
	clearTimeout(timerID);
	showSlide("feedback_wrapper");
	if (pracCorrect[pracNum] == val) {
		var fb = "success.png";
		var delay = 1500;
	} else if (val == 0) {
		var fb = "fail.png";
		var delay = 1500;
	} else {
		var fb = "fail.png";
		var delay = 1500;
	}
	$$$('feedback_image').src = fb;
	pracNum++;
	timerID = setTimeout("practice_begin1()",delay);
}



function repeat_practice1() {
	pracNum = 1;
	showSlide("inst1");
}

function repeat_practice2() {
	trialNumber = 1;
	rt = [];
	pracTimingDone = false;
	trial_begin();
}

function repeat_practice3() {
	trialNumber = pracTerminate1;
	trial_begin();
}

function initiate_speed() {
	$$$('image1').src = "images/scrambled.png";
	SetOpacity("image1",100);
	showSlide("stim");
	timerID = setTimeout("initiate_trial()",800)
}

function initiate_trial() {
	clearTimeout(timerID);
	trial_begin();
}


</script>
</head>
<body>

<div class="slide" id="stim" style="text-align:center;margin:0 auto">


<img class="overlay" id="image1" src="images/scrambled.png" style="z-index:0">
<img class="overlay" id="image2" src="images/scrambled.png" style="z-index:-1">
<img class="overlay" id="image2" src="images/gray.png" style="z-index:-2">
<div id="highlighter" style="position:absolute;width:100px;height:10px;top:326px;left:50%;margin-left:-50px;font-size:3em"></div>

</div>

<div class="slide" style='text-align:center: margin:0 auto; margin-top:50px' id="feedback_wrapper">
	<img id="feedback_image" src="success.png">
</div>


<div class="slide" id="inst1">
<div class="text" style="margin:0 auto; margin-top:50px; text-align:center">
<p><img src="stop.png" style="width:300px;height:300px"></p>
<input type="button" onclick="practice_begin1()" value="Practice - No Timing">
</div></div>

<div class="slide" id="inst2">
<div class="text" style="margin:0 auto; margin-top:50px; text-align:center">
<p><img src="stop.png" style="width:300px;height:300px"></p>
<input type="button" onclick="trial_begin()" value="Slow Practice">
</div></div>

<div class="slide" id="inst3">
<div class="text" style="margin:0 auto; margin-top:50px; text-align:center">
<p><img src="stop.png" style="width:300px;height:300px"></p>
<input type="button" onclick="initiate_speed()" value="Faster Practice">
</div></div>


<div class="slide" id="inst4">
<div class="text" style="margin:0 auto; margin-top:50px; text-align:center">
<p><img src="stop.png" style="width:300px;height:300px"></p>
<input type="button" onclick="initiate_speed()" value="Begin Test">
</div></div>



<script>
preload(practice_trials,initialize);

</script>


<form id='form' action='/run' method='POST' onsubmit='return false'>
	<input type='hidden' name='score' id='score' />
	<input type='hidden' name='data' id='data' />
</form>

</body>
</html>

