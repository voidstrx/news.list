<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
/** @var array $arResult */
?>
<div id="barba-wrapper"><div class="article-list">

	<? foreach ($arResult["ITEMS"] as $arItem): ?>
		<a class="article-item article-list__item" href="<?= $arItem["DETAIL_PAGE_URL"] ?>" data-anim="anim-3">
			<div class="article-item__background">
				<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"/>
			</div>
			<div class="article-item__wrapper">
				<div class="article-item__title"><? echo $arItem["NAME"] ?></div>
				<div class="article-item__content"><? echo $arItem["PREVIEW_TEXT"]; ?></div>
			</div>
		</a>
	<? endforeach; ?>

</div></div>