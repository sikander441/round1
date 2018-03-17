#include<iostream>
  using namespace std;
long int f(int n)
{
  if(n==1)
    return 1;
  return n*f(n-1);
}
int main()
{
   int t;
  cin>>t;
  long int sum=0;
  while(t--)
  {
    long int n;cin>>n;sum+=n;
  }
  cout<<sum<<endl;
   return 0;
}