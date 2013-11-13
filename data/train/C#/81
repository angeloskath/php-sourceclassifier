using System.IO;

namespace goo2013 {
    class Program {
        static void Main(string[] args) {
            string path = @"C:\goo\A-large.in";
            var reader = new StreamReader(path);
            var writer = new StreamWriter(@"C:\goo\out.txt");
            int N = int.Parse(reader.ReadLine());
            int k = 0;
            string s;
            int i = 0;
            int[,] a = new int[4, 4];
            while ((s = reader.ReadLine()) != null) {
                if (string.IsNullOrWhiteSpace(s)) {
                    a = new int[4, 4];
                    i = 0;
                    continue;
                }
                int j = 0;
                foreach (char item in s) {
                    int x = 3;
                    if (item.Equals('X')) {
                        x = 1;
                    } else if (item.Equals('O')) {
                        x = 0;
                    } else if (item.Equals('T')) {
                        x = 2;
                    }
                    a[i, j++] = x;
                }
                i++;
                if (i == 4) {
                    string q = Solve(a);
                    writer.WriteLine("Case #" + ++k + ": " + q);
                }
            }
            writer.Close();
        }

        private static string Solve(int[,] a) {
            if (Check(0, a)) {
                return "O won";
            }
            if (Check(1, a)) {
                return "X won";
            }
            for (int i = 0; i < 4; i++) {
                for (int j = 0; j < 4; j++) {
                    if (a[i, j] == 3) {
                        return "Game has not completed";
                    }
                }
            }
            return "Draw";
        }

        private static bool Check(int x, int[,] a) {
            bool won = true;
            for (int i = 0; i < 4; i++) {
                won = true;
                for (int j = 0; j < 4; j++) {
                    if (a[i, j] != x && a[i, j] != 2) {
                        won = false;
                        break;
                    }
                }
                if (won) {
                    return true;
                }
            }
            for (int i = 0; i < 4; i++) {
                won = true;
                for (int j = 0; j < 4; j++) {
                    if (a[j, i] != x && a[j, i] != 2) {
                        won = false;
                        break;
                    }
                }
                if (won) {
                    return true;
                }
            }
            won = true;
            for (int i = 0; i < 4; i++) {
                if (a[i, i] != x && a[i, i] != 2) {
                    won = false;
                    break;
                }
            }
            if (won) {
                return true;
            }
            won = true;
            for (int i = 0; i < 4; i++) {
                if (a[i, 3 - i] != x && a[i, 3 - i] != 2) {
                    won = false;
                    break;
                }
            }
            if (won) {
                return true;
            }
            return false;
        }
    }
}
