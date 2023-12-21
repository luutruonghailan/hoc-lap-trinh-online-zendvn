#include <bits/stdc++.h>
using namespace std;

int removeDuplicates(int arr[], int n)
{

    int j = 0;
    for (int i = 0; i < n - 1; i++)
    {
        if (arr[i] != arr[i + 1])
        {
            arr[j++] = arr[i];
        }
    }

    arr[j++] = arr[n - 1];
    return j;
}

int main()
{
    int arrInt[] = {1, 2, 3, 1, 2, 3, 4};
    int n = sizeof(arrInt) / sizeof(arrInt[0]);
    string result = "";
    sort(arrInt, arrInt + n);

    n = removeDuplicates(arrInt, n);

    for (int i = 0; i < n; i++)
    {
        string number = to_string(arrInt[i]);
        string sign = i == 0 ? "" : ",";
        result += sign + number;
    }

    cout << "arrNew = [" << result << "]" << endl;
}