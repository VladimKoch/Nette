<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\web\app\Presentation\Login/login.latte */
final class Template_59a589f91c extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\web\\app\\Presentation\\Login/login.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}
	}
}
