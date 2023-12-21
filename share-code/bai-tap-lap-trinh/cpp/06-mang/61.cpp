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
    int arrInt[] = {1, 2, 3, 2, 1, 4, 5};
    int n = sizeof(arrInt) / sizeof(arrInt[0]);

    int arrEven[n];
    int arrOdd[n];

    for (int i = 0; i < n; i++)
    {
        if (arrInt[i] % 2 == 0)
        {
            arrEven[i] = arrInt[i];
        }
        else
        {
            arrOdd[i] = arrInt[i];
        }
    }

    int lengthEven = removeDuplicates(arrEven, n);
    int lengthOdd = removeDuplicates(arrOdd, n);

    cout << "arrOdd = " << printArray(arrEven, lengthEven) << endl;
    cout << "arrEven = " << printArray(arrOdd, lengthOdd) << endl;

    return 0;
}