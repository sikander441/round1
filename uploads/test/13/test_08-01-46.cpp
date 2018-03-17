#include <bits/stdc++.h>
using namespace std;
 
// Returns last k digits in product of a[]
int lastKDigits(int a[], int n, int k)
{
    int num = (int)pow(10, k);
 
    // Multiplying array elements under
    // modulo 10^k.
    int mul = a[0] % num;
    for (int i = 1; i < n; i++) {
        a[i] = a[i] % num;
        mul = (a[i] * mul) % num;
    }
    return mul;
}
 
// Driven program
int main()
{
   int n,k;cin>>n>>k;int a[n];
   for(int i=0;i<n;i++)
      cin>>a[i];
    cout << lastKDigits(a, n, k);
    return 0;
}