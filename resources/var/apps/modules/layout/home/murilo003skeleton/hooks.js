/**
 *
 * Layout_Skeleton example
 *
 * All the following functions are required in order for the Layout to work
 */
App.service('murilo003skeleton', function ($rootScope, HomepageLayout) {

    var service = {};

    /**
     * Must return a valid template
     *
     * @returns {string}
     */
    service.getTemplate = function () {
        return "modules/layout/home/murilo003skeleton/view.html";
    };

    /**
     * Must return a valid template
     *
     * @returns {string}
     */
    service.getModalTemplate = function () {
        return "templates/home/l10/modal.html";
    };

    /**
     * onResize is used for css/js callbacks when orientation change
     */
    service.onResize = function () {
        /** Do nothing for this particular one */
    };

    /**
     * Manipulate the features objects
     *
     * Examples:
     * - you can re-order features
     * - you can push/place the "more_button"
     *
     * @param features
     * @param more_button
     * @returns {*}
     */
    service.features = function(features, more_button) {
        /** Place more button at the end */
        features.overview.options.push(more_button);

        return features;
    };

    return service;

});
App.controller('murilo003SkeletonCtrl', function($scope, $state, $rootScope, HomepageLayout) {
  $scope.goTo = function(feature) {
    HomepageLayout.goToFeature(feature);
  };
});