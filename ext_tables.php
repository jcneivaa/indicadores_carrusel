<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Unal.IndicadoresCarrusel',
            'Carruselindicadores',
            'Carrusel Indicadores'
        );

        $_EXTKEY='indicadores_carrusel';
        $extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);

        //pi_flexform value for cifras preview
        $frontendpluginName = 'Carruselindicadores';
        $pluginSignature = strtolower($extensionName).'_'.strtolower($frontendpluginName);

        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature]= 'select_key, pages, recursive';

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:'.$_EXTKEY.'/Configuration/FlexForms/indicadores_carrusel.xml');






        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('indicadores_carrusel', 'Configuration/TypoScript', 'Carrusel de Indicadores Estadisticos');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_indicadorescarrusel_domain_model_indicador', 'EXT:indicadores_carrusel/Resources/Private/Language/locallang_csh_tx_indicadorescarrusel_domain_model_indicador.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_indicadorescarrusel_domain_model_indicador');

    }
);
