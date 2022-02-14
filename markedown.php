<?php
	require 'vendor/autoload.php';
	use Michelf\Markdown;

	$my_text = '## 이거슨 H2 입니다.'; //#이 1개면 H1
	$my_html = Markdown::defaultTransform($my_text);
	echo $my_html;
?>
