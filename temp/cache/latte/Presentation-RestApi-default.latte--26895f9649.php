<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\web\app\Presentation\RestApi/default.latte */
final class Template_26895f9649 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\web\\app\\Presentation\\RestApi/default.latte';

	public const Blocks = [
		['content' => 'blockContent'],
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


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<h1>Nahrát obrázek</h1>

<form action="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('RestApi:Convert')) /* line 4 */;
		echo '" method="post" enctype="multipart/form-data">
    <div>
        <label for="image">Vyberte obrázek (JPEG):</label>
        <input type="file" name="image" id="image" accept="image/jpeg" required>
    </div>
    <div>
        <button type="submit">Nahrát a převést</button>
    </div>
</form>

';
	}
}
