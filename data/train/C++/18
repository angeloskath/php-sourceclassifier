//
// Qualification round 2013  problem A
//
// Usually built with g++ 4.4.5 on Linux
//
#include <iostream>
#include <iomanip>
#include <vector>
#include <set>
#include <gmpxx.h>

#include <cstdlib>
#include <math.h>

using namespace std;

enum Result {
     x_won,
     o_won,
     draw,
     unfinished
};

Result translate( string s )
{
     unsigned int nx=0;
     unsigned int no=0;
     unsigned int nt=0;
     unsigned int nd=0;

     for (auto i=0; i<4; i++)
     {
	  switch (s[i])
	  {
	  case 'X': nx++; break;
	  case 'O': no++; break;
	  case 'T': nt++; break;
	  case '.': nd++; break;
	  default:
	       cerr << "Error!!";
	       abort();
	  }
     }
     if (nd) return unfinished;
     if (nx==3 && nt==1) return x_won;
     if (no==3 && nt==1) return o_won;
     if (nx==4) return x_won;
     if (no==4) return o_won;
     return draw;
}

Result translate0( string s1,
		  string s2,
		  string s3,
		  string s4 )
{
     string s5;
     s5.push_back(s1[0]);
     s5.push_back(s2[1]);
     s5.push_back(s3[2]);
     s5.push_back(s4[3]);
     auto r1 = translate(s1);
     auto r2 = translate(s2);
     auto r3 = translate(s3);
     auto r4 = translate(s4);
     auto r5 = translate(s5);

     if (r1 == x_won || r1 == o_won) return r1;
     if (r2 == x_won || r2 == o_won) return r2;
     if (r3 == x_won || r3 == o_won) return r3;
     if (r4 == x_won || r4 == o_won) return r4;
     if (r5 == x_won || r5 == o_won) return r5;

     if (r1 == unfinished ||
	 r2 == unfinished ||
	 r3 == unfinished ||
	 r4 == unfinished) return unfinished;

     return draw;
}

Result translate( string s1,
		  string s2,
		  string s3,
		  string s4 )
{
     string t1;
     string t2;
     string t3;
     string t4;

     t4.push_back(s1[0]);
     t4.push_back(s2[0]);
     t4.push_back(s3[0]);
     t4.push_back(s4[0]);

     t3.push_back(s1[1]);
     t3.push_back(s2[1]);
     t3.push_back(s3[1]);
     t3.push_back(s4[1]);

     t2.push_back(s1[2]);
     t2.push_back(s2[2]);
     t2.push_back(s3[2]);
     t2.push_back(s4[2]);

     t1.push_back(s1[3]);
     t1.push_back(s2[3]);
     t1.push_back(s3[3]);
     t1.push_back(s4[3]);

     auto r1 = translate0(s1,s2,s3,s4);
     auto r2 = translate0(t1,t2,t3,t4);

     if (r1 == x_won || r1 == o_won) return r1;
     if (r2 == x_won || r2 == o_won) return r2;

     return r1;
}

int main( int argc, char ** argv )
{
     unsigned int n;
     unsigned int i;
     string w;
     string s1,s2,s3,s4;
     char s[200];

     cin >> n;

     cin.getline( s, 200 );

     for (i=1; i<=n; i++) {

	  cin >> s1;
	  cin >> s2;
	  cin >> s3;
	  cin >> s4;
	  cin.getline( s, 200 );
	  w = (string)(s);

	  auto result = translate(s1,s2,s3,s4);

	  cout << "Case #" << i << ": ";
	  switch (result)
	  {
	  case x_won:
	       cout << "X won";
	       break;
	  case o_won:
	       cout << "O won";
	       break;
	  case draw:
	       cout << "Draw";
	       break;
	  case unfinished:
	       cout << "Game has not completed";
	       break;
	  }
	  cout << endl;
     }

     return 0;
}

