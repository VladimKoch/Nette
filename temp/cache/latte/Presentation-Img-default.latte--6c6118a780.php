<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\web\app\Presentation\Img/default.latte */
final class Template_6c6118a780 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\web\\app\\Presentation\\Img/default.latte';

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
			foreach (array_intersect_key(['file' => '14'], $this->params) as $ʟ_v => $ʟ_l) {
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

		echo '
<div id="banner">
';
		$this->renderBlock('title', get_defined_vars()) /* line 4 */;
		echo '</div>

<div id="content">
';
		$ʟ_tmp = $this->global->uiControl->getComponent('imageUploadForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 8 */;

		echo '
	<h2>Nahrané obrázky:</h2>
<ul>
';
		foreach ($uploads as $file) /* line 14 */ {
			echo '        <li><img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 15 */;
			echo '/uploads/';
			echo LR\Filters::escapeHtmlAttr($file) /* line 15 */;
			echo '" alt="';
			echo LR\Filters::escapeHtmlAttr($file) /* line 15 */;
			echo '" width="100"> ';
			echo LR\Filters::escapeHtmlText($file) /* line 15 */;
			echo '</li>
';

		}

		echo '</ul>

<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:')) /* line 19 */;
		echo '">Zpět</a>
</div>

';
	}


	/** n:block="title" on line 4 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '	<h1>Upload Obrázků</h1>
';
	}
}
