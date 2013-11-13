using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;

namespace QualA
{
    class Program
    {
        static void Main(string[] args)
        {
            string fileIn = "..\\..\\..\\A-large.in";
            string fileOut = "..\\..\\..\\fileOut.txt";
            using (StreamReader sr = new StreamReader(fileIn))
            using (StreamWriter sw = new StreamWriter(fileOut))
            {
                string theAnswer;
                int cases = int.Parse(sr.ReadLine());


                for (int i = 1; i <= cases; i++)
                {
                    string line1 = sr.ReadLine();
                    string line2 = sr.ReadLine();
                    string line3 = sr.ReadLine();
                    string line4 = sr.ReadLine();
                    string blank = sr.ReadLine();

                    //Who played last?
                    int xCount = 0;
                    xCount += line1.Count(a => a == 'X');
                    xCount += line2.Count(a => a == 'X');
                    xCount += line3.Count(a => a == 'X');
                    xCount += line4.Count(a => a == 'X');
                    int oCount = 0;
                    oCount += line1.Count(a => a == 'O');
                    oCount += line2.Count(a => a == 'O');
                    oCount += line3.Count(a => a == 'O');
                    oCount += line4.Count(a => a == 'O');
                    int zCount = 0;
                    zCount += line1.Count(a => a == '.');
                    zCount += line2.Count(a => a == '.');
                    zCount += line3.Count(a => a == '.');
                    zCount += line4.Count(a => a == '.');
                    
                    string lastPlayer;
                    if (oCount == xCount)
                        lastPlayer = "O";
                    else
                        lastPlayer = "X";
                    
                    while (true)
                    {
                        theAnswer = String.Empty;
                        //Look at each horizontal line
                        if (line1.Replace("T", "X") == "XXXX" || line2.Replace("T", "X") == "XXXX" || line3.Replace("T", "X") == "XXXX" || line4.Replace("T", "X") == "XXXX")
                        {
                            theAnswer = lastPlayer + " won";
                            break;
                        }
                        if (line1.Replace("T", "O") == "OOOO" || line2.Replace("T", "O") == "OOOO" || line3.Replace("T", "O") == "OOOO" || line4.Replace("T", "O") == "OOOO")
                        {
                            theAnswer = lastPlayer + " won";
                            break;
                        }

                        for (int j = 0; j < 4; j++)
			            {
			                string vertical = line1[j].ToString() +line2[j].ToString() +line3[j].ToString() +line4[j].ToString();
                            if (vertical.Replace("T", "X") == "XXXX" || vertical.Replace("T", "O") == "OOOO")
                            {
                                theAnswer = lastPlayer + " won";
                                break;
                            }
			            }
                        if (!string.IsNullOrEmpty(theAnswer)) break;
                        
                        //diagonals
                        string diagonal = line1[0].ToString() + line2[1].ToString() + line3[2].ToString() + line4[3].ToString();
                        if (diagonal.Replace("T", "X") == "XXXX" || diagonal.Replace("T", "O") == "OOOO")
                        {
                            theAnswer = lastPlayer + " won";
                            break;
                        }
                        diagonal = line1[3].ToString() + line2[2].ToString() + line3[1].ToString() + line4[0].ToString();
                        if (diagonal.Replace("T", "X") == "XXXX" || diagonal.Replace("T", "O") == "OOOO")
                        {
                            theAnswer = lastPlayer + " won";
                            break;
                        }

                        if (zCount > 0)
                            theAnswer = "Game has not completed";
                        else
                            theAnswer = "Draw";
                        break;
                    }



                    string answer = "Case #" + i + ": " + theAnswer;
                    sw.WriteLine(answer);
                    Console.WriteLine(answer);
                }
            }
            Console.ReadLine();
        }
    }
}
