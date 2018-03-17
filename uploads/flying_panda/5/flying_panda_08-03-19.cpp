#include<iostream>
  using namespace std;

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