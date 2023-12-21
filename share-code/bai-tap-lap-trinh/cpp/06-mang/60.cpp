// C++ program to remove duplicates in-place
#include<bits/stdc++.h>
using namespace std;
 

int removeDuplicates(int arr[], int n)
{
    
    int j = 0;
    for (int i=0; i < n-1; i++)
        if (arr[i] != arr[i+1])
            arr[j++] = arr[i];
 
    arr[j++] = arr[n-1];
    return j;
}
 

int main()
{
    int arr[] = {1, 2, 3, 2};
    int n = sizeof(arr) / sizeof(arr[0]);
    sort(arr, arr + n);
   
 
    n = removeDuplicates(arr, n);
 
    // Print updated array
    for (int i=0; i<n; i++)
        cout << arr[i] << " ";
 
    return 0;
}