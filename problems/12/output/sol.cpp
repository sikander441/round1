#include <iostream>
using namespace std;

bool isRevDiffDivisible(int x, int k)
{
    // function to check if the number
    // and its reverse have their
    // absolute difference divisible by k
    int n = x;
    int m = 0;
    int flag;
    while (x > 0)
    {
        // reverse the number
        m = m * 10 + x % 10;
        x /= 10;
    }

    return (abs(n - m) % k == 0);
}

int countNumbers(int l, int r, int k)
{
    int count = 0;
    for (int i = l; i <= r; i++)
        if (isRevDiffDivisible(i, k))
            ++count;
    return count;
}

// Driver code
int main()
{
    int l = 20, r = 23, k = 6;
    cin>>l>>r>>k;
    cout << countNumbers(l, r, k) << endl;
    return 0;
}
