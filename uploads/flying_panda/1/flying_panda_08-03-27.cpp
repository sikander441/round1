#include<iostream>
  using namespace std;
unsigned long long int fact(int n)
{
  if(n==1)
    return 1;
  return n*fact(n-1);
}
int main()
{
   int t;
  cin>>t;
  while(t--)
    cout<<fact(n)<<endl;
   return 0;
}