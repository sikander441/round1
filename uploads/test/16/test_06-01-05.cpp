#include<iostream>
  using namespace std;
int main()
{
  long int t;
  cin>>t;long long int sum=0;
  
  while(t--)
  {
     long int l,r;cin>>l>>r;
     for(int i=l;i<=r;i++)
       if(i%6==0)
		sum+=i;
     cout<<sum<<endl;
  }
 
 return 0;
}
