using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace TicTacToeTomek
{
    class Solver : ISolver
    {
        char[,] m_Board;
        String m_Return;
        bool m_HasEmptySpaces;

        public string Solve(System.IO.StreamReader v_Reader)
        {
            m_Board = new char[4, 4];
            m_Return = "";
            m_HasEmptySpaces = false;

            for (int i = 0; i < 4; i++)
            {
                String v_Line = v_Reader.ReadLine();
                for (int j = 0; j < 4; j++)
                {
                    m_Board[i, j] = v_Line[j];
                    m_HasEmptySpaces = m_HasEmptySpaces || v_Line[j] == '.';
                }
            }
            v_Reader.ReadLine();
            
            if (!diagonals())
            {
                bool v_FoundWinner = false;
                for (int i = 0; i < 4; i++)
                {
                    if (row(i) || col(i))
                    {
                        v_FoundWinner = true;
                        break;
                    }
                }
                if (!v_FoundWinner)
                {
                    if (m_HasEmptySpaces)
                    {
                        m_Return = "Game has not completed";
                    }
                    else
                    {
                        m_Return = "Draw";
                    }
                }
            }
            return m_Return;
        }

        private bool diagonals()
        {
            Char v_ComparePositive = m_Board[0,0];
            Char v_CompareNegative = m_Board[0,3];
            for (int i = 0; i < 4; i++)
            {
                v_ComparePositive = compare(v_ComparePositive, i, i);
                v_CompareNegative = compare(v_CompareNegative, i, 3-i);
            }
            return getReturn(v_CompareNegative) || getReturn(v_ComparePositive);
        }

        private bool col(int i)
        {
            char v_Compare = m_Board[0, i];
            for (int j = 0; j < 4; j++)
            {
                v_Compare = compare(v_Compare, j, i);
            }
            return getReturn(v_Compare);            
        }        

        private bool row(int i)
        {
            char v_Compare = m_Board[i, 0];
            for (int j = 0; j < 4; j++)
            {
                v_Compare = compare(v_Compare, i, j);
            }
            return getReturn(v_Compare);  
        }

        private bool getReturn(char v_Compare)
        {
            if (v_Compare != default(char))
            {
                m_Return = String.Format("{0} won", v_Compare);
                return true;
            }
            return false;
        }

        private char compare(char v_Compare, int i, int j)
        {
            char v_Value = m_Board[i, j];
            if (v_Compare == default(char) || v_Value == '.')
            {
                return default(char);
            }

            if (v_Value == 'T' || v_Compare == 'T' || v_Value == v_Compare)
            {
                v_Compare = v_Value != 'T' ? v_Value : v_Compare;
            }
            else
            {
                v_Compare = default(char);
            }
            return v_Compare;
        }
    }
}
