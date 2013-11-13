using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;

namespace ProblemA
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Reading input file...");
            StreamReader streamReader = new StreamReader(@"D:\Programming Challange\CodeJam 2013\Qualifying\Problem A\inputSmall.txt");
            StreamWriter streamWriter = new StreamWriter(@"D:\Programming Challange\CodeJam 2013\Qualifying\Problem A\outputSmall.txt", false);
            
            string line = streamReader.ReadLine();
            int nrOfTests = 0;
            if(!int.TryParse(line, out nrOfTests))
            {
                Console.WriteLine("Number of tests is not an int!");
                return;
            }
            int charX = Convert.ToInt32('X');
            int charY = Convert.ToInt32('O');
            int charT = Convert.ToInt32('T');
            int charDot = Convert.ToInt32('.');


            Console.WriteLine("Number of tests: "+nrOfTests.ToString());
            for(int i=0; i<nrOfTests;i++)
            {
                int caseNR = i+1;
                Console.WriteLine("Case #"+caseNR.ToString()+": reading input");
                List<List<int>> map = new List<List<int>>();
                for(int j=0; j<4;j++)
                {   
                    List<int> mapLine = new List<int>();
                    for(int k=0;k<4;k++)
                    {
                        //read one character
                        int singleChar=streamReader.Read();
                        mapLine.Add(singleChar);
                    }
                    map.Add(mapLine);
                    //move to next line
                    streamReader.ReadLine();
                }
                //skip empty line
                streamReader.ReadLine();

                //process it
                Console.WriteLine("Case #"+caseNR.ToString()+": processing input");
                bool winnerX = false;
                bool winnerY = false;
                bool emptyCells = false;
                if(map.Count != 4)
                {
                    Console.WriteLine("Case #"+caseNR.ToString()+": number of lines is NOT 4");
                    continue;
                }
                for(int j=0; j<4;j++)
                {   
                    if(map[j].Count != 4)
                    {
                        Console.WriteLine("Case #"+caseNR.ToString()+": number of items in line "+j.ToString()+" is NOT 4");
                        continue;
                    }
                    int sum = map[j][0] + map[j][1]+map[j][2]+map[j][3];
                    if((sum == (4*charX)) || (sum == (3*charX + charT)))
                    {
                        winnerX = true;
                    }
                    if((sum == (4*charY)) || (sum == (3*charY + charT)))
                    {
                        winnerY = true;
                    }
                    if((map[j][0] == charDot) || (map[j][1] == charDot) || (map[j][2] == charDot) || (map[j][3] == charDot))
                    {
                        emptyCells = true;
                    }
                    sum = map[0][j] + map[1][j]+map[2][j]+map[3][j];
                    if((sum == (4*charX)) || (sum == (3*charX + charT)))
                    {
                        winnerX = true;
                    }
                    if((sum == (4*charY)) || (sum == (3*charY + charT)))
                    {
                        winnerY = true;
                    }
                    sum = map[0][0] + map[1][1] + map[2][2] + map[3][3];
                    if ((sum == (4 * charX)) || (sum == (3 * charX + charT)))
                    {
                        winnerX = true;
                    }
                    if ((sum == (4 * charY)) || (sum == (3 * charY + charT)))
                    {
                        winnerY = true;
                    }
                    sum = map[0][3] + map[1][2] + map[2][1] + map[3][0];
                    if ((sum == (4 * charX)) || (sum == (3 * charX + charT)))
                    {
                        winnerX = true;
                    }
                    if ((sum == (4 * charY)) || (sum == (3 * charY + charT)))
                    {
                        winnerY = true;
                    }
                }
                string message = string.Empty;
                if (winnerX)
                {
                    message = "X won";
                }
                else if (winnerY)
                {
                    message = "O won";
                }
                else if (emptyCells)
                {
                    message = "Game has not completed";
                }
                else
                {
                    message = "Draw";
                }
                Console.WriteLine("Case #" + caseNR.ToString() + ": result is "+ message);
                Console.WriteLine("Case #" + caseNR.ToString() + ": writing output");
                streamWriter.WriteLine("Case #" + caseNR + ": " + message); 
            }
            streamReader.Close();
            streamWriter.Close();
            Console.ReadLine();
        }
    }
}
