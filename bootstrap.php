<?php
class murilo003skeleton_Bootstrap {

    public static function init($bootstrap) {
        # Register assets
        Siberian_Assets::registerAssets("murilo003skeleton2025", "/app/local/modules/murilo003skeleton/resources/var/apps/");
        Siberian_Assets::addJavascripts(array(
            "modules/layout/home/murilo003skeleton/hooks.js",
        ));
        Siberian_Assets::addStylesheets(array(
            "modules/layout/home/murilo003skeleton/style.css",
        ));
    }
}
