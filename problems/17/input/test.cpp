#include <iostream>
using namespace std;
 
// Find reminder of arr[0] * arr[1] * 
// .. * arr[n-1]
int findreminder(int arr[], int len, int n)
{
    int mul = 1;
 
    // find the individual reminder
    // and multiple with mul.
    for (int i = 0; i < len; i++) 
        mul = (mul * (arr[i] % n)) % n;
     
    return mul % n;
}
 
// Driver code
int main()
{
   int t;
  cin>>t;
  while(t--)
  {
    int n,k;
    cin>>n>>k;int arr[n];
    for(int i=0;i<n;i++)
      cin>>arr[i];
    cout << findreminder(arr,n,k);
  }
  return 0;
  }

