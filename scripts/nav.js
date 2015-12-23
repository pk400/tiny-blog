var app = angular.module('myapp', []);

app.directive('navigationBar', function() {
  return {
      restrict: 'E',
      replace: 'true',
      template: '<h3>Hello World!!</h3>'
  };
});