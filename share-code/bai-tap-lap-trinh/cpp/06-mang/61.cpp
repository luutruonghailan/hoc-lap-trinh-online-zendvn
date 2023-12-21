#include <iostream>
#include <set>
using namespace std;

int main()
{
    int arrInt[] = {1, 2, 3, 2, 1, 4, 5};
    int n = sizeof(arrInt) / sizeof(arrInt[0]);

    set<int> evenSet;
    set<int> oddSet;

    for (int number : arrInt)
    {
        if (number % 2 == 0)
        {
            evenSet.insert(number);
        }
        else
        {
            oddSet.insert(number);
        }
    }

    int arrEven[evenSet.size()];
    int arrOdd[oddSet.size()];

    int idx = 0;
    string resultEven = "";
    for (auto it = evenSet.begin(); it != evenSet.end(); it++)
    {
        string number = to_string(*it);
        string sign = idx == 0 ? "" : ",";
        resultEven += sign + number;
        arrEven[idx++] = *it;
    }

    idx = 0;
    string resultOdd = "";
    for (auto it = oddSet.begin(); it != oddSet.end(); it++)
    {
        string number = to_string(*it);
        string sign = idx == 0 ? "" : ",";
        resultOdd += sign + number;
        arrOdd[idx++] = *it;
    }

    cout << "arrOdd = [" << resultOdd << "]" << endl;
    cout << "arrEven = [" << resultEven << "]" << endl;

    return 0;
}