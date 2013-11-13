// ****************************************************************************
// Code developed starting from Rustyoldman's Google Code jam template
// ****************************************************************************
#include <string>
#include <vector>
#include <algorithm>
#include <iostream>
#include <iomanip>
#include <fstream>
#include <cmath>
#include <algorithm>
#include <set>
#include <map>
#include <queue>
#include <list>
#include <cstdlib>
#define enld endl
using namespace std ;
// ****************************************************************************
int getchar ( )
// ****************************************************************************
{
if ( cin.eof() )
   return -1 ;
int ch = cin.get() ;
if ( cin.fail() )
   return -1 ;
return ch ;
}
// ****************************************************************************
string tokenstartchars 
= "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" ;
string tokenchars 
= ".0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" ;
// ****************************************************************************
string gettoken ( )
// ****************************************************************************
{
int ch ;

ch = cin.get() ;

while ( ! cin.eof () && (ch == ' ' || ch == '\n') )
   ch = getchar ( ) ;

if ( ch == -1 )
   return "ERROR" ;

string ans = "" ;
if ( tokenstartchars.find( (char) ch ) != string::npos ) 
   {
   while ( tokenchars.find ( (char) ch ) != string::npos)
      {
      ans.push_back((char) ch) ;
      ch = getchar ( ) ;
      }
   cin.putback((char)ch) ;
   return ans ;
   }

ans = "" ;
ans.push_back ( (char) ch ) ;
return ans ;
}
// ****************************************************************************
double getdouble ( ) 
// ****************************************************************************
{
double a ;
cin >> a ;
return a ;
}
// ****************************************************************************
int getint ( ) 
// ****************************************************************************
{
while ( cin.peek ( ) == ' ' || cin.peek ( ) == '\n' )
   getchar ( ) ;
int sign = 1 ;
if ( cin.peek ( ) == '-' )
   {
   sign = -1 ;
   getchar ( ) ;
   }
string toke = gettoken ( ) ;
if ( sign == -1 && toke == "2147483648" )
   return -2147483648 ;

return sign * atoi ( toke.c_str() ) ;
}
// ****************************************************************************
void do_case ( int case_number )
// ****************************************************************************
{
int n ;
char b [4][4] ;
for ( int i = 0 ; i < 4 ; i ++ )
   {
   for ( int j = 0 ; j < 4 ; j ++ )
      {
      b[i][j] = ' ' ;
      while ( b[i][j] != '.' && 
              b[i][j] != 'X' && 
              b[i][j] != 'O' && 
              b[i][j] != 'T' )
         cin >> b[i][j] ;
      }
   }
// for ( int i = 0 ; i < 4 ; i ++ )
//    {
//    for ( int j = 0 ; j < 4 ; j ++ )
//       cout << b[i][j] ;
//    cout << endl ;
//    }


bool xwin = 0 ;
bool owin = 0 ;
bool finished = 1 ;
int xc , oc ;


for ( int i = 0 ; i < 4 ; i ++ )
   {
   xc = 0 ;
   oc = 0 ;
   for ( int j = 0 ; j < 4 ; j ++ )
      {
      if ( b[i][j] == 'X' || b[i][j] == 'T' )
         ++xc ;
      if ( b[i][j] == 'O' || b[i][j] == 'T' )
         ++oc ;
      if ( b[i][j] == '.' )
         finished = 0 ;
      }
   //   cout << xc << " " << oc << ", " ;
   if ( xc == 4 ) xwin = 1 ;
   if ( oc == 4 ) owin = 1 ;
   }
//cout << endl ;
// for ( int i = 0 ; i < 4 ; i ++ )
//    {
//    for ( int j = 0 ; j < 4 ; j ++ )
//       cout << b[i][j] ;
//    cout << endl ;
//    }
for ( int i = 0 ; i < 4 ; i ++ )
   {
   xc = 0 ;
   oc = 0 ;
   for ( int j = 0 ; j < 4 ; j ++ )
      {
      if ( b[j][i] == 'X' || b[j][i] == 'T' )
         ++xc ;
      if ( b[j][i] == 'O' || b[j][i] == 'T' )
         ++oc ;
      if ( b[j][i] == '.' )
         finished = 0 ;
      }
   if ( xc == 4 ) xwin = 1 ;
   if ( oc == 4 ) owin = 1 ;
   //   cout << xc << " " << oc << ", " ;
   }
//cout << endl ;

xc = 0 ;
oc = 0 ;
for ( int i = 0 ; i < 4 ; i ++ )
   {
   if ( b[i][i] == 'X' || b[i][i] == 'T' )
      ++xc ;
   if ( b[i][i] == 'O' || b[i][i] == 'T' )
      ++oc ;
   if ( b[i][i] == '.' )
      finished = 0 ;
   }
if ( xc == 4 ) xwin = 1 ;
if ( oc == 4 ) owin = 1 ;

xc = 0 ;
oc = 0 ;
for ( int i = 0 ; i < 4 ; i ++ )
   {
   if ( b[i][3-i] == 'X' || b[i][3-i] == 'T' )
      ++xc ;
   if ( b[i][3-i] == 'O' || b[i][3-i] == 'T' )
      ++oc ;
   if ( b[i][3-i] == '.' )
      finished = 0 ;
   }
if ( xc == 4 ) xwin = 1 ;
if ( oc == 4 ) owin = 1 ;

      
        
cout << "Case #" << case_number << ": " ;

if ( xwin ) cout << "X won" ;
else if ( owin ) cout << "O won" ;
else if ( finished ) cout << "Draw" ;
else cout << "Game has not completed" ;


cout << endl ;
}
// ****************************************************************************
int main ( int argc , char ** argv )
// ****************************************************************************
{
int n ;
cin >> n ; getchar() ;
for ( int i = 1 ; i <= n ; i ++ )
   do_case ( i ) ;
}
// ****************************************************************************
