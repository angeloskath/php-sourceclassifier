import java.io._

object TickTackToeTomek extends App {
    /**
     * GETS AN ITERATOR OF LINES FROM AN INPUT STREAM
     */
    type LineIterator = Iterator[String]
    def inputStream2LineInterator(in: InputStream): LineIterator = {
        val reader = new BufferedReader(new InputStreamReader(in))
        Iterator.continually(
                reader.readLine()
        )
    }

    /**
     * DUMPS SOLUTION IN THE USUAL FORMAT
     */
    type Solutions[T] = Traversable[T]
    def dumpSolution[T](solutions: Solutions[T])(dump: (String) => Unit = println) = {
        solutions.toList.zipWithIndex.map {
            case (sol, cas) => dump("Case #" + (cas + 1) + ": " + sol)
        }
    }

    /**
     * MULTIPLEXES OUTPUT TO SEVERAL PRINT STREAMS
     */
    def printToFiles(writers: PrintStream*): (String) => Unit = {
        (s: String) => writers.map(_.println(s))
    }

    /**
     * OPENS A FILE, PROCESSES IT AND DUMPS THE SOLUTION TO A FILE AND STANDARD OUTPUT
     */
    def solveOneFile[T](solveProblem: (LineIterator => Solutions[T]))(file: String = "-") = {

        println( "FILE:" + file )
        val initTime = System.currentTimeMillis()

        val is = if (!(file == "-"))
            if( new File(file).exists )
                new FileInputStream(file)
            else
                getClass().getResourceAsStream(file)
        else
            System.in

        val in = inputStream2LineInterator(is)

        val solutions = solveProblem(in)

        val fileOut = (if (file.endsWith(".in"))
            file.replace(".in", ".out")
        else
            file + ".out")

        val out = new PrintStream(new FileOutputStream(fileOut), true)
        dumpSolution(solutions)(printToFiles(out, System.out))
        out.close

        if( !(file == "-") ) is.close

        println( "Time for file " + file + ":" + (System.currentTimeMillis()-initTime))
    }



    /**
     * EXTRACTS SINGLE TESTS FROM THE FILE AND SOLVE IT
     */
    type LoadedTest = Array[String]
    def process[T](readOneTest: (LineIterator)=> LoadedTest )
                  (solveOneTest: (LoadedTest)=>T)
                  (in: LineIterator): Solutions[T] = {
        val line = in.next
        val nTests = line.toInt

        val tests = for( t <- 1 to nTests ) yield readOneTest(in)

        tests.map( solveOneTest(_) )
    }

    /**
     * READ LINES FOR A SINGLE TEST INSIDE THE FILE
     */
    def readTickTackToeTomek( in: LineIterator ): LoadedTest = {
        in.take(5).toArray
    }

    /**
     * SOLVE A SINGLE TEST
     */
    def solveTickTackToeTomek( in: LoadedTest ): String = {
        val tablero = in.take(4).toArray
        
        def full( s: Seq[Char], player: Char ) = s.foldLeft(true)((b,c) => b && (c==player || c=='T') )
        def fullRow(r: Int, player: Char) = full( tablero(r), player )  
        def fullColumn(c: Int, player: Char) = full( tablero.map(r => r(c)), player )
        def fullDiagonals(player:Char): Boolean = {
            val a = (0 until 4).map(i => tablero(i)(i) )
            val b = (0 until 4).map(i => tablero(i)(3-i) )
            full(a,player) || full(b,player)
        }
        def playerWins(player:Char) = !(0 until 4).forall( i => !fullRow(i,player) && !fullColumn(i,player) && !fullDiagonals(player)) 

        val noFreeSpace = tablero.forall( r => !r.contains('.') )
        val oWins = playerWins('O')
        val xWins = playerWins('X')
        
        if( oWins && xWins ) "Quemestascontando"
        else if( oWins ) "O won"
        else if( xWins ) "X won"
        else if( noFreeSpace ) "Draw"
        else "Game has not completed"
    }


    // LAUNCHS IT ALL
    val problem = solveOneFile( process(readTickTackToeTomek)(solveTickTackToeTomek) )_
    problem("sample.in")
    problem("A-small-attempt0.in")
    problem("A-large.in")

}