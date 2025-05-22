<?php
class murilo002skeleton_Bootstrap {

    public static function init($bootstrap) {
        # Register assets
        Siberian_Assets::registerAssets("murilo002skeleton2025", "/app/local/modules/murilo002skeleton/resources/var/apps/");
        Siberian_Assets::addJavascripts(array(
            "modules/layout/home/murilo002skeleton/hooks.js",
        ));
        Siberian_Assets::addStylesheets(array(
            "modules/layout/home/murilo002skeleton/style.css",
        ));
        Siberian_Feature::registerLayoutOptionsCallbacks(
        'murilo002skeleton',
        'murilo002skeleton_Form_murilo002skeletonOptions',
        function ($datas) {
            return [];
        });
    }
}
