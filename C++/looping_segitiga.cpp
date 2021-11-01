#include<iostream>
#include<conio.h>
#include<iomanip>
using namespace std;
int main(){
	unsigned int n,a,b,x,s[100], p[100];
	cout << "Masukan Nilai n: "; 
	cin >> n;
	
	for(a=0, x=0; a<=n; a++, x+=2){
		cout << setw(3*n-x);
		s[a] = 1;
		p[a] = 1;
		for(b=0; b<=a; b++){
			if(b<1||b==a) cout << "1" << setw(4);
			else{
				s[b] = p[b];
				p[b] = s[b-1]+s[b];
				cout << p[b] << setw(4);
			}
		}
		cout << endl;
	}
}

//Sample Result:

//Masukan Nilai n: 6
//                 1
//               1   1
//             1   2   1
//           1   3   3   1
//         1   4   6   4   1
//       1   5  10  10   5   1
//     1   6  15  20  15   6   1
//
//--------------------------------
//Process exited after 3.296 seconds with return value 0
//Press any key to continue . . .
