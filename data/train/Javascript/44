#!/usr/bin/env node

/*
  https://code.google.com/codejam/contest/2270488/dashboard#s=p0

  Run with:
    cat input.file | ./a.js  > output.file
*/

var fs    = require('fs')
  , _     = require('underscore')
  , str   = require('underscore.string')
  , input = fs.readFileSync('/dev/stdin').toString().split(/\n/g)
  , cnum  = 0
;

var cases = input.shift();

while (cnum++ < cases) {
  var rows = input.splice(0,4);

  var cols = [];
  _.range(4).forEach(function(i){
    var col = rows.map(function(s){ return s[i]; }).join('');
    cols.push(col);
  });

  var diag = [
    [rows[0][0], rows[1][1], rows[2][2], rows[3][3]].join(''),
    [rows[0][3], rows[1][2], rows[2][1], rows[3][0]].join('')
  ];

  var poss = _.flatten([rows, cols, diag]);

  var result;
  if (_.find(poss, function(s){ return s.match(/^[XT]+$/); })) {
    result = "X won";
  } else if (_.find(poss, function(s){ return s.match(/^[OT]+$/); })) {
    result = "O won";
  } else if (_.find(poss, function(s){ return ~s.indexOf('.'); })) {
    result = "Game has not completed";
  } else {
    result = 'Draw';
  }

  console.log(str.sprintf('Case #%d: %s', cnum, result));
  input.shift();
}
