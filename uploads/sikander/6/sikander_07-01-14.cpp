#include<bits/stdc++.h>
  using namespace std;

int main()
{
  int n;
  cin>>n;int lsum=0,rsum=0;
  for(int i=0;i<n;i++)
  {
    for(int j=0;j<n;j++)
    {
      int x;cin>>x;
      if(i==j)
        lsum+=x;
      if(i+j==n-1)
         rsum+=x;
    }
  }
         cout<<abs(rsum-lsum)<<endl;
   return 0;
}