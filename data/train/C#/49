using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace cj2013qr
{
    internal class Program
    {
        private static void Main(string[] args)
        {
            var fn = "A-large.in";
            using (var strIn = File.OpenText("c:\\Users\\zoli\\Downloads\\cj2013\\"+fn))
            using (var strOut = new StreamWriter("c:\\Users\\zoli\\Downloads\\cj2013\\" + fn+".out"))
            {
                var cCase = int.Parse(strIn.ReadLine());
                for (int iCase = 0; iCase < cCase; iCase++)
                {
                    var rgstLine = new string[4];
                    for (int iLine = 0; iLine < 4; iLine++)
                    {
                        rgstLine[iLine] = strIn.ReadLine();
                    }
                    strIn.ReadLine();
                    var cjqra = new Cjqra(rgstLine);
                    var stkcjqra = Stkcjqra(cjqra);
                    Console.WriteLine("Case #{0}: {1}", iCase+1, stkcjqra);
                    strOut.WriteLine("Case #{0}: {1}", iCase+1, stkcjqra);
                }
            }
            Console.ReadLine();
        }

        private static string Stkcjqra(Cjqra cjqra)
        {
            var stkcjqra = "";
            switch (cjqra.KcjqraCheck())
            {
                case Kcjqra.Draw:
                    stkcjqra = "Draw";
                    break;
                case Kcjqra.NotCompletedYet:
                    stkcjqra = "Game has not completed";
                    break;
                case Kcjqra.Owon:
                    stkcjqra = "O won";
                    break;
                case Kcjqra.Xwon:
                    stkcjqra = "X won";
                    break;
            }
            return stkcjqra;
        }

        private class Cjqra
        {
            private readonly Ktxo[,] matktxo;

            public Cjqra(string[] rgstLine)
            {
                matktxo = new Ktxo[4,4];
                for (var iRow = 0; iRow < 4; iRow++)
                    for (var iCol = 0; iCol < 4; iCol++)
                        matktxo[iRow, iCol] = KtxoFromSt(rgstLine[iRow][iCol]);
            }

            public void Tsto()
            {
                for (var iRow = 0; iRow < 4; iRow++)
                {
                    for (var iCol = 0; iCol < 4; iCol++)
                        Console.Write(matktxo[iRow, iCol]);
                    Console.WriteLine();
                }

                Console.WriteLine();
            }

            public Kcjqra KcjqraCheck()
            {
                var fDraw = true;

                // check: 4 rows, 4 columns, 2 diagonals

                for (var iTransp = 0; iTransp < 2; iTransp++ )
                    for (var iRow = 0; iRow < 4; iRow++)
                    {
                        var lnKtxo = new Ktxo[4];
                        for (var iCol = 0; iCol < 4; iCol++)
                            lnKtxo[iCol] = iTransp == 0 ? matktxo[iRow, iCol] : matktxo[iCol, iRow];
                        bool fAllX;
                        bool fAllY;
                        CheckLine(lnKtxo, out fAllX, out fAllY, ref fDraw);

                        if (fAllX)
                            return Kcjqra.Xwon;
                        if (fAllY)
                            return Kcjqra.Owon;
                    }

                for (var iDiag = 0; iDiag < 2; iDiag++)
                {
                    var lnKtxo = new Ktxo[4];
                    for (var iCol = 0; iCol < 4; iCol++)
                    {
                        lnKtxo[iCol] = iDiag == 0 ? matktxo[iCol, iCol] : matktxo[iCol, 3-iCol];
                    }
                    bool fAllX;
                    bool fAllY;
                    CheckLine(lnKtxo, out fAllX, out fAllY, ref fDraw);

                    if (fAllX)
                        return Kcjqra.Xwon;
                    if (fAllY)
                        return Kcjqra.Owon;

                }

                return fDraw?Kcjqra.Draw:Kcjqra.NotCompletedYet;
            }

            private static void CheckLine(IEnumerable<Ktxo> lnKtxo, out bool fAllX, out bool fAllY, ref bool fDraw)
            {
                fAllX = true;
                fAllY = true;
                foreach (var ktxo in lnKtxo)
                    switch (ktxo)
                    {
                        case Ktxo.O:
                            fAllX = false;
                            break;
                        case Ktxo.X:
                            fAllY = false;
                            break;
                        case Ktxo._:
                            fAllX = false;
                            fAllY = false;
                            fDraw = false;
                            break;
                    }
            }
        }

        private static Ktxo KtxoFromSt(char st)
            {
                switch (st)
                {
                    case 'T':
                        return Ktxo.T;
                    case 'X':
                        return Ktxo.X;
                    case 'O':
                        return Ktxo.O;
                    case '.':
                        return Ktxo._;
                }
                throw new Exception("wrong Ktxo");
            }

        }

        public enum Ktxo
        {
            T,
            X,
            O,
            _
        }

        public enum Kcjqra
        {
            Xwon,
            Owon,
            Draw,
            NotCompletedYet
        }

    }
