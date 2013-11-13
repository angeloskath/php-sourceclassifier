import java.util.*;
public class A {
	char m(char a, char b) {
		if (a=='T')
			return b;
		return a;
	}
	boolean eq(char a, char b, char c, char d) {
		if (a=='.' || b=='.' || c=='.' || d=='.')
			return false;
		a=m(a,b);
		b=m(b,a);
		c=m(c,a);
		d=m(d,a);
		return (a==b && b==c && c==d);
	}
	A(Scanner in) {
		int T = in.nextInt();
		for (int t=0; t<T; t++) {
			char[][] board = new char[4][];
			int filled = 0;
			for (int i=0; i<4; i++) {
				board[i] = in.next().toCharArray();
				for (int j=0; j<4; j++)
					if (board[i][j] != '.')
						filled++;
			}
			char win = 0;
			for (int i=0; i<4; i++) {
				if (eq(board[i][0],board[i][1],board[i][2],board[i][3]))
					win = m(board[i][0],board[i][1]);
				else if (eq(board[0][i],board[1][i],board[2][i],board[3][i]))
					win = m(board[0][i],board[1][i]);
			}
			if (eq(board[0][0],board[1][1],board[2][2],board[3][3]))
				win = m(board[0][0],board[1][1]);
			else if (eq(board[3][0],board[2][1],board[1][2],board[0][3]))
				win = m(board[3][0],board[2][1]);

			System.out.printf("Case #%d: ",t+1);
			if (win != 0)
				System.out.printf("%c won",win);
			else if (filled == 16)
				System.out.print("Draw");
			else
				System.out.print("Game has not completed");
			System.out.println();
		}
	}
	public static void main(String[] args) {
		new A(new Scanner(System.in));
	}
}
