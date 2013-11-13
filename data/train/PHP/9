<?

$filename = "A-small.in";
$fd = fopen($filename, "r");
$contents = fread($fd, filesize($filename));

fclose($fd);


$lines = explode("\n", $contents);


$id = 1;
$data = array();
foreach (array_slice($lines, 1) as $line) {     //cut lines (1 to inf)
    if ($id == intval($lines[0])+1) {
        return;
    }
    if (!$line) {
        //get result
        //getResult($data);

        print "Case #$id: " . getResult($data);
        print "\n";
        $id++;
        $data = array();
    }
    else {
        //program logic to grab data
        $data [] = str_split($line);
    }
}

function getResult($data) {
    $GLOBALS['dot'] = false;

    //test lines
    foreach ($data as $dline) {
        if (testWin($dline)) {
            return testWin($dline) . " won";
        }
    }
    //test columns
    for ($i = 0; $i < 4; $i++) {
        $coulumn = array();
        for ($j = 0; $j < 4; $j++) {
            $coulumn[] = $data[$j][$i];
        }
        if (testWin($coulumn)) {
            return testWin($coulumn) . " won";
        }
    }

    //test diagonal
    $diagonal = array();
    for ($i = 0; $i < 4; $i++) {
        $diagonal[] = $data[$i][$i];
    }
    if (testWin($diagonal)) {
        return testWin($diagonal) . " won";
    }

    $diagonal = array();
    for ($i = 0; $i < 4; $i++) {
        $diagonal[] = $data[3 - $i][$i];
    }
    if (testWin($diagonal)) {
        return testWin($diagonal) . " won";
    }

    if ($GLOBALS['dot']) {
        return "Game has not completed";
    }
    return "Draw";
}

function testWin($dline) {
    $prewCh = $dline[0];
    if ($prewCh != '.') {
        $spliced = array_slice($dline, 1);
        foreach ($spliced as $char) {
            if ($char == '.') {
                $GLOBALS['dot'] = true;
                return 0;
            }
            if ($char == $prewCh OR $char == 'T' OR $prewCh == 'T') {
                $prewCh = $char;
            }
            else {
                return 0;
            }
        }
        if ($dline[0] == 'T') {
            return $dline[1];
        }
        return $dline[0];
    }
    else {
        $GLOBALS['dot'] = true;
    }
}