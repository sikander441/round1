#include<bits/stdc++.h>
  using namespace std;
int main()
{
  long int arr[5];long int sum=0;
  for(int i=0;i<5;i++)
  { cin>>arr[i]; sum+=arr[i];}
  sort(arr,arr+5);
  cout<<sum-arr[4]<<" "<<sum-arr[0]<<endl; 
  
  return 0;
}