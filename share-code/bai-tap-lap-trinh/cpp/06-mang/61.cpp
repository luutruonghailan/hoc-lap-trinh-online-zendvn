#include <iostream>
#include <vector>
#include <set>
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

    vector<int> vectorEven;
    vector<int> vectorOdd;
    set<int> sNumber;

    for (int number : arrInt)
    {
        if (sNumber.find(number) == sNumber.end())
        {
            sNumber.insert(number);
            if (number % 2 == 0)
            {
                vectorEven.push_back(number);
            }
            else
            {
                vectorOdd.push_back(number);
            }
        }
    }

    int lengthEven = vectorEven.size();
    int lengthOdd = vectorOdd.size();
    int arrEven[lengthEven];
    int arrOdd[lengthOdd];

    copy(vectorEven.begin(), vectorEven.end(), arrEven);
    copy(vectorOdd.begin(), vectorOdd.end(), arrOdd);

    cout << "arrOdd = " << printArray(arrEven, lengthEven) << endl;
    cout << "arrEven = " << printArray(arrOdd, lengthOdd) << endl;

    return 0;
}