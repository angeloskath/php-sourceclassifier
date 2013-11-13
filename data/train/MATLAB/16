inputFile = fopen('data.txt', 'r');
outputFile = fopen('answer.txt', 'w');

[numCases] = fscanf(inputFile, '%g', [1,1]);

function row = calculateRow (index, n)
  row = floor((index - 1)/n) + 1;
endfunction

function col = calculateCol (index, n)
  col = mod(index - 1, n) + 1;
endfunction

function diagonal = calculateDiag (index, n)
  row = calculateRow(index, n);
  col = calculateCol(index, n);

  if row == col
    diagonal = 1;
    return;
  elseif col == (n - row + 1)
    diagonal = 2;
    return;
  endif

  diagonal = 3;
endfunction

function caseString = checker (game, n)
  x.rows = zeros(n);
  x.cols = zeros(n);
  x.diag = zeros(3);
  o.rows = zeros(n);
  o.cols = zeros(n);
  o.diag = zeros(3);
  DOT = 0;

  % linear processing
  for iterEl = 1:numel(game)
    row = calculateRow(iterEl, n);
    col = calculateCol(iterEl, n);
    diagonal = calculateDiag(iterEl, n);

    if game(iterEl) == '.'
      DOT++;
    elseif game(iterEl) == 'X' 
      x.rows(row)++;
      x.cols(col)++;
      x.diag(diagonal)++;
      if x.rows(row) == n || x.cols(col) == n || x.diag(1) == n || x.diag(2) == n
        caseString = 'X won';
        return;
      endif
    elseif game(iterEl) == 'O'
      o.rows(row)++;
      o.cols(col)++;
      o.diag(diagonal)++;
      if o.rows(row) == n || o.cols(col) == n || o.diag(1) == n || o.diag(2) == n
        caseString = 'O won';
        return;
      endif
    elseif game(iterEl) == 'T'
      x.rows(row)++;
      x.cols(col)++;
      x.diag(diagonal)++;
      o.rows(row)++;
      o.cols(col)++;
      o.diag(diagonal)++;
      if x.rows(row) == n || x.cols(col) == n || x.diag(1) == n || x.diag(2) == n
        caseString = 'X won';
        return;
      endif
      if o.rows(row) == n || o.cols(col) == n || o.diag(1) == n || o.diag(2) == n
        caseString = 'O won';
        return;
      endif
    endif
  endfor

  if DOT > 0
    caseString = 'Game has not completed';
    return;
  endif

  caseString = 'Draw';
endfunction

for iterCase = 1:numCases
  [game] = fscanf(inputFile, '%s', [4, 1]);

  string = checker(game, 4);

  fprintf(outputFile, 'Case #%g: %s', iterCase, string);
  fprintf(outputFile, '\n');
endfor

fclose(inputFile);
fclose(outputFile);
