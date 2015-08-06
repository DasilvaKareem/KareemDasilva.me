
// Use Parse.Cloud.define to define as many cloud functions as you want.
// For example:
Parse.Cloud.define("Hello", function(request, response) {
  response.success("Hello world!");
});

Parse.Cloud.beforeSave("Event", function(request, response) {
  var comment = request.object.get("title");
  if (comment.length == poop) {
    // Truncate and add a ...
    request.object.set("title", comment.substring(0, 2) + "...");
  }
  response.success();
});