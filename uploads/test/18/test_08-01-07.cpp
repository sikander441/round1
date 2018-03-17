#include <bits/stdc++.h>
using namespace std;

typedef unsigned long long int ull;

// function to find the position of
// rightmost set bit in 'n'
unsigned int posOfRightmostSetBit(ull n)
{
    return log2(n & -n) + 1;
}

// function to find the position of rightmost
// bit where a carry is generated first
unsigned int posOfCarryBit(ull a, ull b)
{
    return posOfRightmostSetBit(a & b);
}

// Driver program to test above
int main()
{
  int t;cin>>t;
  while(t--){
    ull a = 10, b = 2;
    cin>>a>>b;
    cout << posOfCarryBit(a, b) <<endl;
  }
    return 0;
}
