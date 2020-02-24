
plugin.tx_indicadorescarrusel_carruselindicadores {
    view {
        templateRootPaths.0 = EXT:indicadores_carrusel/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_indicadorescarrusel_carruselindicadores.view.templateRootPath}
        partialRootPaths.0 = EXT:indicadores_carrusel/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_indicadorescarrusel_carruselindicadores.view.partialRootPath}
        layoutRootPaths.0 = EXT:indicadores_carrusel/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_indicadorescarrusel_carruselindicadores.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_indicadorescarrusel_carruselindicadores.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}


page{

    includeCSS {

        indicadores-carrusel = EXT:indicadores_carrusel/Resources/Public/Css/indicadores-carrusel.scss
        slick = EXT:indicadores_carrusel/Resources/Public/Css/slick.css
        slick-theme = EXT:indicadores_carrusel/Resources/Public/Css/slick-theme.css

    }

    includeJS {

        slick = EXT:indicadores_carrusel/Resources/Public/Js/slick.min.js
        indicadores-carrusel = EXT:indicadores_carrusel/Resources/Public/Js/indicadores_unal.js

    }



}
