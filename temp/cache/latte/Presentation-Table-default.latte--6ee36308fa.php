<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\web\app\Presentation\Table/default.latte */
final class Template_6ee36308fa extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\web\\app\\Presentation\\Table/default.latte';

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
   <div id="current-time"></div>
   

<div id="content">
<h2>Filtr pro vyhledávání</h2>
<p>Do pole pro zadání zadejte vyhledávaný výraz, který hledáte v tabulce -jména, příjmení nebo e-maily:</p>
<input id="myInput" type="text" placeholder="Vyhledávání..">
	<table>
        <thead>
            <tr>
                <th>Jméno</th>
                <th>Příjmení</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
            </tr>
            <tr>
                <td>Igor</td>
                <td>Randal</td>
                <td>iRA@gmail.com</td>
            </tr>
        </tbody>
    </table>
<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 33 */;
		echo '">Zpět</a>
</div>


';
	}


	/** n:block="title" on line 3 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '	<h1>Tabulka</h1>
';
	}
}
