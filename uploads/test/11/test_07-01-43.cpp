// CPP program for finding k-th digit in a^b
#include <bits/stdc++.h>
using namespace std;
 
// To compute k-th digit in a^b
int kthdigit(int a, int b, int k)
{
    // computing a^b
    int p = pow(a, b);
 
    int count = 0;
    while (p > 0 && count < k) {
 
        // getting last digit
        int rem = p % 10;
 
        // increasing count by 1
        count++;
 
        // if current number is required digit
        if (count == k)
            return rem;
 
        // remove last digit
        p = p / 10;
    }
 
    return 0;
}
 
// Driver code
int main()
{
    int a,b,k;cin>>a>>b>>k;
    cout << kthdigit(a, b, k);
    return 0;
}