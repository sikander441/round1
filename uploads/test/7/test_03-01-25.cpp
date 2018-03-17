#include<iostream>
#include<algorithm>
using namespace std;
int n,m;
int a[200],b[200];
bool isfactofa(int x)
{
 for(int i=0;i<n;i++)
  if(x%a[i]!=0)
   return false;
 return true;
}
bool isfactofb(int x)
{
 for(int i=0;i<m;i++)
  if(b[i]%x!=0)
   return false;
 return true;
}
int main()
{
 cin>>n>>m;
 for(int i=0;i<n;i++)
  cin>>a[i];
 for(int i=0;i<m;i++)
  cin>>b[i];
 sort(a,a+n);
 sort(b,b+m);int counter=0;
 for(int i=a[n-1];i<=b[0];i++)
 {
  if(isfactofa(i) && isfactofb(i))
   counter++;
 }
cout<<counter<<endl;	
 return 0;
}