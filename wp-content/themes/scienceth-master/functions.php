<?php
require_once('inc/supports.php');
require_once('inc/assets.php');
require_once('inc/apparence.php');
require_once('inc/menus.php');
require_once('inc/login.php');
require_once("inc/customizeDashboard.php");



function sciencetech_icon(string $name): string
{
  $spriteUrl = get_template_directory_uri() . '/assets/images/sprite.14d9fd56.svg';
  return <<<HTML
<svg width="30px" height="30px"  class="icon"><use xlink:href="{$spriteUrl}#{$name}"></use></svg>
HTML;
}
