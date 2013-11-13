package contest;

import java.io.*;
import java.lang.reflect.*;
import java.util.*;

public class A {

	public Object solve () {
		char [][] B = sc.nextChars(4);

		for (int i : rep(4)) {
			String res = test(B[i]);
			if (res != null)
				return res;
		}

		for (int i : rep(4)) {
			char [] C = new char [4];
			for (int j : rep(4))
				C[j] = B[j][i];
			String res = test(C);
			if (res != null)
				return res;
		}

		char [] C = new char [4], D = new char [4];
		for (int i : rep(4)) {
			C[i] = B[i][i];
			D[i] = B[i][3-i];
		}
		String res = test(C);
		if (res != null)
			return res;
		res = test(D);
		if (res != null)
			return res;

		for (int i : rep(4))
			for (int j : rep(4))
				if (B[i][j] == '.')
					return "Game has not completed";

		return "Draw";
	}

	String test(char [] L) {
		int NX = 0, NT = 0, NO = 0;
		for (char c : L)
			switch(c) {
			case 'X': ++NX; break;
			case 'T': ++NT; break;
			case 'O': ++NO; break;
			}
		if (NT + NX == 4)
			return "X won";
		else if (NT + NO == 4)
			return "O won";
		else
			return null;
	}

	////////////////////////////////////////////////////////////////////////////////////
	private static int [] rep(int N) { return rep(0, N); }
	private static int [] rep(int S, int T) { if (T <= S) return new int [0]; int [] res = new int [T-S]; for (int i = S; i < T; ++i) res[i-S] = i; return res; }
	////////////////////////////////////////////////////////////////////////////////////
	private static MyScanner sc = new MyScanner();
	final MyWriter wr = new MyWriter();
	private static class MyScanner {
		private String next() { return sc.next(); }
		private char nextChar() { return sc.next().charAt(0); }
		private int nextInt() { return sc.nextInt(); }
		private long nextLong() { return sc.nextLong(); }
		private double nextDouble() { return sc.nextDouble(); }
		private String nextLine() {
			String line = sc.nextLine().trim();
			if ("".equals(line)) // If at end of line, read next line
				line = sc.nextLine();
			return line;
		}
		private String [] next(int N) { return next(String.class, N); }
		private Integer [] nextInt(int N) { return next(Integer.class, N); }
		private Long [] nextLong(int N) { return next(Long.class, N); }
		private Double [] nextDouble(int N) { return next(Double.class, N); }
		private String [] nextLine(int N) {
			String [] a = new String[N];
			for(int i = 0; i < N; ++i)
				a[i] = nextLine();
			return a;
		}
		private String [] nextStrings() { return nextLine().split(" "); }
		private char [] nextChars() { return next().toCharArray(); }
		private Integer [] nextInts() { return next(Integer.class, nextStrings()); }
		private Long [] nextLongs() { return next(Long.class, nextStrings()); }
		private Double [] nextDoubles() { return next(Double.class, nextStrings()); }
		private String [][] nextStrings(int N) { return next(String[].class, N); }
		private char [][] nextChars(int N) { return next(char[].class, N); }
		private Integer [][] nextInts(int N) { return next(Integer[].class, N); }
		private Long [][] nextLongs(int N) { return next(Long[].class, N); }
		private Double [][] nextDoubles(int N) { return next(Double[].class, N); }
		@SuppressWarnings("unchecked")
		private <T> T[] next(Class<T> c, String [] s) {
			try {
				T[] a = (T[])Array.newInstance(c, s.length);
				Method m = c.getMethod("parse" + type(c), String.class);
				for (int i = 0; i < s.length; ++i)
					Array.set(a, i, m.invoke(null, s[i]));
				return a;
			} catch (Exception e) {
				throw new Error(e);
			}
		}
		@SuppressWarnings("unchecked")
		private <T> T[] next(Class<T> c, int N) {
			try {
				T[] a = (T[])Array.newInstance(c, N);
				String s = c.isArray() ? type(c.getComponentType()) + 's' : type(c);
				Method m = MyScanner.class.getDeclaredMethod("next" + s);
				for (int i = 0; i < N; ++i)
					a[i] = (T)m.invoke(this);
				return a;
			} catch (Exception e) {
				throw new Error(e);
			}
		}
		private <T> String type(Class<T> c) {
			try {
				Class<?> t = c;
				try {
					t = (Class<?>)t.getField("TYPE").get(null);
				} catch (NoSuchFieldException e) {} // String? char?
				String s = t.getSimpleName();
				return Character.toUpperCase(s.charAt(0)) + s.substring(1);  // Capitalize first character of type; e.g., int --> Int
			} catch(Exception e) {
				throw new Error(e);
			}
		}
		private final Scanner sc;
		private MyScanner () {
			sc = new Scanner(System.in);
			sc.hasNext();
			start();
		}
	}
	private static class MyWriter extends PrintWriter {
		private final StringWriter sw;
		private void lnprint(Object o) { println(); print(o); }
		public String toString() { return sw.toString(); }
		private MyWriter() { this(new StringWriter()); }
		private MyWriter(StringWriter sw) { super(sw); this.sw = sw; }
	}
	private static String build(Object o, Object... a) { return buildDelim(" ", o, a); }
	private static String cbuild(Object o, Object... a) { return buildDelim("", o, a); }
	private static String buildDelim(String delim, Object o, Object... a) {
		StringBuilder b = new StringBuilder();
		append(b, o, delim);
		for (Object p : a)
			append(b, p, delim);
		return b.toString().trim();
	}
	private static Object NO() { throw new Error("NO!"); }
	////////////////////////////////////////////////////////////////////////////////////
	private static void clock() { err(time()); }
	private static void start() { if (t == 0) t = millis(); }
	private static void append(StringBuilder b, Object o, String delim) {
		if (o.getClass().isArray()) {
			int len = Array.getLength(o);
			for (int i = 0; i < len; ++i)
				append(b, Array.get(o, i), delim);
		} else if (o instanceof Iterable<?>)
			for (Object p : (Iterable<?>)o)
				append(b, p, delim);
		else
			b.append(delim).append(o);
	}
	private static void print (Object o) {
		System.err.println(build(o, '(', time(), ')'));
		if (PRINT)
			System.out.println(o);
	}
	private static void err (Object o) { System.err.println(o); }
	private static long t;
	private static long millis() { return System.currentTimeMillis(); }
	private static String time() { return "Time: " + (millis() - t) / 1000.0; }
	private static final boolean PRINT = System.getProperties().containsKey("PRINT");
	////////////////////////////////////////////////////////////////////////////////////
	public static void main(String[] args) {
		int N = sc.nextInt();
		for (int n = 1; n <= N; ++n)
			print("Case #" + n + ": " + build(new A().solve()));
		err("------------------");
		err(time());
	}
}
