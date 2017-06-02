var app = angular.module('myInfoPage');
app.directive('email', function () {
    return {
        restrict: 'E',
        templateUrl: 'app/temp/emailForm.php'
    }
});