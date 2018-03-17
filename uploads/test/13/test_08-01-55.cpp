#include<iostream>
  using namespace std;
int main()
{ 
   int n,k;cin>>n>>k;k*=10;
   unsigned long long int mul=1;
  for(int i=0;i<n;i++)
  {
     int x;cin>>x;
     mul*=x;
  }
  cout<<mul%k<<endl;
   return 0;
}