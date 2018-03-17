#include<iostream>
  using namespace std;
int rev(int x)
{
    int m = 0;
    while (x > 0) 
    {   
        // reverse the number
        m = m * 10 + x % 10;
        x /= 10;
    }
  return m;
     
}
int main()
{
   int l,r,k;
  cin>>l>>r>>k;int counter=0;
  for(int i=l;i<=r;i++)
  {
     if( abs(rev(i)-i) %k == 0)
        counter++;
  }
  cout<<counter<<endl;
   return 0;
}