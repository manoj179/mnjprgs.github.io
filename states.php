<?php

$allstates="Mississippi Alabama Texas Massachussets Kansas";
$states=explode(' ',$allstates);
$stateList=[];

echo $allstates;
$i=0;
foreach($states as $state)
{
	if(preg_match('/xas$/',$state))
	{
		$stateList[$i]=$state;
		$i=$i+1;
	}
}

foreach($states as $state)
{
	if(preg_match('/^K.*s$/',$state))
	{
		$stateList[$i]=$state;
		$i=$i+1;
	}
}

foreach($states as $state)
{
	if(preg_match('/^M.*s$/',$state))
	{
		$stateList[$i]=$state;
		$i=$i+1;
	}
}

foreach($states as $state)
{
	if(preg_match('/a$/',$state))
	{
		$stateList[$i]=$state;
		$i=$i+1;
	}
}

foreach($stateList as $element => $value)
{
	print("<br/>Index [".$element."] contains <strong>".$value."</strong>");
}

?>