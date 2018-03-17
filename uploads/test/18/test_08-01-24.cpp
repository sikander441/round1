#include<bits/stdc++.h>
  using namespace std;
void solve()

{
  int a,b;
 cin>>a>>b;
 int x=a&b;int counter=0;
 while(x)
 {counter++;
  if(x%2==1)
   {cout<<counter<<endl;return;}
  x/=2;
 }
cout<<0<<endl;
}
int main()
  
{
 int t;cin>>t;
 while(t--)
 solve();
   return 0;
}