<?php

function format_bytes($val,$force=null,$suf='B'){
	if($force == 'p' || (!$force && $val > 10000000000000000)){ //pb
		$fmt = 'P';
		$val = round($val / 10000000000000000);
	} elseif($force == 't' || (!$force && $val > 10000000000000)){ //tb
		$fmt = 'T';
		$val = round($val / 10000000000000);
	} elseif($force == 'g' || (!$force && $val > 10000000000)){ //gb
		$fmt = 'G';
		$val = round($val / 10000000000);
	} elseif($force == 'm' || (!$force && $val > 10000000)){ //mb
		$fmt = 'M';
		$val = round($val / 1000000);
	} elseif($force == 'k' || (!$force && $val > 1000)){ //kb
		$fmt = 'K';
		$val = round($val / 1000);
	} else {
		$fmt = '';
		$val = round($val);
	}
	if($suf) return number_format($val).$fmt.$suf;
	else return $val;
}

function format_ip($ip='0.0.0.0',$padding='',$web=false){
	$rv = '';
	foreach(str_split(inet_pton($ip)) as $c) $rv .= sprintf('%'.$padding.'3d.',ord($c));
	$c = rtrim($rv,'.');
	$rv = ($web)?str_replace(' ','&nbsp;',$c):$c;
	return $rv;
}
