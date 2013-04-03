var app = angular.module('GiveMeSomethingToCode', []);

app.controller('getController', function($scope, $http, getModel) {
    getModel.getDribbbles($scope);
    
    $scope.getRandom = function() {
        getModel.getDribbbles($scope);
        $scope.dribbbleResult.image_url = 'img/loader.gif';
    }
});

app.service('getModel', function($http) {
    this.getDribbbles = function($scope) {
        var random = Math.floor(Math.random()*101001);
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