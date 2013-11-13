using System;
using System.Collections;
using System.Collections.Generic;
using System.Diagnostics;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading;


namespace nonsava.GoogleCodeJamJapan2011
{
	class Problem
	{
		#region Main

		static string RESULTFILE = @"..\..\..\__out.txt";

		static void Main( string[] args )
		{
			if( 0 < args.Length ) {
				CASEFILE = args[0];
			} else if( 1 < args.Length ) {
				MAXTHREADS = int.Parse( args[1] );
			}

			DateTime startTime = DateTime.Now;

			int count;
			Problem[] testcases;

			using( TextReader reader = new StreamReader( CASEFILE ) ) {
				string line = reader.ReadLine();
				count = int.Parse( line );
				testcases = new Problem[count];

				for( int i = 0; i < count; i++ )
					testcases[i] = new Problem( reader );
			}

			Initialize();

			Thread[] threadPool = new Thread[MAXTHREADS];
			for( int t = 0; t < MAXTHREADS; t++ )
				threadPool[t] = null;

			for( int next = 0;; ) {
				if( count <= next ) {
					bool finished = true;
					for( int t = 0; t < MAXTHREADS; t++ )
						if( threadPool[t] != null && threadPool[t].IsAlive ) {
							finished = false;
							break;
						}
					if( finished )
						break;
				}

				for( int t = 0; t < MAXTHREADS; t++ ) {
					if( threadPool[t] != null && !threadPool[t].IsAlive )
						threadPool[t] = null;

					if( threadPool[t] == null && next < count ) {
						Console.WriteLine( "----------------------------------------------------- {0}/{1} ({2:F3}[sec])", next + 1, count, ( DateTime.Now - startTime ).TotalSeconds );
						testcases[next].WriteParams();

						threadPool[t] = new Thread( new ThreadStart( testcases[next++].Solv ) );
						threadPool[t].Start();
					}
				}

				Thread.Sleep( 100 );
			}

			Console.WriteLine( "\n#############################################################################\n" );
			using( TextWriter writer = new StreamWriter( RESULTFILE ) ) {
				for( int i = 0; i < count; i++ )
					testcases[i].WriteResult( writer, i + 1 );
			}

			TimeSpan span = DateTime.Now - startTime;
			Console.WriteLine( "\n#############################################################################\n" );
			Console.WriteLine( "{0:F3}[sec] = {1:F3}[min]", span.TotalSeconds, span.TotalMinutes );
			if( BEEP )
				Console.Beep( 1000, 5000 );
			Console.ReadKey();
		}


		string Result;

		private void WriteResult( TextWriter writer, int number )
		{
			writer.WriteLine( "Case #{0}: {1}", number, Result );
			Console.WriteLine( "Case #{0}: {1}", number, Result );
		}

		#endregion


		////////////////////////////////
		char[,] g = new char[4,4];
		bool done = true;
		////////////////////////////////


		private static void Initialize()
		{
			////////////////////////////////
			////////////////////////////////
		}
		

		private Problem( TextReader reader )
		{
			////////////////////////////////
			for( int i = 0; i < 4; i++ ) {
				string line = reader.ReadLine();
				if(line.Length==0)
					line = reader.ReadLine();
				for(int j=0;j<4;j++) {
					g[j,i] = line[j];
					if(line[j] == '.')
						done = false;
				}
			}
			////////////////////////////////

			Result = null;
		}


		private void WriteParams()
		{
			////////////////////////////////
			for( int i = 0; i < 4; i++ ) {
				for( int j = 0; j < 4; j++ )
					Console.Write( " {0}", g[j,i] );
				Console.WriteLine();
			}
			Console.WriteLine();
			////////////////////////////////
		}



		////////////////////////////////
		static int MAXTHREADS = 1;
		static bool BEEP = false;

//		static string CASEFILE = @"..\..\..\A-small-attempt0.in";
		static string CASEFILE = @"..\..\..\A-large.in";

//		static string CASEFILE = @"..\..\..\__in_sample.txt";
		////////////////////////////////



		private void Solv()
		{
			////////////////////////////////
			for(int y = 0; y < 4; y++) {
				bool found = true;
				char c = ' ';
				for(int x = 0; x < 4; x++) {
					if(g[x,y] == '.') {
						found = false;
						break;
					}
					if(g[x,y] == 'T')
						continue;
					if(c==' ') {
						c = g[x,y];
					} else if(g[x,y] != c) {
						found = false;
						break;
					}					
				}
				if(found) {
					Result = c + " won";
					Console.WriteLine( "Result: {0}", Result );
					return;
				}
			}

			for(int x = 0; x < 4; x++) {
				bool found = true;
				char c = ' ';
				for(int y = 0; y < 4; y++) {
					if(g[x,y] == '.') {
						found = false;
						break;
					}
					if(g[x,y] == 'T')
						continue;
					if(c==' ') {
						c = g[x,y];
					} else if(g[x,y] != c) {
						found = false;
						break;
					}					
				}
				if(found) {
					Result = c + " won";
					Console.WriteLine( "Result: {0}", Result );
					return;
				}
			}

			{
				bool found = true;
				char c = ' ';
				for(int x = 0; x < 4; x++) {
					if(g[x,x] == '.') {
						found = false;
						break;
					}
					if(g[x,x] == 'T')
						continue;
					if(c==' ') {
						c = g[x,x];
					} else if(g[x,x] != c) {
						found = false;
						break;
					}					
				}
				if(found) {
					Result = c + " won";
					Console.WriteLine( "Result: {0}", Result );
					return;
				}
			}

			{
				bool found = true;
				char c = ' ';
				for(int x = 0; x < 4; x++) {
					if(g[x,3-x] == '.') {
						found = false;
						break;
					}
					if(g[x,3-x] == 'T')
						continue;
					if(c==' ') {
						c = g[x,3-x];
					} else if(g[x,3-x] != c) {
						found = false;
						break;
					}					
				}
				if(found) {
					Result = c + " won";
					Console.WriteLine( "Result: {0}", Result );
					return;
				}
			}


			Result = done? "Draw" : "Game has not completed";
			////////////////////////////////

			Console.WriteLine( "Result: {0}", Result );
		}

	}
}
