// CPP program to find modulo of floating 
// point numbers.
#include <bits/stdc++.h>
using namespace std;
 
double findMod(double a, double b)
{
    // Handling negative values
    if (a < 0)
        a = -a;
    if (b < 0)
        b = -b;
 
    // Finding mod by repeated subtraction
    double mod = a;
    while (mod >= b)
        mod = mod - b;
 
    // Sign of result typically depends
    // on sign of a.
    if (a < 0)
        return -mod;
 
    return mod;
}
 
// Driver Function
int main()
{
    double a = 9.7, b = 2.3;
    cin>>a>>b;
    cout << a%b<<endl;
    return 0;
}