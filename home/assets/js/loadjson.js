$(function() {
  var id = [];
  $.getJSON('tsg_lethal.json', function(data) {
    $.each(data.id, function(i, f) {
      var paragraph = f.id
      $(paragraph).appendTo("#userdata p");
    });
  });
});


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
