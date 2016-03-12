<?php
/**
 * Part of the Platform Dashboard extension.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the WTFPL license.
 *
 * @package    Platform Dashboard extension
 * @version    3.0.0
 * @author     Sanatorium
 * @license    WTFPL
 * @copyright  2016, Sanatorium
 * @link       http://sanatorium.ninja
 */

return [

	'general' => [

		'legend'       => 'Details',

        'id'           => '#',
        'id_help'      => 'Unikátní identifikátor.',

        'created_at'   => 'Vytvořeno',

        'name'         => 'Název',
		'name_help'    => 'Napište popisný název pro váš obsah.',

		'slug'         => 'Slug',
		'slug_help'    => 'Napište unikátní identifikátor "slug" pro váš atribut (měl by obsahovat pouze malá písmena bez diakritiky a případně čísla, podtržítka apod.).',

		'enabled'      => 'Status',
		'enabled_help' => 'Má být obsah veřejně viditelný?',

		'type'         => 'Typ úložiště',
		'type_help'    => 'Jak chcete ukládat obsah?',

		'database'     => 'Databáze',
		'filesystem'   => 'Souborový systém',

		'value'        => 'Obsah',
		'value_help'   => 'Obsah. Příkaz @content je povolen.',

		'file'         => 'Soubor',
		'file_help'    => 'Soubor skrze který se má vykreslovat obsah.',

        'statuses'     => [
            'enabled'  => 'Zobrazeno',
            'disabled' => 'Skryto'
        ]

	],

];
