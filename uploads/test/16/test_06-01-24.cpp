
#include <bits/stdc++.h>
using namespace std;
 
// function to calculate the sum of
// all numbers divisible by 6 in range L-R..
int sum(int L, int R)
{

    long long int p = R / 6;

    long long int q = (L - 1) / 6;

   long long int sumR = 3 * (p * (p + 1));

   long long int sumL = (q * (q + 1)) * 3;

    return sumR - sumL;
}

int main()
{
    lont int t;
  cin>>t;
  while(t--){
    long long int L,R;cin>>L>>R;
    cout << sum(L, R)<<endl;
  }
    return 0;
}