$(function() {
  var aliases = [];
  $.getJSON('tsg_lethal.json', function(data) {
    $.each(data.aliases, function(i, f) {
      var tblRow = "<tr>" + "<td>" + f.name + "</td>" + "<td>" + f.created_at + "</td>" + "</tr>"
      $(tblRow).appendTo("#userdata tbody");
    });
  });
});

//sort of works

//$(function() {
//  var lastPlayed = [];
//  $.getJSON('tsg_lethal.json', function(data) {
//    $.each(data.lastPlayed, function(i, f) {
//      var paragraph = "<p>" + f.casual + "</p>"
//      $(paragraph).appendTo("#userdata p");
//    });
//  });
//});

//just incase
//$(function() {
  //var platform = [];
  //$.getJSON('tsg_lethal.json', function(data) {
    //$.each(data.platform, function(i, f) {
      //var tblRow = "<tr>" + "<td>" + f.firstName + "</td>" +
        //"<td>" + f.lastName + "</td>" + "<td>" + f.job + "</td>" + "<td>" + f.roll + "</td>" + "</tr>"
      //$(tblRow).appendTo("#userdata tbody");
    //});
  //});
//});
