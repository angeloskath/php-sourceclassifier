import java.io.IOException;
import java.io.OutputStreamWriter;
import java.io.BufferedWriter;
import java.util.InputMismatchException;
import java.io.FileOutputStream;
import java.io.OutputStream;
import java.io.PrintWriter;
import java.io.FileInputStream;
import java.util.NoSuchElementException;
import java.io.Writer;
import java.math.BigInteger;
import java.io.InputStream;

/**
 * Built using CHelper plug-in
 * Actual solution is at the top
 * @author Egor Kulikov (egor@egork.net)
 */
public class Main {
	public static void main(String[] args) {
		InputStream inputStream;
		try {
			inputStream = new FileInputStream("input.txt");
		} catch (IOException e) {
			throw new RuntimeException(e);
		}
		OutputStream outputStream;
		try {
			outputStream = new FileOutputStream("output.txt");
		} catch (IOException e) {
			throw new RuntimeException(e);
		}
		InputReader in = new InputReader(inputStream);
		OutputWriter out = new OutputWriter(outputStream);
		TaskA solver = new TaskA();
		int testCount = Integer.parseInt(in.next());
		for (int i = 1; i <= testCount; i++)
			solver.solve(i, in, out);
		out.close();
	}
}

class TaskA {
    public void solve(int testNumber, InputReader in, OutputWriter out) {
		char[][] field = IOUtils.readTable(in, 4, 4);
		boolean xWon = false;
		boolean oWon = false;
		boolean draw = true;
		for (int i = 0; i < 4; i++) {
			boolean curX = true;
			boolean curO = true;
			for (int j = 0; j < 4; j++) {
				if (field[i][j] == '.') {
					curX = false;
					curO = false;
					draw = false;
				} else if (field[i][j] == 'X')
					curO = false;
				else if (field[i][j] == 'O')
					curX = false;
			}
			xWon |= curX;
			oWon |= curO;
		}
		for (int i = 0; i < 4; i++) {
			boolean curX = true;
			boolean curO = true;
			for (int j = 0; j < 4; j++) {
				if (field[j][i] == '.') {
					curX = false;
					curO = false;
					draw = false;
				} else if (field[j][i] == 'X')
					curO = false;
				else if (field[j][i] == 'O')
					curX = false;
			}
			xWon |= curX;
			oWon |= curO;
		}
		boolean curX = true;
		boolean curO = true;
		for (int j = 0; j < 4; j++) {
			if (field[j][j] == '.') {
				curX = false;
				curO = false;
				draw = false;
			} else if (field[j][j] == 'X')
				curO = false;
			else if (field[j][j] == 'O')
				curX = false;
		}
		xWon |= curX;
		oWon |= curO;
		curX = true;
		curO = true;
		for (int j = 0; j < 4; j++) {
			if (field[j][3 - j] == '.') {
				curX = false;
				curO = false;
				draw = false;
			} else if (field[j][3 - j] == 'X')
				curO = false;
			else if (field[j][3 - j] == 'O')
				curX = false;
		}
		xWon |= curX;
		oWon |= curO;
		if (xWon)
			out.printLine("Case #" + testNumber + ": X won");
		else if (oWon)
			out.printLine("Case #" + testNumber + ": O won");
		else if (draw)
			out.printLine("Case #" + testNumber + ": Draw");
		else
			out.printLine("Case #" + testNumber + ": Game has not completed");
    }
}

class InputReader {

	private InputStream stream;
	private byte[] buf = new byte[1024];
	private int curChar;
	private int numChars;
	private SpaceCharFilter filter;

	public InputReader(InputStream stream) {
		this.stream = stream;
	}

	public int read() {
		if (numChars == -1)
			throw new InputMismatchException();
		if (curChar >= numChars) {
			curChar = 0;
			try {
				numChars = stream.read(buf);
			} catch (IOException e) {
				throw new InputMismatchException();
			}
			if (numChars <= 0)
				return -1;
		}
		return buf[curChar++];
	}

	public String readString() {
		int c = read();
		while (isSpaceChar(c))
			c = read();
		StringBuilder res = new StringBuilder();
		do {
			res.appendCodePoint(c);
			c = read();
		} while (!isSpaceChar(c));
		return res.toString();
	}

	public boolean isSpaceChar(int c) {
		if (filter != null)
			return filter.isSpaceChar(c);
		return isWhitespace(c);
	}

	public static boolean isWhitespace(int c) {
		return c == ' ' || c == '\n' || c == '\r' || c == '\t' || c == -1;
	}

	public char readCharacter() {
		int c = read();
		while (isSpaceChar(c))
			c = read();
		return (char) c;
	}

	public String next() {
		return readString();
	}

	public interface SpaceCharFilter {
		public boolean isSpaceChar(int ch);
	}
}

class OutputWriter {
	private final PrintWriter writer;

	public OutputWriter(OutputStream outputStream) {
		writer = new PrintWriter(new BufferedWriter(new OutputStreamWriter(outputStream)));
	}

	public OutputWriter(Writer writer) {
		this.writer = new PrintWriter(writer);
	}

	public void print(Object...objects) {
		for (int i = 0; i < objects.length; i++) {
			if (i != 0)
				writer.print(' ');
			writer.print(objects[i]);
		}
	}

    public void printLine(Object...objects) {
		print(objects);
		writer.println();
	}

	public void close() {
		writer.close();
	}

	}

class IOUtils {

	public static char[] readCharArray(InputReader in, int size) {
		char[] array = new char[size];
		for (int i = 0; i < size; i++)
			array[i] = in.readCharacter();
		return array;
	}

	public static char[][] readTable(InputReader in, int rowCount, int columnCount) {
		char[][] table = new char[rowCount][];
		for (int i = 0; i < rowCount; i++)
			table[i] = readCharArray(in, columnCount);
		return table;
	}

	}

