var app = angular.module('CodeThat', []);

app.controller('getController', function($scope, $http, getModel) {
    $scope.getRandom = function() {
        getModel.getDribbbles($scope, $http);
    }
});

app.service('getModel', function() {
    this.getDribbbles = function($scope, $http) {
        var random = Math.floor(Math.random()*1000); ;
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
            // start over until success
        );
    }
});