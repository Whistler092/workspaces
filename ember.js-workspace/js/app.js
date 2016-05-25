App = Ember.Application.create();

App.Router.map(function() {
  // put your routes here
});

App.IndexRoute = Ember.Route.extend({
  model: function() {
    return ['red', 'yellow', 'blue'];
  }
});

App.ModernRoute = Ember.Route.extend({
  model: function() {
    return ['rojo', 'amarillo', 'azul'];
  }
});
