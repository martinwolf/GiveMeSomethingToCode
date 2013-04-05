<!DOCTYPE html>
<html ng-app="GiveMeSomethingToCode">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Martin Wolf">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Give Me Something To Code</title>
        
        <link rel="stylesheet" href="css/style.css">
        
        <script type="text/javascript" src="//use.typekit.net/tjy8qui.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    </head>
    <body>
        <div class="page-wrap" ng-controller="getController">
        
            <header>
                <h1 class="page-logo">Give Me Something To Code</h1>
                <button class="btn" ng-click="getRandom()">Roll the dice again!</button>
            </header>
            
            <main>
                <div class="item">
                    <h2 class="item-title">{{dribbbleResult.title}}</h2>
                    <p class="item-meta">by <a href="{{dribbbleResult.player.url}}">{{dribbbleResult.player.name}}</a></p>
                    <a href="{{dribbbleResult.url}}">
                        <img ng-src="{{dribbbleResult.image_url}}" alt="{{dribbbleResult.title}}">
                    </a>
                </div>
                
                <a class="btn" href="http://codepen.io/pen/" target="_blank">Create a new Pen</a>
            </main>
            
            <footer class="page-footer">
                <p>Handcrafted by <a href="http://theamazingweb.net">Martin Wolf</a>. Powered by the <a href="http://dribbble.com/api">dribbble API</a> &amp; <a href="http://angularjs.org">AngularJS</a>.</p>
            </footer>
            
        </div>
        
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.5/angular.min.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>