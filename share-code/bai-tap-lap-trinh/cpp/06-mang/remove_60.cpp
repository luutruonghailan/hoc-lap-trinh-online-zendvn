#include <iostream>
using namespace std;

int removeDuplicates(int arr[], int n)
{
    for (int i = 0; i < n; i++)
    {
        for (int j = i + 1; j < n; j++)
        {
            if (arr[i] == arr[j])
            {
                for (int k = j; k < n - 1; k++)
                {
                    arr[k] = arr[k + 1];
                }
                n--;
            }
        }
    }
    return n;
}

string printArray(int arr[], int length)
{
    string result = "";
    for (int i = 0; i < length; i++)
    {
        string number = to_string(arr[i]);
        string sign = i == 0 ? "" : ",";
        result += sign + number;
    }

    return "[" + result + "]";
}

int main()
{
    int arrInt[] = {5, 2, 3, 1, 2, 3, 4};
    string result = "";
    int arrLength = sizeof(arrInt) / sizeof(int);

    int newLength = removeDuplicates(arrInt, arrLength);

    cout << "arrNew = " << printArray(arrInt, newLength) << endl;
}