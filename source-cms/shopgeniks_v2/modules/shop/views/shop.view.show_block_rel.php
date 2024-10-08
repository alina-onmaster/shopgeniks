<?php
/**
 * Шаблон блока похожих товаров
 *
 * Шаблонный тег <insert name="show_block_rel" module="shop" [count="количество"]
 * [images="количество_изображений"] [images_variation="тег_размера_изображений"]
 * [template="шаблон"]>:
 * блок похожих товаров
 *
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2018 OOO «Диафан» (http://www.diafan.ru/)
 */

if (! defined('DIAFAN'))
{
    $path = __FILE__;
	while(! file_exists($path.'/includes/404.php'))
	{
		$parent = dirname($path);
		if($parent == $path) exit;
		$path = $parent;
	}
	include $path.'/includes/404.php';
}

if(!empty($result['rows'])) {
  echo '<div class="page__wrapper-content-a">
          <h2>' . $this->diafan->_('Похожие товары') . '</h2>
          <div class="products-cards">
              <ul class="products-cards__list">
                  ' . $this->get($result["view_rows"], 'shop', $result) . '
              </ul>
          </div>
      </div>';
} else {
  echo $this->htmleditor('<insert name="show_block" module="shop" count="4" cat_id="current" sort="rand" images="1" template="this-cat">');
}
