<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('boycott_dev', 'Boycott Israel');
?>
<!DOCTYPE html>
<html>
	<head>
		<?php echo $this -> Html -> charset(); ?>
		<title> <?php echo $cakeDescription ?>:
			<?php echo $title_for_layout; ?>
		</title>
		<?php
		echo $this -> Html -> meta('icon');

		echo $this -> Html -> css('media.query.css');
		echo $this -> Html -> css('layout');
		echo $this -> Html -> css('framework');
		echo $this -> Html -> css('homepage');
		echo $this -> Html -> css('nav');

		echo $this -> fetch('meta');
		echo $this -> fetch('css');
		echo $this -> fetch('script');
		?>
	</head>
	<body>
		<div id="container-1">

			<?php //echo $this->Session->flash(); ?>

			<?php //echo $this->fetch('content'); ?>
			<div class="wrapper row1">
				<?php echo $this -> element('header'); ?>

				<section id="shout" class="clear">
					<div class="form-wrapper cf">

						<form method="get" action="" target="_top" name="search">

							<input id="qyorwa" name="q" lang="ar" type="text" style="font-weight: bold; font-size:small ; float: right;text-align: right;" placeholder="مثلا: أدخل كلمات 'تنوفا' أو 'تبوزينا'" onkeypress="return checkLangAr('search_ar_error',event);">
							<br />
							<button id="qsearch" class="search_submit" onclick="return false;" style="cursor: pointer; ">
								<span>ابحث</span>
							</button>
							<button id="qclear" class="search_submit" onclick="return false;">
								<span style="color:#FFFFFF; font-weight:bold; ">مسح</span>
							</button>
						</form>
						<br>
						<br>
						<div id="ajax-load" style="color:#000;  font-size: small; font-weight:bold;  padding-left: 480px; width:300px; display:none;"></div>

						<div style="color:#000;  font-size: small;  padding-left: 480px; width:400px; display:none;" id="search_ar_error"></div>

						<br>
						<br>
					</div>
					<br>
					<div id="pre" style="text-align: right; font-size: 12px; padding-right: 5%">
						مثلاً , جرب إحدى/بعض هذه الكلمات بالبحث :
						<br>

						<div id="preWord" class="preWords" onclick="setSearchVal('رائع'); return false;">
							تنوفا
						</div>
						<div id="preWord" class="preWords" onclick="setSearchVal('حكاية'); return false;">
							تبوزينا
						</div>
						<div id="preWord" class="preWords" onclick="setSearchVal('حبيبي'); return false;">
							عيليت
						</div>
						<div id="preWord" class="preWords" onclick="setSearchVal('نور'); return false;">
							ريد بول
						</div>
						<div id="preWord" class="preWords" onclick="setSearchVal('قمر'); return false;">
							شامير
						</div>
						<div id="preWord" class="preWords" onclick="setSearchVal('عشق'); return false;">
							زوريل
						</div>
						<div id="preWord" class="preWords" onclick="setSearchVal('غزل'); return false;">
							تامان
						</div>
						<div id="preWord" class="preWords" onclick="setSearchVal('ربيع'); return false;">
							شيلو
						</div>
						<div id="preWord" class="preWords" onclick="setSearchVal('هوى'); return false;">
						هدن
						</div>
						<div id="preWord" class="preWords" onclick="setSearchVal('خريف'); return false;">
							عدين
						</div>
						<div id="preWord" class="preWords" onclick="setSearchVal('قهوة'); return false;">
						 درنك
						</div>
						<div id="preWord" class="preWords" onclick="setSearchVal('أمل'); return false;">
							عدنيم
						</div>
						<div id="preWord" class="preWords" onclick="setSearchVal('طفل'); return false;">
							بيتلي
						</div>
						<div id="preWord" class="preWords" onclick="setSearchVal('طفل'); return false;">
							ياردين
						</div>
						<!--
						<div id="preWord" class="preWords" style="width: 75px;" ><a href="#" onclick='setSearchVal("\"نزار قباني\""); return false;'> نزار قباني </a></div>
						<div id="preWord" class="preWords" style="width: 87px;"><a href="#"  onclick='setSearchVal("\"أحمد شوقي\""); return false;'> أحمد شوقي </a></div>
						<div id="preWord" class="preWords" style="width: 100px;"><a href="#"  onclick='setSearchVal("\"محمود درويش\""); return false;'> محمود درويش  </a></div>
						-->

					</div>
					<div id="res"></div>
					<div id="addMore" class="addMoreClass"></div>
				</section>

			</div>
			<?php echo $this -> element('sevices'); ?>
			<?php echo $this -> element('footer'); ?>

		</div>
		<?php //echo $this->element('sql_dump'); ?>
	</body>
</html>
