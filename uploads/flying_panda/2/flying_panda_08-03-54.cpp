#include<iostream>
  using namespace std;
unsigned long long int solve()
{
  if(n==1)
    return 1;
  return n*fact(n-1);
}
int main()
{
  int n;
   int t;
  cin>>t;
  long long int sum=0;
  while(t--){
    cin>>n;
    sum+=n;
  }
  cout<<sum<<endl;
   return 0;
}