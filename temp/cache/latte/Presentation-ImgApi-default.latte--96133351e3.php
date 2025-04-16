<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\web\app\Presentation\ImgApi/default.latte */
final class Template_96133351e3 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\web\\app\\Presentation\\ImgApi/default.latte';

	public const Blocks = [
		['content' => 'blockContent', 'title' => 'blockTitle'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['file' => '14', 'fileImg' => '24'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div id="banner">
';
		$this->renderBlock('title', get_defined_vars()) /* line 3 */;
		echo '</div>

<div id="content">
    
    
';
		$ʟ_tmp = $this->global->uiControl->getComponent('imageUploadForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 9 */;

		echo '

 	<h2>Nahrané obrázky PNG:</h2>
<ul>
';
		foreach ($uploads as $file) /* line 14 */ {
			echo '    <div class="row">
    <div class="col-md-2">
        <li class=""><img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 17 */;
			echo '/uploads//png/';
			echo LR\Filters::escapeHtmlAttr($file) /* line 17 */;
			echo '" class="img-fluid" alt="';
			echo LR\Filters::escapeHtmlAttr($file) /* line 17 */;
			echo '" width="100"> ';
			echo LR\Filters::escapeHtmlText($file) /* line 17 */;
			echo '</li>
    </div>
    </div>
';

		}

		echo '</ul>
 	<h2>Nahrané obrázky JPG:</h2>
<ul>
';
		foreach ($uploadsImgs as $fileImg) /* line 24 */ {
			echo '    <div class="row">
    <div class="col-md-2">
        <li><img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 27 */;
			echo '/uploads/img/';
			echo LR\Filters::escapeHtmlAttr($fileImg) /* line 27 */;
			echo '" class="img-fluid" alt="';
			echo LR\Filters::escapeHtmlAttr($fileImg) /* line 27 */;
			echo '" width="100"> ';
			echo LR\Filters::escapeHtmlText($fileImg) /* line 27 */;
			echo '</li>
    </div>
    </div>
';

		}

		echo '</ul>


    <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 34 */;
		echo '">Zpět</a>

</div>
';
	}


	/** n:block="title" on line 3 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '	<h1>Img</h1>
';
	}
}
