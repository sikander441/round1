#include<iostream>
  using namespace std;
long int f(int n)
{if(n==1)
   return 1;
 return n*f(n-1);
}
int main()
{
  int t;
  cin>>t;
  while(t--)
  {
    int n;cin>>n;cout<<f(n)<<endl;
  }
   return 0;
}