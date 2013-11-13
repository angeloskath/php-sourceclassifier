using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

using System.Text.RegularExpressions;

namespace ContestBase
{
    public partial class Form1 : Form
    {
        public string[] partes;
        public string[] renglones;
        public int indice;
        public int indicerenglon;
        public Tuple<int, int>[] rangos;
        public Form1()
        {
            InitializeComponent();
        }
        //Con estas funciones leeremos de la entrada
        public void write(string format, params Object[] args)
        {
            this.toutput.AppendText(String.Format(format, args));
        }
        public void writeLine(string format, params Object[] args)
        {
            this.toutput.AppendText(String.Format(format, args));
            this.toutput.AppendText(Environment.NewLine);
        }
        public int readInt()
        {
            if (indice > rangos[indicerenglon].Item2)
                indicerenglon++;
            return int.Parse(this.partes[this.indice++]);
        }
        public long readLong()
        {
            if (indice > rangos[indicerenglon].Item2)
                indicerenglon++;
            return long.Parse(this.partes[this.indice++]);
        }
        public double readDouble()
        {
            if (indice > rangos[indicerenglon].Item2)
                indicerenglon++;
            return double.Parse(this.partes[this.indice++]);
        }
        public string readString()
        {
            if (indice > rangos[indicerenglon].Item2)
                indicerenglon++;
            return this.partes[this.indice++];
        }
        public string readRow()
        {
            indice = this.rangos[(indicerenglon+1)%this.rangos.Length].Item1;
            return this.renglones[this.indicerenglon++];
        }
        public void init()
        {
            this.toutput.Clear();
            this.renglones = this.tinput.Text.Split(new string[] { char.ConvertFromUtf32(13), char.ConvertFromUtf32(10) }, System.StringSplitOptions.RemoveEmptyEntries);
            this.partes = this.tinput.Text.Split(new string[] { " ", char.ConvertFromUtf32(13), char.ConvertFromUtf32(10) }, System.StringSplitOptions.RemoveEmptyEntries);
            this.rangos = new Tuple<int, int>[this.renglones.Length];
            int count = 0;
            for (int i = 0; i < this.renglones.Length; i++)
            {
                string[] _r = this.renglones[i].Split(new string[] { " ", char.ConvertFromUtf32(13), char.ConvertFromUtf32(10) }, System.StringSplitOptions.RemoveEmptyEntries);
                int originalcount = count;
                for (int j = 0; j < _r.Length; j++)
                {
                    count++;
                }
                this.rangos[i] = new Tuple<int, int>(originalcount, count - 1);
            }
            this.indice = 0;
            this.indicerenglon = 0;
        }
        private void buttongenera_Click(object sender, EventArgs e)
        {
            DateTime inicia = System.DateTime.Now;
            Cursor.Current = Cursors.WaitCursor;
            init();
            ticktacktoetomek();
            Cursor.Current = Cursors.Default;
            DateTime termina = System.DateTime.Now;
            TimeSpan diferencia = termina - inicia;
            this.label1.Text = diferencia.TotalSeconds.ToString() + " segundos";
        }
        public void AlienLanguage()
        {
            int L, D, N;
            L = this.readInt();
            D = this.readInt();
            N = this.readInt();
            string[] claves = new string[D];
            for (int i = 0; i < D; i++)
                claves[i] = readString();
            for (int i = 0; i < N; i++)
            {
                string evaluar = readString();
                evaluar = evaluar.Replace('(', '[');
                evaluar = evaluar.Replace(')', ']');
                int cuantos = 0;
                for (int j = 0; j < D; j++)
                {
                    Regex regex = new Regex(evaluar);
                    if (regex.IsMatch(claves[j]))
                        cuantos++;
                }
                this.writeLine("Case #{0}: {1}", i + 1, cuantos);
            }
        }
        public void ticktacktoetomek()
        {
            int N;
            N = this.readInt();
            for (int i = 0; i < N; i++)
            {
                //leemos los 4 renglones
                string r1, r2, r3, r4, c1, c2, c3, c4, d1, d2;
                r1 = this.readString();
                r2 = this.readString();
                r3 = this.readString();
                r4 = this.readString();
                c1 = r1.Substring(0, 1) + r2.Substring(0, 1) + r3.Substring(0, 1) + r4.Substring(0, 1);
                c2 = r1.Substring(1, 1) + r2.Substring(1, 1) + r3.Substring(1, 1) + r4.Substring(1, 1);
                c3 = r1.Substring(2, 1) + r2.Substring(2, 1) + r3.Substring(2, 1) + r4.Substring(2, 1);
                c4 = r1.Substring(3, 1) + r2.Substring(3, 1) + r3.Substring(3, 1) + r4.Substring(3, 1);
                d1 = r1.Substring(0, 1) + r2.Substring(1, 1) + r3.Substring(2, 1) + r4.Substring(3, 1);
                d2 = r1.Substring(3, 1) + r2.Substring(2, 1) + r3.Substring(1, 1) + r4.Substring(0, 1);
                string respuesta = "";
                if (r1 == "XXXX" || r2 == "XXXX" || r3 == "XXXX" || r4 == "XXXX" || c1 == "XXXX" || c2 == "XXXX" || c3 == "XXXX" || c4 == "XXXX" || d1 == "XXXX" || d2 == "XXXX")
                    respuesta = "X won";
                else if (r1.Replace('T', 'X') == "XXXX" || r2.Replace('T', 'X') == "XXXX" || r3.Replace('T', 'X') == "XXXX" || r4.Replace('T', 'X') == "XXXX" || c1.Replace('T', 'X') == "XXXX" || c2.Replace('T', 'X') == "XXXX" || c3.Replace('T', 'X') == "XXXX" || c4.Replace('T', 'X') == "XXXX" || d1.Replace('T', 'X') == "XXXX" || d2.Replace('T', 'X') == "XXXX")
                    respuesta = "X won";
                else if (r1 == "OOOO" || r2 == "OOOO" || r3 == "OOOO" || r4 == "OOOO" || c1 == "OOOO" || c2 == "OOOO" || c3 == "OOOO" || c4 == "OOOO" || d1 == "OOOO" || d2 == "OOOO")
                    respuesta = "O won";
                else if (r1.Replace('T', 'O') == "OOOO" || r2.Replace('T', 'O') == "OOOO" || r3.Replace('T', 'O') == "OOOO" || r4.Replace('T', 'O') == "OOOO" || c1.Replace('T', 'O') == "OOOO" || c2.Replace('T', 'O') == "OOOO" || c3.Replace('T', 'O') == "OOOO" || c4.Replace('T', 'O') == "OOOO" || d1.Replace('T', 'O') == "OOOO" || d2.Replace('T', 'O') == "OOOO")
                    respuesta = "O won";
                else if (r1.Contains(".") || r2.Contains(".") || r3.Contains(".") || r4.Contains(".") || c1.Contains(".") || c2.Contains(".") || c3.Contains(".") || c4.Contains(".") || d1.Contains(".") || d2.Contains("."))
                    respuesta = "Game has not completed";
                else
                    respuesta = "Draw";
                this.writeLine("Case #{0}: {1}", i+1, respuesta);
            }
        }
    }
}
