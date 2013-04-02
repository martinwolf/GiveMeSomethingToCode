var app = angular.module('CodeThat', []);

app.controller('getController', function($scope, $http, getModel) {
    $scope.getRandom = function() {
        getModel.getDribbbles($scope);
    }
});

app.service('getModel', function($http) {
    this.getDribbbles = function($scope) {
        var random = Math.floor(Math.random()*1000);
        var that = this;
        $http(
            {
                'method': 'jsonp',
                'url': 'http://api.dribbble.com/shots/' + random + '?callback=JSON_CALLBACK'
            }
        ).success(
            function(data) {
                $scope.dribbbleResult = data;
            }
        ).error(
            function() {
                that.getDribbbles($scope);
            }
        );
    }
});