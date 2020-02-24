<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Unal.IndicadoresCarrusel',
            'Carruselindicadores',
            [
                'Indicador' => 'list'
            ],
            // non-cacheable actions
            [
                'Indicador' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    carruselindicadores {
                        iconIdentifier = indicadores_carrusel-plugin-carruselindicadores
                        title = LLL:EXT:indicadores_carrusel/Resources/Private/Language/locallang_db.xlf:tx_indicadores_carrusel_carruselindicadores.name
                        description = LLL:EXT:indicadores_carrusel/Resources/Private/Language/locallang_db.xlf:tx_indicadores_carrusel_carruselindicadores.description
                        tt_content_defValues {
                            CType = list
                            list_type = indicadorescarrusel_carruselindicadores
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'indicadores_carrusel-plugin-carruselindicadores',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:indicadores_carrusel/Resources/Public/Icons/user_plugin_carruselindicadores.svg']
			);
		
    }
);
