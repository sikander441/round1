#include<iostream>
  using namespace std;
void solve(int t=0)
{
  long long int sum=0;
  
  while(t--)
  {
     long int l,r;cin>>l>>r;
     for(long long int i=l;i<=r;i++)
       if(i%6==0)
		sum+=i;
     cout<<sum<<endl;
  }
 
}
int main()
{
  long int t;
  cin>>t;
  solve(t);
 return 0;
}
