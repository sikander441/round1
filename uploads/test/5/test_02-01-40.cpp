#include<iostream>
  using namespace std;
int main()
{
  long long int n,x,sum=0;
  cin>>n;
  for(int i=0;i<n;i++)
  {cin>>x;sum+=x;
  }
  cout<<sum<<endl;
  return 0;
}