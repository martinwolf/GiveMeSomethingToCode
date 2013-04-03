<!DOCTYPE>
<html ng-app="CodeThat">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Martin Wolf">
        
        <title>CodeThat</title>
        
        <link rel="stylesheet" href="css/style.css">
        
        <script type="text/javascript" src="//use.typekit.net/tjy8qui.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    </head>
    <body>
        <div class="page-wrap" ng-controller="getController">
        
            <h1 class="page-logo">Give Me Something To Code</h1>
            <button class="btn btn--go" ng-click="getRandom()">Roll the dice again!</button>
            
            <div class="item">
                <h2>{{dribbbleResult.title}}</h2>
                <p>By <a href="{{dribbbleResult.player.url}}">{{dribbbleResult.player.name}}</a></p>
                <img ng-src="{{dribbbleResult.image_url}}" width="{{dribbbleResult.width}}" width="{{dribbbleResult.height}}" alt="{{dribbbleResult.title}}">
            </div>
            
            <a class="btn btn--new-pen" href="http://codepen.io/pen/" target="_blank">Create a new Pen</a>
            
            <p>Handcrafted by <a href="http://theamazingweb.net">Martin Wolf</a> &amp; powered by the <a href="http://dribbble.com/api">dribbble API</a> and <a href="http://angularjs.org">AngularJS</a>.</p>
            
        </div>
        
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.5/angular.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.5/angular-resource.min.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>