var fs = require('fs');
var s = fs.readFileSync('input.txt', 'utf-8');
var a = s.split('\n');
var i, ind = ~~a.shift();
var j;

for(i=1;i<=ind;i++){
	s = solve(a.splice(0,4));
	console.log("Case %d: %s", i, s);
	if(a.length) a.shift();
}

function solve(a){
	var i,j,t,k,d=0;
	if(a.length<4) return null;	
	for(i=0;i<4;i++){
		for(j=t=k=0;j<4;j++){
			switch(a[i][j]){
				case '.': d=1; break;
				case 'X': k--; break;
				case 'O': k++; break;
				case 'T': t=1; break;
			}
		}
		if(k==4||k==3&&t==1) return "O won";
		if(k==-4||k==-3&&t==1) return "X won";
		
		for(j=t=k=0;j<4;j++){
			switch(a[j][i]){
				case '.': d=1; break;
				case 'X': k--; break;
				case 'O': k++; break;
				case 'T': t=1; break;
			}
		}
		if(k==4||k==3&&t==1) return "O won";
		if(k==-4||k==-3&&t==1) return "X won";
	}
	for(j=t=k=0;j<4;j++){
		switch(a[j][j]){
			case '.': d=1; break;
			case 'X': k--; break;
			case 'O': k++; break;
			case 'T': t=1; break;
		}
	}
	if(k==4||k==3&&t==1) return "O won";
	if(k==-4||k==-3&&t==1) return "X won";
	
	for(j=t=k=0;j<4;j++){
		switch(a[3-j][j]){
			case '.': d=1; break;
			case 'X': k--; break;
			case 'O': k++; break;
			case 'T': t=1; break;
		}
	}
	if(k==4||k==3&&t==1) return "O won";
	if(k==-4||k==-3&&t==1) return "X won";
	
	if(d) return "Game has not completed";
	return "Draw";
}
