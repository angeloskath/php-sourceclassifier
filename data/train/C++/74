#include <iostream>
#include <string>
#include <map> 
#include <math.h>
#include <vector>
#include <algorithm>
#include <cstdio>
#include <set>
#include <queue>
#include <sstream>
#include <deque>
#include <memory.h>


using namespace std;

#define ll long long
#pragma comment(linker, "/STACK:64000000")

const int maxn = 1 << 17;
const int inf = 1000000007;
const int mod = 1000000007;

string s[4];
bool ff[255];

char checkrow(int i) {
	memset(ff, 0, sizeof(ff));
	for (int j = 0; j < 4; j++)
		ff[s[i][j]] = 1;
	if (!ff['.'] && !ff['O'] && ff['X']) return 'X';
	if (!ff['.'] && ff['O'] && !ff['X']) return 'O';
	return 'T';
}

char checkcol(int i) {
	memset(ff, 0, sizeof(ff));
	for (int j = 0; j < 4; j++)
		ff[s[j][i]] = 1;
	if (!ff['.'] && !ff['O'] && ff['X']) return 'X';
	if (!ff['.'] && ff['O'] && !ff['X']) return 'O';
	return 'T';
}

char checkdia1() {
	memset(ff, 0, sizeof(ff));
	for (int j = 0; j < 4; j++)
		ff[s[j][j]] = 1;
	if (!ff['.'] && !ff['O'] && ff['X']) return 'X';
	if (!ff['.'] && ff['O'] && !ff['X']) return 'O';
	return 'T';
}

char checkdia2() {
	memset(ff, 0, sizeof(ff));
	for (int j = 0; j < 4; j++)
		ff[s[j][3 - j]] = 1;
	if (!ff['.'] && !ff['O'] && ff['X']) return 'X';
	if (!ff['.'] && ff['O'] && !ff['X']) return 'O';
	return 'T';
}

int main() {
#ifndef ONLINE_JUDGE
	freopen("input.txt", "r", stdin);
	freopen("output.txt", "w", stdout);
#endif
	int tests;
    cin >> tests;
	for (int test = 1; test <= tests; test++) {
		cout << "Case #" << test << ": ";

		for (int i = 0; i < 4; i++)
			cin >> s[i];

		bool f = 0;
		for (int i = 0; i < 4; i++) {
			char c = checkrow(i);
			if (!f && c != 'T') {
				cout << c << " won";
				f = 1;
			}
		}

		for (int i = 0; i < 4; i++) {
			char c = checkcol(i);
			if (!f && c != 'T') {
				cout << c << " won";
				f = 1;
			}
		}

		char c = checkdia1();
		if (!f && c != 'T') {
			cout << c << " won";
			f = 1;
		}

		c = checkdia2();
		if (!f && c != 'T') {
			cout << c << " won";
			f = 1;
		}

		for (int i = 0; i < 4; i++) {
			for (int j = 0; j < 4; j++) {
				if (!f && s[i][j] == '.') {
					cout << "Game has not completed";
					f = 1;
				}
			}
		}

		if (!f) {
			cout << "Draw";
			f = 1;
		}

		cout << endl;
	}

	return 0;
}