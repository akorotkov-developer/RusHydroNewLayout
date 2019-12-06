<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string

$strReturn = '';

$strReturn .= '<ul class="breadcrumbs">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0? '' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<li class="breadcrumbs_item"><a class="breadcrumbs_link" href="'.$arResult[$index]["LINK"].'">'.$title.'</a></li>
		';
	}
	else
	{
		$strReturn .= '<li class="breadcrumbs_item"><span class="breadcrumbs_link">'.$title.'</span></li>';
	}
}

$strReturn .= '</ul>';

return $strReturn;

