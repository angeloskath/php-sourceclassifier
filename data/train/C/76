#include <stdio.h>
#include <string.h>

#define SIZE 16

int hasWon(int *inArr)
{
	if ( (inArr[0] + inArr[1] + inArr[2] + inArr[3]) == 4)
		return 1;
	if ( (inArr[4] + inArr[5] + inArr[6] + inArr[7]) == 4)
		return 1;
	if ( (inArr[8] + inArr[9] + inArr[10] + inArr[11]) == 4)
		return 1;
	if ( (inArr[12] + inArr[13] + inArr[14] + inArr[15]) == 4)
		return 1;
	if ( (inArr[0] + inArr[5] + inArr[10] + inArr[15]) == 4)
		return 1;
	if ( (inArr[3] + inArr[6] + inArr[9] + inArr[12]) == 4)
		return 1;
	if ( (inArr[0] + inArr[4] + inArr[8] + inArr[12]) == 4)
		return 1;
	if ( (inArr[1] + inArr[5] + inArr[9] + inArr[13]) == 4)
		return 1;
	if ( (inArr[2] + inArr[6] + inArr[10] + inArr[14]) == 4)
		return 1;
	if ( (inArr[3] + inArr[7] + inArr[11] + inArr[15]) == 4)
		return 1;
	return 0;
}

int main()
{
	int T, r, c, caseNo = 1;
	char ch;
	int e, arrX[SIZE], arrO[SIZE];
	scanf("%d", &T);

	while(T)
	{
		e = 0;
		bzero(arrX, sizeof(arrX));
		bzero(arrO, sizeof(arrO));

		for (r = 0; r < 4; )
		{
			for (c = 0; c < 4; )
			{
				scanf("%c", &ch);
				if ( !( (ch == 'T') || (ch == 'X') || (ch == 'O') || (ch == '.')) )
					continue;
				if (ch == '.')
				{
					arrX[ (r * 4) + c ] = arrO[ (r * 4) + c ] = 0;
					++e;
				}
				else if (ch == 'X') { arrX[ (r * 4) + c ] = 1; }
				else if (ch == 'O') { arrO[ (r * 4) + c ] = 1; }
				else { arrX[ (r * 4) + c ] = arrO[ (r * 4) + c ] = 1; }

				++c;
			}
			++r;
		}
		if ( hasWon(arrX) )
			printf("Case #%d: X won\n", caseNo++);
		else if ( hasWon(arrO) )
			printf("Case #%d: O won\n", caseNo++);
		else if (e)
			printf("Case #%d: Game has not completed\n", caseNo++);
		else
			printf("Case #%d: Draw\n", caseNo++);
		T--;
	}
	return 0;
}
