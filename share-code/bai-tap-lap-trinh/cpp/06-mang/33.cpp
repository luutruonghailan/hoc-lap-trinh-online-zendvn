
#include <iostream>
using namespace std;
#include <bits/stdc++.h>

int main()
{
    int arrNumber[] = {1, 2, 7, 9, 2};
    bool found;
    int length = sizeof(arrNumber) / sizeof(int);

    for (int i = 1; i < length - 1; i++)
    {
        if (arrNumber[i] == arrNumber[i - 1] + arrNumber[i + 1])
        {
            found = true;
        }
    }

    if (found != true)
    {
        cout << "Không tồn tại";
    }
    else
    {
        cout << "Tồn tại";
    }
}