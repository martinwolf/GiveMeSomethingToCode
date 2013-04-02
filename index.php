<!DOCTYPE>
<html ng-app="CodeThat">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Martin Wolf">
        
        <title>CodeThat</title>
        
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="page-wrap" ng-controller="getController">
            <h1 class="page-logo">Give Me Something To Code</h1>
            <button ng-click="getRandom()">Give me something to code</button>
            
            <h2>{{dribbbleResult.title}}</h2>
            <p>By {{dribbbleResult.player.name}}</p>
            <img ng-src="{{dribbbleResult.image_url}}" width="{{dribbbleResult.width}}" width="{{dribbbleResult.height}}" alt="{{dribbbleResult.title}}">
            
        </div>
        
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.5/angular.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.5/angular-resource.min.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>