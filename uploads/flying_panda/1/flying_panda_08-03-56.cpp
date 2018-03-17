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
  int n;
   int t;
  cin>>t;
  while(t--){
    cin>>n;
    cout<<fact(n)<<endl;
  }
   return 0;
}